<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Story extends CI_Controller {

	public function __construct(){
		parent::__construct();

        // To use site_url and redirect on this controller.
        $this->load->helper('url');
		$this->load->library('session');
	}
	
	public function insert(){  
		if($_POST['action'] == 'insert'){
			$uid = $_POST['uid'];
			$deskripsi  = $_POST['deskripsi']; 
			$judul  = $_POST['judul'];
			$tag = $_POST['tag'];
			//var_dump($tag);
			$this->load->model(array('story_m'));	
			$data['story_insert'] = $this->story_m->insert();

		?>
		<div class='alert alert-success'>
            <button type="button" class="close" data-dismiss="alert">×</button> Story berhasil di posting ;-)</div>
            <script type="text/javascript">
				$(function(){					
					$('#loading').hide();
					$('#judul').val('');
					$('#tags_1').val('');
					$('.close').click(function(){
						$('close').hide();
					});
				});				
			</script>
        <?php }else {
            ?>          
          <div class='alert alert-error'>
          <button type="button" class="close" data-dismiss="alert">×</button>Something Wrong!<br> <?php die('Could not enter data: ' . mysql_error());?></div>
          <script type="text/javascript">
            $(function(){
				$('#loading').show();					   
			});				
			</script>
	<?php   }

		//$uid = $data['aksi_item']['uid'];
		//var_dump($uid);
	}
	public function read($stoid){
		//if ($tripid === 0 && $slug === FALSE){
		$this->load->model(array('story_m'));
		$data['story_item'] = $this->story_m->getstory($stoid);
		if (empty($data['story_item'])){
			//echo"gak ada";
			redirect('notfound');
		}else{
			$this->load->library('facebook'); // Automatically picks appId and secret from config
			$user = $this->facebook->getUser();
			//var_dump($user);
			if($this->session->userdata('logged_in'))
				{
					try {
						//var_dump($data['user_profile']);
						//echo'test';
						//$data['user_profile'] =  'test';
						$data['user_profile'] = $this->facebook->api('/me');
						$fullname = $data['user_profile']['name'];
						//$email1 = $data['user_profile']['email'];
						$fbid = $data['user_profile']['id'];
						$fname = $data['user_profile']['first_name'];
						$this->load->model('user_m','',TRUE);
						$data['user_front'] = $this->user_m->getuserfront();
						//redirect('/dashboard' , 'refresh');
						//var_dump($data['user_profile']);
						//var_dump($nama);
					} catch (FacebookApiException $e) {
						$user = null;
					}					
				}else{
					if ($user) {
						try {
							//var_dump($data['user_profile']);
							//echo'test';
							//$data['user_profile'] =  'test';
							$data['user_profile'] = $this->facebook->api('/me');
							$fullname = $data['user_profile']['name'];
							//$email1 = $data['user_profile']['email'];
							$fbid = $data['user_profile']['id'];
							$fname = $data['user_profile']['first_name'];
							$this->load->model('user_m','',TRUE);					
							//$result = $this->user_m->register($fbid, $fullname, $email1, $fname);
							$result = $this->user_m->register($fbid, $fullname, $fname);
							//var_dump($data['user_profile']);
							//var_dump($nama);
							//redirect('/dashboard' , 'refresh');
							
						} catch (FacebookApiException $e) {
							$user = null;
						}
					}else {
						$this->facebook->destroySession();
					}					
				}

        if ($user) {

            $data['logout_url'] = site_url('welcome/logout'); // Logs off application
            // OR 
            // Logs off FB!
            // $data['logout_url'] = $this->facebook->getLogoutUrl();

        } else {
            $data['login_url'] = $this->facebook->getLoginUrl(array(
                'redirect_uri' => 'http://tripseru.com/', 
                'scope' => array("email") // permissions here
            ));
        }
			$this->load->model('destinasi_m','',TRUE);
			$data['destinasi'] = $this->destinasi_m->getdestinasinewrand();
			$data['headtitle'] = 'Tripseru.com | '.$data['story_item']['judul'];
			$this->load->view('header', $data);
			//var_dump($data['destinasi_item']);
			$this->load->view('story/vstory_detail',$data);
			$this->load->view('footer');
		}
	//}else{
	//	echo"slow";
	//}
	}
}
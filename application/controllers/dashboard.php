<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct(){
		parent::__construct();

        // To use site_url and redirect on this controller.
        $this->load->helper('url');
		$this->load->library('session');
	}
	
	public function index(){		
		if($this->session->userdata('logged_in'))
		   {
			   //require '/src/facebook.php';
			$this->load->library('facebook'); // Automatically picks appId and secret from config
			// OR
			// You can pass different one like this
			//$this->load->library('facebook', array(
			//    'appId' => 'APP_ID',
			//    'secret' => 'SECRET',
			//    ));
	
			$user = $this->facebook->getUser();
				$data['user_profile'] = $this->facebook->api('/me');
				$data['useritem'] = $this->session->userdata('logged_in');
				$uid = $data['useritem']['uid'];
				$this->load->model('user_m','',TRUE);
				$data['user'] = $this->user_m->profile($uid);
				$data['newuser'] = $this->user_m->getnewuser();
				$this->load->model('story_m','',TRUE);
				$data['story'] = $this->story_m->getstorynew();
				//$data['result'] = 'sampai';
				//var_dump($datas['user']);
				$this->load->model('destinasi_m','',TRUE);
				$data['destinasi'] = $this->destinasi_m->getdestinasinewrand();
				$this->load->view('header',$data);
				$this->load->view('profile/vdashboard',$data);
				$this->load->view('footer');
		   }else{
			   redirect('/','refresh');
		   }
	}
	public function mystory(){
		if($this->session->userdata('logged_in'))
		   {
			   //require '/src/facebook.php';
			$this->load->library('facebook'); // Automatically picks appId and secret from config
			// OR
			// You can pass different one like this
			//$this->load->library('facebook', array(
			//    'appId' => 'APP_ID',
			//    'secret' => 'SECRET',
			//    ));
	
			$user = $this->facebook->getUser();
				$data['user_profile'] = $this->facebook->api('/me');
				$data['useritem'] = $this->session->userdata('logged_in');
				$uid = $data['useritem']['uid'];
				$this->load->model('user_m','',TRUE);
				$data['user'] = $this->user_m->profile($uid);
				$data['newuser'] = $this->user_m->getnewuser();
				$this->load->model('story_m','',TRUE);
				$data['story'] = $this->story_m->getmystory($uid);
				//$data['result'] = 'sampai';
				//var_dump($datas['user']);
				$this->load->model('destinasi_m','',TRUE);
				$data['destinasi'] = $this->destinasi_m->getdestinasinewrand();
				$this->load->view('header',$data);
				$this->load->view('profile/vmystory',$data);
				$this->load->view('footer');
		   }else{
			   redirect('/','refresh');
		   }		
	}
	public function verifikasi(){
		if($_POST['action'] == 'update'){
			$uid = $_POST['uid'];
			$email  = $_POST['email'];
			$this->load->model(array('user_m'));	
			$data['user_update'] = $this->user_m->verifikasi($uid);

		?>
		<div class='alert alert-success'>
            <button type="button" class="close" data-dismiss="alert">×</button> Anda telah terverivikasi ;-)</div>
            <script type="text/javascript">
				$(function(){					
					$('#loadingver').hide();
					$('.order').hide();					
				});	
				window.location.reload();			
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
	
	public function destinasi(){
			//require '/src/facebook.php';
			$this->load->library('facebook'); // Automatically picks appId and secret from config
			// OR
			// You can pass different one like this
			//$this->load->library('facebook', array(
			//    'appId' => 'APP_ID',
			//    'secret' => 'SECRET',
			//    ));
	
			$user = $this->facebook->getUser();
			//var_dump($user);
			//if ($user) {
				try {
					//var_dump($data['user_profile']);
					//echo'test';
					//$data['user_profile'] =  'test';
					$data['user_profile'] = $this->facebook->api('/me');
					$fullname = $data['user_profile']['name'];
					$email1 = $data['user_profile']['email'];
					$fbid = $data['user_profile']['id'];
					$fname = $data['user_profile']['first_name'];
					$this->load->model('user_m','',TRUE);
					$data['user_front'] = $this->user_m->getuserfront();
					//var_dump($data['user_profile']);
					//var_dump($nama);
				} catch (FacebookApiException $e) {
					$user = null;
				}
		   // }else {
			  //  $this->facebook->destroySession();
			//}
			$this->load->model('destinasi_m','',TRUE);
			$data['destinasi'] = $this->destinasi_m->getdestinasinew();
			$this->load->view('header', $data);
			$this->load->view('destinasi/vdestinasi',$data);
			
		}
	

	public function login(){

		$this->load->library('facebook'); // Automatically picks appId and secret from config
        // OR
        // You can pass different one like this
        //$this->load->library('facebook', array(
        //    'appId' => 'APP_ID',
        //    'secret' => 'SECRET',
        //    ));

		$user = $this->facebook->getUser();
        
        if ($user) {
            try {
                $data['user_profile'] = $this->facebook->api('/me');
            } catch (FacebookApiException $e) {
                $user = null;
            }
        }else {
            $this->facebook->destroySession();
        }

        if ($user) {

            $data['logout_url'] = site_url('logout'); // Logs off application
            // OR 
            // Logs off FB!
            // $data['logout_url'] = $this->facebook->getLogoutUrl();

        } else {
            $data['login_url'] = $this->facebook->getLoginUrl(array(
                'redirect_uri' => site_url('dashboard/login'), 
                'scope' => array("email") // permissions here
            ));
        }
		$this->load->view('header');
        $this->load->view('profile/vdashboard',$data);

	}

    public function logout(){

        $this->load->library('facebook');

        // Logs off session from website
        $this->facebook->destroySession();
        // Make sure you destory website session as well.

        redirect('welcome/login');
    }

}


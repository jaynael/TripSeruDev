<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Destinasi extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	 public function __construct(){
		parent::__construct();
		//$this->load->model(array('aksi_m'));
		//$this->auth->restrict();
		$this->load->library('form_validation');
		$this->load->helper(array('form', 'url'));
		$this->load->library('session');
	}
	public function index()
	{
		//require '/src/facebook.php';
		$this->load->model('user_m','',TRUE);
		$data['user_front'] = $this->user_m->getuserfront();
        // OR
        // You can pass different one like this
        //$this->load->library('facebook', array(
        //    'appId' => 'APP_ID',
        //    'secret' => 'SECRET',
        //    ));
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
							redirect('/dashboard' , 'refresh');
							
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
		$data['destinasi'] = $this->destinasi_m->getdestinasinew();
		$this->load->view('header', $data);
		$this->load->view('destinasi/vdestinasi',$data);
		$this->load->view('footer');
	}
	public function view($tripid){
		//if ($tripid === 0 && $slug === FALSE){
		$this->load->model(array('destinasi_m'));
		$data['destinasi_item'] = $this->destinasi_m->getdestinasi($tripid);
		if (empty($data['destinasi_item'])){
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
							redirect('/dashboard' , 'refresh');
							
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
			//$this->load->model('destinasi_m','',TRUE);
			$data['destinasi'] = $this->destinasi_m->getdestinasinewrand();
			$data['headtitle'] = 'Tripseru.com | '.$data['destinasi_item']['destinasi'];
			$this->load->view('header', $data);
			//var_dump($data['destinasi']);
			$this->load->view('destinasi/vdestinasi_single',$data);
			$this->load->view('footer');
		}
	//}else{
	//	echo"slow";
	//}
	}
		
	public function insert()
	{
		if($this->session->userdata('logged_admin'))
		   {
			   if(isset($_POST['submitted'])) {
				   //upload file
					$config['upload_path'] = './upload/';
					$config['allowed_types'] = 'gif|jpg|png|jpeg';
					$config['min_size']	= '100';
					$config['min_width']  = '1024';
					$config['min_height']  = '1024';
					$config['encrypt_name']  = true;
					//$this->load->library('upload', $config);
					$field_name = "picdestinasi";
					$this->load->library('upload', $config);
					$namadestinasi = $_POST['namadestinasi'];
					$harga  = $_POST['harga']; 
					$lama  = $_POST['lama'];
					$tgl = $_POST['tgl'];
					$bulan  = $_POST['bulan'];
					$tahun  = $_POST['tahun'];
					$kota  = $_POST['kota'];
					//$picdestinasi  = mysql_real_escape_string($_POST['picdestinasi']);
					$ittinery= $_POST['ittinery'];
					$this->load->library('upload', $config);
					if (!$this->upload->do_upload($field_name))
					{
						$error = array('error' => $this->upload->display_errors());
						$data = (array(
							'error' => $this->upload->display_errors(),
						));
						$this->load->view('admin/header_v', $data);	
						$this->load->view('admin/newdestinasi_v', $data);
						$this->load->view('admin/footer_v');
					}
					else
					{
						$data = array('upload_data' => $this->upload->data($field_name));	
						$dat = $this->upload->data();
						$filename = $dat['file_name'];				
						//var_dump($tag);
						$this->load->model(array('destinasi_m'));	
						$data['story_insert'] = $this->destinasi_m->insert($filename);
						$data = (array(
								'success' => 'Destinasi Berhasil di Posting',
							));
							$this->load->view('admin/header_v', $data);	
							$this->load->view('admin/newdestinasi_v', $data);
							$this->load->view('admin/footer_v');
		
					}
					}else {
						redirect('/atur/destinasi', 'refresh');
					 }
		   }else{
			   redirect('/atur/admin', 'refresh');
		   }
		   
	}
	public function update()
	{
		if($this->session->userdata('logged_admin'))
		   {
			    if(isset($_POST['submitted'])) {				   
					$namadestinasi = $_POST['namadestinasi'];
					$harga  = $_POST['harga'];
					$date  = $_POST['date'];
					$nexti  = $_POST['next'];
					$hot  = $_POST['hot'];
					$tripid  = $_POST['tripid']; 
					$lama  = $_POST['lama'];
					$tgl = $_POST['tgl'];
					$bulan  = $_POST['bulan'];
					$tahun  = $_POST['tahun'];
					$kota  = $_POST['kota'];	
					$quota  = $_POST['quota'];				
					//$picdestinasi  = mysql_real_escape_string($_POST['picdestinasi']);
					$ittinery= $_POST['ittinery'];
					//var_dump($tag);
					$this->load->model('destinasi_m','',TRUE);	
					$data['destinasi_update'] = $this->destinasi_m->update($tripid);
					$data['destinasi_count'] = $this->destinasi_m->destinasicount();								
					$data = array(
						'success' =>'Data trip '.$namadestinasi .' Berhasil di Update',
						'destinasi_jumlah' => $data['destinasi_count']['rows'],
						'list_destinasi' => $this->destinasi_m->listdestinasi(),
					);
					//var_dump($data);
					$this->load->view('admin/header_v', $data);	
					$this->load->view('admin/alldestinasi_v',$data);
					$this->load->view('admin/footer_v');			
			}else 
			{
					redirect('/atur/destinasi', 'refresh');
			}			   
			   
		   }else{
			   redirect('/atur/admin', 'refresh');
		   }
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

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

        // To use site_url and redirect on this controller.
        $this->load->helper('url');
		$this->load->library('session');
	}
	public function index()
	{
		//require '/src/facebook.php';
		$this->load->library('facebook'); // Automatically picks appId and secret from config
		$this->load->model('user_m','',TRUE);
		$data['user_front'] = $this->user_m->getuserfront();
        // OR
        // You can pass different one like this
        //$this->load->library('facebook', array(
        //    'appId' => 'APP_ID',
        //    'secret' => 'SECRET',
        //    ));

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
		$this->load->model('story_m','',TRUE);
		$data['story'] = $this->story_m->getstorynew();
		$this->load->model('user_m','',TRUE);
		$data['newuser'] = $this->user_m->getnewuserhome();
		$this->load->model('destinasi_m','',TRUE);
		$data['destinasi'] = $this->destinasi_m->getdestinasinewhome();
		$data['nextdest'] = $this->destinasi_m->nextdestinasi();
		$data['hot'] = $this->destinasi_m->hotdestinasi();
		//var_dump($data['hot']);
		$data['headtitle'] = 'Tripseru.com | Karena Indonesia Lebih Seruu_'; 
		$this->load->view('header', $data);
		$this->load->view('home', $data);
		$this->load->view('footer', $data);
	}
	
	public function logout(){
        $this->load->library('facebook');
        // Logs off session from website
        $this->facebook->destroySession();
        // Make sure you destory website session as well.
		$this->session->unset_userdata('uid');
			$this->session->unset_userdata('email');
			$this->session->unset_userdata('fullname');
			$this->session->sess_destroy();
			

        redirect('');
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Page extends CI_Controller {

	public function __construct(){
		parent::__construct();

        // To use site_url and redirect on this controller.
        $this->load->helper('url');
		$this->load->library('session');
	}
	public function privacy(){
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
				}else{
					if ($user) {
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
							$result = $this->user_m->register($fbid, $fullname, $email1, $fname);
							//var_dump($data['user_profile']);
							//var_dump($nama);
							
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
		$this->load->view('header', $data);
		$this->load->view('page/privacy');
		//$this->load->view('footer');
	}
}
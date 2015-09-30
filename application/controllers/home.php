<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

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
		$this->load->model('story_m','',TRUE);
		$data['story'] = $this->story_m->getstoryhome();
		$this->load->model('user_m','',TRUE);
		$data['newuser'] = $this->user_m->getnewuserhome(); 
		$this->load->model('destinasi_m','',TRUE);
		$data['destinasi'] = $this->destinasi_m->getdestinasinewhome();		
		$this->load->view('header', $data);
		$this->load->view('home', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
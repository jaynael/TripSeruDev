<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
 
class News extends CI_Controller{
	public function __construct(){
		parent::__construct();
		//$this->load->library('auth');
		$this->load->model(array('blog_m'));
		//$this->load->helper(array('globals'));
		//$this->load->library(array('simpliparse','pquery','form_validation'));
		//$this->auth->restrict();
		$this->load->library('form_validation');
		$this->load->helper(array('form', 'url'));
		//$this->load->library('pagination');
	}
	public function index(){
		$data['title'] = 'News - ayopeduli.com';
	
		$this->load->view('header', $data);
		$this->load->view('news/all', $data);
		$this->load->view('footer');
	}
}
?>
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Partner extends CI_Controller {
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
		//$this->load->helper('url');
		$this->load->model('partner_m');
		$this->load->library('session');
		$this->load->library('form_validation');
		$this->load->helper(array('form', 'url'));
	}
	public function index(){
		$this->load->view('partner/partner');
	}
	public function partner_to(){
		$this->load->view('partner/TOpartner');
	}
	public function login(){
		$this->load->view('partner/loginpartner_v');
	}
	public function verifylogin()
	 {
	   //This method will have the credentials validation
	   $this->load->library('form_validation');
	   $this->load->helper(array('form', 'url'));
	
	   $this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean');
	   $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');
	
	   if($this->form_validation->run() == FALSE)
	   {
		 //Field validation failed.  User redirected to login page
		 //$this->load->view('login_view');
		 $data = array(
			'title' =>'Login dan kumpulkan gudness poin di ayopeduli.com!',
			);
			$this->load->view('admin/header', $data);
			$this->load->view('admin/login_v');
			$this->load->view('admin/footer');
	   }
	   else
	   {
		 //Go to private area
		 redirect('partner/home', 'refresh');
	   }
	
	 }
	 
	 public function check_database($password)
	 {
	   //Field validation succeeded.  Validate against database
	   $email = $this->input->post('email');
	
	   //query the database
	    $this->load->model('partner_m','',TRUE);
	   $result = $this->partner_m->loginadmin($email, $password);
	
	   if($result)
	   {
		 $sess_array = array();
		 foreach($result as $row)
		 {
		   $sess_array = array(
			 'idp' => $row->idp,
			 'email' => $row->email,
			 'nama' => $row->nama
		   );
		   $this->session->set_userdata('logged_admin', $sess_array);
		 }
		 return TRUE;
	   }
	   else
	   {
		 $this->form_validation->set_message('check_database', 'anda bukan admin');
		 return false;
	   }
	 }
	
	//New Partner
	public function new_register_to(){  
		if($_POST['action'] == 'insert'){
			$nama = $_POST['nama'];
			$email  = $_POST['email'];
			$password = $_POST['password'];
			$perusahaan = $_POST['perusahaan'];
			$legal = $_POST['legal'];	
			$data['partner_insert'] = $this->partner_m->register_to();
			//redirect('/partner/home');
			
			

	?>
		<div class='alert alert-success'>
            Terima kasih <?php // echo "$nama"; ?>, <br /><br />
            <p>Tinggal selangkah lagi kamu mendapatkan peluang usaha online travelling kami, Untuk selanjutnya silahkan lakukan pembayaran melalui: </p>
            Silahkan login <a href="<?php echo base_url() ?>partner/login"> disini</a>
        </div>
            <script type="text/javascript">
            $(function(){
				$('#regform').hide();					   
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
	//Check email
	public function check_email_availablity()
	{
		$get_result = $this->partner_m->check_email_availablity();
		
		if(!$get_result )
		echo '<span style="color:#f00">Email already in use. </span>';
		else
		echo '<span style="color:#0c0">Email Available</span>';
	}
	//Create Trip
	public function create(){
		$data = array(
			'title' =>'Buat trip kamu semakin ramai!',
		);
		$this->load->view('partner/header_v', $data);
		$this->load->view('partner/creattrip_v');
	}
	//Create itinery
	public function create_itinery(){
		$data = array(
			'title' =>'Ittinery Trip!',
		);
		$this->load->view('partner/header_v', $data);
		$this->load->view('partner/ittinerycreate_v');
	}
	
	//Create Harga
	public function create_harga(){
		$data = array(
			'title' =>'Tentukan Harga Trip!',
		);
		$this->load->view('partner/header_v', $data);
		$this->load->view('partner/hargacreate_v');
	}
	//Create Harga
	public function create_syarat(){
		$data = array(
			'title' =>'Syarat dan ketentuan Trip!',
		);
		$this->load->view('partner/header_v', $data);
		$this->load->view('partner/ketentuancreate_v');
	}
	
	//home
	public function home(){
	//if($this->session->userdata('logged_admin'))
		//   {
				$this->load->model('story_m','',TRUE);
				$this->load->model('destinasi_m','',TRUE);
				$this->load->model('order_m','',TRUE);
				$data['story_count'] = $this->story_m->storycount();
				$data['destinasi_count'] = $this->destinasi_m->destinasicount();
				$data['order_count'] = $this->order_m->ordercount();								
				$data = array(
					'title' =>'Tripseru dashboard admin!',
					'story_jumlah' => $data['story_count']['rows'],
					'destinasi_jumlah' => $data['destinasi_count']['rows'],
					'order_jumlah' => $data['order_count']['rows'],
					'list_story' => $this->story_m->liststory(),
				);	
				$this->load->view('partner/header_v', $data);		
				$this->load->view('partner/dbpartner_v', $data);	
				//$this->load->view('partner/footer_v');
			//}else{
				 //If no session, redirect to login page
				 //redirect('atur/login', 'refresh');
			   //}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
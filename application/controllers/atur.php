<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Atur extends CI_Controller {
	public function __construct(){
		parent::__construct();
		//$this->load->model(array('aksi_m'));
		//$this->auth->restrict();
		$this->load->library('form_validation');
		$this->load->helper(array('form', 'url'));
		$this->load->library('session');
	}
	public function login(){
		$data = array(
			'title' =>'Halaman Admin nih!',
		);		
		$this->load->view('admin/headeradmin_v', $data);
		$this->load->view('admin/login_v');
	}
	public function destinasi(){
		 function insert()
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
							$namadestinasi = mysql_real_escape_string($_POST['namadestinasi']);
							$harga  = mysql_real_escape_string($_POST['harga']); 
							$lama  = mysql_real_escape_string($_POST['lama']);
							$tgl = mysql_real_escape_string($_POST['tgl']);
							$bulan  = mysql_real_escape_string($_POST['bulan']);
							$kota  = mysql_real_escape_string($_POST['kota']);
							//$picdestinasi  = mysql_real_escape_string($_POST['picdestinasi']);
							$ittinery= mysql_real_escape_string($_POST['ittinery']);
							$this->load->library('upload', $config);
							if (!$this->upload->do_upload($field_name))
							{
								$error = array('error' => $this->upload->display_errors());
								//$this->load->view('/aksi/create', $error);
								//$this->create_error(false);
								//var_dump($pic);
								//var_dump($error);
								//var_dump(!$this->upload->do_upload($field_name));
								$data = (array(
									'error' => $this->upload->display_errors(),
									//'judul' => $judul,
		//							'descsing' => $descsing,
		//							'donasi' => $donasi,
		//							'jumlahtarget' => $jumlahtarget,
		//							'tgl' => $tgl,
		//							'desc' => $desc,
		//							'vid' => $vid
								));
								$this->load->view('admin/header_v', $data);	
								$this->load->view('admin/newdestinasi_v', $data);
								$this->load->view('admin/footer_v');
							}
							else
							{
							$data = array('upload_data' => $this->upload->data($field_name));					
							//var_dump($tag);
							$this->load->model(array('destinasi_m'));	
							$data['story_insert'] = $this->destinasi_m->insert();
				
						?>
						<div class='alert alert-success'>
							<button type="button" class="close" data-dismiss="alert">×</button> Destinasi berhasil di posting ;-)</div>
							<script type="text/javascript">
								$(function(){					
									$('#loading').hide();
									$('.close').click(function(){
										$('close').hide();
									});
									$('#namadestinasi').val('');
									$('#harga').val('');
									$('#lama').val('');
									$('#tgl').val('');
									$('#bulan').val('');
									$('#kota').val('');
								});				
							</script>
						<?php }
							}else {
							?>          
						  <div class='alert alert-error'>
						  <button type="button" class="close" data-dismiss="alert">×</button>Something Wrong!<br> <?php die('Could not enter data: ' . mysql_error());?></div>
						  <script type="text/javascript">
							$(function(){
								$('#loading').show();					   
							});				
							</script>
					<?php   }
				   }else{
					   redirect('/', 'refresh');
				   }
				   
			}
		if($this->session->userdata('logged_admin'))
		   {
				$this->load->model('story_m','',TRUE);
				$data['story_count'] = $this->story_m->storycount();								
				$data = array(
					'title' =>'Halaman Admin nih!',
					'story_jumlah' => $data['story_count']['rows'],
					'list_story' => $this->story_m->liststory(),
				);	
				$this->load->view('admin/header_v', $data);	
				$this->load->view('admin/newdestinasi_v', $data);
				$this->load->view('admin/footer_v');		
			}else
			   {
				 //If no session, redirect to login page
				 redirect('atur/login', 'refresh');
			   }
	}
	public function do_upload() {
        $upload_path_url = base_url() . 'uploads/';

        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['max_size'] = '30000';

        $this->load->library('upload', $config);
		//$this->load->helper('file');
		
        if (!$this->upload->do_upload()) {
            //$error = array('error' => $this->upload->display_errors());
            //$this->load->view('upload', $error);

            //Load the list of existing files in the upload directory
            //$existingFiles = get_dir_file_info($config['upload_path']);
			$existingFiles = get_dir_file_info($config['upload_path']);
			//var_dump($existingFiles);
            $foundFiles = array();
            $f=0;
            foreach ($existingFiles as $fileName => $info) {
              if($fileName!='thumbs'){//Skip over thumbs directory
                //set the data for the json array   
                $foundFiles[$f]['name'] = $fileName;
                $foundFiles[$f]['size'] = $info['size'];
                $foundFiles[$f]['url'] = $upload_path_url . $fileName;
                $foundFiles[$f]['thumbnailUrl'] = $upload_path_url . 'thumbs/' . $fileName;
                $foundFiles[$f]['deleteUrl'] = base_url() . 'upload/deleteImage/' . $fileName;
                $foundFiles[$f]['deleteType'] = 'DELETE';
                $foundFiles[$f]['error'] = null;

                $f++;
              }
            }
            $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode(array('files' => $foundFiles)));
        } else {
            $data = $this->upload->data();
            /*
             * Array
              (
              [file_name] => png1.jpg
              [file_type] => image/jpeg
              [file_path] => /home/ipresupu/public_html/uploads/
              [full_path] => /home/ipresupu/public_html/uploads/png1.jpg
              [raw_name] => png1
              [orig_name] => png.jpg
              [client_name] => png.jpg
              [file_ext] => .jpg
              [file_size] => 456.93
              [is_image] => 1
              [image_width] => 1198
              [image_height] => 1166
              [image_type] => jpeg
              [image_size_str] => width="1198" height="1166"
              )
             */
            // to re-size for thumbnail images un-comment and set path here and in json array
            $config = array();
            $config['image_library'] = 'gd2';
            $config['source_image'] = $data['full_path'];
            $config['create_thumb'] = TRUE;
            $config['new_image'] = $data['file_path'] . 'thumbs/';
            $config['maintain_ratio'] = TRUE;
            $config['thumb_marker'] = '';
            $config['width'] = 75;
            $config['height'] = 50;
            $this->load->library('image_lib', $config);
            $this->image_lib->resize();


            //set the data for the json array
            $info = new StdClass;
            $info->name = $data['file_name'];
            $info->size = $data['file_size'] * 1024;
            $info->type = $data['file_type'];
            $info->url = $upload_path_url . $data['file_name'];
            // I set this to original file since I did not create thumbs.  change to thumbnail directory if you do = $upload_path_url .'/thumbs' .$data['file_name']
            $info->thumbnailUrl = $upload_path_url . 'thumbs/' . $data['file_name'];
            $info->deleteUrl = base_url() . 'upload/deleteImage/' . $data['file_name'];
            $info->deleteType = 'DELETE';
            $info->error = null;
			
            $files[] = $info;
            //this is why we put this in the constants to pass only json data
            if (IS_AJAX) {
                echo json_encode(array("files" => $files));
                //this has to be the only data returned or you will get an error.
                //if you don't give this a json array it will give you a Empty file upload result error
                //it you set this without the if(IS_AJAX)...else... you get ERROR:TRUE (my experience anyway)
                // so that this will still work if javascript is not enabled
            } else {
                $file_data['upload_data'] = $this->upload->data();
				var_dump($file_data['upload_data']);
                $this->load->view('upload/upload_success', $file_data);
            }
        }
    }
	
    public function deleteImage($file) {//gets the job done but you might want to add error checking and security
        $success = unlink(FCPATH . 'uploads/' . $file);
        $success = unlink(FCPATH . 'uploads/thumbs/' . $file);
        //info to see if it is doing what it is supposed to
    $info = new StdClass;
        $info->sucess = $success;
        $info->path = base_url() . 'uploads/' . $file;
        $info->file = is_file(FCPATH . 'uploads/' . $file);

        if (IS_AJAX) {
            //I don't think it matters if this is set but good for error checking in the console/firebug
            echo json_encode(array($info));
        } else {
            //here you will need to decide what you want to show for a successful delete        
            $file_data['delete_data'] = $file;
            $this->load->view('admin/delete_success', $file_data);
        }
    }
	public function admin(){
		if($this->session->userdata('logged_admin'))
		   {
				$this->load->model('story_m','',TRUE);
				$this->load->model('destinasi_m','',TRUE);
				$this->load->model('order_m','',TRUE);
				$data['story_count'] = $this->story_m->storycount();
				$data['destinasi_count'] = $this->destinasi_m->destinasicount();
				$data['order_count'] = $this->order_m->ordercount();								
				$data = array(
					'title' =>'Halaman Admin nih!',
					'story_jumlah' => $data['story_count']['rows'],
					'destinasi_jumlah' => $data['destinasi_count']['rows'],
					'order_jumlah' => $data['order_count']['rows'],
					'list_story' => $this->story_m->liststory(),
				);	
				$this->load->view('admin/header_v', $data);		
				$this->load->view('admin/dashboardadmin_v', $data);	
				$this->load->view('admin/footer_v');
			}else
			   {
				 //If no session, redirect to login page
				 redirect('atur/login', 'refresh');
			   }
	}
	public function alldestinasi(){
		if($this->session->userdata('logged_admin'))
		   {
			$this->load->model('destinasi_m','',TRUE);
			$data['destinasi_count'] = $this->destinasi_m->destinasicount();								
			$data = array(
				'title' =>'All Destinasi',
				'destinasi_jumlah' => $data['destinasi_count']['rows'],
				'list_destinasi' => $this->destinasi_m->listdestinasi(),
			);
			$this->load->view('admin/header_v', $data);
			$this->load->view('admin/alldestinasi_v',$data);		
			$this->load->view('admin/footer_v');
			}else
			  {
				//If no session, redirect to login page
				 redirect('atur/login', 'refresh');
			   }		
	}
	public function editdestinasi($tripid){
		if($this->session->userdata('logged_admin'))
		   {
				$this->load->model('destinasi_m','',TRUE);
				$data['destinasi'] = $this->destinasi_m->getdestinasi($tripid);				 
				$this->load->view('admin/header_v');
				$this->load->view('admin/editdestinasi_v',$data);		
				$this->load->view('admin/footer_v');
		   }
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
			$this->load->view('admin/headeradmin_v', $data);
			$this->load->view('admin/login_v');
	   }
	   else
	   {
		 //Go to private area
		 redirect('atur/admin', 'refresh');
	   }
	
	 }
	 
	 public function check_database($password)
	 {
	   //Field validation succeeded.  Validate against database
	   $email = $this->input->post('email');
	
	   //query the database
	    $this->load->model('user_m','',TRUE);
	   $result = $this->user_m->loginadmin($email, $password);
	   if($result)
	   {
		 $sess_array = array();
		 foreach($result as $row)
		 {
		   $sess_array = array(
			 //'uid' => $row->uid,
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
	 
	 public function logout(){
		 session_start();
		$this->load->helper(array('form', 'url'));
	   $this->session->unset_userdata('logged_admin');
	   session_destroy();
	   redirect('atur/login');
	 }
	
}
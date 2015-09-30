<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class reseru extends CI_Controller {
	
	public function __construct(){
		parent::__construct();

        // To use site_url and redirect on this controller.
        $this->load->helper('url');
		$this->load->library('session');
	}
	public function inserttrip(){  
		if($_POST['action'] == 'insert'){
			$tripidser= $_POST['tripidser'];
			$uidser  = $_POST['uidser'];
			//var_dump($tag);
			$this->load->model(array('reseru_m'));	
			$data['order_insert'] = $this->reseru_m->inserttrip();
			
		?>Anda telah me-reseru trip ini
              <script type="text/javascript">
				$(function(){					
					$('#reser').hide();
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
  
     
}
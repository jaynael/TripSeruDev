<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Order extends CI_Controller {

	public function __construct(){
		parent::__construct();

        // To use site_url and redirect on this controller.
        $this->load->helper('url');
		$this->load->library('session');
	}
	
	public function insert(){  
		if($_POST['action'] == 'insert'){
			$triporder = $_POST['triporder'];
			$uidorder  = $_POST['uidorder']; 
			$berangkat  = $_POST['berangkat'];
			$email  = $_POST['email'];
			$hargades = $_POST['hargades'];
			$pax  = $_POST['pax'];
			$totalbayar = $_POST['totalbayar'];
			$namadestinasi = $_POST['namadestinasi'];
			//var_dump($tag);
			$this->load->model(array('order_m'));	
			$data['order_insert'] = $this->order_m->insert();
			
		?>
		<div class='alert alert-success'>
            Terima kasih, Order anda berhasil Silahkan lakukan pembayaran segera:
        </div>
        <div class="order">
                    	<div class="itemform">
                        	<label>Destinasi</label>
                            <div class="ket">
                            	: <?php echo $namadestinasi ?>
                            </div>  
                            <div class="clearfix"></div>                          
                        </div>
                        <div class="itemform">
                        	<label>Berangkat</label>
                            <div class="ket">
                            	: <?php echo $berangkat ?>
                            </div>  
                            <div class="clearfix"></div>                          
                        </div>
                        <div class="itemform">
                        	<label>Harga/Pax</label>
                            <div class="ket">
                            : Rp.<?php echo number_format($hargades); ?>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="itemform">
                        	<label>Jumlah order</label>
                            <div class="ket">
                                : <?php echo $pax ?>
                           	</div>
                            <div class="clearfix"></div>                            
                        </div>
                        <div class="itemform">
                        	<label>Total Bayar</label>
                            <div class="ket">
                                : Rp.<?php echo number_format($totalbayar); ?>
                           	</div>
                            <div class="clearfix"></div>                            
                        </div>
                        <div class="itemform">
                        	Kirimkan ke rekening <br>BCA Cabang Juanda Bekasi Acc. 739-078-7680 a.n Jaenul Khupron
                        </div>
                        <div class="itemform">
                        	<a href="https://ibank.klikbca.com" target="_new"><img width="80px" src="/asset/images/klikbca.jpg"></a>
                        </div>
                    </div>
            
            <script type="text/javascript">
				$(function(){					
					$('#loading').hide();
					$('#orderform').hide();
					$('#ordertrip').hide();
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
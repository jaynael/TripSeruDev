<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 
Class Partner_m extends CI_Model{
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->database();
		$this->load->library('session');
	}
	public function register_to (){
		//$poin  = mysql_real_escape_string($_POST['poin']);
        $nama = mysql_real_escape_string($_POST['nama']);
		$email  = mysql_real_escape_string($_POST['email']);
		$perusahaan  = mysql_real_escape_string($_POST['perusahaan']); 
		$legal  = mysql_real_escape_string($_POST['legal']);  
		$password  = mysql_real_escape_string($_POST['password']);
		$stat = 0; 
		function autonumber($tabel, $kolom, $lebar=0, $awalan='')
			{
				$query="select $kolom from $tabel order by $kolom desc limit 1";
				$hasil=mysql_query($query);
				$jumlahrecord = mysql_num_rows($hasil);
				if($jumlahrecord == 0)
					$nomor=1;
				else
				{
					$row=mysql_fetch_array($hasil);
					$nomor=intval(substr($row[0],strlen($awalan)))+1;
				}
				if($lebar>0)
					$angka = $awalan.str_pad($nomor,$lebar,"0",STR_PAD_LEFT);
				else
					$angka = $awalan.$nomor;
				return $angka;
			}
		$partid = autonumber("ts_partner","partid",5,"TO");
		$datareg = array(
		   'email' => $email,
		   'nama' => $nama ,
		   'perusahaan' => $perusahaan,
		   'legal' => $legal,
		   'password' => md5($password),
		   'join_date' => date("d/m/Y H:i:s"),
		   'partid' => $partid,
		   'tipe' => 'TO'
		);
		//var_dump($datareg);
		$this->db->insert('ts_partner', $datareg); 
		
		$sessiondata = array(
			'partid'  => $partid,
			'username'  => $nama,
			'email'    => $email,
			'logged_in' => TRUE
		);
		//var_dump($userdata);
		$this->session->set_userdata($sessiondata);
     	

		//sending email
		//$this->load->library('email');
//    	$this->email->set_mailtype("html");
//    	$email_body ="<html><head><style type='text/css'>
//				#outlook a{padding:0;}
//				body{width:100% !important;} .ReadMsgBody{width:100%;} .ExternalClass{width:100%;} 
//				body{-webkit-text-size-adjust:none;}
//				body{margin:0; padding:0;}
//				img{border:0; height:auto; line-height:100%; outline:none; text-decoration:none;}
//				table td{border-collapse:collapse;}
//				#backgroundTable{height:100% !important; margin:0; padding:0; width:100% !important;}
//				body, #backgroundTable{
//					background-color:#FAFAFA;
//				}
//				#templateContainer{
//					border: 1px solid #DDDDDD;
//				}
//				h1, .h1{
//					color:#202020;
//					display:block;
//					font-family:Arial;
//					font-size:34px;
//					font-weight:bold;
//					line-height:100%;
//					margin-top:0;
//					margin-right:0;
//					margin-bottom:10px;
//					margin-left:0;
//					text-align:left;
//				}
//				h2, .h2{
//					color:#202020;
//					display:block;
//					font-family:Arial;
//					font-size:30px;
//					font-weight:bold;
//					line-height:100%;
//					margin-top:0;
//					margin-right:0;
//					margin-bottom:10px;
//					margin-left:0;
//					text-align:left;
//				}
//				h3, .h3{
//					color:#202020;
//					display:block;
//					font-family:Arial;
//					font-size:26px;
//					font-weight:bold;
//					line-height:100%;
//					margin-top:0;
//					margin-right:0;
//					margin-bottom:10px;
//					margin-left:0;
//					text-align:left;
//				}
//				h4, .h4{
//					color:#202020;
//					display:block;
//					font-family:Arial;
//					ont-size:22px;
//					font-weight:bold;
//					line-height:100%;
//					margin-top:0;
//					margin-right:0;
//					margin-bottom:10px;
//					margin-left:0;
//					ext-align:left;
//				}
//				#templateHeader{
//					background-color:#FFFFFF;
//					border-bottom:0;
//				}
//				.headerContent{
//					color:#202020;
//					font-family:Arial;
//					font-size:34px;
//					font-weight:bold;
//					line-height:100%;
//					padding:10px;
//					text-align:center;
//					vertical-align:middle;
//					background: none repeat scroll 0 0 #EEEEEE;
//				}
//				.headerContent a:link, .headerContent a:visited, .headerContent a .yshortcuts {
//					color:#336699;
//					font-weight:normal;
//					text-decoration:underline;
//				}
//				#headerImage{
//					height:auto;
//					max-width:600px !important;
//				}
//				#templateContainer, .bodyContent{
//					background-color:#FFFFFF;
//				}
//				.bodyContent div{
//					color:#505050;
//					font-family:Arial;
//					font-size:14px;
//					line-height:150%;
//					text-align:left;
//				}
//				.bodyContent div a:link, .bodyContent div a:visited, /* Yahoo! Mail Override */ .bodyContent div a .yshortcuts /* Yahoo! Mail Override */{
//					color:#336699;
//					font-weight:normal;
//					text-decoration:underline;
//				}
//				.templateDataTable{
//					background-color:#FFFFFF;
//					border:1px solid #DDDDDD;
//				}
//				.dataTableHeading{
//					background-color:#D8E2EA;
//					color:#336699;
//					font-family:Helvetica;
//					font-size:14px;
//					font-weight:bold;
//					line-height:150%;
//					text-align:left;
//				}
//				.dataTableHeading a:link, .dataTableHeading a:visited, /* Yahoo! Mail Override */ .dataTableHeading a .yshortcuts /* Yahoo! Mail Override */{
//					color:#FFFFFF;
//					font-weight:bold;
//					text-decoration:underline;
//				}
//				.dataTableContent{
//					border-top:1px solid #DDDDDD;
//					border-bottom:0;
//					color:#202020;
//					font-family:Helvetica;
//					font-size:12px;
//					font-weight:bold;
//					line-height:150%;
//					text-align:left;
//				}
//				.dataTableContent a:link, .dataTableContent a:visited, /* Yahoo! Mail Override */ .dataTableContent a .yshortcuts /* Yahoo! Mail Override */{
//					color:#202020;
//					font-weight:bold;
//					text-decoration:underline;
//				}
//				.templateButton{
//					-moz-border-radius:3px;
//					-webkit-border-radius:3px;
//					background-color:#336699;
//					border:0;
//					border-collapse:separate !important;
//					border-radius:3px;
//				}
//				.templateButton, .templateButton a:link, .templateButton a:visited, /* Yahoo! Mail Override */ .templateButton a .yshortcuts /* Yahoo! Mail Override */{
//					color:#FFFFFF;
//					font-family:Arial;
//					font-size:15px;
//					font-weight:bold;
//					letter-spacing:-.5px;
//					line-height:100%;
//					text-align:center;
//					text-decoration:none;
//				}
//				.bodyContent img{
//					display:inline;
//					height:auto;
//				}
//				#templateFooter{
//					background-color:#FFFFFF;
//					border-top:0;
//				}
//				.footerContent div{
//					color:#707070;
//					font-family:Arial;
//					font-size:12px;
//					line-height:125%;
//					text-align:center;
//				}
//				.footerContent div a:link, .footerContent div a:visited, /* Yahoo! Mail Override */ .footerContent div a .yshortcuts /* Yahoo! Mail Override */{
//					color:#336699;
//					font-weight:normal;
//					text-decoration:underline;
//				}
//				.footerContent img{
//					display:inline;
//				}
//				#utility{
//					background-color:#FFFFFF;
//					border:0;
//				}
//				#utility div{
//					text-align:center;
//				}
//				#monkeyRewards img{
//					max-width:190px;
//				}
//			</style>
//		</head>
//		<body leftmargin='0' marginwidth='0' topmargin='0' marginheight='0' offset='0'>
//	    	<center>
//	        	<table border='0' cellpadding='0' cellspacing='0' height='100%' width='100%' id='backgroundTable'>
//	            	<tr>
//	                	<td align='center' valign='top' style='padding-top:20px;'>
//	                    	<table border='0' cellpadding='0' cellspacing='0' width='600' id='templateContainer'>
//	                        	<tr>
//	                            	<td align='center' valign='top'>
//	                                    <!-- // Begin Template Header \\ -->
//	                                	<table border='0' cellpadding='0' cellspacing='0' width='600' id='templateHeader'>
//	                                        <tr>
//	                                            <td class='headerContent'>
//	                                            	<td width='65%' style='background:#eee'>
//	                                            	<img src='http://ayopeduli.com/wp-content/themes/ayopeduli/images/logo.png' style='max-width:600px;width:80px;' id='headerImage campaign-icon' mc:label='header_image' mc:edit='header_image' mc:allowdesigner mc:allowtext />
//	                                                </td>
//	                                                <td width='35%' style='background:#eee'>Mulai petik kesuksesanmu sekarang!</td>
//	                                            </td>
//	                                        </tr>
//	                                    </table>
//	                                    <!-- // End Template Header \\ -->
//	                                </td>
//	                            </tr>
//	                        	<tr>
//	                            	<td align='center' valign='top'>
//	                                    <!-- // Begin Template Body \\ -->
//	                                	<table border='0' cellpadding='0' cellspacing='0' width='600' id='templateBody'>
//	                                    	<tr>
//	                                            <td valign='top'>
//	                                                <!-- // Begin Module: Standard Content \\ -->
//	                                                <table border='0' cellpadding='20' cellspacing='0' width='100%'>
//	                                                    <tr>
//	                                                        <td valign='top' class='bodyContent'>
//	                                                            <div mc:edit='std_content00'>
//	                                                                <h4 class='h4'>Hi $nama,</h4>
//	                                                                Selamat, Kamu telah bergabung menjadi bagian dari ribuan agent tripseru.com:
//	                                                            </div>
//															</td>
//	                                                    </tr>
//	                                                    <tr>
//	                                                    	<td valign='top' style='padding-top:0; padding-bottom:0;'>
//	                                                          <table border='0' cellpadding='10' cellspacing='0' width='100%' class='templateDataTable'>
//															  <tr mc:repeatable>
//	                                                                  <td valign='top' class='dataTableContent' mc:edit='data_table_content00'>
//	                                                                    Untuk selanjutnys 
//	                                                                  :</td>
//	                                                                  <td valign='top' class='dataTableContent' mc:edit='data_table_content01'>
//	                                                                    
//	                                                                  </td>                                                       
//	                                                              </tr> 
//																                                                                
//	                                                          </table>
//	                                                        </td>
//	                                                    </tr>
//	                                                    <tr>
//	                                                      
//                                                    </tr>
//	                                                </table>
//	                                                <!-- // End Module: Standard Content \\ -->
//	                                           </td>
//	                                        </tr>
//	                                    </table>
//	                                    <!-- // End Template Body \\ -->
//	                                </td>
//	                            </tr>
//	                        	<tr>
//	                            	<td align='center' valign='top'>
//	                                   <!-- // Begin Template Footer \\ -->
//		                               	<table border='0' cellpadding='10' cellspacing='0' width='600' id='templateFooter'>
//	                                	<tr>
//	                                        	<td valign='top' class='footerContent'>
//	                                                <!-- // Begin Module: Transactional Footer \\ -->
//	                                                <table border='0' cellpadding='10' cellspacing='0' width='100%'>
//	                                                    <tr>
//	                                                        <td valign='top'>
//	                                                            <div mc:edit='std_footer'>
//																	<em>Copyright &copy; 2015 tripseru.com.com, All rights reserved.</em>
//	                                                            </div>
//	                                                        </td>
//	                                                    </tr>
//	                                                    <tr>
//	                                                        <td valign='middle' id='utility'>
//	                                                        </td>
//	                                                   </tr>
//	                                                </table>
//	                                               <!-- // End Module: Transactional Footer \\ -->
//	                                           </td>
//	                                        </tr>
//	                                    </table>
//		                                  <!-- // End Template Footer \\ -->
//	                                </td>
//	                            </tr>
//	                        </table>
//	                        <br />
//	                    </td>
//	                </tr>
//	            </table>
//	        </center>
//	   </body>
//	</html>";
//    $this->email->from('partner@tripseru.com', 'Partner Tripseru.com');
//    //$list = array('user@gmail.com');
//    $this->email->to($email);
//	//$this->email->cc('gufron@ayopeduli.com');
//    $this->email->subject('Selamat bergabung menjadi partner Tripseru.com');
//    $this->email->message($email_body);
//
//    $this->email->send();
//	//echo $this->email->print_debugger();
	}
	
	public function check_email_availablity(){
		$email = trim($this->input->post('email'));
		$email = strtolower($email);	
		
		$query = $this->db->query('SELECT * FROM ts_partner where email="'.$email.'"');
		
		if($query->num_rows() > 0)
		return false;
		else
		return true;
	}
	
	public function loginadmin($email, $password)
	 {
		//$statadmin = 1;
	   $this -> db -> select('idp, email, fullname, password');
	   $this -> db -> from('ts_partner');
	   $this -> db -> where('email', $email);
	   $this -> db -> where('password', MD5($password));
	   //$this -> db -> where('group', $statadmin);
	   $this -> db -> limit(1);
	
	   $query = $this -> db -> get();
	
	   if($query -> num_rows() == 1)
	   {
		 return $query->result();
	   }
	   else
	   {
		 return false;
	   }
	 }

};

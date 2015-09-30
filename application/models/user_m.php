<?php
if(!defined('BASEPATH')) exit('Hacking Attempt : Get Out of the system ..!');
Class User_m extends CI_Model
{
	public function __construct(){
		parent::__construct();
		//$this->load->helper('url');
		$this->load->database();
	}
	
	public function getuserfront(){
		$this->db->order_by('uid','RANDOM');
		$query = $this->db->get_where('ts_user',array(),5);
		//$query = $this->db->join('ap_user');		
		return $query->result_array();
	}
	public function getnewuser(){
		$this->db->order_by('uid','RANDOM');
		$query = $this->db->get_where('ts_user',array(),9);
		//$query = $this->db->join('ap_user');		
		return $query->result_array();
	}
	public function getnewuserhome(){
		$this->db->order_by('uid','RANDOM');
		$query = $this->db->get_where('ts_user',array(),12);
		//$query = $this->db->join('ap_user');		
		return $query->result_array();
	}
	public function loginadmin($email, $password){
		$statadmin = 1;
	   $this -> db -> select('email, pass, nama');
	   $this -> db -> from('ts_admin');
	   $this -> db -> where('email', $email);
	   $this -> db -> where('pass', MD5($password));
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
	public function profile($uid){
		$this->db->select('*');
		$this->db->from('ts_user');
		$this->db->where(array('uid' =>$uid));
		$query = $this->db->get();
		$query2 = $query->row_array();
		return $query2;
		//var_dump($query->row_array());		
	}
	public function verifikasi($uid){
		$email = mysql_real_escape_string($_POST['email']);
		$uid = mysql_real_escape_string($_POST['uid']);
		$data = array(
               'email' => $email,
			   'verified' => '1',
            );
		$this->db->select('*');
		$this->db->from('ts_user');		
		$this->db->where('uid', $uid);
		$this->db->update('ts_user', $data); 
	}
	public function register($fbid, $fullname, $fname){		
		$this->db->select('*');
		$this->db->from('ts_user');
		//if($email1 == 'null'){
			$this->db->where(array('fbid' =>$fbid));
		//}else{
			//$this->db->where(array('email' =>$email1));
		//}
		$query = $this->db->get();
		$email2 = $query->row_array();
		//$email3 = $email2['email'];
			
		//var_dump($data);
		//var_dump(count($email2));
		if(count($email2) !== 0 ){	
				$uid = $email2['uid'];		
				$sess_array = array();		
			//foreach($result as $row)
				$sess_array = array(	
							'uid' => $uid,			 
							 //'email' => $email1,
							 'fullname' => $fullname
						   );
				$this->session->set_userdata('logged_in', $sess_array);
				redirect('dashboard' , 'refresh');
			}
		if (count($email2) == 0 ){	
		function autouser($tabel2, $kolom2, $lebar2=0, $awalan2='')
					{
						$query2="select $kolom2 from $tabel2 order by $kolom2 desc limit 1";
						$hasil2=mysql_query($query2);
						$jumlahrecord2 = mysql_num_rows($hasil2);
						if($jumlahrecord2 == 0)
							$nomor2=1;
						else
						{
							$row2=mysql_fetch_array($hasil2);
							$nomor2=intval(substr($row2[0],strlen($awalan2)))+1;
						}
						if($lebar2>0)
							$angka2 = $awalan2.str_pad($nomor2,$lebar2,"0",STR_PAD_LEFT);
						else
							$angka2 = $awalan2.$nomor2;
						return $angka2;
					}
		$uid = autouser("ts_user","uid",5,"UAP");
		$data = array(
		   'fbid' => $fbid ,
		   'fullname' => $fullname ,
		   //'email' => $email1 ,
		   'panggilan' => $fname,
		   'uid' => $uid,
		   'join_date' => date('F j, Y, g:i a'),
		);
		$this->db->insert('ts_user', $data);	 
		$sess_array = array();		
			//foreach($result as $row)
		$sess_array = array(	
					'uid' => $uid,			 
					 //'email' => $email1,
					 'fullname' => $fullname
				   );
		$this->session->set_userdata('logged_in', $sess_array);
		redirect('/dashboard' , 'refresh');		
		}
	}
	
}
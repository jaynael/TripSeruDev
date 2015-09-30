<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 
Class order_m extends CI_Model{
	public function __construct(){
		parent::__construct();
		//$this->load->helper('url');
		$this->load->database();
	}
	public function ordercount (){
		$data = $this->db->get_where('ts_order',array('stat'=>'pending'),10);
		$return['results'] = $data->result();
		$return['rows'] = $this->db->query('SELECT FOUND_ROWS() count;')->row()->count;
		//var_dump($return['rows']);
		return $return;		
	}
	public function insert (){
		$triporder = mysql_real_escape_string($_POST['triporder']);
		$namadestinasi = mysql_real_escape_string($_POST['namadestinasi']);
		$uidorder  = mysql_real_escape_string($_POST['uidorder']); 
		$berangkat  = mysql_real_escape_string($_POST['berangkat']);
		$hargades = mysql_real_escape_string($_POST['hargades']);
		$pax  = mysql_real_escape_string($_POST['pax']);
		$email  = mysql_real_escape_string($_POST['email']);
		$totalbayar = mysql_real_escape_string($_POST['totalbayar']);
		$now = date("F j, Y, g:i a");		
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
		$ordid = autonumber("ts_order","ordid",5,"ord");		
		$data = array(
		   'ordid' => $ordid ,
		   'triporder' => $triporder ,
		   'namadestinasi' => $namadestinasi ,
		   'uidorder' => $uidorder,
		   'berangkat' => $berangkat ,
		   'hargades' => $hargades ,
		   'jumlah' => $pax,
		   'email'=> $email,
		   'totalbayar' => $totalbayar,
		   'waktu' => $now,
		   'stat' => 'pending',
		);
		$this->db->insert('ts_order', $data);		
	}
}
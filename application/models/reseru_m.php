<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 

Class Reseru_m extends CI_Model{
	public function __construct(){
		parent::__construct();
		//$this->load->helper('url');
		$this->load->database();
	}
	public function inserttrip (){
		$tripidser = mysql_real_escape_string($_POST['tripidser']);
		$uidser = mysql_real_escape_string($_POST['uidser']);
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
		$resid = autonumber("ts_reseru","resid",7,"res");		
		$data = array(
		   'resid' => $resid ,
		   'tripidser' => $tripidser ,
		   'uidser' => $uidser ,
		   'type' => 'trip',
		   'waktu' => $now 
		);
		$this->db->insert('ts_reseru', $data);		
	}
}
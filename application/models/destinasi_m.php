<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 
Class Destinasi_m extends CI_Model{
	public function __construct(){
		parent::__construct();
		//$this->load->helper('url');
		$this->load->database();
	}	
	public function destinasicount (){
		$data = $this->db->get('ts_destinasi');
		$return['results'] = $data->result();
		$return['rows'] = $this->db->query('SELECT FOUND_ROWS() count;')->row()->count;
		//var_dump($return['rows']);
		return $return;		
	}
	//destinasi on page destinasi
	public function getdestinasinew(){
		$this->db->order_by('tripid','desc');
		//$this->db->join('ts_user', 'ts_story.uidsto = ts_user.uid');
		$query = $this->db->get_where('ts_destinasi',array(),25);		
		//var_dump($query);
		return $query->result_array();		
	}
	//destinasi on page home
	public function getdestinasinewhome(){		
			$time = date("Y/m/d");
			$this->db->select('*');
			$this->db->from('ts_destinasi');
			$this->db->where('date >=', $time);
			$this->db->order_by('date','asc');
			$this->db->limit(3);
			$query = $this->db->get();
			return $query->result_array();			
	}
	public function nextdestinasi(){
			$time = date("Y/m/d");
			$this->db->select('*');
			$this->db->from('ts_destinasi');
			$this->db->where('date >', $time);
			$this->db->order_by('date','asc');
			$this->db->limit(1);                                        
			$query = $this->db->get();
			//var_dump($query);
			return $query->result_array();
	}
	public function hotdestinasi(){
			$time = date("Y/m/d");
			$this->db->select('*');
			$this->db->from('ts_destinasi');
			$this->db->where('hotoffer',1);
			$this->db->where('date >', $time);
			$this->db->order_by('date','asc');
			$this->db->limit(1);                                        
			$query = $this->db->get();
			//var_dump($query);
			return $query->result_array();
	}
	//d
	//destinasi on user dashboard
	public function getdestinasinewrand (){
		$time = date("y/d/m");
		$this->db->select('*');
		$this->db->from('ts_destinasi');
		$this->db->where('date >', $time);	
		$this->db->order_by('date','RANDOM');
		$this->db->limit(1);
		$query = $this->db->get();		
		//var_dump($query);
		return $query->result_array();		
	}
	public function listdestinasi (){
		$this->db->order_by('tripid','desc');
		$query = $this->db->get_where('ts_destinasi');		
		//var_dump($query);
		return $query->result_array();		
	}
	
	//single destinasi data
	public function getdestinasi($tripid){
		$query = $this->db->get_where('ts_destinasi', array('tripid' => $tripid));		
		return $query->row_array();
	}
	public function update($tripid){
		$namadestinasi = mysql_real_escape_string($_POST['namadestinasi']);		
		$harga = mysql_real_escape_string($_POST['harga']);
		$lama = mysql_real_escape_string($_POST['lama']);
		$tgl = mysql_real_escape_string($_POST['tgl']);
		$bulan = mysql_real_escape_string($_POST['bulan']);
		$tahun = mysql_real_escape_string($_POST['tahun']);
		$kota  = mysql_real_escape_string($_POST['kota']);
		$quota  = mysql_real_escape_string($_POST['quota']);
		$ittinery = htmlspecialchars($_POST['ittinery']);
		$date  = mysql_real_escape_string($_POST['date']);
		$next  = mysql_real_escape_string($_POST['next']);
		$hot = mysql_real_escape_string($_POST['hot']);
		$data = array(
		   'destinasi' => $namadestinasi ,
		   'harga' =>$harga ,
		   'lama' => $lama ,
		   'tgl' => $tgl,
		   'bulan' => $bulan,
		   'tahun' => $tahun,
		   'kota' => $kota,
		   'quota' => $quota,
		   'ittineri' => $ittinery,
		   'date' => $date,
		   'nexttrip' => $next,
		   'hotoffer' => $hot,
		   
		   //'pic' => $filename,
		);
		$this->db->where('tripid', $tripid);
		$this->db->update('ts_destinasi', $data);
	}
    public function insert($filename){
		$namadestinasi = mysql_real_escape_string($_POST['namadestinasi']);
		$slug = url_title($this->input->post('namadestinasi'), 'dash', TRUE);		
		$harga = mysql_real_escape_string($_POST['harga']);
		$lama = mysql_real_escape_string($_POST['lama']);
		$tgl = mysql_real_escape_string($_POST['tgl']);
		$bulan = mysql_real_escape_string($_POST['bulan']);
		$tahun = mysql_real_escape_string($_POST['tahun']);
		$kota  = mysql_real_escape_string($_POST['kota']);
		$ittinery = htmlspecialchars($_POST['ittinery']);
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
		$tripid = autonumber("ts_destinasi","tripid",5,"dest");		
		$data = array(
		   'tripid' => $tripid,
		   'destinasi' => $namadestinasi ,
		   'slug' => $slug,
		   'harga' =>$harga ,
		   'lama' => $lama ,
		   'tgl' => $tgl,
		   'bulan' => $bulan,
		   'tahun' => $tahun,
		   'kota' => $kota,
		   'ittineri' => $ittinery,
		   'pic' => $filename,
		);
		$this->db->insert('ts_destinasi', $data);		
	}
}
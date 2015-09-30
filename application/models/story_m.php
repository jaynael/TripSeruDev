<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 
Class Story_m extends CI_Model{
	public function __construct(){
		parent::__construct();
		//$this->load->helper('url');
		$this->load->database();
	}	
	public function getstorynew (){
		$this->db->order_by('stoid','desc');
		$this->db->join('ts_user', 'ts_story.uidsto = ts_user.uid');
		$this->db->limit(3);	
		$query = $this->db->get_where('ts_story',array());	
		
			
		//var_dump($query);
		return $query->result_array();		
	}
	public function liststory (){
		$this->db->order_by('stoid','desc');
		$this->db->join('ts_user', 'ts_story.uidsto = ts_user.uid');
		$query = $this->db->get_where('ts_story');		
		//var_dump($query);
		return $query->result_array();		
	}
	public function storycount (){
		$data = $this->db->get('ts_story');
		$return['results'] = $data->result();
		$return['rows'] = $this->db->query('SELECT FOUND_ROWS() count;')->row()->count;
		//var_dump($return['rows']);
		return $return;		
	}	
	//single story data
	public function getstory($stoid){
		$this->db->join('ts_user', 'ts_story.uidsto = ts_user.uid');
		$query = $this->db->get_where('ts_story', array('stoid' => $stoid));		
		return $query->row_array();
	}
	//get my story data
	public function getmystory($uid){
		$this->db->join('ts_user', 'ts_story.uidsto = ts_user.uid');
		$query = $this->db->get_where('ts_story', array('uidsto' => $uid));		
		return $query->result_array();
	}
	public function getstoryhome (){
		$this->db->order_by('stoid','desc');
		$this->db->join('ts_user', 'ts_story.uidsto = ts_user.uid');
		$query = $this->db->get_where('ts_story',array(),10);		
		//var_dump($query);
		return $query->result_array();		
	}
	
	public function insert (){
		$uid = mysql_real_escape_string($_POST['uid']);
		$slug = url_title($this->input->post('judul'), 'dash', TRUE);
		
		$judul = mysql_real_escape_string($_POST['judul']);
		$deskripsi  = htmlspecialchars($_POST['deskripsi']); 
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
		$stoid = autonumber("ts_story","stoid",5,"STO");
		$tags= explode(',', strtolower($_POST['tag']));
		for ($x = 0; $x < count($tags); $x++) {
			//Add new tag if not exist
			$queryt = "INSERT INTO `ts_tag` (`tag_id`, `tag`) VALUES ('', '" . $tags[$x] . "')";
			$maket = mysql_query($queryt);		
			//Get tag id
			$tag_id = mysql_insert_id();	
			//Add the relational Link, now this is not working, beacasue this is only draft
			$querytm = "insert into `ts_tagmap` (`id`, `tag_id`, `articleid`) VALUES ('',  '$tag_id', '$stoid')";
			$maketm = mysql_query($querytm);
		}
		$data = array(
		   'uidsto' => $uid ,
		   'stoid' => $stoid,
		   'judul' => $judul ,
		   'deskripsi' => $deskripsi ,
		   'slug' => $slug,
		   'tgl' => $now,
		);
		$this->db->insert('ts_story', $data);		
	}
}
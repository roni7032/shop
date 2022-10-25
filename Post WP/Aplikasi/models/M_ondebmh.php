<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_ondebmh extends CI_Model{
	
	function __construct(){
		parent::__construct();
	}
	
	public function getAll($op=null){
		$tabel='main_ondebmh';
		
		switch($op){
			case 'jml':
				return $this->db->get($tabel)->num_rows();
				break;
			case 'w_pesan_ondebmh':
				$this->db->select($tabel.'.*,j.status as status, j.tgl as p_tgl');
				$this->db->join('pesan_ondebmh j',$tabel.'.id=j.id_main','left');
				return $this->db->get($tabel)->result();
				break;
			default:
				return $this->db->get($tabel)->result();
				break;
		}
	}
	
	public function getOne($id){
		$tabel='urutan';
		
		$this->db->select($tabel.'.*, p.id as id_pesan, p.isi_pesan as isi_pesan');
		$this->db->join('pesan p',$tabel.'.id_pesan=p.id');
		$this->db->join('tema_pesan tp',$tabel.'.id_tema_pesan=tp.id');
		if(is_array($id)){
			if($id[0]=='jml'){
				return $this->db->get_where($tabel,$id[1])->num_rows();
			}elseif($id[0]=='all'){
				$this->db->order_by('urutan','ASC');
				return $this->db->get_where($tabel,$id[1])->result();
			}else{
				return $this->db->get_where($tabel,$id[1])->row();
			}
		}else{
			return $this->db->get_where($tabel,array('id_tema_pesan'=>$id))->row();
		}
	}
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_general extends CI_Model{
	
	function __construct(){
		parent::__construct();
	}
	
	function addData($table, $dtsave){
		$this->db->insert($table, $dtsave);
		return $this->db->insert_id();
	}

	function addMData($table, $dtsave){
		return $this->db->insert_batch($table, $dtsave);
	}
	
	function updateData($table, $dtsave, $id=null){
		if(is_array($id)){
			$this->db->where($id);
		}else{
			if($id!=null) $this->db->where('id',$id);
		}
		return $this->db->update($table, $dtsave);
	}
	
	function deldata($table, $id){
		if(is_array($id)){
			$this->db->where($id);
		}else{
			$this->db->where('id',$id);
		}
		$this->db->delete($table);
	}
	
	function getEdit($table, $id, $select="*", $sort=null){
		$this->db->select($select);
		if($sort != null) $this->db->order_by($sort[0], $sort[1]);
		if(is_array($id)){
			$arr=$id;
		}else{
			$arr=array('id'=>$id);
		}
		return $this->db->get_where($table,$arr)->row();
	}
	
	function getData($table, $select="*", $sort=array('id','DESC')){
		$this->db->select($select);
		$this->db->order_by($sort[0], $sort[1]);
		return $this->db->get($table)->result();
	}
	
	function getDataWhere($table, $where, $op=null, $sort=null){
		if($sort!=null) $this->db->order_by($sort[0], $sort[1]);
		switch($op){
			case "in":
				$this->db->where_in($where[0],$where[1]);
				break;
			break;
			default:
				$this->db->where($where);
				break;
		}
		return $this->db->get($table)->result();
	}
	
	function getCountW($table,$where){
		return $this->db->get_where($table,$where)->num_rows();
	}
	/*--------Custom---------------*/
	
	public function makeCode($table,$prefix,$key){
		do{
		$length = $prefix;
		$randomletter = substr(str_shuffle("abcdefghijklmnopqrstuvwxyz1234567890"), 0, $length);
		$username=$randomletter.mt_rand(10,100);
		$a=$this->getCountW($table,array($key => $username));
		}while($a > 0);
		
		return $username;		
	}
	
	public function getQuery($sql){
		return $this->db->query($sql)->result();
	}
	
	public function getQuery2($sql){
		return $this->db->query($sql);
	}
	
	public function getTables(){
		return $this->db->list_tables();
	}
	
	public function getFields($tabel){
		return $this->db->list_fields($tabel);
	}
}
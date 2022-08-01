<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jabatan extends CI_Controller {

	function __construct(){
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');
	}
	
	public function index(){
		$dt=array(
			'judul'=>'Jabatan',
			'breadcrumb'=>array(
				array(anchor('','Home'),''),
				array('Jabatan','class="active"')
			),
			'data'=>$this->M_general->getData('jabatan')
		);

		$dtmenu['menu'][0]='jabatan';
		$dtmenu['menu'][1]='jabatan_1';

		$dtmenu['role']=0;
		$lempar['isi']=view_one('jabatan/all',$dt);
		$lempar['menu']=view_one('menu/menu',$dtmenu);
		$this->load->view('template/blog_plain',$lempar);
	}
	
	public function action(){
		$ac=$this->input->get('ac');
		$id=$this->input->get('id');
		// $table=$this->input->get('table');
		switch($ac){
			case 'add':
				$dt=array(
					'judul'=>'Jabatan',
					'ac'=>$ac,
					'breadcrumb'=>array(
						array(anchor('','Home'),''),
						array(anchor('jabatan',' Jabatan'),''),
						array('Tambah','class="active"')
					),
				);
				$dtmenu['menu']=array('jabatan','jabatan_2');
				$dtmenu['role']=0;
				$lempar['isi']=view_one('jabatan/add',$dt);
				$lempar['menu']=view_one('menu/menu',$dtmenu);
				$this->load->view('template/blog_editor',$lempar);
			break;
			case 'edit':
				$dt=array(
					'judul'=>'Jabatan',
					'ac'=>$ac,
					'id'=>$id,
					'breadcrumb'=>array(
						array(anchor('','Home'),''),
						array(anchor('jabatan',' Jabatan'),''),
						array('Ubah','class="active"')
					),						
					'dtedit'=>$this->M_general->getEdit('jabatan',$id),
				);
				$dtmenu['menu']=array('jabatan','jabatan_1');
				$dtmenu['role']=0;
				$lempar['isi']=view_one('jabatan/add',$dt);
				$lempar['menu']=view_one('menu/menu',$dtmenu);
				$this->load->view('template/blog_editor',$lempar);
			break;
			case 'delete':
				$this->M_general->deldata('menu',$id);
				redirect('welcome/menu');
			break;
			case 'set_sudah':
				$dtedit=$this->M_general->getEdit('jabatan',$id);
				$this->M_general->updateData('jabatan',array('sudah'=>'yes'),$id);
				redirect($dtedit->link);
			break;
			default:
				$dt=array(
					'judul'=>'Menu',
					'breadcrumb'=>array(
						array('menu','class="active"')
					),
					'data'=>$this->M_general->getData('menu')
				);
				
				$dtmenu['menu'][0]='menu';
				$dtmenu['menu'][1]='menu_1';
				
				$dtmenu['role']=0;
				$lempar['isi']=view_one('menu/all',$dt);
				$lempar['menu']=view_one('menu/menu',$dtmenu);
				$this->load->view('template/blog_editor',$lempar);
			break;
		}
	}
	
	public function simpan(){
		$ac=$this->input->post('ac');
		$table=($this->input->post('table')) ? $this->input->post('table'):$this->input->get('table');
		$id=$this->input->post('id');
		
		switch($ac){
			case 'delete':
				$this->M_general->deldata($table,array('id'=>$id));
			break;
			case 'add':
				$dtsave=array(
					'id' => $this->input->post('id'),
					'nama' => $this->input->post('nama'),
					'isi' => $this->input->post('isi'),
				);
				$id=$this->M_general->addData($table,$dtsave);
				redirect($table.'/action?ac=edit&id='.$id);
			break;
			case 'edit':
				$dtsave=array(
					'id' => $this->input->post('id'),
					'nama' => $this->input->post('nama'),
					'isi' => $this->input->post('isi'),
				);
				$this->M_general->updateData($table,$dtsave,$id);
			break;
			default:
				
			break;
		}
		redirect($table);
	}
}
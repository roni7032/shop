<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bermacam extends CI_Controller {

	function __construct(){
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');
	}
	
	public function index(){
		$dt=array(
			'judul'=>'Bermacam',
			'breadcrumb'=>array(
				array(anchor('','Home'),''),
				array('bermacam','class="active"')
			),
			'data'=>$this->M_general->getData('bermacam')
		);

		$dtmenu['menu'][0]='bermacam';
		$dtmenu['menu'][1]='Bermacam_1';

		$dtmenu['role']=0;
		$lempar['isi']=view_one('bermacam/all',$dt);
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
					'judul'=>'Bermacam',
					'ac'=>$ac,
					'breadcrumb'=>array(
						array(anchor('','Home'),''),
						array(anchor('bermacam',' Bermacam'),''),
						array('Tambah','class="active"')
					),
				);
				$dtmenu['menu']=array('bermacam','Bermacam_2');
				$dtmenu['role']=0;
				$lempar['isi']=view_one('bermacam/add',$dt);
				$lempar['menu']=view_one('menu/menu',$dtmenu);
				$this->load->view('template/blog_plain',$lempar);
			break;
			case 'edit':
				$dt=array(
					'judul'=>'Bermacam',
					'ac'=>$ac,
					'id'=>$id,
					'breadcrumb'=>array(
						array(anchor('','Home'),''),
						array(anchor('bermacam',' Bermacam'),''),
						array('Ubah','class="active"')
					),						
					'dtedit'=>$this->M_general->getEdit('bermacam',$id),
				);
				$dtmenu['menu']=array('bermacam','Bermacam_1');
				$dtmenu['role']=0;
				$lempar['isi']=view_one('bermacam/add',$dt);
				$lempar['menu']=view_one('menu/menu',$dtmenu);
				$this->load->view('template/blog_plain',$lempar);
			break;
			case 'delete':
				$this->M_general->deldata('menu',$id);
				redirect('welcome/menu');
			break;
			case 'set_sudah':
				$dtedit=$this->M_general->getEdit('bermacam',$id);
				$this->M_general->updateData('bermacam',array('sudah'=>'yes'),$id);
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
					'jml_aktif' => $this->input->post('jml_aktif'),
					'jml_off' => $this->input->post('jml_off'),
					'edisi' => $this->input->post('edisi'),
				);
				$id=$this->M_general->addData($table,$dtsave);
			break;
			case 'edit':
				$dtsave=array(
					'jml_aktif' => $this->input->post('jml_aktif'),
					'jml_off' => $this->input->post('jml_off'),
					'edisi' => $this->input->post('edisi'),
					'terima_pembayaran' => $this->input->post('terima_pembayaran'),
					'tgl_terima_pembayaran' => ($this->input->post('tgl_terima_pembayaran')!=='') ? date('Y-m-d',strtotime($this->input->post('tgl_terima_pembayaran'))):null,
					'posisi_id_lwp' => $this->input->post('posisi_id_lwp'),
				);
				$this->M_general->updateData($table,$dtsave,$id);
			break;
			default:
				
			break;
		}
		redirect($table);
	}
}
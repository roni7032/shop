<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ondebmh extends CI_Controller {

	function __construct(){
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');
		
		$this->load->model('M_ondebmh');
	}
	
	public function index(){
		$dt=array(
			'judul'=>'BMH',
			'breadcrumb'=>array(
				array(anchor('','Home'),''),
				array('BMH','class="active"')
			),
			'data'=>$this->M_ondebmh->getAll('w_pesan_ondebmh')
		);

		$dtmenu['menu']=array(
			'bmh',
			'bmh_1'
		);

		$dtmenu['role']=0;
		$lempar['isi']=view_one('Ondebmh/all',$dt);
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
					'judul'=>'Ondebmh',
					'ac'=>$ac,
					'breadcrumb'=>array(
						array(anchor('','Home'),''),
						array(anchor('Ondebmh',' Ondebmh'),''),
						array('Tambah','class="active"')
					),
				);
				$dtmenu['menu']=array('Ondebmh','Ondebmh_2');
				$dtmenu['role']=0;
				$lempar['isi']=view_one('Ondebmh/add',$dt);
				$lempar['menu']=view_one('menu/menu',$dtmenu);
				$this->load->view('template/blog_plain',$lempar);
			break;
			case 'edit':
				$dt=array(
					'judul'=>'Ondebmh',
					'ac'=>$ac,
					'id'=>$id,
					'breadcrumb'=>array(
						array(anchor('','Home'),''),
						array(anchor('Ondebmh',' Ondebmh'),''),
						array('Ubah','class="active"')
					),						
					'dtedit'=>$this->M_general->getEdit('Ondebmh',$id),
				);
				$dtmenu['menu']=array('Ondebmh','Ondebmh_1');
				$dtmenu['role']=0;
				$lempar['isi']=view_one('Ondebmh/add',$dt);
				$lempar['menu']=view_one('menu/menu',$dtmenu);
				$this->load->view('template/blog_plain',$lempar);
			break;
			case 'delete':
				$this->M_general->deldata('menu',$id);
				redirect('welcome/menu');
			break;
			case 'pesan':
				$dt=array(
					'judul'=>'Ondebmh',
					'ac'=>$ac,
					'id'=>$id,
					'breadcrumb'=>array(
						array(anchor('','Home'),''),
						array(anchor('Ondebmh',' Ondebmh'),''),
						array('Pesan','class="active"')
					),
					'data'=>$this->M_general->getDataWhere('pesan_ondebmh',array('id_main'=>$id),'',array('create_at','DESC'))
				);
				$dtmenu['menu']=array('Ondebmh','Ondebmh_1');
				$dtmenu['role']=0;
				$lempar['isi']=view_one('Ondebmh/pesan',$dt);
				$lempar['js']=view_one('Ondebmh/js',array('for'=>'add'));
				$lempar['menu']=view_one('menu/menu',$dtmenu);
				$this->load->view('template/blog_editor',$lempar);
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
			case 'pesan':
				$dtsave=array(
					'code' => $this->M_general->makeCode('pesan_ondebmh',10,'code'),
					'id_main' => $this->input->post('id_main'),
					'isi_pesan' => $this->input->post('isi_pesan'),
					'status' => $this->input->post('status'),
					'tgl' => ($this->input->post('tgl')!=='') ? date('Y-m-d',strtotime($this->input->post('tgl'))):null,
					'update_at' => date('Y-m-d h:i:s'),
				);
				$id=$this->M_general->addData($table,$dtsave);
				
				redirect('ondebmh/action?ac=pesan&id='.$dtsave['id_main']);
			break;
			default:
				
			break;
		}
		redirect($table);
	}
}
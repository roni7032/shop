<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Suarrid extends CI_Controller {

	function __construct(){
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');
	}
	
	public function index(){
		$dt=array(
			'judul'=>'Suarr.id',
			'breadcrumb'=>array(
				array(anchor('','Home'),''),
				array('suarrid','class="active"')
			),
			'data'=>$this->M_general->getDataWhere('suarrid',array('done'=>0),'',array('id','DESC'))
		);

		$dtmenu['menu'][0]='suarrid';
		$dtmenu['menu'][1]='suarrid_1';

		$dtmenu['role']=0;
		$lempar['isi']=view_one('suarrid/all',$dt);
		$lempar['js']=view_one('suarrid/js',array('for'=>''));
		$lempar['menu']=view_one('menu/menu',$dtmenu);
		$this->load->view('template/blog_plain',$lempar);
	}
	
	public function isdone(){
		$dt=array(
			'judul'=>'Suarr.id',
			'breadcrumb'=>array(
				array(anchor('','Home'),''),
				array('suarrid','class="active"')
			),
			'data'=>$this->M_general->getData('suarrid')
		);

		$dtmenu['menu'][0]='suarrid';
		$dtmenu['menu'][1]='suarrid_2';

		$dtmenu['role']=0;
		$lempar['isi']=view_one('suarrid/all',$dt);
		$lempar['js']=view_one('suarrid/js',array('for'=>''));
		$lempar['menu']=view_one('menu/menu',$dtmenu);
		$this->load->view('template/blog_plain',$lempar);
	}
	
	public function action(){
		$ac=$this->input->get('ac');
		$id=$this->input->get('id');
		$table=$this->input->get('table');
		switch($ac){
			case 'add':
				$dt=array(
					'judul'=>'suarrid',
					'ac'=>$ac,
					'breadcrumb'=>array(
						array(anchor('','Home'),''),
						array(anchor('suarrid',' suarrid'),''),
						array('Tambah','class="active"')
					),
				);
				$dtmenu['menu']=array('suarrid','suarrid_3');
				$dtmenu['role']=0;
				$lempar['isi']=view_one('suarrid/add',$dt);
				$lempar['menu']=view_one('menu/menu',$dtmenu);
				$this->load->view('template/blog_editor',$lempar);
			break;
			case 'edit':
				$dt=array(
					'judul'=>'suarrid',
					'ac'=>$ac,
					'id'=>$id,
					'breadcrumb'=>array(
						array(anchor('','Home'),''),
						array(anchor('suarrid',' suarrid'),''),
						array('Ubah','class="active"')
					),						
					'dtedit'=>$this->M_general->getEdit('suarrid',$id),
					'desc_1'=>$this->helpDes(),
				);
				$dtmenu['menu']=array('suarrid','suarrid_3');
				$dtmenu['role']=0;
				$lempar['isi']=view_one('suarrid/add',$dt);
				$lempar['js']=view_one('suarrid/js',array('for'=>'edit'));
				$lempar['menu']=view_one('menu/menu',$dtmenu);
				$this->load->view('template/blog_editor',$lempar);
			break;
			case 'edit_2':
				$dt=array(
					'judul'=>'suarrid',
					'ac'=>$ac,
					'id'=>$id,
					'breadcrumb'=>array(
						array(anchor('','Home'),''),
						array(anchor('suarrid',' suarrid'),''),
						array('Ubah','class="active"')
					),						
					'dtedit'=>$this->M_general->getEdit('suarrid',$id)
				);
				$dtmenu['menu']=array('suarrid','suarrid_3');
				$dtmenu['role']=0;
				$lempar['isi']=view_one('suarrid/add',$dt);
				$lempar['js']=view_one('suarrid/js',array('for'=>'add'));
				$lempar['menu']=view_one('menu/menu',$dtmenu);
				$this->load->view('template/blog_editor',$lempar);
			break;
			case 'xactive':
				$dtsave=array(
					'url_preview' => 'OFF',
					'url_asli_preview' => $this->input->get('url_asli_preview')
				);
				$this->M_general->updateData('suarrid',$dtsave,$id);
				redirect('suarrid/action?ac=edit&id='.($id-1));
			break;
			case 'on_off':
				$set=$this->input->get('set');
				
				$dtsave=array(
					'status' => $set,
				);
				$this->M_general->updateData('suarrid',$dtsave,$id);
				redirect('suarrid');
			break;
			case 'delete':
				$this->M_general->deldata('suarrid',$id);
				redirect('suarrid');
			break;
			case 'rekap':
				$laporan_get=explode(',',$this->input->get('laporan'));
				
				$dt=array(
					'judul'=>'suarrid',
					'for'=>'laporan',
					'breadcrumb'=>array(
						array(anchor('','Home'),''),
						array(anchor('suarrid',' Semua'),''),
						array('Rekap','class="active"')
					),						
					'data'=>$this->M_general->getDataWhere('suarrid',array('id',$laporan_get),'in'),
				);
				$dtmenu['menu']=array('suarrid','suarrid_3');
				$dtmenu['role']=0;
				$lempar['isi']=view_one('suarrid/rekap',$dt);
				$lempar['menu']=view_one('menu/menu',$dtmenu);
				$this->load->view('template/blog_plain',$lempar);
			break;
			case 'die':
				$laporan_get=explode(',',$this->input->get('laporan'));
				
				$dt=array(
					'judul'=>'suarrid',
					'for'=>'die',
					'breadcrumb'=>array(
						array(anchor('','Home'),''),
						array(anchor('suarrid',' Semua'),''),
						array('Rekap','class="active"')
					),						
					'data'=>$this->M_general->getDataWhere('suarrid',array('id',$laporan_get),'in'),
				);
				$dtmenu['menu']=array('suarrid','suarrid_3');
				$dtmenu['role']=0;
				$lempar['isi']=view_one('suarrid/rekap',$dt);
				$lempar['menu']=view_one('menu/menu',$dtmenu);
				$this->load->view('template/blog_plain',$lempar);
			break;
			case 'level_1':
				$dt=array(
					'judul'=>'suarrid',
					'for'=>'level_1',
					'id'=>$id,
					'breadcrumb'=>array(
						array(anchor('','Home'),''),
						array(anchor('suarrid',' suarrid'),''),
						array('Ubah','class="active"')
					),						
					'dtedit'=>$this->M_general->getEdit('suarrid',$id),
				);
				$dtmenu['menu']=array('suarrid','suarrid_3');
				$dtmenu['role']=0;
				$lempar['isi']=view_one('suarrid/rekap',$dt);
				$lempar['menu']=view_one('menu/menu',$dtmenu);
				$this->load->view('template/blog_plain',$lempar);
			break;
			case 'level_2':
				$dt=array(
					'judul'=>'suarrid',
					'for'=>'level_2',
					'id'=>$id,
					'breadcrumb'=>array(
						array(anchor('','Home'),''),
						array(anchor('suarrid',' suarrid'),''),
						array('Ubah','class="active"')
					),						
					'dtedit'=>$this->M_general->getEdit('suarrid',$id),
					'desc_1'=>$this->helpDes(),
				);
				$dtmenu['menu']=array('suarrid','suarrid_3');
				$dtmenu['role']=0;
				$lempar['isi']=view_one('suarrid/rekap',$dt);
				$lempar['menu']=view_one('menu/menu',$dtmenu);
				$this->load->view('template/blog_plain',$lempar);
			break;
			case 'level_3':
				$dt=array(
					'judul'=>'suarrid',
					'for'=>'level_3',
					'id'=>$id,
					'breadcrumb'=>array(
						array(anchor('','Home'),''),
						array(anchor('suarrid',' suarrid'),''),
						array('Ubah','class="active"')
					),						
					'dtedit'=>$this->M_general->getEdit('suarrid',$id),
				);
				$dtmenu['menu']=array('suarrid','suarrid_3');
				$dtmenu['role']=0;
				$lempar['isi']=view_one('suarrid/rekap',$dt);
				$lempar['menu']=view_one('menu/menu',$dtmenu);
				$this->load->view('template/blog_plain',$lempar);
			break;
			case 'level_5':
				$dt=array(
					'judul'=>'suarrid',
					'for'=>'level_5',
					'id'=>$id,
					'breadcrumb'=>array(
						array(anchor('','Home'),''),
						array(anchor('suarrid',' suarrid'),''),
						array('Ubah','class="active"')
					),						
					'dtedit'=>$this->M_general->getEdit('suarrid',$id),
				);
				$dtmenu['menu']=array('suarrid','suarrid_3');
				$dtmenu['role']=0;
				$lempar['isi']=view_one('suarrid/rekap',$dt);
				$lempar['menu']=view_one('menu/menu',$dtmenu);
				$this->load->view('template/blog_plain',$lempar);
			break;
			case 'level_4':
				$dt=array(
					'judul'=>'suarrid',
					'for'=>'level_4',
					'id'=>$id,
					'breadcrumb'=>array(
						array(anchor('','Home'),''),
						array(anchor('suarrid',' suarrid'),''),
						array('Ubah','class="active"')
					),						
					'dtedit'=>$this->M_general->getEdit('suarrid',$id),
				);
				$dtmenu['menu']=array('suarrid','suarrid_3');
				$dtmenu['role']=0;
				$lempar['isi']=view_one('suarrid/rekap',$dt);
				$lempar['menu']=view_one('menu/menu',$dtmenu);
				$this->load->view('template/blog_plain',$lempar);
			break;
			case 'level_6':
				$dt=array(
					'judul'=>'suarrid',
					'for'=>'level_6',
					'id'=>$id,
					'breadcrumb'=>array(
						array(anchor('','Home'),''),
						array(anchor('suarrid',' suarrid'),''),
						array('Ubah','class="active"')
					),						
					'dtedit'=>$this->M_general->getEdit('suarrid',$id),
				);
				$dtmenu['menu']=array('suarrid','suarrid_3');
				$dtmenu['role']=0;
				$lempar['isi']=view_one('suarrid/rekap',$dt);
				$lempar['menu']=view_one('menu/menu',$dtmenu);
				$this->load->view('template/blog_plain',$lempar);
			break;
			case 'level_7':
				$dt=array(
					'judul'=>'suarrid',
					'for'=>'level_7',
					'id'=>$id,
					'breadcrumb'=>array(
						array(anchor('','Home'),''),
						array(anchor('suarrid',' suarrid'),''),
						array('Ubah','class="active"')
					),						
					'dtedit'=>$this->M_general->getEdit('suarrid',$id),
				);
				$dtmenu['menu']=array('suarrid','suarrid_3');
				$dtmenu['role']=0;
				$lempar['isi']=view_one('suarrid/rekap',$dt);
				$lempar['menu']=view_one('menu/menu',$dtmenu);
				$this->load->view('template/blog_plain',$lempar);
			break;
			case 'level_8':
				$dt=array(
					'judul'=>'suarrid',
					'for'=>'level_8',
					'id'=>$id,
					'breadcrumb'=>array(
						array(anchor('','Home'),''),
						array(anchor('suarrid',' suarrid'),''),
						array('Ubah','class="active"')
					),						
					'dtedit'=>$this->M_general->getEdit('suarrid',$id),
				);
				$dtmenu['menu']=array('suarrid','suarrid_3');
				$dtmenu['role']=0;
				$lempar['isi']=view_one('suarrid/rekap',$dt);
				$lempar['menu']=view_one('menu/menu',$dtmenu);
				$this->load->view('template/blog_plain',$lempar);
			break;
			case 'level_9':
				$dt=array(
					'judul'=>'suarrid',
					'for'=>'level_9',
					'id'=>$id,
					'breadcrumb'=>array(
						array(anchor('','Home'),''),
						array(anchor('suarrid',' suarrid'),''),
						array('Ubah','class="active"')
					),						
					'dtedit'=>$this->M_general->getEdit('suarrid',$id),
				);
				$dtmenu['menu']=array('suarrid','suarrid_3');
				$dtmenu['role']=0;
				$lempar['isi']=view_one('suarrid/rekap',$dt);
				$lempar['menu']=view_one('menu/menu',$dtmenu);
				$this->load->view('template/blog_plain',$lempar);
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
				$this->load->view('template/blog_plain',$lempar);
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
					'judul' => $judul,
					'isi' => $this->input->post('nama_gambar'),
					'link' => strtolower($this->input->post('link')),
					'tags' => $this->input->post('tags')
				);
				
				if($this->input->post('id')!=0) $dtsave['id']=$this->input->post('id');
				
				$id=$this->M_general->addData('suarrid',$dtsave);
				redirect('suarrid/action?ac=edit&id='.$id);
			break;
			case 'edit':
				$dtsave=array(
					'kat' => $this->input->post('kat'),
					'judul' => $this->input->post('judul'),
					'isi' => $this->input->post('isi'),
					'img' => strtolower($this->input->post('img')),
					'tags' => $this->input->post('tags')
				);
				$this->M_general->updateData('suarrid',$dtsave,$id);
				
				redirect($table.'/action?ac=level_1&id='.($id-1));
			break;
			case 'edit_1':
				$cari_url_x=array('https://www.closecrowds.com/');
				$ganti_url_x=array('/');
				$url_x=str_replace($cari_url_x,$ganti_url_x,$this->input->post('url_x'));
				$id=$this->input->post('id');
				$dtsave=array(
					'url' => $this->input->post('url'),
					'url_x' => $url_x
				);
				$this->M_general->updateData('suarrid',$dtsave,$id);
				redirect('suarrid/action?ac=edit&id='.$id);
			break;
			case 'edit_2':
							
				$dtsave=array(
					'kat' => $this->input->post('kat'),
					'judul' => $this->input->post('judul'),
					'isi' => $this->input->post('isi'),
					'img' => $this->input->post('img'),
					'tags' => $this->input->post('tags')
				);
				if($this->input->post('judul')==='OFF') $dtsave['done']=1;
				$this->M_general->updateData('suarrid',$dtsave,$id);
				
				redirect($table.'/action?ac=edit_2&id='.($id-1));
			break;
			case 'edit_3':
							
				$dtsave=array(
					'done' => 1
				);
				$this->M_general->updateData('suarrid',$dtsave,$id);
				
				redirect('suarrid/action?ac=level_1&id='.($id-1));
			break;
			default:
				
			break;
		}
		redirect($table);
	}
	
	private function helpDes(){
		$a='

<hr>

<h2>Instruction</h2>
<h3>How to Use Template Kits:</h3>
<ol>
 	<li>Install and Activate the "Envato Elements" plugin from Plugins &gt; Add New in WordPress</li>
 	<li>Download your themes file and Do not unzip</li>
 	<li>In WordPress, go to Elements &gt; Installed themes and click <strong>Upload Template Kit Zip File</strong>
<img class="alignnone size-medium wp-image-6132" src="https://www.closecrowds.com/wp-content/uploads/2022/07/Screenshot-on-2021-02-15-at-15_58_20-277x300.png" alt="" width="277" height="300"></li>
 	<li>Check for the orange banner at the top and click Install Requirements to load any plugins the themes uses
<img class="alignnone size-medium wp-image-6133" src="https://www.closecrowds.com/wp-content/uploads/2022/07/Screen-Shot-2020-05-12-at-2.29.56-pm-300x137.png" alt="" width="300" height="137"></li>
 	<li>Click import on the Global Kit Styles first</li>
 	<li>Click Import on one template at a time. These are stored in Elementor under Templates &gt; Saved Templates.</li>
 	<li>Go to Pages and create a new page and click Edit with Elementor</li>
 	<li>Click the gear icon at lower-left of the builder to view page settings and choose Elementor Full Width and hide page title
<img class="alignnone size-full wp-image-6134" src="https://www.closecrowds.com/wp-content/uploads/2022/07/dc35b439-1f58-4130-5613-003f62c7c6f4.jpg" alt="" width="286" height="166"></li>
 	<li>Click the gray folder icon to access My Templates tab and then Import the page you like to customize.
<img class="alignnone size-medium wp-image-6135" src="https://www.closecrowds.com/wp-content/uploads/2022/07/32d2168d-2706-4c8a-66e7-41376c273a1d-300x158.jpg" alt="" width="300" height="158">
<img class="alignnone size-medium wp-image-6136" src="https://www.closecrowds.com/wp-content/uploads/2022/07/Annotation-on-2021-08-13-at-12-23-52-300x82.png" alt="" width="300" height="82"></li>
</ol>
If you have Elementor Pro, headers and footers may be customized by clicking the menu icon at top-left of the builder and choosing Theme Builder.
<h3>Setup Global Header and Footer in ElementsKit</h3>
<ol>
 	<li>Import the header and footer template</li>
 	<li>Go to ElementsKit &gt; Header Footer and click Add New (if prompted with a wizard, you may click Next through it without taking any action)</li>
 	<li>Title the header, leave Entire Site selected and toggle Activation to On</li>
 	<li>Click the gray Edit Content button to load the builder</li>
 	<li>Click the gray folder icon and select the header template to import, select your menu in the nav element and click Update.</li>
 	<li>Repeat for Footer</li>
</ol>
<h3>Help &amp; Support</h3>
These instructions are for those of you who just want to download themes and install them yourself. Our basic service includes installing it to your domain and hosting. So please order our basic service and we will install it for you.';
		
		return $a;
	}
}

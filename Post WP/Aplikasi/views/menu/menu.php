<?php if($role==0): ?>
	<ul class="sidebar-menu" data-widget="tree">
	<li class="header">MAIN NAVIGATION</li>
	<li <?php echo (in_array('dash',$menu)) ? 'class="active"':''; ?>>
    	<a href="<?php echo site_url('pegawai/dashboard'); ?>">
        	<i class="fa fa-dashboard"></i> <span>Deshboard</span>
        </a>
    </li>
	<li class="treeview <?php echo (in_array('laporanwp',$menu)) ? 'active':''; ?>">
	  <a href="#"><i class="fa fa-dashboard"></i> <span>Laporan WP</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
	  <ul class="treeview-menu">
		<li <?php echo (in_array('laporanwp_1',$menu)) ? 'class="active"':''; ?> ><a href="<?php echo site_url('laporanwp'); ?>"><i class="fa fa-circle-o"></i> Semua data</a></li>
		<li <?php echo (in_array('laporanwp_2',$menu)) ? 'class="active"':''; ?> ><a href="<?php echo site_url('laporanwp/action?ac=add'); ?>"><i class="fa fa-circle-o"></i> Tambah</a></li>
	  </ul>
	</li>
	<li class="treeview <?php echo (in_array('jabatan',$menu)) ? 'active':''; ?>">
	  <a href="#"><i class="fa fa-dashboard"></i> <span>Jabatan</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
	  <ul class="treeview-menu">
		<li <?php echo (in_array('jabatan_1',$menu)) ? 'class="active"':''; ?>><a href="<?php echo site_url('jabatan'); ?>"><i class="fa fa-circle-o"></i> Semua data</a></li>
		<li <?php echo (in_array('jabatan_2',$menu)) ? 'class="active"':''; ?>><a href="<?php echo site_url('jabatan/action?ac=add'); ?>"><i class="fa fa-circle-o"></i> Tambah</a></li>
	  </ul>
	</li>
	<li class="treeview <?php echo (in_array('bmh',$menu)) ? 'active':''; ?>">
	  <a href="#"><i class="fa fa-dashboard"></i> <span>BMH</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
	  <ul class="treeview-menu">
		<li <?php echo (in_array('bmh_1',$menu)) ? 'class="active"':''; ?> ><a href="<?php echo site_url('ondebmh'); ?>"><i class="fa fa-circle-o"></i> Semua data</a></li>
		<li <?php echo (in_array('bmh_2',$menu)) ? 'class="active"':''; ?> ><a href="<?php echo site_url('ondebmh/action?ac=add'); ?>"><i class="fa fa-circle-o"></i> Tambah</a></li>
	  </ul>
	</li>
	<li class="treeview <?php echo (in_array('suarrid',$menu)) ? 'active':''; ?>">
	  <a href="#"><i class="fa fa-dashboard"></i> <span>suarrid</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
	  <ul class="treeview-menu">
		<li <?php echo (in_array('suarrid_1',$menu)) ? 'class="active"':''; ?> ><a href="<?php echo site_url('suarrid'); ?>"><i class="fa fa-circle-o"></i> Belum</a></li>
		<li <?php echo (in_array('suarrid_2',$menu)) ? 'class="active"':''; ?> ><a href="<?php echo site_url('suarrid/isdone'); ?>"><i class="fa fa-circle-o"></i> Semua Data</a></li>
		<li <?php echo (in_array('suarrid_3',$menu)) ? 'class="active"':''; ?> ><a href="<?php echo site_url('suarrid/action?ac=add'); ?>"><i class="fa fa-circle-o"></i> Tambah</a></li>
	  </ul>
	</li>
	<li class="treeview <?php echo (in_array('portalcibinong',$menu)) ? 'active':''; ?>">
	  <a href="#"><i class="fa fa-dashboard"></i> <span>Portal Cibinong</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
	  <ul class="treeview-menu">
		<li <?php echo (in_array('portalcibinong_1',$menu)) ? 'class="active"':''; ?> ><a href="<?php echo site_url('portalcibinong'); ?>"><i class="fa fa-circle-o"></i> Belum</a></li>
		<li <?php echo (in_array('portalcibinong_2',$menu)) ? 'class="active"':''; ?> ><a href="<?php echo site_url('portalcibinong/isdone'); ?>"><i class="fa fa-circle-o"></i> Semua Data</a></li>
		<li <?php echo (in_array('portalcibinong_3',$menu)) ? 'class="active"':''; ?> ><a href="<?php echo site_url('portalcibinong/action?ac=add'); ?>"><i class="fa fa-circle-o"></i> Tambah</a></li>
	  </ul>
	</li>
</ul>
<?php elseif($role==1): ?>
<ul class="sidebar-menu" data-widget="tree">
	<li class="header">MAIN NAVIGATION</li>
	<li <?php echo (in_array('dash',$menu)) ? 'class="active"':''; ?>>
    	<a href="<?php echo site_url('pegawai/dashboard'); ?>">
        	<i class="fa fa-dashboard"></i> <span>Deshboard</span>
        </a>
    </li>
	<li class="treeview <?php echo (in_array('jenis_donatur',$menu)) ? 'active':''; ?>">
	  <a href="#"><i class="fa fa-dashboard"></i> <span>Jenis Donatur</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
	  <ul class="treeview-menu">
		<li <?php echo (in_array('jenis_donatur_1',$menu)) ? 'class="active"':''; ?> ><a href="<?php echo site_url('jenis_donatur'); ?>"><i class="fa fa-circle-o"></i> Semua data</a></li>
		<li <?php echo (in_array('jenis_donatur_2',$menu)) ? 'class="active"':''; ?> ><a href="<?php echo site_url('jenis_donatur/action?ac=add'); ?>"><i class="fa fa-circle-o"></i> Tambah</a></li>
	  </ul>
	</li>
	<li class="treeview <?php echo (in_array('donatur',$menu)) ? 'active':''; ?>">
	  <a href="#"><i class="fa fa-dashboard"></i> <span>Donatur</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
	  <ul class="treeview-menu">
		<li <?php echo (in_array('donatur_1',$menu)) ? 'class="active"':''; ?> ><a href="<?php echo site_url('donatur'); ?>"><i class="fa fa-circle-o"></i> Semua data</a></li>
		<li <?php echo (in_array('donatur_2',$menu)) ? 'class="active"':''; ?> ><a href="<?php echo site_url('donatur/action?ac=add'); ?>"><i class="fa fa-circle-o"></i> Tambah</a></li>
	  </ul>
	</li>
	<li class="header">Pesan</li>
	<!--<li class="treeview <?php echo (in_array('categori_tema_pesan',$menu)) ? 'active':''; ?>">
	  <a href="#"><i class="fa fa-dashboard"></i> <span>Kategori Group Pesan</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
	  <ul class="treeview-menu">
		<li <?php echo (in_array('categori_tema_pesan_1',$menu)) ? 'class="active"':''; ?> ><a href="<?php echo site_url('categori_tema_pesan'); ?>"><i class="fa fa-circle-o"></i> Semua data</a></li>
		<li <?php echo (in_array('categori_tema_pesan_2',$menu)) ? 'class="active"':''; ?> ><a href="<?php echo site_url('categori_tema_pesan/action?ac=add'); ?>"><i class="fa fa-circle-o"></i> Tambah</a></li>
	  </ul>
	</li> -->
	<li class="treeview <?php echo (in_array('tema_pesan',$menu)) ? 'active':''; ?>">
	  <a href="#"><i class="fa fa-dashboard"></i> <span>Group Pesan</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
	  <ul class="treeview-menu">
		<li <?php echo (in_array('tema_pesan_1',$menu)) ? 'class="active"':''; ?> ><a href="<?php echo site_url('tema_pesan'); ?>"><i class="fa fa-circle-o"></i> Semua data</a></li>
		<li <?php echo (in_array('tema_pesan_2',$menu)) ? 'class="active"':''; ?> ><a href="<?php echo site_url('tema_pesan/action?ac=add'); ?>"><i class="fa fa-circle-o"></i> Tambah</a></li>
	  </ul>
	</li>
	<li class="treeview <?php echo (in_array('bc',$menu)) ? 'active':''; ?>">
	  <a href="#"><i class="fa fa-dashboard"></i> <span>Broadcast</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
	  <ul class="treeview-menu">
		<li <?php echo (in_array('bc_1',$menu)) ? 'class="active"':''; ?> ><a href="<?php echo site_url('broadcast'); ?>"><i class="fa fa-circle-o"></i> Semua data</a></li>
		<li <?php echo (in_array('bc_2',$menu)) ? 'class="active"':''; ?> ><a href="<?php echo site_url('broadcast/action?ac=add'); ?>"><i class="fa fa-circle-o"></i> Tambah</a></li>
	  </ul>
	</li>
	<li class="treeview <?php echo (in_array('kategori_pesan',$menu)) ? 'active':''; ?>">
	  <a href="#"><i class="fa fa-dashboard"></i> <span>Kategori Pesan</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
	  <ul class="treeview-menu">
		<li <?php echo (in_array('kategori_pesan_1',$menu)) ? 'class="active"':''; ?> ><a href="<?php echo site_url('kategori_pesan'); ?>"><i class="fa fa-circle-o"></i> Semua data</a></li>
		<li <?php echo (in_array('kategori_pesan_2',$menu)) ? 'class="active"':''; ?> ><a href="<?php echo site_url('kategori_pesan/action?ac=add'); ?>"><i class="fa fa-circle-o"></i> Tambah</a></li>
	  </ul>
	</li>
	<li class="treeview <?php echo (in_array('pesan',$menu)) ? 'active':''; ?>">
	  <a href="#"><i class="fa fa-dashboard"></i> <span>Pesan</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
	  <ul class="treeview-menu">
		<li <?php echo (in_array('pesan_1',$menu)) ? 'class="active"':''; ?> ><a href="<?php echo site_url('pesan'); ?>"><i class="fa fa-circle-o"></i> Semua data</a></li>
		<li <?php echo (in_array('pesan_2',$menu)) ? 'class="active"':''; ?> ><a href="<?php echo site_url('pesan/action?ac=add'); ?>"><i class="fa fa-circle-o"></i> Tambah</a></li>
	  </ul>
	</li>
</ul>
<?php endif; ?>
<style type="text/css">
fieldset.scheduler-border {
  border: 1px groove #ddd !important;
  padding: 0 1.4em 1.4em 1.4em !important;
  margin: 0 0 1.5em 0 !important;
  -webkit-box-shadow: 0px 0px 0px 0px #000;
  box-shadow: 0px 0px 0px 0px #000;
}

legend.scheduler-border {
  font-size: 1.2em !important;
  font-weight: bold !important;
  text-align: left !important;
  width: auto;
  padding: 0 10px;
  border-bottom: none;
}
</style>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        BMH Marketing
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
		<?php foreach($breadcrumb as $key => $value): ?>
			<li <?php echo ($value[1]=="") ? "":$value[1]; ?>><?php echo $value[0]; ?></li>
		<?php endforeach; ?>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
		<!-- Default box -->
<div class="box">
	<div class="box-header with-border">
		<h3 class="box-title"><?php echo $judul; ?></h3>

		<div class="box-tools pull-right">
			<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
			<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
		</div>
	</div>
	<div class="box-body">
		<div class="row">
			<div class="col-md-6">
				<fieldset class="scheduler-border">
						<legend class="scheduler-border">Filter</legend>
						<form class="form-inline" action="<?php echo site_url('laporanwp/action'); ?>" method="get">
							<input type="hidden" name="ac" value="rekap" />
							<div class="form-group">
								<input type="text" name="laporan" placeholder="Masukkan" class="form-control"/>
							</div>
							<button type="submit" class="btn btn-default">Go!</button>
						</form>
				</fieldset>
			</div>
			<div class="col-md-6">
				<fieldset class="scheduler-border">
						<legend class="scheduler-border">Filter Die</legend>
						<form class="form-inline" action="<?php echo site_url('laporanwp/action'); ?>" method="get">
							<input type="hidden" name="ac" value="die" />
							<div class="form-group">
								<input type="text" name="laporan" placeholder="Masukkan" class="form-control"/>
							</div>
							<button type="submit" class="btn btn-default">Go!</button>
						</form>
				</fieldset>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
			<?php
				$tmp_table=array(
						'table_open' => '<table id="id_laporan_wp" class="table table-bordered">',
						'thead_open' => '<thead>',
						'thead_close' => '</thead>',
						'table_close' => '</table>'
				);

				$this->table->set_template($tmp_table);
				$this->table->set_heading('No.','Judul','Edisi','Laporan','Tanggal','Action');
					$no=1;
					foreach ($data as $key => $value) {
					
						if($value->url_preview=='OFF'){
							$link = anchor('laporanwp/action?ac=edit_2&id='.$value->id,' <i class="fa fa-pencil"></i> Edit','class="btn btn-block btn-warning"');
							
							$judul='<span class="text-red">'.$value->judul.'</span>';
							$laporan='<span class="text-red">'.$value->url_asli_preview.'</span>';
						}else{
							$link = anchor('laporanwp/action?ac=edit_2&id='.$value->id,' <i class="fa fa-pencil"></i> Edit','class="btn btn-block btn-warning"');
							$link .= anchor('laporanwp/action?ac=level_1&id='.$value->id,'<i class="fa fa-arrow-right"></i> Level 1','class="btn btn-block btn-info"');
							$judul=$value->judul;
							$laporan=$value->laporan;
						}
						$tgl_1=isset($value->tgl) ? date('d M Y',strtotime($value->tgl)):'-';
						$tgl=($value->status=='ON') ? anchor('laporanwp/action?ac=on_off&set=off&id='.$value->id,'OFF','class="text-success"'):anchor('laporanwp/action?ac=on_off&set=on&id='.$value->id,'ON','class="text-danger"');
						$this->table->add_row($value->id,$judul,$value->edisi,$laporan,$tgl_1.' - '.$tgl,$link);
					}
				echo $this->table->generate();
			?>
			</div>
		</div>
	</div>
	<!-- /.box-body -->
	<div class="box-footer">
		Footer
	</div>
	<!-- /.box-footer-->
</div>
<!-- /.box -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
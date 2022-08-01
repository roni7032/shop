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
			<div class="col-md-12">
			<?php
			$tmp_table=array(
					'table_open' => '<table width="100%" class="table table-bordered datatable">',
					'thead_open' => '<thead>',
					'thead_close' => '</thead>',
					'table_close' => '</table>'
			);

			$this->table->set_template($tmp_table);
			$this->table->set_heading('No.','Nama','link');
				$no=1;
				foreach ($data as $key => $value) {
					// $link_value = anchor($value->link,'klik','target="_blank" class="btn btn-xs btn-warning"');
					$link_value = anchor('jabatan/action?ac=set_sudah&id='.$value->id,'<i class="fa fa-eye"> GDrive','class="btn btn-xs btn-info" target="_blank"');
					$nama=($value->sudah==='yes') ? '<span class="text-red">'.$value->nama.'</span>':'<span class="text-green">'.$value->nama.'</span>';
					$this->table->add_row($no++,$nama,$link_value);
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
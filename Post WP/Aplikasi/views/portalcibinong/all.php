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
			<div class="col-md-12">
			<?php
				$tmp_table=array(
						'table_open' => '<table width="100%" class="table table-bordered datatable">',
						'thead_open' => '<thead>',
						'thead_close' => '</thead>',
						'table_close' => '</table>'
				);

				$this->table->set_template($tmp_table);
				$this->table->set_heading('No.','Title','Tagline','email','done','Action');
					$no=1;
					foreach ($data as $key => $value) {
						$link = anchor('portalcibinong/action?ac=edit&id='.$value->id,' <i class="fa fa-pencil"></i> Edit','class="btn btn-warning"');
						$link .= anchor('portalcibinong/action?ac=level_1&id='.$value->id,' <i class="fa fa-minus"></i>','class="btn btn-success"');
						
						$this->table->add_row($no++,$value->title,$value->tagline,$value->email,$value->done,'<div class="btn-group">'.$link.'</div>');
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
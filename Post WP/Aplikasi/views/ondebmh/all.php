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
					'table_open' => '<table class="table table-bordered datatable">',
					'thead_open' => '<thead>',
					'thead_close' => '</thead>',
					'table_close' => '</table>'
			);

			$this->table->set_template($tmp_table);
			$this->table->set_heading('No.','Tgl Collect','Panggilan','No. HP','Status','Action');
				$no=1;
				foreach ($data as $key => $value) {
					// $link = anchor('ondebmh/action?ac=edit&id='.$value->id,' <i class="fa fa-pencil"></i> Edit','class="btn btn-block btn-warning"');
					$status = isset($value->status) ? anchor('ondebmh/action?ac=pesan&id='.$value->id,$value->status):'';
					$hidden=array(
						'table'=>'pesan_ondebmh',
						'ac'=>'pesan_1',
						'id_main'=>$value->id
					);
					$link = form_open('ondebmh/simpan','id="ondebmh_"'.$value->id,$hidden);
					$link .= '<input type="text" name="isi_pesan" id="id_isi_pesan_'.$value->id.'"/>';
					$arr=array(
						'terkirim'=>'Terkirim',
						'dibaca'=>'Dibaca',
						'pending'=>'Pending',
						'tidakdibaca'=>'Tidak Dibaca',
						'block'=>'Block',
					);
					$link .= form_dropdown('status',$arr,'','id="status_'.$value->id.'"');
					$link .= form_submit('save', 'Go','class=""'); 
					$link .= form_close(); 
					// $link .= '<button type"button" onClick="addpesan('.$value->id.')">Go</button>';
					$this->table->add_row($no++,date('d M Y',strtotime($value->tgl)), $value->panggilan,$value->hp,$status,$link);
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
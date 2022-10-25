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
				$hidden=array(
						'table'=>'pesan_ondebmh',
						'ac'=>'pesan',
						'id_main'=>$id
					);
				echo form_open('ondebmh/simpan','id="ondebmh"',$hidden); ?>
						<div class="form-group">
						<?php echo form_label('Isi Pesan', 'isi_pesan');
						echo form_textarea(array(
							'name'=>'isi_pesan',
							'class'=>'form-control',
							'id'=>'isi_pesan',
							'placeholder'=>'isi pesan'
						));
						?></div>
						<div class="form-group">
						<?php echo form_label('Status', 'status');
						$arr=array(
							'terkirim'=>'Terkirim',
							'dibaca'=>'Dibaca',
							'pending'=>'Pending',
							'tidakdibaca'=>'Tidak Dibaca',
							'block'=>'Block',
						);
						echo form_dropdown('status',$arr,'','class="form-control select2" id="status"'); ?>
						</div>
						<div class="form-group">
						<?php echo form_label('Tanggal Kirim', 'tgl_kirim');
						echo form_input(array(
							'type'=>'text',
							'name'=>'tgl',
							'value'=>date('d M Y',strtotime('today')),
							'class'=>'form-control datepicker',
							'id'=>'tgl',
							'placeholder'=>'Tanggal Kirim'
							)
						);
						?></div>
						<div class="form-group">
						<?php 
							echo form_submit('save', 'Proses','class="form-control btn btn-info"'); 
						?>
						</div>
					<?php echo form_close(); ?>
			</div>
		</div>
	</div>
	<!-- /.box-body -->
	<div class="box-footer">
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
			$this->table->set_heading('No.','Tanggal','Pesan','Status','Action');
				$no=1;
				foreach ($data as $key => $value) {
					$link = anchor('ondebmh/action?ac=del_pesan&id='.$value->code,' <i class="fa fa-trash"></i> Delete','class="btn btn-danger" onclick="return confirm(\'Anda yakin..?\')"');
					// $link = anchor('ondebmh/action?ac=pesan&id='.$value->code,' <i class="fa fa-send"></i> ','class="btn btn-info" target="_blank"');
					$this->table->add_row($no++,date('d M Y',strtotime($value->tgl)), wordwrap($value->isi_pesan,100,'\n'),$value->status,$link);
				}
			echo $this->table->generate();
			?>
			</div>
		</div>
	</div>
	<!-- /.box-footer-->
</div>
<!-- /.box -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
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
				<?php if(isset($id)): ?>
				
				<?php
				$hidden=array(
						'table'=>'jabatan',
						'ac'=>'edit',
						'id'=>$dtedit->id
					);
				echo form_open('jabatan/simpan','id="jabatan"',$hidden); ?>
						<div class="form-group">
						<?php echo form_label('JML Aktif', 'jml_aktif');
						echo form_input(array(
							'type'=>'numeric',
							'name'=>'jml_aktif',
							'value'=>$dtedit->jml_aktif,
							'class'=>'form-control',
							'id'=>'jml_aktif',
							'placeholder'=>'JML Aktif'
							)
						);
						?></div>
						<div class="form-group">
						<?php echo form_label('JML OFF', 'jml_off');
						echo form_input(array(
							'type'=>'numeric',
							'name'=>'jml_off',
							'value'=>$dtedit->jml_off,
							'class'=>'form-control',
							'id'=>'jml_off',
							'placeholder'=>'JML OFF'
							)
						);
						?></div>
						<div class="form-group">
						<?php echo form_label('Edisi', 'edisi');
						echo form_input(array(
							'type'=>'numeric',
							'name'=>'edisi',
							'value'=>$dtedit->edisi,
							'class'=>'form-control',
							'id'=>'edisi',
							'placeholder'=>'Edisi'
							)
						);
						?></div>
						<div class="form-group">
						<?php echo form_label('Terima Pembayaran', 'terima_pembayaran');
						$arr=array('yes'=>'Yes','no'=>'No');
						echo form_dropdown('terima_pembayaran',$arr,$dtedit->terima_pembayaran,'class="form-control" id="published" ');
						?></div>
						<div class="form-group">
						<?php echo form_label('Tanggal Terima Pembayaran', 'tgl_terima_pembayaran');
						echo form_input(array(
							'type'=>'text',
							'name'=>'tgl_terima_pembayaran',
							'value'=>isset($dtedit->tgl_terima_pembayaran) ? date('d M Y',strtotime($dtedit->tgl_terima_pembayaran)):'',
							'class'=>'form-control datepicker',
							'id'=>'tgl_terima_pembayaran',
							'placeholder'=>'Tanggal Terima Pembayaran'
							)
						);
						?></div>
						<div class="form-group">
						<?php echo form_label('Posisi ID LWP', 'posisi_id_lwp');
						echo form_input(array(
							'type'=>'numeric',
							'name'=>'posisi_id_lwp',
							'value'=>$dtedit->posisi_id_lwp,
							'class'=>'form-control',
							'id'=>'posisi_id_lwp',
							'placeholder'=>'Posisi ID LWP'
							)
						);
						?></div>
						<div class="form-group">
						<?php 
							echo form_submit('save', 'Proses','class="form-control btn btn-info"'); 
						?>
						</div>
					<?php echo form_close(); ?>
				<?php else: ?>
					<?php 
					$hidden=array(
						'table'=>'jabatan',
						'ac'=>'add',
					);
					echo form_open('jabatan/simpan','id="jabatan"',$hidden); ?>
					<div class="form-group">
						<?php echo form_label('JML Aktif', 'jml_aktif');
						echo form_input(array(
							'type'=>'numeric',
							'name'=>'jml_aktif',
							'value'=>'0',
							'class'=>'form-control',
							'id'=>'jml_aktif',
							'placeholder'=>'JML Aktif'
							)
						);
						?></div>
						<div class="form-group">
						<?php echo form_label('JML OFF', 'jml_off');
						echo form_input(array(
							'type'=>'numeric',
							'name'=>'jml_off',
							'value'=>'0',
							'class'=>'form-control',
							'id'=>'jml_off',
							'placeholder'=>'JML OFF'
							)
						);
						?></div>
						<div class="form-group">
						<?php echo form_label('Edisi', 'edisi');
						echo form_input(array(
							'type'=>'numeric',
							'name'=>'edisi',
							'value'=>'0',
							'class'=>'form-control',
							'id'=>'edisi',
							'placeholder'=>'Edisi'
							)
						);
						?></div>
					<div class="form-group">
					<?php 
						echo form_submit('save', 'Proses','class="form-control btn btn-info"'); 
					?>
					</div>
					<?php echo form_close(); ?>
				
				<?php endif; ?>
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
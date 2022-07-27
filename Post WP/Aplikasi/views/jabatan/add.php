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
						<?php echo form_label('Nama', 'nama');
						echo form_input(array(
							'type'=>'text',
							'name'=>'nama',
							'value'=>$dtedit->nama,
							'class'=>'form-control',
							'id'=>'nama',
							'placeholder'=>'Nama'
							)
						);
						?></div>
						<div class="form-group">
						<?php echo form_label('Isi', 'isi');
						echo form_textarea(array(
							'name'=>'isi',
							'class'=>'form-control',
							'id'=>'isi',
							'placeholder'=>'Isi',
							'value'=>$dtedit->isi	)
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
					<?php echo form_label('Nama', 'nama');
					echo form_input(array(
						'type'=>'text',
						'name'=>'nama',
						'value'=>'',
						'class'=>'form-control',
						'id'=>'nama',
						'placeholder'=>'Nama'
						)
					);
					?></div>
					<div class="form-group">
					<?php echo form_label('Isi', 'isi');
					echo form_textarea(array(
						'name'=>'isi',
						'class'=>'form-control',
						'id'=>'isi',
						'placeholder'=>'Isi'
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
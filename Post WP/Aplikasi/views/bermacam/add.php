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
						'table'=>'bermacam',
						'ac'=>'edit',
						'id'=>$dtedit->id
					);
				echo form_open('bermacam/simpan','id="bermacam"',$hidden); ?>
						<div class="form-group">
						<?php echo form_label('Judul', 'judul');
						echo form_input(array(
							'type'=>'text',
							'name'=>'judul',
							'value'=>$dtedit->judul,
							'class'=>'form-control',
							'id'=>'judul',
							'autofocus'=>'autofocus',
							'onFocus'=>'this.select();',
							'placeholder'=>'Judul'
							)
						);
						?></div>
						<div class="form-group">
						<?php echo form_label('Judul Url', 'judul_url');
						echo form_input(array(
							'type'=>'text',
							'name'=>'judul_url',
							'value'=>str_replace(array(" ",","),array("_","-"),$dtedit->judul),
							'class'=>'form-control',
							'id'=>'judul_url',
							'onFocus'=>'this.select();',
							'placeholder'=>'Judul Url'
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
						'table'=>'bermacam',
						'ac'=>'add',
					);
					echo form_open('bermacam/simpan','id="bermacam"',$hidden); ?>
						<div class="form-group">
						<?php echo form_label('Judul', 'judul');
						echo form_input(array(
							'type'=>'text',
							'name'=>'judul',
							'value'=>'0',
							'class'=>'form-control',
							'id'=>'judul',
							'placeholder'=>'Judul'
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
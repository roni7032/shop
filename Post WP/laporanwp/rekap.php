<?php if($for=='level_1'):?>
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
				echo form_open('laporanwp/simpan','id="laporanwp"'); ?>
					<div class="form-group">
					<?php echo form_label('Judul', 'judul');
					echo form_input(array(
						'name'=>'judul',
						'class'=>'form-control',
						'id'=>'judul',
						'placeholder'=>'Judul',
						'autofocus'=>'autofocus',
						'value'=>$dtedit->judul
					));
					?></div>
					
					<?php
					echo anchor('laporanwp/action?ac=level_2&id='.$dtedit->id,'<i class="fa fa-arrow-right"></i> Level 2','class="btn btn-info pull-right"');
					echo form_close(); 
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
<?php elseif($for=='level_2'): ?>
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
				echo form_open('laporanwp/simpan','id="laporanwp"'); ?>
					<div class="form-group">
					<?php echo form_label('Deskripsi', 'deskripsi');
					echo form_textarea(array(
						'name'=>'deskripsi',
						'class'=>'form-control',
						'id'=>'deskripsi',
						'placeholder'=>'Deskripsi',
						'autofocus'=>'autofocus',
						'value'=>$dtedit->deskripsi.$desc_1
					));
					?></div>
					
					<?php
					echo anchor('laporanwp/action?ac=level_3&id='.$dtedit->id,'<i class="fa fa-arrow-right"></i> Level 3','class="btn btn-info pull-right"');
					echo form_close(); 
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
<?php elseif($for=='level_3'): ?>
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
				echo form_open('laporanwp/simpan','id="laporanwp"'); ?>
					<div class="form-group">
					<?php echo form_label('Harga', 'harga');
					echo form_input(array(
						'name'=>'harga',
						'class'=>'form-control',
						'id'=>'harga',
						'placeholder'=>'Harga',
						'autofocus'=>'autofocus',
						'value'=>$dtedit->harga
					));
					?></div>
					
					<?php
					echo anchor('laporanwp/action?ac=level_4&id='.$dtedit->id,'<i class="fa fa-arrow-right"></i> Level 4','class="btn btn-info pull-right"');
					echo form_close(); 
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
<?php elseif($for=='level_4'): ?>
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
				echo form_open('laporanwp/simpan','id="laporanwp"'); ?>
					<div class="form-group">
					<?php echo form_label('URL Download', 'url_download');
					echo form_input(array(
						'name'=>'url_download',
						'class'=>'form-control',
						'id'=>'url_download',
						'placeholder'=>'URL Download',
						'autofocus'=>'autofocus',
						'value'=>$dtedit->mega_download
					));
					?></div>
					
					<?php
					echo anchor('laporanwp/action?ac=level_5&id='.$dtedit->id,'<i class="fa fa-arrow-right"></i> Level 5','class="btn btn-info pull-right"');
					echo form_close(); 
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
<?php elseif($for=='level_5'): ?>
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
				echo form_open('laporanwp/simpan','id="laporanwp"'); ?>
					<div class="form-group">
					<?php echo form_label('Judul', 'judul');
					echo form_input(array(
						'name'=>'judul',
						'class'=>'form-control',
						'id'=>'judul',
						'placeholder'=>'Judul',
						'autofocus'=>'autofocus',
						'value'=>$dtedit->judul
					));
					?></div>
					
					<?php
					echo anchor('laporanwp/action?ac=level_6&id='.$dtedit->id,'<i class="fa fa-arrow-right"></i> Level 6','class="btn btn-info pull-right"');
					echo form_close(); 
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
<?php elseif($for=='level_6'): ?>
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
				echo form_open('laporanwp/simpan','id="laporanwp"'); ?>
					<div class="form-group">
					<?php echo form_label('Nama Gambar', 'nama_gambar');
					echo form_input(array(
						'name'=>'nama_gambar',
						'class'=>'form-control',
						'id'=>'nama_gambar',
						'placeholder'=>'Nama Gambar',
						'autofocus'=>'autofocus',
						'value'=>$dtedit->nama_gambar
					));
					?></div>
					
					<?php
					echo anchor('laporanwp/action?ac=level_7&id='.$dtedit->id,'<i class="fa fa-arrow-right"></i> Level 7','class="btn btn-info pull-right"');
					echo form_close(); 
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
<?php elseif($for=='level_7'): ?>
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
				echo form_open('laporanwp/simpan','id="laporanwp"'); ?>
					<div class="form-group">
					<?php echo form_label('URL Preview ', 'url_preview');
					echo form_input(array(
						'name'=>'url_preview',
						'class'=>'form-control',
						'id'=>'url_preview',
						'placeholder'=>'URL Preview',
						'autofocus'=>'autofocus',
						'value'=>$dtedit->url_preview
					));
					?></div>
					
					<?php
					echo anchor('laporanwp/action?ac=level_8&id='.$dtedit->id,'<i class="fa fa-arrow-right"></i> Level 8','class="btn btn-info pull-right"');
					echo form_close(); 
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
<?php elseif($for=='level_8'): ?>
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
				echo form_open('laporanwp/simpan','id="laporanwp"'); ?>
					<div class="form-group">
					<?php echo form_label('Tags ', 'tags');
					echo form_input(array(
						'name'=>'tags',
						'class'=>'form-control',
						'id'=>'tags',
						'placeholder'=>'Tags',
						'autofocus'=>'autofocus',
						'value'=>$dtedit->tags
					));
					?></div>
					
					<?php
					echo anchor('laporanwp/action?ac=level_9&id='.$dtedit->id,'<i class="fa fa-arrow-right"></i> Level 9','class="btn btn-info pull-right"');
					echo form_close(); 
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
<?php elseif($for=='level_9'): ?>
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
						'table'=>'laporanwp',
						'ac'=>'edit_1',
						'id'=>$dtedit->id
					);
				echo form_open('laporanwp/simpan','id="laporanwp"',$hidden); ?>
					<div class="form-group">
					<?php echo form_label('URL', 'url');
					echo form_input(array(
						'type'=>'text',
						'name'=>'url',
						'value'=>$dtedit->url,
						'class'=>'form-control',
						'id'=>'url',
						'placeholder'=>'URL'
						)
					);
					?></div>
					<div class="form-group">
					<?php echo form_label('URL X', 'url_x');
					echo form_input(array(
						'type'=>'text',
						'name'=>'url_x',
						'value'=>$dtedit->url_x,
						'class'=>'form-control',
						'id'=>'url_x',
						'placeholder'=>'URL X'
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
		Footer
	</div>
	<!-- /.box-footer-->
</div>
<!-- /.box -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php else: ?>
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
				echo form_open('laporanwp/simpan','id="laporanwp"'); ?>
					<div class="form-group">
					<?php echo form_label('Laporan', 'laporan');
					$arr='';
					foreach($data as $key => $value){
						$arr .=$value->laporan;
						$arr .="\n";
					}
					
					echo form_textarea(array(
						'name'=>'laporan',
						'class'=>'form-control',
						'id'=>'laporan',
						'placeholder'=>'Laporan',
						'value'=>$arr
					));
					?></div>
					<?php echo form_close(); ?>
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
<?php endif; ?>
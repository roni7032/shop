<?php if($for=='level_1'):?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Level 1
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
<div class="box <?php if($dtedit->status!=='ON') echo 'box-danger box-solid'; ?>">
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
				<h3><?php echo '('.$dtedit->done.') '.$dtedit->kat; ?></h3>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<?php if($dtedit->judul!=='OFF'):
				$hidden=array(
					'ac'=>'level_2',
					'id'=>$dtedit->id
				);
				echo form_open('suarrid/action','id="suarrid" method="get"',$hidden); ?>
					<div class="form-group">
					<?php echo form_label('Judul', 'judul');
					echo form_input(array(
						'name'=>'judul',
						'class'=>'form-control',
						'id'=>'judul',
						'placeholder'=>'Judul',
						'autofocus'=>'autofocus',
						'onFocus'=>'this.select();',
						'value'=>$dtedit->judul
					));
					?>
					</div>
					<div class="form-group">
						<?php 
							echo form_submit('next', ' Next','class="btn btn-info pull-right"'); 
						?>
					</div>
					<?php
					echo form_close();			
					else:
					?>
						<a href="<?php echo site_url('suarrid/action?ac=level_1&id='.($dtedit->id-1)); ?>">Previous</a> | <a href="<?php echo site_url('suarrid/action?ac=level_1&id='.($dtedit->id+1)); ?>">Next</a>
					<?php endif; ?>
			</div>
		</div>
	</div>
	<!-- /.box-body -->
	<div class="box-footer">
		<a href="<?php echo site_url('suarrid/action?ac=edit&id='.$dtedit->id); ?>" accesskey="1">Edit</a>
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
        Level 2
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
				<h3><?php echo $dtedit->kat; ?></h3>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
			<?php
				$hidden=array(
					'ac'=>'level_3',
					'id'=>$dtedit->id
				);
				echo form_open('suarrid/action','id="suarrid" method="get"',$hidden);?>
					<div class="form-group">
					<?php echo form_label('Isi', 'isi');
					echo form_textarea(array(
						// 'name'=>'isi',
						'class'=>'form-control',
						'id'=>'isi',
						'placeholder'=>'isi',
						'autofocus'=>'autofocus',
						'onFocus'=>'this.select();',
						'value'=>$dtedit->isi
					));
					?></div>
					<div class="form-group">
						<?php 
							echo form_submit('next', ' Next','class="btn btn-info pull-right"'); 
						?>
					</div>
					<?php
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
        Level 3
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
				<h3><?php echo '('.$dtedit->done.') '.$dtedit->kat; ?></h3>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
			<?php
				$hidden=array(
					'ac'=>'level_4',
					'id'=>$dtedit->id
				);
				echo form_open('suarrid/action','id="suarrid" method="get"',$hidden);?>
					<div class="form-group">
					<?php echo form_label('Tags', 'tags');
					echo form_input(array(
						'name'=>'tags',
						'class'=>'form-control',
						'id'=>'tags',
						'placeholder'=>'tags',
						'autofocus'=>'autofocus',
						'onFocus'=>'this.select();',
						'value'=>$dtedit->tags
					));
					?></div>
					<div class="form-group">
						<?php 
							echo form_submit('next', ' Next','class="btn btn-info pull-right"'); 
						?>
					</div>
					<?php
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
        Level 4
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
					'ac'=>'edit_3',
					'id'=> $dtedit->id
				);
				echo form_open('suarrid/simpan','id="suarrid"',$hidden); ?>
					<div class="form-group">
					<?php echo form_label('Img', 'img');
					echo form_input(array(
						'name'=>'img',
						'class'=>'form-control',
						'id'=>'img',
						'placeholder'=>'img',
						'autofocus'=>'autofocus',
						'onFocus'=>'this.select();',
						'value'=>$dtedit->img
					));
					?></div>
					<div class="form-group">
						<?php 
							echo form_submit('next', ' Next','class="btn btn-info pull-right"'); 
						?>
					</div>
					<?php
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
        Level 6
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
					'ac'=>'level_7',
					'id'=>$dtedit->id
				);
				echo form_open('suarrid/action','id="suarrid" method="get"',$hidden); ?>
					<div class="form-group">
					<?php echo form_label('Nama Gambar', 'nama_gambar');
					echo form_input(array(
						'name'=>'nama_gambar',
						'class'=>'form-control',
						'id'=>'nama_gambar',
						'placeholder'=>'Nama Gambar',
						'autofocus'=>'autofocus',
						'onFocus'=>'this.select();',
						'value'=>$dtedit->nama_gambar
					));
					?>
					<?php if(isset($dtedit->mega_link)): ?><a href="<?php echo $dtedit->mega_link; ?>" target="_blank"><?php echo $dtedit->mega_link; ?></a><?php endif; ?>
					</div>
					<div class="form-group">
						<?php 
							echo form_submit('next', ' Next','class="btn btn-info pull-right"'); 
						?>
					</div>
					<?php
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
        Level 7
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
					'ac'=>'level_8',
					'id'=>$dtedit->id
				);
				echo form_open('suarrid/action','id="suarrid" method="get"',$hidden); ?>
					<div class="form-group">
					<?php echo form_label('URL Preview ', 'url_preview');
					echo form_input(array(
						'name'=>'url_preview',
						'class'=>'form-control',
						'id'=>'url_preview',
						'placeholder'=>'URL Preview',
						'autofocus'=>'autofocus',
						'onFocus'=>'this.select();',
						'value'=>$dtedit->url_preview
					));
					echo ($dtedit->url!='') ? anchor($dtedit->url,$dtedit->url,'target="_blank"'):'';
					?></div>
					<div class="form-group">
						<?php 
							echo form_submit('next', ' Next','class="btn btn-info pull-right"'); 
						?>
					</div>
					<?php
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
        Level 8
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
					'ac'=>'level_9',
					'id'=>$dtedit->id
				);
				echo form_open('suarrid/action','id="suarrid" method="get"',$hidden); ?>
					<div class="form-group">
					<?php echo form_label('Tags ', 'tags');
					echo form_input(array(
						'name'=>'tags',
						'class'=>'form-control',
						'id'=>'tags',
						'placeholder'=>'Tags',
						'autofocus'=>'autofocus',
						'onFocus'=>'this.select();',
						'value'=>$dtedit->tags
					));
					?></div>
					<div class="form-group">
						<?php 
							echo form_submit('next', ' Next','class="btn btn-info pull-right"'); 
						?>
					</div>
					<?php
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
        Level 10(END)
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
						'table'=>'suarrid',
						'ac'=>'edit_1',
						'id'=>$dtedit->id
					);
				echo form_open('suarrid/simpan','id="suarrid"',$hidden); ?>
					<div class="form-group">
					<?php echo form_label('URL', 'url');
					echo form_input(array(
						'type'=>'text',
						'name'=>'url',
						'value'=>$dtedit->url,
						'class'=>'form-control',
						'id'=>'url',
						'autofocus'=>'autofocus',
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
<?php elseif($for=='die'): ?>
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
				echo form_open('suarrid/simpan','id="suarrid"'); ?>
					<div class="form-group">
					<?php echo form_label('Laporan', 'laporan');
					$arr='';
					$no=1;
					foreach($data as $key => $value){
						$arr .=$no++.'. '.$value->judul.' - '.$value->url_asli_preview;
						$arr .="\n\n";
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
				echo form_open('suarrid/simpan','id="suarrid"'); ?>
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
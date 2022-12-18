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
				<?php
				$hidden=array(
					'ac'=>'level_2',
					'id'=>$dtedit->id
				);
				echo form_open('portalcibinong/action','id="portalcibinong" method="get"',$hidden); ?>
					<div class="form-group">
					<?php echo form_label('Title', 'title');
					echo form_input(array(
						'name'=>'title',
						'class'=>'form-control',
						'id'=>'title',
						'placeholder'=>'Title',
						'autofocus'=>'autofocus',
						'onFocus'=>'this.select();',
						'value'=>$dtedit->title
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
					?>
			</div>
		</div>
	</div>
	<!-- /.box-body -->
	<div class="box-footer">
		<a href="<?php echo site_url('portalcibinong/action?ac=edit&id='.$dtedit->id); ?>" accesskey="1">Edit</a>
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
			<?php
				$hidden=array(
					'ac'=>'level_3',
					'id'=>$dtedit->id
				);
				echo form_open('portalcibinong/action','id="portalcibinong" method="get"',$hidden);?>
					<div class="form-group">
					<?php echo form_label('Tagline', 'tagline');
					echo form_input(array(
						'name'=>'tagline',
						'class'=>'form-control',
						'id'=>'tagline',
						'placeholder'=>'Tagline',
						'autofocus'=>'autofocus',
						'onFocus'=>'this.select();',
						'value'=>$dtedit->tagline
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
			<?php
				$hidden=array(
					'ac'=>'level_4',
					'id'=>$dtedit->id
				);
				echo form_open('portalcibinong/action','id="portalcibinong" method="get"',$hidden);?>
					<div class="form-group">
					<?php echo form_label('Description', 'description');
					echo form_textarea(array(
						'name'=>'description',
						'class'=>'form-control',
						'id'=>'description',
						'placeholder'=>'Description',
						'autofocus'=>'autofocus',
						'onFocus'=>'this.select();',
						'value'=>$dtedit->description
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
					'ac'=>'level_5',
					'id'=>$dtedit->id
				);
				echo form_open('portalcibinong/action','id="portalcibinong" method="get"',$hidden); ?>
					<div class="form-group">
					<?php echo form_label('Logo ', 'logo_img');
					echo form_input(array(
						'name'=>'logo_img',
						'class'=>'form-control',
						'id'=>'logo_img',
						'placeholder'=>'Logo',
						'autofocus'=>'autofocus',
						'onFocus'=>'this.select();',
						'value'=>$dtedit->logo_img
					));
					?></div>
					<div class="form-group">
					<?php echo form_label('Cover ', 'cover_img');
					echo form_input(array(
						'name'=>'cover_img',
						'class'=>'form-control',
						'id'=>'cover_img',
						'placeholder'=>'Cover',
						'value'=>$dtedit->cover_img
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
        Level 5
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
					'ac'=>'level_6',
					'id'=> $dtedit->id
				);
				echo form_open('portalcibinong/action','id="portalcibinong" method="get"',$hidden);?>
					<div class="form-group">
					<?php echo form_label('Email', 'email');
					echo form_input(array(
						'name'=>'email',
						'class'=>'form-control',
						'id'=>'email',
						'placeholder'=>'Email',
						'autofocus'=>'autofocus',
						'onFocus'=>'this.select();',
						'value'=>$dtedit->email
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
					'id'=> $dtedit->id
				);
				echo form_open('portalcibinong/action','id="portalcibinong" method="get"',$hidden);?>
					<div class="form-group">
					<?php echo form_label('Phone', 'phone');
					echo form_input(array(
						'name'=>'phone',
						'class'=>'form-control',
						'id'=>'phone',
						'placeholder'=>'Phone',
						'autofocus'=>'autofocus',
						'onFocus'=>'this.select();',
						'value'=>$dtedit->phone
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
				echo form_open('portalcibinong/action','id="portalcibinong" method="get"',$hidden); ?>
					<div class="form-group">
					<?php echo form_label('Website', 'website');
					echo form_input(array(
						'name'=>'website',
						'class'=>'form-control',
						'id'=>'website',
						'placeholder'=>'Website',
						'autofocus'=>'autofocus',
						'onFocus'=>'this.select();',
						'value'=>$dtedit->website
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
				echo form_open('portalcibinong/action','id="portalcibinong" method="get"',$hidden); ?>
					<div class="form-group">
					<?php echo form_label('Facebook ', 'facebook');
					echo form_input(array(
						'name'=>'facebook',
						'class'=>'form-control',
						'id'=>'facebook',
						'placeholder'=>'Facebook',
						'autofocus'=>'autofocus',
						'onFocus'=>'this.select();',
						'value'=>$dtedit->facebook
					));
					?></div>
					<div class="form-group">
					<?php echo form_label('Instagram ', 'instagram');
					echo form_input(array(
						'name'=>'instagram',
						'class'=>'form-control',
						'id'=>'instagram',
						'placeholder'=>'Instagram',
						'onFocus'=>'this.select();',
						'value'=>$dtedit->instagram
					));
					?></div>
					<div class="form-group">
					<?php echo form_label('Youtube ', 'youtube');
					echo form_input(array(
						'name'=>'youtube',
						'class'=>'form-control',
						'id'=>'youtube',
						'placeholder'=>'Youtube',
						'onFocus'=>'this.select();',
						'value'=>$dtedit->youtube
					));
					?></div>
					<div class="form-group">
					<?php echo form_label('Lain-Lain ', 'twitter');
					echo form_input(array(
						'name'=>'twitter',
						'class'=>'form-control',
						'id'=>'twitter',
						'placeholder'=>'Lain-Lain ',
						'onFocus'=>'this.select();',
						'value'=>$dtedit->twitter
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
					'ac'=>'edit_2',
					'id'=>$dtedit->id
				);
				echo form_open('portalcibinong/simpan','id="portalcibinong"',$hidden); ?>
					<div class="form-group">
					<?php echo form_label('Alamat', 'alamat');
					echo form_textarea(array(
						'name'=>'alamat',
						'class'=>'form-control',
						'id'=>'alamat',
						'placeholder'=>'Alamat',
						'autofocus'=>'autofocus',
						'onFocus'=>'this.select();',
						'value'=>$dtedit->alamat
					));
					?></div>
					<div class="form-group">
					<?php echo form_label('latitude ', 'latitude');
					echo form_input(array(
						'name'=>'latitude',
						'class'=>'form-control',
						'id'=>'latitude',
						'placeholder'=>'latitude',
						'autofocus'=>'autofocus',
						'onFocus'=>'this.select();',
						'value'=>$dtedit->latitude
					));
					?></div>
					<div class="form-group">
					<?php echo form_label('Longitude ', 'longitude');
					echo form_input(array(
						'name'=>'longitude',
						'class'=>'form-control',
						'id'=>'longitude',
						'placeholder'=>'Longitude',
						'autofocus'=>'autofocus',
						'onFocus'=>'this.select();',
						'value'=>$dtedit->longitude
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
        Level 9
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
				/*$hidden=array(
					'ac'=>'level_10',
					'id'=>$dtedit->id
				);
				echo form_open('portalcibinong/action','id="portalcibinong" method="get"',$hidden); */
				$hidden=array(
					'ac'=>'edit_2',
					'id'=>$dtedit->id
				);
				echo form_open('portalcibinong/simpan','id="portalcibinong"',$hidden); ?>
					<div class="form-group">
					<?php echo form_label('Alamat', 'alamat');
					echo form_textarea(array(
						'name'=>'alamat',
						'class'=>'form-control',
						'id'=>'alamat',
						'placeholder'=>'Alamat',
						'autofocus'=>'autofocus',
						'onFocus'=>'this.select();',
						'value'=>$dtedit->alamat
					));
					?></div>
					<div class="form-group">
					<?php echo form_label('latitude ', 'latitude');
					echo form_input(array(
						'name'=>'latitude',
						'class'=>'form-control',
						'id'=>'latitude',
						'placeholder'=>'latitude',
						'autofocus'=>'autofocus',
						'onFocus'=>'this.select();',
						'value'=>$dtedit->latitude
					));
					?></div>
					<div class="form-group">
					<?php echo form_label('Longitude ', 'longitude');
					echo form_input(array(
						'name'=>'longitude',
						'class'=>'form-control',
						'id'=>'longitude',
						'placeholder'=>'Longitude',
						'autofocus'=>'autofocus',
						'onFocus'=>'this.select();',
						'value'=>$dtedit->longitude
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
<?php elseif($for=='level_10'): ?>
	<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Level 10
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
					'ac'=>'level_11',
					'id'=>$dtedit->id
				);
				echo form_open('portalcibinong/action','id="portalcibinong" method="get"',$hidden); ?>
					<div class="form-group">
					<?php echo form_label('latitude ', 'latitude');
					echo form_input(array(
						'name'=>'latitude',
						'class'=>'form-control',
						'id'=>'latitude',
						'placeholder'=>'latitude',
						'autofocus'=>'autofocus',
						'onFocus'=>'this.select();',
						'value'=>$dtedit->latitude
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
 <?php elseif($for=='level_11'): ?>
	<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Level 11 (END)
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
					'ac'=>'edit_2',
					'id'=>$dtedit->id
				);
				echo form_open('portalcibinong/simpan','id="portalcibinong"',$hidden); ?>
					<div class="form-group">
					<?php echo form_label('Longitude ', 'longitude');
					echo form_input(array(
						'name'=>'longitude',
						'class'=>'form-control',
						'id'=>'longitude',
						'placeholder'=>'Longitude',
						'autofocus'=>'autofocus',
						'onFocus'=>'this.select();',
						'value'=>$dtedit->longitude
					));
					?></div>
					<div class="form-group">
						<?php 
							echo form_submit('next', ' Simpan','class="btn btn-info pull-right"'); 
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
<?php elseif($for=='level_100'): ?>
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
						'table'=>'portalcibinong',
						'ac'=>'edit_1',
						'id'=>$dtedit->id
					);
				echo form_open('portalcibinong/simpan','id="portalcibinong"',$hidden); ?>
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
				echo form_open('portalcibinong/simpan','id="portalcibinong"'); ?>
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
				echo form_open('portalcibinong/simpan','id="portalcibinong"'); ?>
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
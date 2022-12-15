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
		<?php if(isset($dtedit)): ?>
		<div class="row">
			<div class="col-md-12">
				<a href="<?php echo site_url('portalcibinong/action?ac=edit&id='.($dtedit->id)-1); ?>" class="btn btn-info">Previous</a>
				<div class="btn-group">
                  <a href="<?php echo site_url('portalcibinong/action?ac=level_1&id='.$dtedit->id); ?>" class="btn btn-warning" accesskey="1">Level 1</a>
                  <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="<?php echo site_url('portalcibinong/action?ac=level_1&id='.($dtedit->id)-1); ?>">Prev Level 1</a></li>
                    <li><a href="<?php echo site_url('portalcibinong/action?ac=level_1&id='.($dtedit->id)+1); ?>">Next Level 1</a></li>
                    <li class="divider"></li>
                    <li><a href="<?php echo site_url('portalcibinong'); ?>">ALL</a></li>
                  </ul>
                </div>
				<a href="<?php echo site_url('portalcibinong/action?ac=edit&id='.($dtedit->id)+1); ?>" class="btn btn-info">Next</a>
			</div>
		</div>
		<?php endif; ?>
		<div class="row">
			<div class="col-md-12">
				<hr/>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<?php if(isset($id)): ?>
				
				<?php
				$hidden=array(
						'table'=>'portalcibinong',
						'ac'=>$ac,
						'id'=>$dtedit->id
					);
				echo form_open('portalcibinong/simpan','id="portalcibinong"',$hidden); ?>
					<div class="form-group">
					<?php echo form_label('Title', 'title');
					echo form_input(array(
						'type'=>'text',
						'name'=>'title',
						'value'=>$dtedit->title,
						'class'=>'form-control',
						'id'=>'title',
						'placeholder'=>'Title'
						)
					);
					?></div>
					<div class="form-group">
					<?php echo form_label('Tagline', 'tagline');
					echo form_input(array(
						'type'=>'text',
						'name'=>'tagline',
						'value'=>$dtedit->tagline,
						'class'=>'form-control',
						'id'=>'tagline',
						'placeholder'=>'Tagline'
						)
					);
					?></div>
					<div class="form-group">
					<?php echo form_label('Description', 'description');
					echo form_textarea(array(
						'name'=>'description',
						'class'=>'form-control','id'=>'description',
						'placeholder'=>'Description',
						'value'=>$dtedit->description	)
					);
					?></div>
					<div class="form-group">
					<?php echo form_label('Alamat', 'alamat');
					echo form_input(array(
						'type'=>'text',
						'name'=>'alamat',
						'value'=>$dtedit->alamat,
						'class'=>'form-control',
						'id'=>'alamat',
						'placeholder'=>'Alamat'
						)
					);
					?></div>
					<div class="form-group">
					<?php echo form_label('Latitude', 'Latitude');
					echo form_input(array(
						'type'=>'text',
						'name'=>'Latitude',
						'value'=>$dtedit->Latitude,
						'class'=>'form-control',
						'id'=>'Latitude',
						'placeholder'=>'Latitude'
						)
					);
					?></div>
					<div class="form-group">
					<?php echo form_label('Longitude', 'Longitude');
					echo form_input(array(
						'type'=>'text',
						'name'=>'Longitude',
						'value'=>$dtedit->Longitude,
						'class'=>'form-control',
						'id'=>'Longitude',
						'placeholder'=>'Longitude'
						)
					);
					?></div>
					<div class="form-group">
					<?php echo form_label('Phone', 'phone');
					echo form_input(array(
						'type'=>'text',
						'name'=>'phone',
						'value'=>$dtedit->phone,
						'class'=>'form-control',
						'id'=>'phone',
						'placeholder'=>'Phone'
						)
					);
					?></div>
					<div class="form-group">
					<?php echo form_label('Website', 'website');
					echo form_input(array(
						'type'=>'text',
						'name'=>'website',
						'value'=>$dtedit->website,
						'class'=>'form-control',
						'id'=>'website',
						'placeholder'=>'Website'
						)
					);
					?></div>
					<div class="form-group">
					<?php echo form_label('Facebook', 'facebook');
					echo form_input(array(
						'type'=>'text',
						'name'=>'facebook',
						'value'=>$dtedit->facebook,
						'class'=>'form-control',
						'id'=>'facebook',
						'placeholder'=>'Facebook'
						)
					);
					?></div>
					<div class="form-group">
					<?php echo form_label('Twitter', 'twitter');
					echo form_input(array(
						'type'=>'text',
						'name'=>'twitter',
						'value'=>$dtedit->twitter,
						'class'=>'form-control',
						'id'=>'twitter',
						'placeholder'=>'Twitter'
						)
					);
					?></div>
					<div class="form-group">
					<?php echo form_label('Email', 'email');
					echo form_input(array(
						'type'=>'text',
						'name'=>'email',
						'value'=>$dtedit->email,
						'class'=>'form-control',
						'id'=>'email',
						'placeholder'=>'Email'
						)
					);
					?></div>
					<div class="form-group">
					<?php echo form_label('Youtube', 'youtube');
					echo form_input(array(
						'type'=>'text',
						'name'=>'youtube',
						'value'=>$dtedit->youtube,
						'class'=>'form-control',
						'id'=>'youtube',
						'placeholder'=>'Youtube'
						)
					);
					?></div>
					<div class="form-group">
					<?php echo form_label('Work Hours', 'work_hours');
					echo form_input(array(
						'type'=>'text',
						'name'=>'work_hours',
						'value'=>$dtedit->work_hours,
						'class'=>'form-control',
						'id'=>'work_hours',
						'placeholder'=>'Work Hours'
						)
					);
					?></div>
					<div class="form-group">
					<?php echo form_label('cover_img', 'cover_img');
					echo form_input(array(
						'type'=>'text',
						'name'=>'cover_img',
						'value'=>$dtedit->cover_img,
						'class'=>'form-control',
						'id'=>'cover_img',
						'placeholder'=>'cover_img'
						)
					);
					?></div>
					<div class="form-group">
					<?php echo form_label('Instagram', 'instagram');
					echo form_input(array(
						'type'=>'text',
						'name'=>'instagram',
						'value'=>$dtedit->instagram,
						'class'=>'form-control',
						'id'=>'instagram',
						'placeholder'=>'Instagram'
						)
					);
					?></div>
					<div class="form-group">
					<?php echo form_label('logo_img', 'logo_img');
					echo form_input(array(
						'type'=>'text',
						'name'=>'logo_img',
						'value'=>$dtedit->logo_img,
						'class'=>'form-control',
						'id'=>'logo_img',
						'placeholder'=>'logo_img'
						)
					);
					?></div>
					<div class="form-group">
					<?php echo form_label('Category', 'category');
					$arr=array();
					foreach($dtCategory as $key => $value){
						$arr[$value->id]=$value->nama;
					}
					echo form_dropdown('category',$arr,$dtedit->category,'class="form-control" id="category" ');
					?></div>
					<div class="form-group">
					<?php echo form_label('Tags', 'tags');
					echo form_input(array(
						'type'=>'text',
						'name'=>'tags',
						'value'=>$dtedit->tags,
						'class'=>'form-control',
						'id'=>'tags',
						'placeholder'=>'Tags'
						)
					);
					?></div>
						<div class="form-group">
						<?php 
							echo form_submit('save', 'Proses','class="form-control btn btn-info" tabindex="1"'); 
						?>
						</div>
					<?php echo form_close(); ?>
				<?php else: ?>
					<?php 
					$hidden=array(
						'table'=>'portalcibinong',
						'ac'=>'add',
					);
					echo form_open('portalcibinong/simpan','id="portalcibinong"',$hidden); ?>
					<div class="form-group">
					<?php echo form_label('Title', 'title');
					echo form_input(array(
						'type'=>'text',
						'name'=>'title',
						'value'=>'',
						'class'=>'form-control',
						'id'=>'title',
						'placeholder'=>'Title'
						)
					);
					?></div>
					<div class="form-group">
					<?php echo form_label('Tagline', 'tagline');
					echo form_input(array(
						'type'=>'text',
						'name'=>'tagline',
						'value'=>'',
						'class'=>'form-control',
						'id'=>'tagline',
						'placeholder'=>'Tagline'
						)
					);
					?></div>
					<div class="form-group">
					<?php echo form_label('Description', 'description');
					echo form_textarea(array(
						'name'=>'description',
						'class'=>'form-control','id'=>'description',
						'placeholder'=>'Description'
						)
					);
					?></div>
					<div class="form-group">
					<?php echo form_label('cover_img', 'cover_img');
					$arr_1=array();
					for($i=0;$i<7;$i++){
						if($i==-0){
							$arr_1[]='cover_'.$i.'_'.$dtJml;
						}else{
							$arr_1[]='galeri_'.$i.'_'.$dtJml;
						}
					}
					echo form_input(array(
						'type'=>'text',
						'name'=>'cover_img',
						'value'=>implode(', ',$arr_1),
						'class'=>'form-control',
						'id'=>'cover_img',
						'placeholder'=>'cover_img'
						)
					);
					?></div>
					<div class="form-group">
					<?php echo form_label('logo_img', 'logo_img');
					echo form_input(array(
						'type'=>'text',
						'name'=>'logo_img',
						'value'=>'logo_'.$dtJml,
						'class'=>'form-control',
						'id'=>'logo_img',
						'placeholder'=>'logo_img'
						)
					);
					?></div>
					<div class="form-group">
					<?php echo form_label('Alamat', 'alamat');
					echo form_input(array(
						'type'=>'text',
						'name'=>'alamat',
						'value'=>'',
						'class'=>'form-control',
						'id'=>'alamat',
						'placeholder'=>'Alamat'
						)
					);
					?></div>
					<div class="form-group">
					<?php echo form_label('Latitude', 'Latitude');
					echo form_input(array(
						'type'=>'text',
						'name'=>'Latitude',
						'value'=>'',
						'class'=>'form-control',
						'id'=>'Latitude',
						'placeholder'=>'Latitude'
						)
					);
					?></div>
					<div class="form-group">
					<?php echo form_label('Longitude', 'Longitude');
					echo form_input(array(
						'type'=>'text',
						'name'=>'Longitude',
						'value'=>'',
						'class'=>'form-control',
						'id'=>'Longitude',
						'placeholder'=>'Longitude'
						)
					);
					?></div>
					<div class="form-group">
					<?php echo form_label('Phone', 'phone');
					echo form_input(array(
						'type'=>'text',
						'name'=>'phone',
						'value'=>'',
						'class'=>'form-control',
						'id'=>'phone',
						'placeholder'=>'Phone'
						)
					);
					?></div>
					<div class="form-group">
					<?php echo form_label('Website', 'website');
					echo form_input(array(
						'type'=>'text',
						'name'=>'website',
						'value'=>'',
						'class'=>'form-control',
						'id'=>'website',
						'placeholder'=>'Website'
						)
					);
					?></div>
					<div class="form-group">
					<?php echo form_label('Facebook', 'facebook');
					echo form_input(array(
						'type'=>'text',
						'name'=>'facebook',
						'value'=>'',
						'class'=>'form-control',
						'id'=>'facebook',
						'placeholder'=>'Facebook'
						)
					);
					?></div>
					<div class="form-group">
					<?php echo form_label('Twitter', 'twitter');
					echo form_input(array(
						'type'=>'text',
						'name'=>'twitter',
						'value'=>'',
						'class'=>'form-control',
						'id'=>'twitter',
						'placeholder'=>'Twitter'
						)
					);
					?></div>
					<div class="form-group">
					<?php echo form_label('Email', 'email');
					echo form_input(array(
						'type'=>'text',
						'name'=>'email',
						'value'=>'',
						'class'=>'form-control',
						'id'=>'email',
						'placeholder'=>'Email'
						)
					);
					?></div>
					<div class="form-group">
					<?php echo form_label('Youtube', 'youtube');
					echo form_input(array(
						'type'=>'text',
						'name'=>'youtube',
						'value'=>'',
						'class'=>'form-control',
						'id'=>'youtube',
						'placeholder'=>'Youtube'
						)
					);
					?></div>
					<div class="form-group">
					<?php echo form_label('Work Hours', 'work_hours');
					echo form_input(array(
						'type'=>'text',
						'name'=>'work_hours',
						'value'=>'',
						'class'=>'form-control',
						'id'=>'work_hours',
						'placeholder'=>'Work Hours'
						)
					);
					?></div>
					<div class="form-group">
					<?php echo form_label('Instagram', 'instagram');
					echo form_input(array(
						'type'=>'text',
						'name'=>'instagram',
						'value'=>'',
						'class'=>'form-control',
						'id'=>'instagram',
						'placeholder'=>'Instagram'
						)
					);
					?></div>
					<div class="form-group">
					<?php echo form_label('Tags', 'tags');
					echo form_input(array(
						'type'=>'text',
						'name'=>'tags',
						'value'=>'',
						'class'=>'form-control',
						'id'=>'tags',
						'placeholder'=>'Tags'
						)
					);
					?></div>
					<div class="form-group">
					<?php echo form_label('Category', 'category');
					$arr=array();
					foreach($dtCategory as $key => $value){
						$arr[$value->id]=$value->nama;
					}
					echo form_dropdown('category',$arr,'','class="form-control" id="category" ');
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
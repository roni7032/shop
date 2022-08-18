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
				<a href="<?php echo site_url('laporanwp/action?ac=edit&id='.($dtedit->id)-1); ?>" class="btn btn-info">Previous</a>
				<div class="btn-group">
                  <a href="<?php echo site_url('laporanwp/action?ac=level_1&id='.$dtedit->id); ?>" class="btn btn-warning" accesskey="1">Level 1</a>
                  <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="<?php echo site_url('laporanwp/action?ac=level_1&id='.($dtedit->id)-1); ?>">Prev Level 1</a></li>
                    <li><a href="<?php echo site_url('laporanwp/action?ac=level_1&id='.($dtedit->id)+1); ?>">Next Level 1</a></li>
                    <li class="divider"></li>
                    <li><a href="<?php echo site_url('laporanwp'); ?>">ALL</a></li>
                  </ul>
                </div>
				<a href="<?php echo site_url('laporanwp/action?ac=edit&id='.($dtedit->id)+1); ?>" class="btn btn-info">Next</a>
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
						'table'=>'laporanwp',
						'ac'=>'edit'
					);
				echo form_open('laporanwp/simpan','id="laporanwp"',$hidden); ?>
					<div class="form-group">
					<?php echo form_label('ID', 'id');
					echo form_input(array(
						'type'=>'number',
						'name'=>'id',
						'value'=>$dtedit->id,
						'class'=>'form-control',
						'id'=>'id',
						'placeholder'=>'ID'
						)
					);
					?></div>
					<div class="form-group <?php if($dtedit->status==='OFF') echo "bg-danger"; ?>">
					<?php echo form_label('judul', 'judul');
					echo form_input(array(
						'type'=>'text',
						'name'=>'judul',
						'value'=>$dtedit->judul,
						'class'=>'form-control',
						'id'=>'judul',
						'autofocus'=>'autofocus',
						'placeholder'=>'judul'
						)
					);
					?></div>
					<div class="form-group">
					<?php echo form_label('Nama Gambar', 'nama_gambar');
					echo form_input(array(
						'type'=>'text',
						'name'=>'nama_gambar',
						'value'=>$dtedit->nama_gambar,
						'class'=>'form-control',
						'id'=>'nama_gambar',
						'placeholder'=>'Nama Gambar'
						)
					);
					?></div>
					<div class="form-group">
					<?php echo form_label('Id', 'kunci');
					echo form_input(array(
						'type'=>'text',
						'name'=>'kunci',
						'value'=>$dtedit->kunci,
						'class'=>'form-control',
						'required'=>'required',
						'id'=>'kunci',
						'placeholder'=>'Id'
						)
					);
					?></div>
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
					<?php echo form_label('URL Preview', 'url_preview');
					echo form_input(array(
						'type'=>'text',
						'name'=>'url_preview',
						'value'=>(empty($dtedit->url_preview)) ? 'https://closecrowds.com/themes/?theme=':$dtedit->url_preview,
						'class'=>'form-control',
						'id'=>'url_preview',
						'placeholder'=>'URL Preview'
						)
					);
					?><span class="text-red">https://closecrowds.com/themes/?theme=</span></div>
					<div class="form-group">
					<?php echo form_label('URL Asli', 'url_asli');
					echo form_input(array(
						'type'=>'text',
						'name'=>'url_asli',
						'value'=>$dtedit->url_asli,
						'class'=>'form-control',
						'id'=>'url_asli',
						'placeholder'=>'URL Asli'
						)
					);
					?></div>
					<div class="form-group">
						<div class="row">
							<div class="col-md-12">
								<?php echo form_label('URL Asli Preview', 'url_asli_preview'); ?>
							</div>
						</div>
						<div class="row">
							<div class="col-md-10">
								<?php echo form_input(array(
									'type'=>'text',
									'name'=>'url_asli_preview',
									'value'=>$dtedit->url_asli_preview,
									'class'=>'form-control',
									'id'=>'url_asli_preview',
									'placeholder'=>'URL Asli Preview'
									)
								);
								?>
							</div>
							<div class="col-md-2">
								<button type="button" id="btn-off" class="btn btn-danger">OFF</button>
							</div>
						</div>
					</div>
					<div class="form-group">
					<?php echo form_label('Harga', 'harga');
					echo form_input(array(
						'type'=>'text',
						'name'=>'harga',
						'value'=>$dtedit->harga,
						'class'=>'form-control',
						'id'=>'harga',
						'placeholder'=>'Harga'
						)
					);
					?></div>
					<div class="form-group">
					<?php echo form_label('Mega Link', 'mega_link');
					echo form_input(array(
						'type'=>'text',
						'name'=>'mega_link',
						'value'=>$dtedit->mega_link,
						'class'=>'form-control',
						'id'=>'mega_link',
						'placeholder'=>'Mega Link'
						)
					);
					?></div>
					<div class="form-group">
					<?php echo form_label('Mega Download', 'mega_download');
					echo form_input(array(
						'type'=>'text',
						'name'=>'mega_download',
						'value'=>$dtedit->mega_download,
						'class'=>'form-control',
						'id'=>'mega_download',
						'placeholder'=>'Mega Download'
						)
					);
					?></div>
					<div class="form-group">
					<?php echo form_label('Deskripsi', 'deskripsi');
					echo form_textarea(array(
						'name'=>'deskripsi',
						'class'=>'form-control','id'=>'deskripsi',
						'placeholder'=>'Deskripsi',
						'value'=>$dtedit->deskripsi	)
					);
					?></div>
					<div class="form-group">
					<?php echo form_label('Tags', 'tags');
					echo form_input(array(
						'type'=>'text',
						'name'=>'tags',
						'value'=>$dtedit->tags,
						'class'=>'form-control',
						'required'=>'required',
						'id'=>'tags',
						'placeholder'=>'Tags'
						)
					);
					?></div>
					<div class="form-group">
					<?php echo form_label('Deskripsi x', 'deskripsix');
					echo form_textarea(array(
						'name'=>'deskripsix',
						'class'=>'form-control',
						'id'=>'deskripsix',
						'placeholder'=>'Deskripsi',
						'readonly'=>'readonly',
						'value'=>$dtedit->deskripsi.$desc_1
						)
					);
					?></div>
					<div class="form-group">
					<?php echo form_label('Laporan', 'laporan');
					$arr='array(
        "id" 		 => "'.$dtedit->kunci.'",
        "url" 		 => "'.$dtedit->url_asli_preview.'",
        "purchase" 	 => "'.$dtedit->url_x.'",
        "responsive" => "yes",
        "type"       => "wordpress",
        "thumb"      => ""
    ),';
					
					echo form_textarea(array(
						'name'=>'laporan',
						'class'=>'form-control',
						'id'=>'laporan',
						'placeholder'=>'Laporan',
						'value'=>$arr
					));
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
						'table'=>'laporanwp',
						'ac'=>'add',
					);
					echo form_open('laporanwp/simpan','id="laporanwp"',$hidden); ?>
					<div class="form-group">
					<?php echo form_label('ID', 'id');
					echo form_input(array(
						'type'=>'number',
						'name'=>'id',
						'value'=>0,
						'class'=>'form-control',
						'id'=>'id',
						'autofocus'=>'autofocus',
						'placeholder'=>'ID'
						)
					);
					?></div>
					<div class="form-group">
					<?php echo form_label('judul', 'judul');
					echo form_input(array(
						'type'=>'text',
						'name'=>'judul',
						'value'=>'',
						'class'=>'form-control',
						'id'=>'judul',
						'placeholder'=>'judul'
						)
					);
					?></div>
					<div class="form-group">
					<?php echo form_label('Nama Gambar', 'nama_gambar');
					echo form_input(array(
						'type'=>'text',
						'name'=>'nama_gambar',
						'value'=>'',
						'class'=>'form-control',
						'id'=>'nama_gambar',
						'placeholder'=>'Nama Gambar'
						)
					);
					?></div>
					<div class="form-group">
					<?php echo form_label('Id', 'kunci');
					echo form_input(array(
						'type'=>'text',
						'name'=>'kunci',
						'value'=>'',
						'class'=>'form-control',
						'required'=>'required',
						'id'=>'kunci',
						'placeholder'=>'Id'
						)
					);
					?></div>
					<div class="form-group">
					<?php echo form_label('URL', 'url');
					echo form_input(array(
						'type'=>'text',
						'name'=>'url',
						'value'=>'',
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
						'value'=>'',
						'class'=>'form-control',
						'id'=>'url_x',
						'placeholder'=>'URL X'
						)
					);
					?></div>
					<div class="form-group">
					<?php echo form_label('URL Preview', 'url_preview');
					echo form_input(array(
						'type'=>'text',
						'name'=>'url_preview',
						'value'=>'https://closecrowds.com/themes/?theme=',
						'class'=>'form-control',
						'id'=>'url_preview',
						'placeholder'=>'URL Preview'
						)
					);
					?><span class="text-red">https://closecrowds.com/themes/?theme=</span></div>
					<div class="form-group">
					<?php echo form_label('URL Asli', 'url_asli');
					echo form_input(array(
						'type'=>'text',
						'name'=>'url_asli',
						'value'=>'',
						'class'=>'form-control',
						'id'=>'url_asli',
						'placeholder'=>'URL Asli'
						)
					);
					?></div>
					<div class="form-group">
					<?php echo form_label('URL Asli Preview', 'url_asli_preview');
					echo form_input(array(
						'type'=>'text',
						'name'=>'url_asli_preview',
						'value'=>'',
						'class'=>'form-control',
						'id'=>'url_asli_preview',
						'placeholder'=>'URL Asli Preview'
						)
					);
					?></div>
					<div class="form-group">
					<?php echo form_label('Harga', 'harga');
					echo form_input(array(
						'type'=>'text',
						'name'=>'harga',
						'value'=>'',
						'class'=>'form-control',
						'id'=>'harga',
						'placeholder'=>'Harga'
						)
					);
					?></div>
					<div class="form-group">
					<?php echo form_label('Mega Link', 'mega_link');
					echo form_input(array(
						'type'=>'text',
						'name'=>'mega_link',
						'value'=>'',
						'class'=>'form-control',
						'id'=>'mega_link',
						'placeholder'=>'Mega Link'
						)
					);
					?></div>
					<div class="form-group">
					<?php echo form_label('Mega Download', 'mega_download');
					echo form_input(array(
						'type'=>'text',
						'name'=>'mega_download',
						'value'=>'',
						'class'=>'form-control',
						'id'=>'mega_download',
						'placeholder'=>'Mega Download'
						)
					);
					?></div>
					<div class="form-group">
					<?php echo form_label('Deskripsi', 'deskripsi');
					echo form_textarea(array(
						'name'=>'deskripsi',
						'class'=>'form-control','id'=>'deskripsi',
						'placeholder'=>'Deskripsi'
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
						'required'=>'required',
						'id'=>'tags',
						'placeholder'=>'Tags'
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
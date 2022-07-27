<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Aplikasi Sembako
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
		<li><a href="<?php echo site_url('buana'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
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
						'table'=>'menu',
						'ac'=>'edit',
						'id'=>$dtedit->id
					);
				echo form_open('post/simpan','id="form_dana_investor"',$hidden); ?>
						<div class="form-group">
						<?php echo form_label('parentId', 'parentId');
						foreach($dtparentId as $key => $value){
							$arr[$value->id]=$value->nama;
						}
						echo form_dropdown('parentId',$arr,$dtedit->parentId,'class="form-control select2" id="parentId" ');
						?>
						</div>
						<div class="form-group">
						<?php echo form_label('Class LI pertama', 'li_class');
						echo form_input(array(
							'type'=>'text',
							'name'=>'li_class',
							'value'=>$dtedit->li_class,
							'class'=>'form-control',
							'id'=>'li_class',
							'placeholder'=>'Class LI pertama'
							)
						);
						?>
						</div>
						<div class="form-group">
						<?php echo form_label('Link', 'li_a_link');
						echo form_input(array(
							'type'=>'text',
							'name'=>'li_a_link',
							'value'=>$dtedit->li_a_link,
							'class'=>'form-control',
							'id'=>'li_a_link',
							'placeholder'=>'Link'
							)
						);
						?>
						</div>
						<div class="form-group">
						<?php echo form_label('Icon Parent', 'li_a_i_icon');
						echo form_input(array(
							'type'=>'text',
							'name'=>'li_a_i_icon',
							'value'=>$dtedit->li_a_i_icon,
							'class'=>'form-control',
							'id'=>'li_a_i_icon',
							'placeholder'=>'Icon Parent'
							)
						);
						?>
						</div>
						<div class="form-group">
						<?php echo form_label('Title', 'li_a_span_title');
						echo form_input(array(
							'type'=>'text',
							'name'=>'li_a_span_title',
							'value'=>$dtedit->li_a_span_title,
							'class'=>'form-control',
							'id'=>'li_a_span_title',
							'placeholder'=>'Title'
							)
						);
						?>
						</div>
						<div class="form-group">
						<?php echo form_label('li_a_span_class', 'li_a_span_class');
						echo form_input(array(
							'type'=>'text',
							'name'=>'li_a_span_class',
							'value'=>$dtedit->li_a_span_class,
							'class'=>'form-control',
							'id'=>'li_a_span_class',
							'placeholder'=>'li_a_span_class'
							)
						);
						?>
						</div>
						<div class="form-group">
						<?php echo form_label('li_a_span_i_icon', 'li_a_span_i_icon');
						echo form_input(array(
							'type'=>'text',
							'name'=>'li_a_span_i_icon',
							'value'=>$dtedit->li_a_span_i_icon,
							'class'=>'form-control',
							'id'=>'li_a_span_i_icon',
							'placeholder'=>'li_a_span_i_icon'
							)
						);
						?>
						</div>
						<div class="form-group">
						<?php 
							echo form_submit('save', 'Proses','class="form-control btn btn-info"'); 
						?>
						</div>
					<?php echo form_close(); ?>
				<?php else: ?>
					<?php 
					$hidden=array(
						'table'=>'menu',
						'ac'=>'add',
					);
					echo form_open('menu/simpan','id="form_dana_investor"',$hidden); ?>
					
					<div class="form-group">
						<?php echo form_label('Parent Id', 'parentId');
						$arr[]='Master';
						foreach($dtparentId as $key => $value){
							$arr[$value->id]=$value->li_a_span_title." level : ".$value->level;
						}
						echo form_dropdown('parentId',$arr,'','class="form-control select2" id="parentId" ');
						?>
					</div>
					<div class="form-group">
					<?php echo form_label('Class LI pertama', 'li_class');
					$arr_li_class=array(
						'0'=>'kosong',
						'header'=>'header',
						'treeview'=>'treeview',
					);
					echo form_dropdown('li_class',$arr_li_class,'','class="form-control" id="li_class" ');
					/*echo form_input(array(
						'type'=>'text',
						'name'=>'li_class',
						'value'=>'',
						'class'=>'form-control',
						'id'=>'li_class',
						'placeholder'=>'Class LI pertama'
						)
					);*/
					?>
					</div>
					<div class="form-group">
					<?php echo form_label('Link', 'li_a_link');
					echo form_input(array(
						'type'=>'text',
						'name'=>'li_a_link',
						'value'=>'',
						'class'=>'form-control',
						'id'=>'li_a_link',
						'placeholder'=>'Link'
						)
					);
					?>
					</div>
					<div class="form-group">
					<?php echo form_label('Icon Parent', 'li_a_i_icon');
					echo form_input(array(
						'type'=>'text',
						'name'=>'li_a_i_icon',
						'value'=>'',
						'class'=>'form-control',
						'id'=>'li_a_i_icon',
						'placeholder'=>'Icon Parent'
						)
					);
					?>
					</div>
					<div class="form-group">
					<?php echo form_label('Title', 'li_a_span_title');
					echo form_input(array(
						'type'=>'text',
						'name'=>'li_a_span_title',
						'value'=>'',
						'class'=>'form-control',
						'id'=>'li_a_span_title',
						'placeholder'=>'Title'
						)
					);
					?>
					</div>
					<div class="form-group">
					<?php echo form_label('li_a_span_class', 'li_a_span_class');
					$arr_li_a_span_class=array(
						'0'=>'kosong',
						'pull-right-container'=>'pull-right-container',
					);
					echo form_dropdown('li_a_span_class',$arr_li_a_span_class,'','class="form-control" id="li_a_span_class" ');
					/*echo form_input(array(
						'type'=>'text',
						'name'=>'li_a_span_class',
						'value'=>'',
						'class'=>'form-control',
						'id'=>'li_a_span_class',
						'placeholder'=>'li_a_span_class'
						)
					);*/
					?>
					</div>
					<div class="form-group">
					<?php echo form_label('li_a_span_i_icon', 'li_a_span_i_icon');
					$arr_li_a_span_i_icon=array(
						'0'=>'kosong',
						'fa fa-angle-left pull-right'=>'fa fa-angle-left pull-right',
					);
					echo form_dropdown('li_a_span_i_icon',$arr_li_a_span_i_icon,'','class="form-control" id="li_a_span_i_icon" ');
					/*echo form_input(array(
						'type'=>'text',
						'name'=>'li_a_span_i_icon',
						'value'=>'',
						'class'=>'form-control',
						'id'=>'li_a_span_i_icon',
						'placeholder'=>'li_a_span_i_icon'
						)
					);*/
					?>
					</div>
					
					<?php 
						echo form_submit('save', 'Proses','class="form-control btn btn-info"'); 
					?>
					
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
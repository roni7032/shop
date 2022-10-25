<?php if($for=='add'): ?>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.datepicker').datepicker({
				'format': 'dd M yyyy',
				'autoclose': true,
				'todayHighlight': true,
				'endDate': new Date
			});
			
			CKEDITOR.replace('isi_pesan')
			$('.select2').select2()
		})
	</script>
<?php elseif($for=='edit'): ?>
	<script type="text/javascript">
		
	</script>
<?php endif; ?>
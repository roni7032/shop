<?php if($for=='add'): ?>
	<script type="text/javascript">
		CKEDITOR.replace('deskripsi');
	</script>
<?php elseif($for=='edit'): ?>
	<script type="text/javascript">
		$('#btn-off').click(function(){
			let text_url_asli_preview, id_url_asli_preview
			id_url_asli_preview=$('[name="id"]').val()
			text_url_asli_preview=$('[name="url_asli_preview"]').val()
			window.location.href= '<?php echo site_url('laporanwp'); ?>/action?ac=xactive&id='+id_url_asli_preview+'&url_asli_preview='+text_url_asli_preview
		})
	
		$('input[name="url_asli"]').change(function(e){
			let url_preview_1=$('input[name="url_preview"]').val()
			
			let url_asli_1=$(this).val()
			url_asli_2=url_asli_1.split('https://elements.envato.com/')
			url_asli_3=url_asli_2[1].split('-')
			url_asli=url_asli_3[0]+'-'+url_asli_3[1]+url_asli_3[2]
			$('input[name="kunci"]').val(url_asli)
			$('input[name="url_preview"]').val(url_preview_1+url_asli)
			// $.post("<?php echo site_url('welcome/getKunci'); ?>",{url_asli:url_asli},function(data){
				
			// })
		})
		
		$('#tags').change(function(e){
			let tags_val_1=$(this).val()
			let tags_val_3=toTitleCase(tags_val_1)
			let tags_val_2=tags_val_3.replace(/\n|\r|,/g,',')
			$(this).val(tags_val_2)
		})
		
		function toTitleCase(str) {
			return str.replace(/(?:^|\s)\w/g, function(match) {
				return match.toUpperCase();
			});
		}
	</script>
<?php else: ?>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#id_laporan_wp').DataTable({
				initComplete: function () {
					this.api().columns([2]).every( function () {
						var column = this;
						var select = $('<select><option value=""></option></select>')
							.appendTo( $(column.header()).empty() )
							.on( 'change', function () {
								var val = $.fn.dataTable.util.escapeRegex(
									$(this).val()
								);
		
								column
									.search( val ? '^'+val+'$' : '', true, false )
									.draw();
							} );
		
						column.data().unique().sort().each( function ( d, j ) {
							select.append( '<option value="'+d+'">'+d+'</option>' )
						} );
					} );
				},
				"aaSorting": [[0,'desc']],
				"columnDefs": [ {
					"targets": 2,
					"orderable": false
				}]
			});
		});
	</script>
<?php endif; ?>
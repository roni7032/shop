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
	
		// CKEDITOR.replace('deskripsi');
	</script>
<?php else: ?>
	<script type="text/javascript">
		/*$(document).ready(function(){
			$('#table_dana_investor').DataTable({
				initComplete: function () {
					this.api().columns([4]).every( function () {
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
				},"columnDefs": [{
					"targets": 4,
					"orderable": false
				} ]
			});
		});*/
	</script>
<?php endif; ?>
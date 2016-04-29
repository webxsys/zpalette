$(document).ready(function() {


	function getMakeups(id_brand)
	{

		// grab span values
		var makeup_options = '<option value="0">--</option>';

		$('.makeups .brand_'+id_brand).each(function(index, el) {
			makeup_options += '<option value="'+$(el).data('makeup-id')+'">'+$(el).text()+'</option>';
		});

		$('#checkmakeup').html(makeup_options);
	}

	function getAssoc(id_brand, id_makeup)
	{

		var palette_content = $('.assoc').find('.brandmakeup_'+id_brand+'_'+id_makeup).clone();

		$('#assoc').html(palette_content);
	}



	$('#checkbrand').change(function(e) {
		getMakeups($(this).val());
	});


	$('#checkmakeup').change(function(e) {
		getAssoc($('#checkbrand').val(), $(this).val());
	});

});
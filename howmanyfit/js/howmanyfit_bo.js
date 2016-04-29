$(document).ready(function() {


	// we need to select a makeup for the second slot
	var id_brand = $('#checkbrand').val();

	function getMakeups(id_brand)
	{


		// grab span values
		var makeup_options = '';

		$('.brand_'+id_brand).each(function(index, el) {
			makeup_options += '<option value="'+$(el).data('makeup-id')+'">'+$(el).text()+'</option>';
		});

		$('#checkmakeup').html(makeup_options);
	}


	getMakeups(id_brand);


	$('#checkbrand').change(function(e) {
		getMakeups($(this).val());
	});


});
var jq = jQuery.noConflict();

jq( document ).ready( function(){

	// we need to select a makeup for the second slot
	var id_brand = jq('#checkbrand').val();

	function getMakeups(id_brand)
	{

		var makeup_options = '<option value="0">--</option>';

		jq('.brand_'+id_brand).each(function(index, el) {
			makeup_options += '<option value="'+jq(el).data('makeup-id')+'">'+jq(el).text()+'</option>';
		});

		jq('#checkmakeup').html(makeup_options);
	}


	getMakeups(id_brand);


	jq('#checkbrand').change(function(e) {
		var trigger = $(this).val();
		getMakeups(trigger);
	});


});
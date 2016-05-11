var jq = jQuery.noConflict();

	jq( document ).ready( function(){


	function getMakeups(id_brand)
	{
		var makeup_options = '<option value="0">--</option>';

		jq('.makeups .brand_'+id_brand).each(function(index, el) {
			makeup_options += '<option value="'+jq(el).data('makeup-id')+'">'+jq(el).text()+'</option>';
		});

		jq('#checkmakeup').html(makeup_options);
	}

	function getAssoc(id_brand, id_makeup)
	{
     	var palette_content = jq('#assoc').find('.brandmakeup_'+id_brand+'_'+id_makeup).clone();

		jq('#assocdiv').html(palette_content);
	}



	jq('#checkbrand').change(function(e) {
		getMakeups($(this).val());
	});


	jq('#checkmakeup').change(function(e) {
		getAssoc(jq('#checkbrand').val(), jq(this).val());
	});

});
<!-- Block How many fit -->

<div class="howmanyfit">

	<div class="brand" style="float:left">
		<label class="brand_name">{l s='Brand' mod='howmanyfit'}</label>
		<select name="brand" id="checkbrand">
			<option value="0">--</option>
			{foreach from=$hmf_brands item=brand}
				<option value="{$brand.id_brand}">{$brand.name}</option>
			{/foreach}
		</select>
	</div>


	<div class="makeup" style="float:left;margin-left:40px;">
		<label class="makeup_name">{l s='Product' mod='howmanyfit'}</label>
		<select name="makeup" id="checkmakeup">
				<option value="0">--</option>
		</select>
	</div>


	<div class="association" id="assoc" style="float:left;margin-left:40px;">
		<p class="makeup_name how_many_button">{l s='How Many Fit' mod='howmanyfit'}</p>
	</div>


	<div style="display:none;">
		<div class="makeups">
			{foreach from=$hmf_makeups item=makeup}
				<span class="brand_{$makeup.id_brand} makeup_{$makeup.id_makeup}" data-makeup-id="{$makeup.id_makeup}">{$makeup.name}</span>
			{/foreach}
		</div>


		<div class="assoc" style="float:left;margin-left:40px;">

			{foreach from=$hmf_associations item=assoc}

				<div class="hmf_assoc brandmakeup_{$assoc.id_brand}_{$assoc.id_makeup}">
				<p class="makeup_name how_many_button">{l s='How Many Fit' mod='howmanyfit'}</p>
				{if $assoc.xlarge==0}	{else}<div style="margin-left:40px"><strong class="how_many_bold">{l s='Extra Large' mod='howmanyfit'}</strong>: {$assoc.xlarge}<a href="http://zpalette.com/home/25-extra-large-palette.html" class="how_many_buy">Buy One!</a></div>{/if}
					{if $assoc.dome==0} {else}<div style="margin-left:40px"><strong class="how_many_bold">{l s='Dome' mod='howmanyfit'}</strong>: {$assoc.dome}<a href="http://zpalette.com/home/18-dome-palette.html" class="how_many_buy">Buy One!</a></div>{/if}
					{if $assoc.large==0}	{else}<div style="margin-left:40px"><strong class="how_many_bold">{l s='Large' mod='howmanyfit'}</strong>: {$assoc.large}<a href="http://zpalette.com/home/19-large-palette.html" class="how_many_buy">Buy One!</a></div>{/if}
					{if $assoc.medium==0}	{else}<div style="margin-left:40px"><strong class="how_many_bold">{l s='Medium' mod='howmanyfit'}</strong>: {$assoc.medium}<a href="http://zpalette.com/home/20-medium-palette.html" class="how_many_buy">Buy One!</a></div>{/if}
					{if $assoc.small==0}	{else}<div style="margin-left:40px"><strong class="how_many_bold">{l s='Small' mod='howmanyfit'}</strong>: {$assoc.small}<a href="http://zpalette.com/home/15-small-pink-palette.html" class="how_many_buy">Buy One!</a></div>{/if}
				</div>

			{/foreach}


		</div>


	</div>

</div>

<!-- /Block How many fit -->
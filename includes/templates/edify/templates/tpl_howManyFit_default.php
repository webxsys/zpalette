<header>
    <h1 id="ezPagesHeading">How Many Fit</h1>
</header>
<p></p>

<p>Zpalette the customizable magnetic empty makeup palette is meant to hold all different sized shadows and blushes from all different brands, however, if you like to organize by a specific makeup brand only, the following list may prove to be helpful. We have compiled a list of how many eye shadows of each of the following brands can fit into each palette:
</p>
<p></p>
<div style="width:600px;">
    <div style="float:left;height:200px;margin-top:60px;width:140px;">
        <p><label class="brand_name">Brand</label></p>
        <select name="brand" id="checkbrand" style="width:140px;">
            <option value="0">--</option>
            <?php
                foreach($all_brands as $brand_id => $brand){
                   echo "<option value='".$brand_id."'>".$brand."</option>";
                }
            ?>
        </select>
    </div>

    <div style="float:left;margin-left:40px;margin-top:60px;height:200px;">
        <p><label class="makeup_name">Makeup</label></p>
        <select name="makeup" id="checkmakeup" style="width:140px;">
            <option value="0">--</option>
        </select>
    </div>


    <div class="association" id="assoc" style="display:none;float:left;margin-left:40px;margin-top:60px;height:200px;">
        <p class="makeup_name how_many_button"><label>How Many Fit</label></p>
    </div>


    <div style="display:none;">
        <div class="makeups">
            <?php
                foreach($all_makeups as $brand_id => $makeup){
                    foreach($makeup as $makeup_id => $item){
                        echo "<span class=brand_".$brand_id." makeup_".$makeup_id." data-makeup-id=".$makeup_id.">".$item."</span>";
                    }
                }
            ?>
        </div>
<!--    </div>-->

        <div class="assoc" style="float:left;margin-left:40px;">

            <?php
             $assoc_split = array();
             foreach($all_assocs as $assoc_brand_id => $assocs){
                foreach($assocs as $assoc_makeup_id => $assoc){
                    foreach($assoc as $size => $count){
                        echo $size . " = " . $count . "<br>";

                     //   echo "xlarge : ".$assoc_split[0]."<br>";
                     //   echo "dome : ".$assoc_split[1]."<br>";
                     //   echo "large : ".$assoc_split[2]."<br>";
                     //   echo "medium : ".$assoc_split[3]."<br>";
                     //   echo "small : ".$assoc_split[4]."<br>";
                    }
                    echo "<div class=hmf_assoc brandmakeup_".$assoc_brand_id."_".$assoc_makeup_id.">";
                    echo "<p class=\"makeup_name how_many_button\">How Many Fit</p>";
                    echo "</div>";
                }
             }
            ?>
        </div>
</div>
<!--
<div class="hmf_assoc brandmakeup_{$assoc.id_brand}_{$assoc.id_makeup}">
    <p class="makeup_name how_many_button">{l s='How Many Fit' mod='howmanyfit'}</p>
    {if $assoc.xlarge==0}	{else}<div style="margin-left:40px"><strong class="how_many_bold">{l s='Extra Large' mod='howmanyfit'}</strong>: {$assoc.xlarge}<a href="http://zpalette.com/home/25-extra-large-palette.html" class="how_many_buy">Buy One!</a></div>{/if}
    {if $assoc.dome==0} {else}<div style="margin-left:40px"><strong class="how_many_bold">{l s='Dome' mod='howmanyfit'}</strong>: {$assoc.dome}<a href="http://zpalette.com/home/18-dome-palette.html" class="how_many_buy">Buy One!</a></div>{/if}
    {if $assoc.large==0}	{else}<div style="margin-left:40px"><strong class="how_many_bold">{l s='Large' mod='howmanyfit'}</strong>: {$assoc.large}<a href="http://zpalette.com/home/19-large-palette.html" class="how_many_buy">Buy One!</a></div>{/if}
    {if $assoc.medium==0}	{else}<div style="margin-left:40px"><strong class="how_many_bold">{l s='Medium' mod='howmanyfit'}</strong>: {$assoc.medium}<a href="http://zpalette.com/home/20-medium-palette.html" class="how_many_buy">Buy One!</a></div>{/if}
    {if $assoc.small==0}	{else}<div style="margin-left:40px"><strong class="how_many_bold">{l s='Small' mod='howmanyfit'}</strong>: {$assoc.small}<a href="http://zpalette.com/home/15-small-pink-palette.html" class="how_many_buy">Buy One!</a></div>{/if}
</div>
-->




       <!-- <div style="float:left;height:200px;margin-top:60px;width:120px;margin-left:60px;">


        <label class="brand_name">Product</label>

        <select name="makeup" id="checkmakeup">
            <option value="0">--</option>
        </select>

    </div>

    <div style="float:left;height:200px;margin-top:60px;width:144px;margin-left:60px;">


        <label class="brand_name">How Many Fit</label>

    </div>-->



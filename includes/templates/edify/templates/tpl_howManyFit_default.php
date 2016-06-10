<header>
    <h1 id="ezPagesHeading">How Many Fit</h1>
</header>
<p></p>

<p>Zpalette the customizable magnetic empty makeup palette is meant to hold all different sized shadows and blushes from all different brands, however, if you like to organize by a specific makeup brand only, the following list may prove to be helpful. We have compiled a list of how many eye shadows of each of the following brands can fit into each palette:
</p>
<p></p>
<div style="width:700px;margin-bottom:150px;padding-bottom:160px;">
    <div style="float:left;height:200px;margin-top:60px;width:140px;">
        <p style="color:#54005e;font-family:'Telex', Arial, Helvetica;font-size:1.2em;padding:10px;background-color:#ffffff;border: solid thin #54005e;border-radius:3px;width:138px;text-align:center;">BRAND</p>
        <p></p>
        <select name="brand" id="checkbrand" style="width:140px;">
            <option value="0">--</option>
            <?php
                foreach($all_brands as $brand_id => $brand){
                   echo "<option value='".$brand_id."'>".$brand."</option>";
                }
            ?>
        </select>
    </div>

    <div style="float:left;margin-left:30px;margin-top:60px;height:200px;">
        <p style="color:#54005e;font-family:'Telex', Arial, Helvetica;font-size:1.2em;padding:10px;background-color:#ffffff;border: solid thin #54005e;border-radius:3px;width:180px;text-align:center;">MAKEUP</p>
        <p></p>
        <select name="makeup" id="checkmakeup" style="width:180px;">
            <option value="0">--</option>
        </select>
    </div>


    <div class="association" id="assocxd" style="display:none;float:left;margin-left:40px;margin-top:60px;height:200px;">
        <p class="makeup_name how_many_button"><label>How Many Fit</label></p>
    </div>

    <div style="margin-top:42px; height:200px; width:320px;float:right;padding-bottom:40px;margin-bottom:50px;margin-left:20px;">
        <p id="assocdiv"><label style="font-weight:bold;"></label></p>

    </div>

    <div style="display:none;">
        <div class="makeups">
            <?php
                foreach($all_makeups as $brand_id => $makeup){
                    foreach($makeup as $makeup_id => $item){
                        ?>
                            <span class="brand_<?php echo $brand_id; ?> makeup_<?php echo $makeup_id; ?>" data-makeup-id="<?php echo $makeup_id; ?>"><?php echo $item;?></span>
                        <?php
//                        echo "<span class=brand_".$brand_id." makeup_".$makeup_id." data-makeup-id=".$makeup_id.">".$item."</span>";
                    }
                }
            ?>
        </div>
        <div id="assoc" style="float:left;margin-left:35px;">

            <?php
             $assoc_split = array();
             foreach($all_assocs as $assoc_brand_id => $assocs){
                 foreach($assocs as $assoc_makeup_id => $assoc){
                    echo "\n\n";
                     ?>
                     <div class="hmf_assoc brandmakeup_<?php echo $assoc_brand_id."_".$assoc_makeup_id; ?>">"

                        <p style="color:#54005e;font-family:'Telex', Arial, Helvetica;font-size:1.2em;padding:10px;background-color:#ffffff;border: solid thin #54005e;border-radius:3px;width:160px;text-align:center;">HOW MANY FIT</p>
                         <p></p>
                         <?php
                            foreach($assoc as $size => $count){
                            if($count > 0) {
                                switch($size){
                                    case "Extra Large ":
                                        $hmf_url = "http://www.zpalette.studio/develop/extra-large-palette-c-114/";
                                        break;
                                    case "Dome ":
                                        $hmf_url = "http://www.zpalette.studio/develop/dome-palette-c-110/dome-palette-p-311.html";
                                        break;
                                    case "Large ":
                                        $hmf_url = "http://www.zpalette.studio/develop/large-palettes-c-112/large-palettes-p-314.html";
                                        break;
                                    case "Medium ":
                                        $hmf_url = "http://www.zpalette.studio/develop/medium-palette-c-113/";
                                        break;
                                    case "Small ":
                                        $hmf_url = "http://www.zpalette.studio/develop/small-palettes-c-21//";
                                        break;

                                }
                             echo "<div style=\"margin-left:0px;\">"."\n\n";
                             echo "<strong class=\"how_many_bold\">$size</strong>:" . $count."\n";
                             echo "<span><a style=\"color:#3087a6;font-weight:bold;text-decoration:none;\" href=".$hmf_url."><i class=\"fa fa-arrow-circle-right\"></i>BUY ONE!</a></span>"."\n";
                             echo "";
                             echo "</div>"."\n";
                             echo "<p></p>";
                         }
                            }
                         ?>
                     </div>
                    <?php
                 }
             }
            ?>
        </div>

        </div>
    </div>
</div>

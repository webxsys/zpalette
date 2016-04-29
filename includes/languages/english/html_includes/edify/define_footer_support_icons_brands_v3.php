<?php if($display_support == "yes") { ?>
<div class="custom-content-wrapper">
    <div class="our-services">
        <div class="row">
            <div class="our-services-details">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow flipInX" data-wow-delay="0.2s">
                    <div class="custom-block free-shipping">
                        <i class="<?php echo $custom_block1_icon; ?>"></i>
                        <span class="block-content">
                            <span class="block-title">
                                <?php echo $custom_block1_title; ?>
                            </span>
                            <span class="block-text">
                                <?php echo $custom_block1_subtitle; ?>
                            </span>
                        </span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow flipInX" data-wow-delay="0.6s">
                    <div class="custom-block return-policy"> 
                        <i class="<?php echo $custom_block2_icon; ?>"></i>
                        <span class="block-content">
                            <span class="block-title">
                                <?php echo $custom_block2_title; ?>
                            </span>
                            <span class="block-text">
                                <?php echo $custom_block2_subtitle; ?>
                            </span>
                        </span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow flipInX" data-wow-delay="0.8s">
                    <div class="custom-block orders"> 
                        <i class="<?php echo $custom_block3_icon; ?>"></i>
                        <span class="block-content">
                            <span class="block-title">
                                <?php echo $custom_block3_title; ?>
                            </span>
                            <span class="block-text">
                                <?php echo $custom_block3_subtitle; ?>
                            </span>
                        </span>
                    </div>
                </div>
            </div>
        </div>                   
    </div>
</div>
<?php } ?>
<?php if($display_brand_slider == "yes") { ?>
<div class="brands-wrapper">
    <div class="brands-slider">
        <div class="row">
            <div class="col-lg-12 wow bounce" data-wow-delay="0.4">
                <header>
                    <h2><?php echo FOOTER_TITLE_BRANDS_ALL; ?></h2>
                </header>
                <div class="brands owl-carousel owl-theme">
                    <?php 
						$cat_slide = "select * from ".DB_PREFIX."manufacturers as m join ".DB_PREFIX.
									  "manufacturers_info as mi on m.manufacturers_id = mi.manufacturers_id
									   where mi.languages_id = ". (int)$_SESSION['languages_id'];
						$manufactureimage = $db->Execute($cat_slide);
						while (!$manufactureimage->EOF) {
							$manufacturers_image = $manufactureimage->fields['manufacturers_image'];
							$manufacturers_id = $manufactureimage->fields['manufacturers_id'];
							$manufacturers_url = $manufactureimage->fields['manufacturers_url'];
							if($manufacturers_url == NULL) {
								$manufacturers_url = zen_href_link("index&manufacturers_id=".$manufacturers_id);
							}
							else{
								$manufacturers_url = $manufactureimage->fields['manufacturers_url'];
							}
                    ?>
                    <div class="item">
                        <a href="<?php echo $manufacturers_url; ?>">
                            <img src="images/<?php echo $manufacturers_image;?>" alt="" width="<?php echo SMALL_IMAGE_WIDTH; 	
                            ?>" height="<?php echo SMALL_IMAGE_HEIGHT; ?>"/>
                        </a>
                    </div>
                    <?php $manufactureimage->MoveNext();
                    } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php } ?>
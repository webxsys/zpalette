<?php if($aboutus_text != NULL || $store_address != NULL) { ?>
<div class="about-us col-lg-3 col-md-3 col-sm-6 col-xs-12 wow flipInY" data-wow-delay="0.6">
    <h2><?php echo FOOTER_TITLE_ABOUT_US; ?></h2>
    <div class="about-us-container">
        <?php if($aboutus_text != NULL) {?>
        <p>
            <?php echo $aboutus_text; ?>
        </p>
        <?php } ?>
        <?php if($store_address != NULL) {?>
        <div class="address">
            <i class="fa fa-map-marker fa-lg"></i>
            <p class="address">
                <?php echo $store_address; ?>
            </p>
        </div>
        <?php } ?>
    </div>
</div>
<?php } ?>
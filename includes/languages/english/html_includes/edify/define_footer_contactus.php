<?php if ($store_contact != NULL || $store_email != NULL || $store_fax != NULL || $store_skype != NULL) { ?>
<div class="contact-us col-lg-3 col-md-3 col-sm-6 col-xs-12 wow flipInY" data-wow-delay="1.8">
    <h2><?php echo FOOTER_TITLE_CONTACT_US; ?></h2>
    <ul>
        <?php if($store_contact != NULL) {?>
        <li class="aboutus_phone">
            <i class="fa fa-phone fa-lg"></i>
            <p class="phone">
                <span class="contact-title"><?php echo FOOTER_TITLE_CALL_US; ?> : </span><br/><?php echo $store_contact; ?>
            </p>
        </li>
        <?php } ?>
        <?php if($store_email != NULL) {?>
        <li class="aboutus_mail">
            <i class="fa fa-envelope fa-lg"></i> 
            <p class="mail">
                <span class="contact-title"><?php echo FOOTER_TITLE_EMAIL_US; ?> : </span><br/>
                <a href="mailto:<?php echo $store_email; ?>"><?php echo $store_email; ?></a>
            </p>
        </li>
        <?php } ?>
        <?php if($store_fax != NULL) {?>
        <li class="aboutus_fax">
            <i class="fa fa-print fa-lg"></i> 
            <p class="fax">
                <span class="contact-title"><?php echo FOOTER_TITLE_FAX; ?> : </span><br/>
                <?php echo $store_fax; ?>
            </p>
        </li>
        <?php } ?>    
        <?php if($store_skype != NULL) {?>
        <li class="aboutus_skype">
            <i class="fa fa-skype fa-lg"></i> 
            <p class="skype">
                <span class="contact-title"><?php echo FOOTER_TITLE_SKYPE; ?> : </span><br/>
                <?php echo $store_skype; ?>
            </p>
        </li>
        <?php } ?>
    </ul>
</div>
<?php } ?>
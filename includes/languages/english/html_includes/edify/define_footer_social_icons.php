<div id="footer-3">
    <div class="container">	
        <div class="row">
            <!-- Social Icons -->
            <?php if($display_social == "yes") { ?>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 wow bounce" data-wow-delay="0.6">
                <div class="social">
                    <h2><?php echo FOOTER_TITLE_CONNECT_US; ?></h2>
                    <div class="social-wrapper">
                        <ul class="social_bookmarks">
                            <?php // if($instagram_link != NULL) {?>
                                <li class="instagram">
                                    <a data-original-title="Instagram" data-toggle="tooltip"
                                       href="http://www.instagram.com/zpalette<?php echo $instagram_link;?>" target="_blank">
                                        <i class="fa fa-instagram fa-lg"></i>
                                    </a>
                                </li>
                            <?php // } ?>
                            <?php if($facebook_link != NULL) {?>
                            <li class="facebook">
                                <a data-original-title="Facebook" data-toggle="tooltip" 
                                    href="http://www.facebook.com/<?php echo $facebook_link;?>" target="_blank">
                                    <i class="fa fa-facebook fa-lg"></i>
                                </a>
                            </li>
                            <?php } ?>
                            <?php if($twitter_link != NULL) {?>
                            <li class="twitter">
                                <a data-original-title="Twitter" data-toggle="tooltip"
                                    href="http://www.twitter.com/<?php echo $twitter_link;?>" target="_blank">
                                    <i class="fa fa-twitter fa-lg"></i>
                                </a>
                            </li>
                            <?php } ?>
                            <?php if($youtube_link != NULL) {?>
                                <li class="youtube">
                                    <a data-original-title="Youtube" data-toggle="tooltip"
                                       href="https://www.youtube.com/user/zpalette<?php // echo $youtube_link; ?>" target="_blank">
                                        <i class="fa fa-youtube fa-lg"></i>
                                    </a>
                                </li>
                            <?php } ?>
                            <?php // if($snapchat_link != NULL) {?>
                                <li class="snapchat">
                                    <a data-original-title="Snapchat" data-toggle="tooltip"
                                       href="<?php echo $snapchat_link; ?>" target="_blank">
<!--                                        <i class="fa fa-snapchat-ghost fa-lg"></i>-->
                                        <img src="includes/templates/edify/images/snapchat.png"></img>
                                    </a>
                                </li>
                            <?php // } ?>
                            <?php if($pinterest_link != NULL) {?>
                            <li class="pinterest">
                                <a data-original-title="Pinterest" data-toggle="tooltip" 
                                    href="http://pinterest.com/<?php echo $pinterest_link;?>" target="_blank">
                                    <i class="fa fa-pinterest fa-lg"></i>
                                </a>
                            </li>
                            <?php } ?>
                            <?php if($google_link != NULL) {?>
                            <li class="google_plus">
                                <a data-original-title="Google Plus" data-toggle="tooltip" 
                                    href="<?php echo $google_link; ?>" target="_blank">
                                    <i class="fa fa-google-plus fa-lg"></i>
                                </a>
                            </li>
                            <?php } ?>
                            <?php if($tumblr_link != NULL) {?>
                            <li class="tumblr">
                                <a data-original-title="Tumblr" data-toggle="tooltip"
                                    href="<?php echo $tumblr_link; ?>" target="_blank">
                                    <i class="fa fa-tumblr fa-lg"></i>
                                </a>
                            </li>
                            <?php } ?>
                            <?php if($linkedin_link != NULL) {?>
                            <li class="linkedin">
                                <a data-original-title="LinkedIn" data-toggle="tooltip"
                                    href="<?php echo $linkedin_link; ?>" target="_blank">
                                    <i class="fa fa-linkedin fa-lg"></i>
                                </a>
                            </li>
                            <?php } ?>

                        </ul>
                    </div>
                </div>
            </div>
            <?php } ?>
            <!-- Social Icons Ends here -->
            <!-- Payment Options -->
            <?php if($display_payment_image == "yes") { ?>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 wow bounce" data-wow-delay="0.8">
                <div class="payment">
                    <h2><?php echo FOOTER_TITLE_PAYMENT; ?></h2>
                    <div class="payment-image">
                        <img alt="payment-image" src="<?php echo $template->get_template_dir
                        ('',DIR_WS_TEMPLATE, $current_page_base,'images').'/banners/'.$payment_image; ?>" />
                    </div>
                </div>
            </div>
            <?php } ?>
            <!-- Payment Options Ends here -->
        </div>
    </div>
</div>
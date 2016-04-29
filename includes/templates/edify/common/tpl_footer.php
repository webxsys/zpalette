<?php

/**

 * @package templateSystem

 * @copyright Copyright 2003-2005 Zen Cart Development Team

 * @copyright Portions Copyright 2003 osCommerce

 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0

 * @version $Id: tpl_footer.php 3183 2006-03-14 07:58:59Z birdbrain $

 */

require(DIR_WS_MODULES . zen_get_module_directory('footer.php'));

?>



<?php

if (!$flag_disable_footer) {



if ($this_is_home_page){ ?>

<!-- Support Icons - Brand Slider/Edit in Admin > Tools > Define Pages Editor > define_footer_support_icons_brands.php -->

<?php include zen_get_file_directory(DIR_WS_LANGUAGES . $_SESSION['language'] . '/html_includes/', 

	FILENAME_DEFINE_FOOTER_SUPPORT_ICONS_BRANDS, 'false'); 

?>

<!-- Support Icons / Brand Slider Ends -->

<?php } ?>



<!-- Footer Wrapper -->

<div class="footer-wrapper">

    <!-- Newsletter Column/Edit in Admin > Tools > Define Pages Editor > define_footer_social_newletter_column.php -->

    <?php include zen_get_file_directory(DIR_WS_LANGUAGES . $_SESSION['language'] . '/html_includes/', 

		FILENAME_DEFINE_FOOTER_SOCIAL_NEWSLETTER_COLUMN, 'false'); 

	?>

    <!-- Newsletter Column Ends -->

	

    <div id="footer-2">

		<div class="container">	

            <div class="row">

                <!-- About us Column/Edit in Admin > Tools > Define Pages Editor > define_footer_aboutus_column.php -->

                <?php include zen_get_file_directory(DIR_WS_LANGUAGES . $_SESSION['language'] . '/html_includes/', 

					FILENAME_DEFINE_FOOTER_ABOUTUS_COLUMN, 'false'); 

				?>

                <!-- About us Column Ends -->

                <!-- Information Link Column/Edit in Admin > Tools > Define Pages Editor > define_footer_information_links.php -->

                <?php include zen_get_file_directory(DIR_WS_LANGUAGES . $_SESSION['language'] . '/html_includes/', 

					FILENAME_DEFINE_FOOTER_INFORMATION_LINKS, 'false'); 

				?>

                <!-- Extra Details Link Column Ends -->

                <!-- My Account Column/Edit in Admin > Tools > Define Pages Editor > define_footer_account_links.php -->

                <?php include zen_get_file_directory(DIR_WS_LANGUAGES . $_SESSION['language'] . '/html_includes/', 

					FILENAME_DEFINE_FOOTER_ACCOUNT_LINKS, 'false'); 

				?>

                <!-- My Account Column Ends -->

                <!-- Contact Us Column/Edit in Admin > Tools > Define Pages Editor > define_footer_contactus.php -->

                <?php include zen_get_file_directory(DIR_WS_LANGUAGES . $_SESSION['language'] . '/html_includes/', 

					FILENAME_DEFINE_FOOTER_CONTACTUS, 'false'); 

				?>

                <!-- Contact Us Column ends -->

            </div>

    	</div>

    </div>    

    

    <!--Soclal Icons - Payment Image/Edit in Admin > Tools > Define Pages Editor > define_footer_social_icons.php -->  

	<?php include zen_get_file_directory(DIR_WS_LANGUAGES . $_SESSION['language'] . '/html_includes/', 

		FILENAME_DEFINE_FOOTER_SOCIAL_ICONS, 'false'); 

	?>

    <!--Soclal Icons - Payment Image Ends -->

    

    <!--Copyright Row -->

    <?php if($store_copyright != NULL) { ?>

    <div class="copyright">

        <div class="container">

            <div class="row">

                <div class="copyright-wrapper col-lg-12">

                    <div class="copyright-text wow bounceInLeft" data-wow-delay="1">

                        <p>&copy; <?php echo $store_copyright; ?></p>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <?php } ?>

    <!--CopyRight Row Ends -->

    

    <a id="w2b-StoTop" class="back-to-top" style="display: block;">Back to Top</a>

</div>

<!-- Footer Wrapper Ends -->

<?php

} // flag_disable_footer

?>

<!-- Edify JS Files -->

<!-- Google Jquery -->

<script src="//code.jquery.com/jquery-latest.js"></script>

<!-- Google Jquery Ends -->

<!-- Menu Maker JS -->

<script src="<?php  echo $template->get_template_dir('',DIR_WS_TEMPLATE, $current_page_base,'jscript').'/menumaker.js'?>" type="text/javascript"></script>

<!-- Menu Maker JS Ends -->

<!-- Color Box Zoom for Homepage -->

<script src="<?php  echo $template->get_template_dir('',DIR_WS_TEMPLATE, $current_page_base,'jscript').'/jquery.colorbox.js'?>" type="text/javascript"></script>

<!-- Color Box Zoom for Homepage -->

<!-- Bootstrap JS -->

<script src="<?php  echo $template->get_template_dir('',DIR_WS_TEMPLATE, $current_page_base,'jscript').'/bootstrap.js'?>" type="text/javascript"></script>

<!-- Bootstrap JS Ends -->

<!-- Browser Selector JS -->

<script src="<?php  echo $template->get_template_dir('',DIR_WS_TEMPLATE, $current_page_base,'jscript').'/css_browser_selector.js'?>" type="text/javascript"></script>

<!-- Browser Selector JS Ends -->

<!-- Edify Custom JS for Home Page V1, V2 and V3 -->

<?php if($homepage_version == 'homepage_version_1' || $homepage_version == 'homepage_version_3') { ?>

	<script src="<?php  echo $template->get_template_dir('',DIR_WS_TEMPLATE, $current_page_base,'jscript').'/edify_homepage_1.js'?>" type="text/javascript">

    </script>

<?php } elseif($homepage_version == 'homepage_version_2') { ?>

	<script src="<?php  echo $template->get_template_dir('',DIR_WS_TEMPLATE, $current_page_base,'jscript').'/edify_homepage_2.js'?>" type="text/javascript">

    </script>

<?php } ?>

<!-- Edify Custom JS for Home Page V1, V2 and V3 Ends -->

<!-- Tab JS -->

<script src="<?php  echo $template->get_template_dir('',DIR_WS_TEMPLATE, $current_page_base,'jscript').'/tabcontent.js'?>" type="text/javascript"></script>

<!-- Tab JS Ends -->

<!--Owl Slider-->

<script src="<?php  echo $template->get_template_dir('',DIR_WS_TEMPLATE, $current_page_base,'jscript').'/owl.carousel.js'?>" type="text/javascript"></script>

<!--Owl Slider Ends-->

<!-- WOW JS -->

<script src="<?php  echo $template->get_template_dir('',DIR_WS_TEMPLATE, $current_page_base,'jscript').'/wow.min.js'?>" type="text/javascript"></script>

<script type="text/javascript">

    var wow = new WOW(

		{

			boxClass: 'wow', // animated element css class (default is wow)

			animateClass: 'animated', // animation css class (default is animated)

			offset: 0, // distance to the element when triggering the animation (default is 0)

			mobile: false // trigger animations on mobile devices (true is default)

		}

	);

		wow.init(); 

</script>

<!-- WOW JS Ends -->

<!-- JQuery Lightbox JS and Cloud Zoom JS-->  

<?php if (in_array($current_page_base,explode(",",'product_info,product_reviews_info,product_reviews,product_reviews_write'))) { ?>

<script src="<?php echo $template->get_template_dir('',DIR_WS_TEMPLATE, $current_page_base,'jscript').'/jscript_jquery_1-4-4.js'?>" type="text/javascript"></script>

<script src="<?php  echo $template->get_template_dir('',DIR_WS_TEMPLATE, $current_page_base,'jscript').'/cloud-zoom.1.0.3.js'?>" type="text/javascript"></script>

<script type="text/javascript">

//Cloud Zoom

var cld = jQuery.noConflict();

cld('#zoom01, .cloud-zoom-gallery').CloudZoom();

</script>

<?php } ?>

<!-- JQuery Lightbox JS and Cloud Zoom JS Ends--> 
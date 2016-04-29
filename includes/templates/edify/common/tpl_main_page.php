<?php
/* @package templateSystem
 * @copyright Copyright 2003-2007 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: tpl_main_page.php 7085 2007-09-22 04:56:31Z ajeh $
 */
?>
</head>
<?php
// the following IF statement can be duplicated/modified as needed to set additional flags
// Code to Disable the Left and Right Column from Page
  if (in_array($current_page_base,explode(",",'product_info,products_new,products_all,specials,featured_products,checkout_shipping_address,checkout_payment,checkout_shipping,checkout_payment_address,checkout_confirmation,advanced_search_result,password_forgotten,account,account_history,account_history_info,account_edit,address_book,address_book_process,account_password,account_newsletters,account_notifications,gv_faq,gv_redeem,discount_coupon')) ) {
	$flag_disable_left = true;
  }
  if (in_array($current_page_base,explode(",",'login,create_account,shopping_cart'))) {
		$flag_disable_left = true;
		$flag_disable_right = true;
	}
  if (in_array($current_page_base,explode(",",'advanced_search,checkout_success,time_out,page_not_found,product_reviews_write,reviews,product_reviews,product_reviews_info,contact_us,logoff,create_account_success')) ) {
    $flag_disable_right = true;
  }
	if ($current_page_base == 'index' and $_GET['cPath'] != '' ) {
		$flag_disable_left = true;
	}
	if ($current_page_base == 'index' and $_GET['manufacturers_id'] != '' ) {
		$flag_disable_left = true;
	}
  $header_template = 'tpl_header.php';
  $header_template_2 = 'tpl_header_v3.php';
  $footer_template = 'tpl_footer.php';
  $footer_template_2 = 'tpl_footer_v3.php';
  $left_column_file = 'column_left.php';
  $right_column_file = 'column_right.php';
  $body_id = ($this_is_home_page) ? 'indexHome' : str_replace('_', '', $_GET['main_page']);
?>
<body id="<?php echo $body_id . 'Body'; ?>"<?php if($zv_onload !='') echo ' onload="'.$zv_onload.'"'; ?>>

<!-- Code to Display the Home Page Version 3 -->
<?php if ($homepage_version == 'homepage_version_3') { ?>
	<div class="home-top-wrapper">
    	<div class="page homepage_v3">
        	<div class="container">
            	<div class="home-container">
            	<?php
					 /**
					  * prepares and displays header output
					  *
					  */
					  if (CUSTOMERS_APPROVAL_AUTHORIZATION == 1 && CUSTOMERS_AUTHORIZATION_HEADER_OFF == 'true' and ($_SESSION['customers_authorization'] != 0 or $_SESSION['customer_id'] == '')) {
						$flag_disable_header = true;
					  }
					  require($template->get_template_dir('tpl_header_v3.php',DIR_WS_TEMPLATE, $current_page_base,'common'). '/tpl_header_v3.php');?>
            	<?php if ($this_is_home_page) { 
					$flag_disable_right = true;
					$flag_disable_left = true;
				?>
                <div class="slideshow-container"><!-- Slideshow-Container-->
                	<div class="main-slideshow-wrapper">
                        <div class="row">
                        	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        		<div id="main-slideshow" class="owl-carousel owl-theme">
                            	<?php
	                                while(!$slideshow_query_result->EOF) {
                                    $slider_image = $slideshow_query_result->fields['slideshow_image'];
                                ?>
                                	<div class="item">
                                		<img alt="slideshow-images" src="<?php echo $template->get_template_dir('',DIR_WS_TEMPLATE, $current_page_base,'images').'/slideshow/'.$slider_image;?>" />
                                	</div>
                                <?php
                                	$slideshow_query_result->MoveNext();
                                    }
                                ?>
                                </div>
                            </div>
                        </div>
                	</div>
           		</div>
                <!-- Slideshow-Container Ends-->
                
                <!-- Custom Top Banner Container -->
                <?php if($display_banner == "yes") { ?>
                <div class="custom-banner-container">
                	<div class="custom-top-banner-block">
                    	<div class="row">
                        	<div class="custom-top-banner">
                            	<div class="custom-banner-image col-lg-4 col-md-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s">
                                	<div class="top-banner">
                                		<a href="<?php echo $banner1_link; ?>">
                                        	<img alt="custom-banner-1" src="<?php echo $template->get_template_dir
                                ('',DIR_WS_TEMPLATE, $current_page_base,'images').'/banners/'.$banner1;?>" /></a>
                                	</div>
                                </div>
                                <div class="custom-banner-image col-lg-4 col-md-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1.5s">
                                	<div class="top-banner">
                                    	<a href="<?php echo $banner2_link; ?>">
                                        	<img alt="custom-banner-2" src="<?php echo $template->get_template_dir
                                ('',DIR_WS_TEMPLATE, $current_page_base,'images').'/banners/'.$banner2;?>" /></a>
                                	</div>
                                </div>
                                <div class="custom-banner-image col-lg-4 col-md-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="2s">
                                	<div class="top-banner">
                                    	<a href="<?php echo $banner3_link; ?>">
                                        	<img alt="custom-banner-3" src="<?php echo $template->get_template_dir
                                ('',DIR_WS_TEMPLATE, $current_page_base,'images').'/banners/'.$banner3;?>" /></a>
                                	</div>
                            	</div>
                            </div>
                        </div>
                    </div>
                </div>
                        <div class="custom-banner-container">
                            <div class="custom-top-banner-block">
                                <div class="row">
                                    <div class="custom-top-banner">
                                        <div class="custom-banner-image col-lg-4 col-md-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s">
                                            <div class="top-banner">
                                                <a href="<?php echo $banner1_link; ?>">
                                                    <img alt="custom-banner-1" src="<?php echo $template->get_template_dir
                                                        ('',DIR_WS_TEMPLATE, $current_page_base,'images').'/banners/'.$banner1;?>" /></a>
                                            </div>
                                        </div>
                                        <div class="custom-banner-image col-lg-4 col-md-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1.5s">
                                            <div class="top-banner">
                                                <a href="<?php echo $banner2_link; ?>">
                                                    <img alt="custom-banner-2" src="<?php echo $template->get_template_dir
                                                        ('',DIR_WS_TEMPLATE, $current_page_base,'images').'/banners/'.$banner2;?>" /></a>
                                            </div>
                                        </div>
                                        <div class="custom-banner-image col-lg-4 col-md-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="2s">
                                            <div class="top-banner">
                                                <a href="<?php echo $banner3_link; ?>">
                                                    <img alt="custom-banner-3" src="<?php echo $template->get_template_dir
                                                        ('',DIR_WS_TEMPLATE, $current_page_base,'images').'/banners/'.$banner3;?>" /></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php } ?>
                <!-- Custom Top Banner Container Ends -->
                
				<?php } ?>
                <?php if (DEFINE_BREADCRUMB_STATUS == '1' || (DEFINE_BREADCRUMB_STATUS == '2' && !$this_is_home_page) ) { ?>
                <div class="main-breadcrumb"><!-- Breadcrumb Container -->
                    <div class="main">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="breadcrumbs">
                                    <div id="navBreadCrumb">
                                        <span class="breadcrumb-current"><?php echo $breadcrumb->last(); ?></span>
                                        <ul><?php echo $breadcrumb->trail(BREAD_CRUMBS_SEPARATOR); ?></ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- Breadcrumb Container Ends -->
				<?php } ?>
                
				<?php
                	if (COLUMN_LEFT_STATUS == 0 || (CUSTOMERS_APPROVAL == '1' and $_SESSION['customer_id'] == '') || (CUSTOMERS_APPROVAL_AUTHORIZATION == 1 && CUSTOMERS_AUTHORIZATION_COLUMN_LEFT_OFF == 'true' and ($_SESSION['customers_authorization'] != 0 or $_SESSION['customer_id'] == ''))) {
                // global disable of column_left
                $flag_disable_left = true;
                }
				?>
                
                <?php
					if (COLUMN_RIGHT_STATUS == 0 || (CUSTOMERS_APPROVAL == '1' and $_SESSION['customer_id'] == '') || (CUSTOMERS_APPROVAL_AUTHORIZATION == 1 && CUSTOMERS_AUTHORIZATION_COLUMN_RIGHT_OFF == 'true' and ($_SESSION['customers_authorization'] != 0 or $_SESSION['customer_id'] == ''))) {
					  // global disable of column_right
					  $flag_disable_right = true;
                 }
				 ?>
                
                <!-- Main Content Wrapper -->
                <div class="main-top">
                    <div class="main">
                        <div class="row">
                            <div class="main-content">
                                <div id="contentarea-wrapper">
                                    <?php if($flag_disable_left == true && $flag_disable_right == true ) { ?>
                                    <div id="centercontent-wrapper" class="col-lg-12 single-column">
                                            <?php } elseif($flag_disable_left == true) { ?> 
                                        <div id="centercontent-wrapper" class="col-lg-9 col-md-8 col-sm-12 
                                        col-xs-12 columnwith-right"> 
                                                <?php } elseif($flag_disable_right == true) { ?> 
                                            <div id="centercontent-wrapper" class="col-lg-9 col-md-8 col-sm-12 
                                            col-xs-12 columnwith-left">
                                                <?php }else { 
                                                    $class_name = 'three-columns';
                                                ?> 
                                                <div id="centercontent-wrapper" class="col-lg-6 col-md-4 col-sm-12 
                                                col-xs-12 noleft-margin two-column">
                                                    <?php } ?>
                                                    <?php
                                                      if (SHOW_BANNERS_GROUP_SET1 != '' && $banner = zen_banner_exists
													  ('dynamic', SHOW_BANNERS_GROUP_SET1)) {
                                                        if ($banner->RecordCount() > 0) {
                                                    ?>
                                                    <div id="bannerOne" class="banners"><?php echo zen_display_banner
													('static', $banner); ?></div>
                                                    <?php }} ?>
                                                    <!-- bof upload alerts -->
                                                    <?php if ($messageStack->size('upload') > 0) echo $messageStack->
													output('upload'); ?>
                                                    <!-- eof upload alerts -->
                                                    <?php /*prepares and displays center column */ ?>
                                                    <?php require($body_code); ?>
                                                    <?php
                                                      if (SHOW_BANNERS_GROUP_SET4 != '' && $banner = zen_banner_exists
													  ('dynamic', SHOW_BANNERS_GROUP_SET4)) {
                                                        if ($banner->RecordCount() > 0) {
                                                    ?>
                                                    <div id="bannerFour" class="banners"><?php echo zen_display_banner
													('static', $banner); ?></div>
                                                    <?php }} ?> 
                                                </div>
                                                
                                                <?php
                                                    if (!isset($flag_disable_left) || !$flag_disable_left) {
                                                        if($flag_disable_right == true) { 
                                                ?>
                                                    <div id="left-column" class="col-lg-3 col-md-4 col-sm-12 col-xs-12 
													<?php echo $class_name; ?>">	
                                                    <?php } else { ?>
                                                    <div id="left-column" class="col-lg-3 col-md-4 col-sm-6 col-xs-12 
													<?php echo $class_name; ?>">	
                                                    <?php } ?>
                                                    <?php /* prepares and displays left column sideboxes */ ?>
                                                        <div><?php require(DIR_WS_MODULES . zen_get_module_directory
														('column_left.php')); ?></div>
                                                    </div>
                                                <?php } ?>
                                                        
												<?php
                                                    if (!isset($flag_disable_right) || !$flag_disable_right) {
                                                        if($flag_disable_left == true) { 
                                                    ?>
                                                    <div id="right-column" class="col-lg-3 col-md-4 col-sm-12 
                                                    col-xs-12 rightcolumn">
                                                    <?php  } else {
                                                    ?>
                                                    <div id="right-column" class="col-lg-3 col-md-4 col-sm-6 
                                                    col-xs-12 rightcolumnwl">
                                                        <?php }
                                                         /* prepares and displays right column sideboxes */
                                                        ?>
                                                        <div><?php require(DIR_WS_MODULES . zen_get_module_directory
														('column_right.php')); ?></div>
                                                    </div>
                                                <?php } ?>
            				</div>
            			</div>
		    		</div>
            	</div>
            </div>
            <!-- Main Content Wrapper Ends -->
            <?php
			/**
			* prepares and displays footer output
			*
			*/
			if (CUSTOMERS_APPROVAL_AUTHORIZATION == 1 && CUSTOMERS_AUTHORIZATION_FOOTER_OFF == 'true' and ($_SESSION['customers_authorization'] != 0 or $_SESSION['customer_id'] == '')) {
				$flag_disable_footer = true;
			}
				require($template->get_template_dir('tpl_footer_v3.php',DIR_WS_TEMPLATE, $current_page_base,'common'). '/tpl_footer_v3.php');
			?>
            </div>
        </div>
    </div>
</body>
<?php } 
//Code to Display the Home Page Version 3 Ends Here
//Code to Display Home Page Version 1 and 2 Starts
	else { ?>
<body>
<?php
 /**
  * prepares and displays header output
  *
  */
  if (CUSTOMERS_APPROVAL_AUTHORIZATION == 1 && CUSTOMERS_AUTHORIZATION_HEADER_OFF == 'true' and ($_SESSION['customers_authorization'] != 0 or $_SESSION['customer_id'] == '')) {
    $flag_disable_header = true;
  }
  require($template->get_template_dir('tpl_header.php',DIR_WS_TEMPLATE, $current_page_base,'common'). '/tpl_header.php');?>
  <!-- Code to Display Home Page Version 1 -->
  	<?php if ($homepage_version =='homepage_version_1') { ?>
  		<?php if ($this_is_home_page) { 
			$flag_disable_right = true;
			$flag_disable_left = true;
		?>		
   			
            <!-- Slideshow-Container-->
            <div class="slideshow-container">
    			<div class="container">
                	<div class="main-slideshow-wrapper">
                        <div class="row">
                           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        		<div id="main-slideshow" class="owl-carousel owl-theme">
                            	<?php
	                                while(!$slideshow_query_result->EOF) {
                                    $slider_image = $slideshow_query_result->fields['slideshow_image'];
                                    ?>
                                	<div class="item">
                                		<img alt="slideshow-images" src="<?php  echo $template->get_template_dir  ('', DIR_WS_TEMPLATE, $current_page_base,'images').'/slideshow/'.$slider_image;?>" >
                                	</div>
                                    <?php
                                	    $slideshow_query_result->MoveNext();
                                    }
                                ?>
                                </div>
                            </div>
                        </div>
                	</div>
           		</div>
			</div>
            <!-- Slideshow-Container Ends-->
            
            <!-- Custom Top Banner Container -->
            <?php if($display_banner == "yes") { ?>
            <div class="custom-banner-container">
            	<div class="container">
                	<div class="custom-top-banner-block">
                    	<div class="row">
                        	<div class="custom-top-banner">
                            	<div class="custom-banner-image col-lg-4 col-md-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s">
                                	<div class="top-banner">
                                		<a href="<?php echo $banner1_link; ?>"><img alt="custom-banner-1" src="<?php echo $template->get_template_dir
                                ('',DIR_WS_TEMPLATE, $current_page_base,'images').'/banners/'.$banner1;?>" /></a>
                                	</div>
                                </div>
                                <div class="custom-banner-image col-lg-4  col-md-4  col-sm-4  col-xs-12  wow fadeInUp" data-wow-duration="1.5s">
                                	<div class="top-banner">
                                    	<a href="<?php echo $banner2_link; ?>"><img alt="custom-banner-2" src="<?php echo $template->get_template_dir
                                ('',DIR_WS_TEMPLATE, $current_page_base,'images').'/banners/'.$banner2;?>" /></a>
                                	</div>
                                </div>
                                <div class="custom-banner-image col-lg-4  col-md-4  col-sm-4  col-xs-12  wow fadeInUp" data-wow-duration="2s">
                                	<div class="top-banner">
                                    	<a href="<?php echo $banner3_link; ?>"><img alt="custom-banner-3" src="<?php echo $template->get_template_dir
                                ('',DIR_WS_TEMPLATE, $current_page_base,'images').'/banners/'.$banner3;?>" /></a>
                                	</div>
                            	</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <div class="custom-banner-container">
                    <div class="container">
                        <div class="custom-top-banner-block">
                            <div class="row">
                                <div class="custom-top-banner">
                                    <div class="custom-banner-image col-lg-4 col-md-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s">
                                        <div class="top-banner">
                                        <?php $banner1a_link ="http://www.zpalette.studio/develop/how-many-fit-ezp-24.html"; ?>
                                            <a href="<?php echo $banner1a_link; ?>"><img alt="custom-banner-1" src="<?php echo $template->get_template_dir
                                                    ('',DIR_WS_TEMPLATE, $current_page_base,'images').'/banners/'.'HOW-MANY-FIT.jpg';?>" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="custom-banner-image col-lg-4  col-md-4  col-sm-4  col-xs-12  wow fadeInUp" data-wow-duration="1.5s">
                                        <div class="top-banner">
                                          <?php $banner2a_link ="http://www.zpalette.studio/develop/video-ezp-19.html"; ?>
                                            <a href="<?php echo $banner2a_link; ?>"><img alt="custom-banner-2" src="<?php echo $template->get_template_dir
                                                    ('',DIR_WS_TEMPLATE, $current_page_base,'images').'/banners/'.'videos.jpg';?>" /></a>
                                        </div>
                                    </div>
                                    <div class="custom-banner-image col-lg-4  col-md-4  col-sm-4  col-xs-12  wow fadeInUp" data-wow-duration="2s">
                                        <div class="top-banner">
                                          <?php $banner3a_link ="http://www.zpalette.studio/develop/what-is-depotting-ezp-1.html"; ?>
                                            <a href="<?php echo $banner3a_link; ?>"><img alt="custom-banner-3" src="<?php echo $template->get_template_dir
                                                    ('',DIR_WS_TEMPLATE, $current_page_base,'images').'/banners/'.'GET-THE-TOOLS2.jpg';?>" /></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="custom-banner-container">
                    <div class="container">
                        <div class="custom-top-banner-block">
                            <div class="row">
                                <div class="custom-top-banner">
                                    <div class="custom-banner-image col-lg-4 col-md-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s">
                                        <div class="top-banner">
                                            <?php $banner1b_link ="http://www.zpalette.studio/develop/how-to-depot-videos-ezp-9.html"; ?>
                                            <a href="<?php echo $banner1b_link; ?>"><img alt="custom-banner-1" src="<?php echo $template->get_template_dir
                                                    ('',DIR_WS_TEMPLATE, $current_page_base,'images').'/banners/'.'GET-THE-TOOLS3.jpg';?>" /></a>
                                        </div>
                                    </div>
                                    <div class="custom-banner-image col-lg-4  col-md-4  col-sm-4  col-xs-12  wow fadeInUp" data-wow-duration="1.5s">
                                        <div class="top-banner">
                                          <?php $banner2b_link ="http://www.zpalette.studio/develop/newsletter-ezp-22.html"; ?>
                                            <a href="<?php echo $banner2b_link; ?>"><img alt="custom-banner-2" src="<?php echo $template->get_template_dir
                                                    ('',DIR_WS_TEMPLATE, $current_page_base,'images').'/banners/'.'JOIN-THE-CLUB.jpg';?>" /></a>
                                        </div>
                                    </div>
                                    <div class="custom-banner-image col-lg-4  col-md-4  col-sm-4  col-xs-12  wow fadeInUp" data-wow-duration="2s">
                                        <div class="top-banner">
                                            <a href="<?php echo $banner3b_link; ?>"><img alt="custom-banner-3" src="<?php echo $template->get_template_dir
                                                    ('',DIR_WS_TEMPLATE, $current_page_base,'images').'/banners/'.'Shop-Collabs-EDITED-1.jpg';?>" /></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <!-- Custom Top Banner Container Ends -->
		<?php } ?>
		<?php if (DEFINE_BREADCRUMB_STATUS == '1' || (DEFINE_BREADCRUMB_STATUS == '2' && !$this_is_home_page) ) { ?>
        	<!-- Breadcrumb Container -->
            <div class="main-breadcrumb">
                <div class="container">
                    <div class="main">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="breadcrumbs">
                                    <div id="navBreadCrumb">
                                        <span class="breadcrumb-current"><?php echo $breadcrumb->last(); ?></span>
                                        <ul><?php echo $breadcrumb->trail(BREAD_CRUMBS_SEPARATOR); ?></ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		<?php } ?>
       	<!-- Breadcrumb Container Ends -->
        
        <?php
			if (COLUMN_LEFT_STATUS == 0 || (CUSTOMERS_APPROVAL == '1' and $_SESSION['customer_id'] == '') || (CUSTOMERS_APPROVAL_AUTHORIZATION == 1 && CUSTOMERS_AUTHORIZATION_COLUMN_LEFT_OFF == 'true' and ($_SESSION['customers_authorization'] != 0 or $_SESSION['customer_id'] == ''))) {
// global disable of column_left
		$flag_disable_left = true;
		}
		?>
        
		<?php
       		if (COLUMN_RIGHT_STATUS == 0 || (CUSTOMERS_APPROVAL == '1' and $_SESSION['customer_id'] == '') || (CUSTOMERS_APPROVAL_AUTHORIZATION == 1 && CUSTOMERS_AUTHORIZATION_COLUMN_RIGHT_OFF == 'true' and ($_SESSION['customers_authorization'] != 0 or $_SESSION['customer_id'] == ''))) {
		  // global disable of column_right
		  $flag_disable_right = true;
		}
		?>        
       	
        <!-- Main Content Wrapper -->
        <div class="main-top">
            <div class="container">
                <div class="main">
                    <div class="row">
                        <div class="main-content">
                            <div id="contentarea-wrapper">
                                <?php if($flag_disable_left == true && $flag_disable_right == true ) { ?>
                                <div id="centercontent-wrapper" class="col-lg-12 single-column">
                                        <?php } elseif($flag_disable_left == true) { ?> 
                                    <div id="centercontent-wrapper" class="col-lg-9 col-md-8 col-sm-12 col-xs-12 
                                    columnwith-right"> 
                                            <?php } elseif($flag_disable_right == true) { ?> 
                                        <div id="centercontent-wrapper" class="col-lg-9 col-md-8 col-sm-12 
                                        col-xs-12 columnwith-left">
                                            <?php }else { 
                                                $class_name = 'three-columns';
                                            ?> 
                                            <div id="centercontent-wrapper" class="col-lg-6 col-md-4 col-sm-12 
                                            col-xs-12 noleft-margin two-column">
                                                <?php } ?>
                                                <?php
                                                  if (SHOW_BANNERS_GROUP_SET1 != '' && $banner = zen_banner_exists
												  ('dynamic', SHOW_BANNERS_GROUP_SET1)) {
                                                    if ($banner->RecordCount() > 0) {
                                                ?>
                                                <div id="bannerOne" class="banners"><?php echo zen_display_banner
												('static', $banner); ?></div>
                                                <?php } } ?>
                                            <!-- bof upload alerts -->
                                            <?php if ($messageStack->size('upload') > 0) echo $messageStack->output('upload'); ?>
                                            <!-- eof upload alerts -->
											<?php /* prepares and displays center column */ ?>
                                            <?php require($body_code); ?>
                                            <?php
                                              if (SHOW_BANNERS_GROUP_SET4 != '' && $banner = zen_banner_exists
                                              ('dynamic', SHOW_BANNERS_GROUP_SET4)) {
                                                if ($banner->RecordCount() > 0) {
                                            ?>
                                            <div id="bannerFour" class="banners"><?php echo zen_display_banner
                                            ('static', $banner); ?></div>
                                            <?php }} ?> 
                                            </div>
                                            
                                            <?php
                                                if (!isset($flag_disable_left) || !$flag_disable_left) {
													if($flag_disable_right == true) {  ?>
                                                <div id="left-column" class="col-lg-3 col-md-4 col-sm-12 col-xs-12 
												<?php echo $class_name; ?>">	
                                                <?php } else { ?>
                                                <div id="left-column" class="col-lg-3 col-md-4 col-sm-6 col-xs-12 
												<?php echo $class_name; ?>">	
                                                <?php } ?>
                                                <?php /* prepares and displays left column sideboxes */ ?>
                                                    <div><?php require(DIR_WS_MODULES . zen_get_module_directory
													('column_left.php')); ?></div>
                                                </div>
                                            <?php } ?>
                                            
											<?php
                                                if (!isset($flag_disable_right) || !$flag_disable_right) {
                                                    if($flag_disable_left == true) { 
                                                ?>
                                                <div id="right-column" class="col-lg-3 col-md-4 col-sm-12 col-xs-12 rightcolumn">
                                                <?php
                                                    } else {
                                                ?>
                                                <div id="right-column" class="col-lg-3 col-md-4 col-sm-6 col-xs-12 rightcolumnwl">
                                                    <?php }
                                                     /* prepares and displays right column sideboxes */
                                                    ?>
                                                    <div><?php require(DIR_WS_MODULES . zen_get_module_directory
													('column_right.php')); ?></div>
                                                </div>
                                            <?php } ?>
						</div>
            		</div>
            	</div>
        	</div>
    	</div>
    </div>                                            
	<?php } 
	//Code to Display Home Page version 1 Ends
	//Code to Display Home Page Version 2 Starts
	elseif ($homepage_version =='homepage_version_2') { 
		if ($this_is_home_page) { 
			$flag_disable_right = true;
			$flag_disable_left = false;
		}
		?>
		<?php if (DEFINE_BREADCRUMB_STATUS == '1' || (DEFINE_BREADCRUMB_STATUS == '2' && !$this_is_home_page) ) { ?>
        <!-- Breadcrumb Container -->
        <div class="main-breadcrumb">
            <div class="container">
                <div class="main">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="breadcrumbs">
                                <div id="navBreadCrumb">
                                    <span class="breadcrumb-current"><?php echo $breadcrumb->last(); ?></span>
                                    <ul><?php echo $breadcrumb->trail(BREAD_CRUMBS_SEPARATOR); ?></ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumb Container Ends -->
        <?php } ?>
        
        <?php
			if (COLUMN_LEFT_STATUS == 0 || (CUSTOMERS_APPROVAL == '1' and $_SESSION['customer_id'] == '') || (CUSTOMERS_APPROVAL_AUTHORIZATION == 1 && CUSTOMERS_AUTHORIZATION_COLUMN_LEFT_OFF == 'true' and ($_SESSION['customers_authorization'] != 0 or $_SESSION['customer_id'] == ''))) {
			//global disable of column_left
			$flag_disable_left = true;
		}
		?>
        
		<?php
			if (COLUMN_RIGHT_STATUS == 0 || (CUSTOMERS_APPROVAL == '1' and $_SESSION['customer_id'] == '') || (CUSTOMERS_APPROVAL_AUTHORIZATION == 1 && CUSTOMERS_AUTHORIZATION_COLUMN_RIGHT_OFF == 'true' and ($_SESSION['customers_authorization'] != 0 or $_SESSION['customer_id'] == ''))) {
		  //global disable of column_right
		  	$flag_disable_right = true;
		}
		?>  
              
        <!-- Main Content Wrapper -->
        <div class="main-top">
            <div class="container">
                <div class="main">
                    <div class="row">
                        <div class="main-content">
                            <div id="contentarea-wrapper">
                                <?php if($flag_disable_left == true && $flag_disable_right == true ) { ?>
                                <div id="centercontent-wrapper" class="col-lg-12 single-column">
                                        <?php } elseif($flag_disable_left == true) { ?> 
                                    <div id="centercontent-wrapper" class="col-lg-9 col-md-8 col-sm-12 col-xs-12 columnwith-right"> 
                                            <?php } elseif($flag_disable_right == true) { ?> 
                                        <div id="centercontent-wrapper" class="col-lg-9 col-md-8 col-sm-12 
                                        col-xs-12 columnwith-left">
                                            <?php }else { 
                                                $class_name = 'three-columns';
                                            ?> 
                                            <div id="centercontent-wrapper" class="col-lg-6 col-md-4 col-sm-12 
                                            col-xs-12 noleft-margin two-column">
                                                <?php } ?>
                                                <?php if ($this_is_home_page) { ?>
                                                <div id="main-slideshow" class="owl-carousel owl-theme">
													<?php
                                                        while(!$slideshow_query_result->EOF) {
                                                        $slider_image = $slideshow_query_result->fields['slideshow_image'];
                                                    ?>
                                                        <div class="item">
                                                            <img alt="slideshow-images" 
                                                            src="<?php echo $template->get_template_dir
                                              ('',DIR_WS_TEMPLATE, $current_page_base,'images').'/slideshow/'.$slider_image;?>" />
                                                        </div>
                                               <?php $slideshow_query_result->MoveNext(); }?>
                                                </div>
                                                <!-- Custom Top Banner Container -->
                                                <?php if($display_banner == "yes") { ?>
                                                <div class="custom-banner-container">
                									<div class="custom-top-banner-block">
                                                		<div class="custom-top-banner">
                                                			<div class="row">
                                                    			<div class="custom-banner-image col-lg-6 col-md-6 
                                                                col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s">
                                                        			<div class="top-banner">
                                                            			<a href="<?php echo $banner1_link; ?>">
                                                                        	<img alt="custom-banner-1" 
                                                                            src="<?php echo $template->get_template_dir('',
																			DIR_WS_TEMPLATE, $current_page_base,'images').
																			'/banners/'.$banner1;?>" /></a>
                                                        			</div>
                                                    			</div>
                                                    			<div class="custom-banner-image col-lg-6 col-md-6 
                                                                col-sm-6  col-xs-12 wow fadeInUp" data-wow-duration="1.5s">
                                                        			<div class="top-banner">
                                                            			<a href="<?php echo $banner2_link; ?>">
                                                                        	<img alt="custom-banner-2" src="<?php echo 
																			$template->get_template_dir('',DIR_WS_TEMPLATE, 
																			$current_page_base,'images').'/banners/'.$banner2;?>" 
                                                                            /></a>
                                                                    </div>
                                                    			</div>
                                                    		</div>
                                                		</div>
                                                	</div>
                                                </div>
                                                <?php } ?>
                                                <!-- Custom Top Banner Container Ends -->
												<?php } ?>
                                                <?php
                                                  if (SHOW_BANNERS_GROUP_SET1 != '' && $banner = zen_banner_exists
												  ('dynamic', SHOW_BANNERS_GROUP_SET1)) {
                                                    if ($banner->RecordCount() > 0) {
                                                ?>
                                                <div id="bannerOne" class="banners"><?php echo zen_display_banner
												('static', $banner); ?></div>
                                                <?php }} ?>
                                                <!-- bof upload alerts -->
                                                <?php if ($messageStack->size('upload') > 0) echo $messageStack->output
												('upload'); ?>
                                                <!-- eof upload alerts -->
                                                <?php /*prepares and displays center column*/ ?>
                                                <?php require($body_code); ?>
                                                <?php
                                                  if (SHOW_BANNERS_GROUP_SET4 != '' && $banner = zen_banner_exists
												  ('dynamic', SHOW_BANNERS_GROUP_SET4)) {
                                                    if ($banner->RecordCount() > 0) {
                                                ?>
                                                <div id="bannerFour" class="banners"><?php echo zen_display_banner
												('static', $banner); ?></div>
                                                <?php }} ?> 
                                            </div>
                                            
                                            <?php if (!isset($flag_disable_left) || !$flag_disable_left) {
												if($flag_disable_right == true) { ?>
                                                <div id="left-column" class="col-lg-3 col-md-4 col-sm-12 col-xs-12 
												<?php echo $class_name; ?>">	
                                                <?php } else { ?>
                                                <div id="left-column" class="col-lg-3 col-md-4 col-sm-6 col-xs-12 
												<?php echo $class_name; ?>">	
                                                <?php } ?>
                                                <?php /* prepares and displays left column sideboxes */ ?>
                                                    <div><?php require(DIR_WS_MODULES . zen_get_module_directory
													('column_left.php')); ?></div>
                                                </div>
                                            <?php } ?>
                                                    
											<?php
                                                if (!isset($flag_disable_right) || !$flag_disable_right) {
                                                    if($flag_disable_left == true) { 
                                                ?>
                                                <div id="right-column" class="col-lg-3 col-md-4 col-sm-12 col-xs-12 rightcolumn">
                                                <?php
                                                    } else {
                                                ?>
                                                <div id="right-column" class="col-lg-3 col-md-4 col-sm-6 col-xs-12 rightcolumnwl">
                                                    <?php }
                                                     /* prepares and displays right column sideboxes */
                                                    ?>
                                                    <div><?php require(DIR_WS_MODULES . zen_get_module_directory
													('column_right.php')); ?></div>
                                                </div>
                                            <?php } ?>
                    	</div>
                	</div>
            	</div>
        	</div>
    	</div>
    </div>
	<?php } ?>
    <!-- Main Content Wrapper Ends -->
    <!-- Code to Display Home Page Version 2 Ends -->
<?php
 /**
  * prepares and displays footer output
  *
  */
  if (CUSTOMERS_APPROVAL_AUTHORIZATION == 1 && CUSTOMERS_AUTHORIZATION_FOOTER_OFF == 'true' and ($_SESSION['customers_authorization'] != 0 or $_SESSION['customer_id'] == '')) {
    $flag_disable_footer = true;
  }
  require($template->get_template_dir('tpl_footer.php',DIR_WS_TEMPLATE, $current_page_base,'common'). '/tpl_footer.php');
?>
<!--bof- parse time display -->
<?php
  if (DISPLAY_PAGE_PARSE_TIME == 'true') {
?>
<div class="smallText center">Parse Time: <?php echo $parse_time; ?> - Number of Queries: <?php echo $db->queryCount(); ?> - Query Time: <?php echo $db->queryTime(); ?></div>
<?php
  }
?>
<!--eof- parse time display -->
<!--bof- banner #6 display -->
<?php
  if (SHOW_BANNERS_GROUP_SET6 != '' && $banner = zen_banner_exists('dynamic', SHOW_BANNERS_GROUP_SET6)) {
    if ($banner->RecordCount() > 0) {
?>
<?php
    }
  }
?>
<!--eof- banner #6 display -->
</body>
<?php } 
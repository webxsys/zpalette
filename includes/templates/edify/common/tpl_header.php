<?php
/**
 * @package templateSystem
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 @version $Id: tpl_header.php 3392 2006-04-08 15:17:37Z birdbrain $
 */
?>

<?php
	// Display all header alerts via messageStack:
  	if ($messageStack->size('header') > 0) {
    	echo $messageStack->output('header');
  	}
  	if (isset($_GET['error_message']) && zen_not_null($_GET['error_message'])) {
  		echo htmlspecialchars(urldecode($_GET['error_message']));
  	}
  	if (isset($_GET['info_message']) && zen_not_null($_GET['info_message'])) {
   		echo htmlspecialchars($_GET['info_message']);
	} else {
	}
?>
<?php
// Define some constants
$email_add = STORE_OWNER_EMAIL_ADDRESS;
$store_name = STORE_OWNER;
define( "RECIPIENT_NAME", $store_name );
define( "RECIPIENT_EMAIL", $email_add );
define( "EMAIL_SUBJECT", "Visitor Message" );
//echo RECIPIENT_EMAIL;

// Read the form values
$success = false;
$senderName = isset( $_POST['senderName'] ) ? preg_replace( "/[^\.\-\' a-zA-Z0-9]/", "", $_POST['senderName'] ) : "";
$senderEmail = isset( $_POST['senderEmail'] ) ? preg_replace( "/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['senderEmail'] ) : "";
$message = isset( $_POST['message'] ) ? preg_replace( "/(From:|To:|BCC:|CC:|Subject:|Content-Type:)/", "", $_POST['message'] ) : "";

// If all values exist, send the email
if ( $senderName && $senderEmail && $message ) {
  $recipient = RECIPIENT_NAME . " <" . RECIPIENT_EMAIL . ">";
  $headers = "From: " . $senderName . " <" . $senderEmail . ">";
  $success = mail( $recipient, EMAIL_SUBJECT, $message, $headers );
}
// Return an appropriate response to the browser
?>
<!--bof-header logo and navigation display-->
<?php
if (!isset($flag_disable_header) || !$flag_disable_header) {
?>
<!-- Contact Form Slide Toggle -->
<div class="extrabox hidden-xs">
	<div class="container">
    	<div class="row">
            <div class="extra-content">
                    <header>
                        <h4><?php echo HEADER_TITLE_QUICK_CONTACT; ?></h4>
                    </header>
                    <div class="widget-content">
                        <form method="post" id="contactForm-widget">
                            <div class="col-lg-6 col-sm-6">
                            <input type="text" name="senderName" id="senderName" placeholder="Name *" class="requiredField" />
                            <input type="text" name="senderEmail" id="senderEmail" placeholder="Email Address *" class="requiredField email" />
                            </div>
                            <div class="col-lg-6 col-sm-6 message">
                            <textarea name="message" id="message" placeholder="Message *" class="requiredField" rows="2"></textarea>
                            </div>
                            <input type="submit" id="sendMessage" name="sendMessage" value="Send Email" />
                            <span class="error-message">  </span>
                        </form><!-- end form -->
                    </div><!-- widget content -->
                </div>
      	</div>
	</div>
    <div class="arrow-down"><i class="fa fa-angle-up"></i></div><!-- arrow down -->
</div>
<!-- Contact Form Slide Toggle -->
<!-- Header Container -->
<header class="header-container">
    <div class="header">
       	<div class="header-top">
           	<div class="container">
               	<div class="row">
                   	<div class="header-top-left col-lg-6 col-md-6 col-sm-6 col-xs-12">
                       	<div class="block-header">
                        	<!-- Language Container -->
                            <?php if (HEADER_LANGUAGES_DISPLAY == 'True') { ?>
                           	<div class="language-switcher">
                               	<label><?php echo HEADER_TITLE_lANGUAGE; ?> : </label>
								<?php include(DIR_WS_MODULES . zen_get_module_directory('header_languages.php')); ?>
    		                </div>
                            <?php } ?>
                            <!-- Language Container ends -->
                            <!-- Currency Container -->
                            <?php if (HEADER_CURRENCIES_DISPLAY == 'True') {?>
                            <div class="currency_top">
                               	<label><?php echo HEADER_TITLE_CURRENCY; ?> : </label>
                                <?php include(DIR_WS_MODULES . zen_get_module_directory('header_currencies.php')); ?>
                            </div>
                            <?php } ?>
                            <!-- Currency Container Ends -->
                            <div style="color:#ffffff;font-size:110%%;">
                                <?php echo HEADER_TITLE_TOP_LEFT; ?>
                             </div>
                       	</div>
            		</div>
                    <!-- Top Right Links -->
                    <div class="header-top-right col-lg-6 col-md-6 col-sm-6 col-xs-12">
                       	<div class="top-link">
                           	<ul class="links">
                                <li class="first">
                                    <a href="#">
                                        <i class="fa fa-tablet fa-lg"></i>
                                        <?php echo HEADER_TITLE_BLOG; ?>&nbsp;&nbsp;
                                    </a>
                                </li>
                            	<li>
                                	<a class='my_account' href="<?php echo zen_href_link(FILENAME_ACCOUNT, '', 'SSL'); ?>">
                                    	<i class="fa fa-user"></i><?php echo HEADER_TITLE_MY_ACCOUNT; ?>
                                    </a>
                                </li>


                                <?php 
									if (STORE_STATUS == '0') 
										{
										if ($_SESSION['cart']->count_contents() != 0) {
								?>
                                <li>
                                	<a href="<?php echo zen_href_link(FILENAME_CHECKOUT_SHIPPING, '', 'SSL'); ?>" 
                                    class="checkout">
                                        <i class="fa fa-suitcase"></i><?php echo HEADER_TITLE_CHECKOUT; ?>
                                    </a>
                                </li>
                                <?php } else { ?>
                                <li>
                                	<a href="<?php echo HTTP_SERVER . DIR_WS_CATALOG ?>index.php?main_page=shopping_cart">
                                    	<i class="fa fa-suitcase"></i><?php echo HEADER_TITLE_CHECKOUT; ?>
                                    </a>
                              	</li>
                                <?php }
                                } ?>
                                 <li class="navbar-right">
        <a class="shopping_cart_link" href="<?php /*echo zen_href_link(FILENAME_SHOPPING_CART); */?>">
            <i class="fa fa-shopping-cart fa-lg"></i>
            <?php echo BOX_HEADING_SHOPPING_CART; ?>&nbsp;&nbsp;
            <?php echo $currencies->format($_SESSION['cart']->show_total());?>
        </a>
    </li>
                                <li class="arrow-down last hidden-xs">
                                   	<a data-toggle="tooltip" data-original-title="Quick Contact" href="#">
                                   	<i class="fa fa-angle-down"></i></a>
                                </li><!-- arrow down -->
                            </ul>
                        </div>
                    </div>
                    <!-- Top Right Links Ends -->
            	</div>
            </div>
      	</div>
        <div class="header-content">
           	<div class="container">
               	<div class="header-det row">
                   	<div class="header-content-center col-lg-4 col-lg-push-4 col-md-4 col-md-push-4 col-sm-12 col-xs-12">
                    	<!-- Logo Container -->
                       	<div class="logo">
                           	<a href="<?php echo zen_href_link(FILENAME_DEFAULT); ?>">
                       			<img alt="<?php if($logo_image!=NULL){ echo "logo"; } ?>" src="<?php echo $template->get_template_dir('',DIR_WS_TEMPLATE, $current_page_base,'images').'/logo/'.$logo_image;?>" />
                       		</a>
                        </div>
                        <!-- Logo Container -->
               		</div>
                    <div class="header-content-left col-lg-4 col-md-4 col-lg-pull-4 col-md-pull-4 col-sm-6 col-xs-12">
                       	<div class="header-left-wrapper input-group">
                    	    <div class="top-search">
                        	    <!--Search Bar-->
                            	<?php
                                $text = str_replace("ENTER SEARCH KEYWORDS HERE", "Search...", "ENTER SEARCH KEYWORDS HERE");
                                $content = "";
                                $content .= zen_draw_form('quick_find_header', zen_href_link
                                      (FILENAME_ADVANCED_SEARCH_RESULT, '', 'NONSSL', false), 'get');
                                $content .= zen_draw_hidden_field('main_page',FILENAME_ADVANCED_SEARCH_RESULT);
                                $content .= zen_draw_hidden_field('search_in_description', '1') . zen_hide_session_id();
                                $content .= '<div class="form-search">' . 
                                zen_draw_input_field('keyword', '', 'class="input-text" maxlength="30" value="'.$text.'" onfocus="if(this.value == \''.$text.'\') this.value = \'\';" onblur="if (this.value == \'\') this.value = \'' . $text . '\';"') . '<button class="button" title="Search" type="submit"><span><i class="fa fa-search"></i></span></button></div>';
                                $content .= "</form>";
                                echo($content);
                                ?>
                                <!--Search Bar Ends-->
                            </div>
                       	</div>
                   	</div>
                    <div class="header-content-right col-lg-4 col-md-4 col-sm-6 col-xs-12">
                 		<div class="greeting_msg">
                        	<?php if (SHOW_CUSTOMER_GREETING == 1) { 
                            	if (isset($_SESSION['customer_id']) && $_SESSION['customer_first_name']) {
                            ?>
                            	<span class="greeting"><?php echo "Welcome " .$_SESSION['customer_first_name'] . ' ' .
                                	$_SESSION['customer_last_name']; ?>
                                </span>
                                <?php } else { ?>
                                <span class="greeting">
                                	<?php // echo 'Welcome to our online Store !'; ?>
                                    <?php echo ""; ?>
                               	</span>
                                <?php } 
							}?>
                            <?php if ($_SESSION['customer_id']) { ?>
                            	<a class='logout' href="<?php echo zen_href_link(FILENAME_LOGOFF, '', 'SSL'); ?>">
                                   	<i class="fa fa-sign-out"></i><?php echo HEADER_TITLE_LOGOFF; ?>
                                </a>
                           	<?php } else { ?>
                               	<a class='login' href="<?php echo zen_href_link(FILENAME_LOGIN, '', 'SSL'); ?>">
                                   	<i class="fa fa-sign-in"></i><?php echo HEADER_TITLE_LOGIN; ?>
                                </a>
                            <?php } ?>
                       	</div>
                    </div>
                </div>
            </div>
       	</div>
        <!-- Main Menu -->
        <div class="nav-maincontainer">
            <div class="container">
                <div class="nav-container">
                    <div id="cssmenu">
                        <?php require($template->get_template_dir
                        ('tpl_drop_menu.php',DIR_WS_TEMPLATE, $current_page_base,'common'). '/tpl_drop_menu.php');?>
                    </div>
                </div>
            </div>
       	</div>
        <!--Main Menu ends -->
        <!-- Sticky Header wrapper --> 
        <div class="sticky-header-wrapper">
        	<div class="container">
            	<div class="row">
                	<div class="sticky-header-content">
                    	<div class="logo col-lg-3 col-md-3 hidden-xs hidden-sm">
                         	<a href="<?php echo zen_href_link(FILENAME_DEFAULT); ?>">
                        		<img alt="<?php if($logo_image!=NULL){ echo "logo"; } ?>" src="<?php echo $template->get_template_dir('',DIR_WS_TEMPLATE, $current_page_base,'images').'/logo/'.$logo_image;?>" />
                        	</a>
                	    </div>
                    <!--	<div class="top-search col-lg-4 col-md-3 col-sm-4">
                        	<!--Search Bar-->
                            <?php
/*                            $text = str_replace("ENTER SEARCH KEYWORDS HERE", "Search...", "ENTER SEARCH KEYWORDS HERE");
                            $content = "";
                            $content .= zen_draw_form('quick_find_header', zen_href_link
                                    (FILENAME_ADVANCED_SEARCH_RESULT, '', 'NONSSL', false), 'get');
                            $content .= zen_draw_hidden_field('main_page',FILENAME_ADVANCED_SEARCH_RESULT);
                            $content .= zen_draw_hidden_field('search_in_description', '1') . zen_hide_session_id();
                            $content .= '<div class="form-search">' . 
                            zen_draw_input_field('keyword', '', 'class="input-text" maxlength="30" value="'.$text.'" onfocus="if(this.value == \''.$text.'\') this.value = \'\';" onblur="if (this.value == \'\') this.value = \'' . $text . '\';"') . '<button class="button" title="Search" type="submit"><span><i class="fa fa-search"></i></span></button></div>';
                            $content .= "</form>";
                            echo($content);
                            */?>
                            <!--Search Bar Ends-->
                       	</div>-->
                        <div class="custom_links topbar_links col-lg-5 col-md-6 col-sm-8">
                        	<div class="header">
                            	<nav>
                                	<ul>

                                    	<li>
                                        	<a class="shopping_cart_link" href="<?php echo HTTP_SERVER . DIR_WS_CATALOG ?>index.php?main_page=shopping_cart">
                                            	<i class="fa fa-shopping-cart fa-lg"></i>
                                            	<?php echo BOX_HEADING_SHOPPING_CART; ?>&nbsp;&nbsp;
                                            	<?php echo $currencies->format($_SESSION['cart']->show_total());?>
                                            </a>
                                       	</li>
                                        <li>
                                        	<?php if ($_SESSION['customer_id']) { ?>
                                            	<a class='logout' href="<?php echo zen_href_link(FILENAME_LOGOFF, '', 'SSL'); ?>">
                                                	<i class="fa fa-sign-out"></i><?php echo HEADER_TITLE_LOGOFF; ?>
                                                </a>
                                            <?php } else { ?>
                                            	<a class='login' href="<?php echo zen_href_link(FILENAME_LOGIN, '', 'SSL'); ?>">
                                                	<i class="fa fa-sign-in"></i><?php echo HEADER_TITLE_LOGIN; ?>
                                                </a>
                                            <?php } ?>
                                       	</li>
                                        <li class="contact_us">
                							<a href="<?php echo zen_href_link(FILENAME_CONTACT_US."&pg=contact_us", '', 'NONSSL'); ?>">
												<i class="fa fa-pencil fa-lg"></i><?php echo HEADER_TITLE_CONTACT_US; ?>
                   							</a>
                 						</li>
                                        <li class="last">
                                            <a href="#">
                                                <i class="fa fa-tablet fa-lg"></i>
                                                <?php echo HEADER_TITLE_BLOG; ?>&nbsp;&nbsp;
                                            </a>
                                        </li>
                                   	</ul>
                                </nav>   
                           	</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>`
</header><!-- header-container End-->
<?php if (!$this_is_home_page) { ?>
	<div id="headerpic">
		<?php
        	if (SHOW_BANNERS_GROUP_SET3 != '' && $banner = zen_banner_exists('dynamic', SHOW_BANNERS_GROUP_SET3)) {
            	if ($banner->RecordCount() > 0) {
        ?>
		<div id="bannerThree" class="banners"><?php echo zen_display_banner('static', $banner); ?></div>
		<?php
            }
          }
        ?>
	</div>
		<?php } ?>
    <?php } ?>
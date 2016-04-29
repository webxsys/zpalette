<?php 
/**
 * Edify - Premium Zencart Template
 *
 * @package Edify Admin File
 * @author Perfectus Inc.
 * @author website www.perfectusinc.com
 * @copyright Copyright 2015-2016 Perfectus Inc.
 * @license http://www.gnu.org/copyleft/gpl.html   GNU Public License V2.0
 * @version $Id: edify.php 1.0
 */
 
require('includes/application_top.php');
require(DIR_WS_MODULES . 'prod_cat_header_code.php');	
	$query = "SELECT * from " . DB_PREFIX.edify;
			$query_result = $db->Execute($query);
			$theme_color_result = $query_result->fields['theme_color'];
			$theme_color_result = (explode(",",$theme_color_result));
			$homepage_version_result = $query_result->fields['homepage_version'];
			
			$logo_image_result = $query_result->fields['logo_image'];
			$main_menu_result = $query_result->fields['main_menu'];
			
			$store_address_result = $query_result->fields['store_address'];
			$store_map_result = $query_result->fields['store_map_address'];
			$latitude_map_result = $query_result->fields['latitude_map'];
			$longitude_map_result = $query_result->fields['longitude_map'];
			$altitude_map_result = $query_result->fields['altitude_map'];
			$store_contact_result = $query_result->fields['store_contact'];
			$store_email_result = $query_result->fields['store_email'];
			$store_copyright_result = $query_result->fields['store_copyright'];
			$store_fax_result = $query_result->fields['store_fax'];
			$store_skype_result = $query_result->fields['store_skype'];
			$newsletter_details_result = $query_result->fields['newsletter_details'];
			$aboutus_text_result = $query_result->fields['aboutus_text'];

			$facebook_link_result = $query_result->fields['facebook_link'];
			$twitter_link_result = $query_result->fields['twitter_link'];
			$pinterest_link_result = $query_result->fields['pinterest_link'];
			$google_link_result = $query_result->fields['google_link'];
			$tumblr_link_result = $query_result->fields['tumblr_link'];
			$linkedin_link_result = $query_result->fields['linkedin_link'];
			$youtube_link_result = $query_result->fields['youtube_link'];
			
			$body_bgimage_result = $query_result->fields['body_bgimage'];
						
			$banner1_result = $query_result->fields['banner1'];
			$banner2_result = $query_result->fields['banner2'];
			$banner3_result = $query_result->fields['banner3'];
			
			$banner1_link_result = $query_result->fields['banner1_link'];
			$banner2_link_result = $query_result->fields['banner2_link'];
			$banner3_link_result = $query_result->fields['banner3_link'];
						
			$payment_image_result = $query_result->fields['payment_image'];

			$display_banner_result = $query_result->fields['display_banner'];
			$display_social_result = $query_result->fields['display_social'];
			$display_support_result = $query_result->fields['display_support'];
			$display_newsletter_result = $query_result->fields['display_newsletter'];
			$display_googlemap_result = $query_result->fields['display_googlemap'];
			$display_payment_image_result = $query_result->fields['display_payment_image'];
			$display_brand_slider_result = $query_result->fields['display_brand_slider'];

			$custom_block1_icon_result = $query_result->fields['custom_block1_icon'];
			$custom_block2_icon_result = $query_result->fields['custom_block2_icon'];
			$custom_block3_icon_result = $query_result->fields['custom_block3_icon'];
			
			$custom_block1_title_result = $query_result->fields['custom_block1_title'];
			$custom_block2_title_result = $query_result->fields['custom_block2_title'];
			$custom_block3_title_result = $query_result->fields['custom_block3_title'];
			
			$custom_block1_subtitle_result = $query_result->fields['custom_block1_subtitle'];
			$custom_block2_subtitle_result = $query_result->fields['custom_block2_subtitle'];
			$custom_block3_subtitle_result = $query_result->fields['custom_block3_subtitle'];
			
			$google_site_key_result = $query_result->fields['google_site_key'];
			$google_secret_key_result = $query_result->fields['google_secret_key'];

	$slideshow_query = "SELECT * from " . DB_PREFIX.edify_slideshow;
	$slideshow_query_result = $db->Execute($slideshow_query);
	
	if(! isset($_POST['edify_settings']))
	{
		$theme_color = $theme_color_result;
		$homepage_version = $homepage_version_result;
		//print_r($theme_color);
		
		$logo_image = $logo_image_result;
		$main_menu = $main_menu_result;
		
		$store_address = $store_address_result;
		$store_map_address = $store_map_result;
		$latitude_map = $latitude_map_result;
		$longitude_map = $longitude_map_result;
		$altitude_map = $altitude_map_result;
		$store_contact = $store_contact_result;
		$store_email = $store_email_result;
		$store_copyright = $store_copyright_result;
		$store_fax = $store_fax_result;
		$store_skype = $store_skype_result;
		$newsletter_details = $newsletter_details_result;
		$aboutus_text = $aboutus_text_result;
		
		$facebook_link = $facebook_link_result;
		$twitter_link = $twitter_link_result;
		$pinterest_link = $pinterest_link_result;
		$google_link = $google_link_result;
		$tumblr_link = $tumblr_link_result;
		$linkedin_link = $linkedin_link_result;
		$youtube_link = $youtube_link_result;
		
		$display_banner = $display_banner_result;
		$display_social = $display_social_result;
		$display_support = $display_support_result;
		$display_newsletter = $display_newsletter_result;
		$display_googlemap = $display_googlemap_result;
		$display_payment_image = $display_payment_image_result;
		$display_brand_slider = $display_brand_slider_result;
		
		$body_bgimage = $body_bgimage_result;
		
		$banner1 = $banner1_result;
		$banner2 = $banner2_result;
		$banner3 = $banner3_result;

		$banner1a = $banner1a_result;
		$banner2a = $banner2a_result;
		$banner3a = $banner3a_result;

		$banner1b = $banner1b_result;
		$banner2b = $banner2b_result;
		$banner3b = $banner3b_result;


		$banner1_link = $banner1_link_result;
		$banner2_link = $banner2_link_result;
		$banner3_link = $banner3_link_result;

		$banner1a_link = $banner1a_link_result;
		$banner2a_link = $banner2a_link_result;
		$banner3a_link = $banner3a_link_result;

		$banner1b_link = $banner1b_link_result;
		$banner2b_link = $banner2b_link_result;
		$banner3b_link = $banner3b_link_result;

		$payment_image = $payment_image_result;
		
		$custom_block1_icon = $custom_block1_icon_result;
		$custom_block2_icon = $custom_block2_icon_result;
		$custom_block3_icon = $custom_block3_icon_result;
		
		$custom_block1_title = $custom_block1_title_result;
		$custom_block2_title = $custom_block2_title_result;
		$custom_block3_title = $custom_block3_title_result;
		
		$custom_block1_subtitle = $custom_block1_subtitle_result;
		$custom_block2_subtitle = $custom_block2_subtitle_result;
		$custom_block3_subtitle = $custom_block3_subtitle_result;
		
		$google_site_key = $google_site_key_result;
		$google_secret_key = $google_secret_key_result;
	}
	
	if(isset($_POST['edify_settings']))
	{
		header('Location: '.$_SERVER['PHP_SELF']); /* Important */
		
		$theme_color = $_POST['theme_color'] . ',' . $_POST['theme_color_2'] . ',' . $_POST['theme_color_3'];
		$theme_color = trim($theme_color);
		if($theme_color == NULL){
			$theme_color = $theme_color_result;	
		}
		$logo_image = $_FILES["file_logoimage"]["name"];
		if($logo_image == NULL){
			$logo_image = $logo_image_result;
		}
		$homepage_version = $_POST['homepage_version'];
		$main_menu = $_POST['main_menu'];
		$store_address = trim($_POST['store_address']);
		$store_map_address = trim($_POST['store_map_address']);
		$latitude_map = trim($_POST['latitude_map']);
		$longitude_map = trim($_POST['longitude_map']);
		$altitude_map = trim($_POST['altitude_map']);
		$store_contact = trim($_POST['store_contact']);
		$store_email = trim($_POST['store_email']);
		$store_copyright = trim($_POST['store_copyright']);
		$store_fax = trim($_POST['store_fax']);
		$store_skype = trim($_POST['store_skype']);
		$newsletter_details = trim($_POST['newsletter_details']);
		$aboutus_text = trim($_POST['aboutus_text']);

		$display_banner = $_POST['display_banner'];
		$display_social = $_POST['display_social'];
		$display_support = $_POST['display_support'];
		$display_newsletter = $_POST['display_newsletter'];
		$display_googlemap = $_POST['display_googlemap'];
		$display_payment_image = $_POST['display_payment_image'];
		$display_brand_slider = $_POST['display_brand_slider'];

		$facebook_link = trim($_POST['facebook_link']);
		$twitter_link = trim($_POST['twitter_link']);
		$pinterest_link = trim($_POST['pinterest_link']);
		$google_link = trim($_POST['google_link']);
		$tumblr_link = trim($_POST['tumblr_link']);
		$linkedin_link = trim($_POST['linkedin_link']);
		$youtube_link = trim($_POST['youtube_link']);
				
		//top banners
		$banner1 = $_FILES["banner1"]["name"];
		if($banner1 == NULL){
			$banner1 = $banner1_result;
		}
		$banner2 = $_FILES["banner2"]["name"];
		if($banner2 == NULL){
			$banner2 = $banner2_result;
		}
		$banner3 = $_FILES["banner3"]["name"];
		if($banner3 == NULL){
			$banner3 = $banner3_result;
		}
		
		$body_bgimage = $_FILES["body_bgimage"]["name"];
		if($body_bgimage == NULL){
			$body_bgimage = $body_bgimage_result;
		}

		$banner1 = $_FILES["banner1"]["name"];
		if($banner1 == NULL){
			$banner1 = $banner1_result;
		}
		$banner2 = $_FILES["banner2"]["name"];
		if($banner2 == NULL){
			$banner2 = $banner2_result;
		}
		$banner3 = $_FILES["banner3"]["name"];
		if($banner3 == NULL){
			$banner3 = $banner3_result;
		}

		$banner1 = $_FILES["banner1"]["name"];
		if($banner1 == NULL){
			$banner1 = $banner1_result;
		}
		$banner2 = $_FILES["banner2"]["name"];
		if($banner2 == NULL){
			$banner2 = $banner2_result;
		}
		$banner3 = $_FILES["banner3"]["name"];
		if($banner3 == NULL){
			$banner3 = $banner3_result;
		}

		$payment_image = $_FILES["payment_image"]["name"];
		if($payment_image == NULL){
			$payment_image = $payment_image_result;
		}
		
		$banner1_link = trim($_POST['banner1_link']);
		$banner2_link = trim($_POST['banner2_link']);
		$banner3_link = trim($_POST['banner3_link']);
						
		$custom_block1_icon = trim($_POST['custom_block1_icon']);
		$custom_block2_icon = trim($_POST['custom_block2_icon']);
		$custom_block3_icon = trim($_POST['custom_block3_icon']);
		
		$custom_block1_title = trim($_POST['custom_block1_title']);
		$custom_block2_title = trim($_POST['custom_block2_title']);
		$custom_block3_title = trim($_POST['custom_block3_title']);
		
		$custom_block1_subtitle = trim($_POST['custom_block1_subtitle']);
		$custom_block2_subtitle = trim($_POST['custom_block2_subtitle']);
		$custom_block3_subtitle = trim($_POST['custom_block3_subtitle']);
		
		$google_site_key = trim(zen_db_prepare_input($_POST['google_site_key']));
		$google_secret_key = trim(zen_db_prepare_input($_POST['google_secret_key']));

		$edify_query = "UPDATE " . DB_PREFIX.edify. " SET theme_color='$theme_color', homepage_version='$homepage_version', body_bgimage='$body_bgimage', logo_image='$logo_image', main_menu='$main_menu', store_address='$store_address', store_fax='$store_fax', store_skype='$store_skype', store_map_address='$store_map_address', latitude_map='$latitude_map', longitude_map='$longitude_map', altitude_map='$altitude_map', newsletter_details='$newsletter_details', aboutus_text='$aboutus_text', store_contact='$store_contact', store_email='$store_email', store_copyright='$store_copyright', facebook_link='$facebook_link', twitter_link='$twitter_link', pinterest_link='$pinterest_link', google_link='$google_link', tumblr_link='$tumblr_link', linkedin_link='$linkedin_link', youtube_link='$youtube_link', payment_image='$payment_image', banner1='$banner1', banner1_link='$banner1_link', banner2='$banner2', banner2_link='$banner2_link', banner3='$banner3', banner3_link='$banner3_link', banner1a='$banner1a', banner1a_link='$banner1a_link', banner2a='$banner2a', banner2a_link='$banner2a_link', banner3a='$banner3a', banner3a_link='$banner3a_link', banner1b='$banner1b', banner1b_link='$banner1b_link', banner2b='$banner2b', banner2b_link='$banner2b_link', banner3b='$banner3b', banner3b_link='$banner3b_link', custom_block1_icon='$custom_block1_icon', custom_block1_title='$custom_block1_title', custom_block1_subtitle='$custom_block1_subtitle', custom_block2_icon='$custom_block2_icon', custom_block2_title='$custom_block2_title', custom_block2_subtitle='$custom_block2_subtitle', custom_block3_icon='$custom_block3_icon', custom_block3_title='$custom_block3_title', custom_block3_subtitle='$custom_block3_subtitle', display_banner='$display_banner', display_social='$display_social', display_support='$display_support', display_newsletter='$display_newsletter', display_googlemap='$display_googlemap', display_payment_image='$display_payment_image', display_brand_slider='$display_brand_slider', google_site_key='$google_site_key', google_secret_key='$google_secret_key' WHERE id=1";
		
		$edify_result = $db->Execute($edify_query);
		
		//slideshow-images
		foreach((array)$_FILES["slideshow_image"]["tmp_name"] as $key => $tmp_name) {
			$slideshow_image = $_FILES['slideshow_image']['name'][$key];
			$file_tmp =$_FILES['slideshow_image']['tmp_name'][$key];
			if($slideshow_image != NULL) {
				$slideshow_insert = "INSERT INTO " . DB_PREFIX.edify_slideshow . " (id, slideshow_image) VALUES ('','$slideshow_image')";
				$slideshow_result = $db->Execute($slideshow_insert);
				move_uploaded_file($file_tmp,"../includes/templates/" . $template_dir . "/images/slideshow/" . $slideshow_image);
			}
		}
		
		foreach((array)$_POST['slideshow_image_id'] as $key => $del_id ) {
			if(isset($_POST['slideshow_image_id'])){
				$checkboxAll = $_POST['slideshow_image_id'];
				$slideshow_image_delete = "DELETE FROM " . DB_PREFIX.edify_slideshow . " where id='$del_id'";
				$slideshow_delete_result = $db->Execute($slideshow_image_delete);
			}
		}
		
		if(isset($_POST['homepage_version']) && $homepage_version == 'homepage_version_2'){
				$homepage_query_categorycss= "UPDATE " . DB_PREFIX.layout_boxes. " SET layout_box_status='1',layout_box_location='0',layout_box_sort_order='0' where layout_box_name='categories_css.php ' and layout_template='edify'";
				$homepage_query_categorycss_result = $db->Execute($homepage_query_categorycss);
				
				$homepage_query_bannersall= "UPDATE " . DB_PREFIX.layout_boxes. " SET layout_box_status='1',layout_box_location='0',layout_box_sort_order='6' where layout_box_name='banner_box_all.php ' and layout_template='edify'";
				$homepage_query_bannersall_result = $db->Execute($homepage_query_bannersall);
				
				$homepage_query_bestsellers= "UPDATE " . DB_PREFIX.layout_boxes. " SET layout_box_status='1',layout_box_location='1',layout_box_sort_order='0' where layout_box_name='best_sellers.php ' and layout_template='edify'";
				$homepage_query_bestsellers_result = $db->Execute($homepage_query_bestsellers);
				
				$homepage_query_categories= "UPDATE " . DB_PREFIX.layout_boxes. " SET layout_box_status='0',layout_box_location='1',layout_box_sort_order='0' where layout_box_name='categories.php ' and layout_template='edify'";
				$homepage_query_categories_result = $db->Execute($homepage_query_categories);
				
				$homepage_query_new= "UPDATE " . DB_PREFIX.layout_boxes. " SET layout_box_status='1',layout_box_location='1',layout_box_sort_order='2' where layout_box_name='whats_new.php ' and layout_template='edify'";
				$homepage_query_new_result = $db->Execute($homepage_query_new);
				
				$homepage_query_featured= "UPDATE " . DB_PREFIX.configuration. " SET configuration_value='0' where configuration_key='SHOW_PRODUCT_INFO_MAIN_FEATURED_PRODUCTS'";
				$homepage_query_featured_result = $db->Execute($homepage_query_featured);
				
				$homepage_cat_query_featured= "UPDATE " . DB_PREFIX.configuration. " SET configuration_value='0' where configuration_key='SHOW_PRODUCT_INFO_CATEGORY_FEATURED_PRODUCTS'";
				$homepage_cat_query_featured_result = $db->Execute($homepage_cat_query_featured);
				
			}
			else {
				$homepage_query_categorycss= "UPDATE " . DB_PREFIX.layout_boxes. " SET layout_box_status='0',layout_box_location='0',layout_box_sort_order='0' where layout_box_name='categories_css.php ' and layout_template='edify'";
				$homepage_query_categorycss_result = $db->Execute($homepage_query_categorycss);
				
				$homepage_query_bannersall= "UPDATE " . DB_PREFIX.layout_boxes. " SET layout_box_status='1',layout_box_location='0',layout_box_sort_order='6' where layout_box_name='banner_box_all.php ' and layout_template='edify'";
				$homepage_query_bannersall_result = $db->Execute($homepage_query_bannersall);
				
				$homepage_query_bestsellers= "UPDATE " . DB_PREFIX.layout_boxes. " SET layout_box_status='1',layout_box_location='0',layout_box_sort_order='0' where layout_box_name='best_sellers.php ' and layout_template='edify'";
				$homepage_query_bestsellers_result = $db->Execute($homepage_query_bestsellers);
				
				$homepage_query_categories= "UPDATE " . DB_PREFIX.layout_boxes. " SET layout_box_status='1',layout_box_location='1',layout_box_sort_order='0' where layout_box_name='categories.php ' and layout_template='edify'";
				$homepage_query_categories_result = $db->Execute($homepage_query_categories);
				
				$homepage_query_new= "UPDATE " . DB_PREFIX.layout_boxes. " SET layout_box_status='0',layout_box_location='0',layout_box_sort_order='2' where layout_box_name='whats_new.php ' and layout_template='edify'";
				$homepage_query_new_result = $db->Execute($homepage_query_new);
				
				$homepage_query_featured= "UPDATE " . DB_PREFIX.configuration. " SET configuration_value='2' where configuration_key='SHOW_PRODUCT_INFO_MAIN_FEATURED_PRODUCTS'";
				$homepage_query_featured_result = $db->Execute($homepage_query_featured);
				
				$homepage_cat_query_featured= "UPDATE " . DB_PREFIX.configuration. " SET configuration_value='2' where configuration_key='SHOW_PRODUCT_INFO_CATEGORY_FEATURED_PRODUCTS'";
				$homepage_cat_query_featured_result = $db->Execute($homepage_cat_query_featured);
				
			}
		
		move_uploaded_file($_FILES["file_logoimage"]["tmp_name"],"../includes/templates/" . $template_dir . "/images/logo/" . $_FILES["file_logoimage"]["name"]);
		move_uploaded_file($_FILES["banner1"]["tmp_name"],"../includes/templates/" . $template_dir . "/images/banners/" . $_FILES["banner1"]["name"]);
		move_uploaded_file($_FILES["banner2"]["tmp_name"],"../includes/templates/" . $template_dir . "/images/banners/" . $_FILES["banner2"]["name"]);
		move_uploaded_file($_FILES["banner3"]["tmp_name"],"../includes/templates/" . $template_dir . "/images/banners/" . $_FILES["banner3"]["name"]);
		
		move_uploaded_file($_FILES["payment_image"]["tmp_name"],"../includes/templates/" . $template_dir . "/images/banners/" . $_FILES["payment_image"]["name"]);
		move_uploaded_file($_FILES["body_bgimage"]["tmp_name"],"../includes/templates/" . $template_dir . "/images/banners/" . $_FILES["body_bgimage"]["name"]);
	}
?>


<!doctype html public "-//W3C//DTD HTML 4.01 Transitional//EN">
<html <?php echo HTML_PARAMS; ?>>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo CHARSET; ?>">
<title><?php echo TITLE; ?></title>

<link rel="stylesheet" type="text/css" href="includes/stylesheet.css">
<link rel="stylesheet" type="text/css" href="../includes/templates/<?php echo $template_dir; ?>/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../includes/templates/<?php echo $template_dir; ?>/css/templatecss.css">
<link rel="stylesheet" type="text/css" href="../includes/templates/<?php echo $template_dir; ?>/css/mcColorPicker.css">
<link rel="stylesheet" type="text/css" href="includes/cssjsmenuhover.css" media="all" id="hoverJS">
<link href='http://fonts.googleapis.com/css?family=Telex|Muli|Quattrocento+Sans|Exo+2|Alef|Carme|PT+Sans' rel='stylesheet' type='text/css'>
<style type="text/css">
.accordian-header{
	color:#404040;
}
.accordian-header.active, h3.product_head_admin{
	color: <?php echo $theme_color; ?>;	
}
input[type="submit"]:hover{
	background-color: <?php echo $theme_color[1]; ?>;
	transition: all 0.3s ease-in 0s;
		-moz-transition: all 0.3s ease-in 0s;
		-webkit-transition: all 0.3s ease-in 0s;
		-o-transition: all 0.3s ease-in 0s;
		-ms-transition: all 0.3s ease-in 0s;	
}
</style>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js" type="text/javascript"></script>
<script src="../includes/templates/<?php echo $template_dir; ?>/jscript/mcColorPicker.js" type="text/javascript"></script>
<script type="text/javascript">
 var acc = jQuery.noConflict();
acc(document).ready(function(){

//Set default open/close settings
acc('.accordian-content').hide(); //Hide/close all containers
acc('.accordian-header:first').addClass('active').next().show(); //Add "active" class to first trigger, then show/open the immediate next container

//On Click
acc('.accordian-header').click(function(){
if( acc(this).next().is(':hidden') ) { //If immediate next container is closed...
acc('.accordian-header').removeClass('active').next().slideUp(); //Remove all .accordian-header classes and slide up the immediate next container
acc(this).toggleClass('active').next().slideDown(); //Add .accordian-header class to clicked trigger and slide down the immediate next container
}
return false; //Prevent the browser jump to the link anchor
});

});
</script>
<script language="javascript" src="includes/menu.js"></script>
<script language="javascript" src="includes/general.js"></script>
<script type="text/javascript">
  <!--
	function init()
	{
		cssjsmenu('navbar');
		if (document.getElementById)
		{
		  var kill = document.getElementById('hoverJS');
		  kill.disabled = true;
		}
		if (typeof _editor_url == "string")
		{
			HTMLArea.replaceAll();
		}
	}
  // -->
</script>
<?php if ($editor_handler != '') include ($editor_handler); ?>
</head>

<!-- body //-->
<body onLoad="init()">
<div id="spiffycalendar" class="text"></div>
<!-- header //-->
<?php require(DIR_WS_INCLUDES . 'header.php'); ?>
<!-- header_eof //-->

<!-- body //-->
<div id="maincontent-wrapper" class="edify_admin">
	<div class="container">
    	<div class="msadmin_options">
            <div class="product_info_accordian row">
            	<h3 class="product_head_admin">Edify Template Settings</h3>
				<form name="edify_settings" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                <div class="homepage_version">
                	<h4 class="accordian-header">Home Page Version :</h4>  
                    <div class="accordian-content">
                    	<p>                        
                			<label for="homepage_version">Select Home Page Version :</label>
                            
                            <input type="radio" name="homepage_version" value="homepage_version_1" <?php if($homepage_version=="homepage_version_1"){echo "checked";} ?>/>
                            	&nbsp; Home Page Version - 1  &nbsp; &nbsp;
            				
                            <input type="radio" name="homepage_version" value="homepage_version_2" <?php if($homepage_version=="homepage_version_2"){echo "checked";} else{}?>/>
                            	&nbsp; Home Page Version - 2 &nbsp; &nbsp;
                                
                            <input type="radio" name="homepage_version" value="homepage_version_3" <?php if($homepage_version=="homepage_version_3"){echo "checked";} else{}?>/>
                            	&nbsp; Home Page Version - 3
                        </p>
                        <p>
        					<label for="body_bgimage" style="vertical-align:middle">
                            Select Background Image for Homepage Version 3 :</label>
							<input type="file" size="30" name="body_bgimage" id="file" value="<?php echo $body_bgimage; ?>"/>
                            <br/><br/> 
							<?php if($body_bgimage != NULL) { 
								echo "<label style='vertical-align:top'>Current Image : </label>";?> 
                                <img height="auto" width="200px" src="../includes/templates/<?php echo $template_dir; ?>/images/banners/<?php echo $body_bgimage; ?>"/>
							<?php }?>
        				</p>
                    </div>
                </div>
				<div class="bg_color_setting">
					<h4 class="accordian-header">Choose your Theme Color :</h4>
					<div class="accordian-content">
                    	<p>
                            <label for="color">Theme Color - 1 :</label>
                            <input type="text" class="color" size="60" name="theme_color" value="<?php echo $theme_color[0]; ?>" /> 
                            <span class="admin-text" style="color:#FF4444"></span>
						</p>
                        <p>
                            <label for="color">Theme Color - 2 :</label>
                            <input type="text" class="color" size="60" name="theme_color_2" value="<?php echo $theme_color[1]; ?>" /> 
                            <span class="admin-text" style="color:#FF4444"></span>
						</p>
                        <p>
                            <label for="color">Theme Color - 3 :</label>
                            <input type="text" class="color" size="60" name="theme_color_3" value="<?php echo $theme_color[2]; ?>" /> 
                            <span class="admin-text" style="color:#FF4444"></span>
						</p>
                    </div>
               	</div>
				<div class="logo_setting">
					<h4 class="accordian-header">Store Logo :</h4>
            		<div class="accordian-content">
                    	<p>
        					<label for="file_logoimage" style="vertical-align:middle">Select Logo :</label>
							<input type="file" size="30" name="file_logoimage" id="file" value="<?php echo $logo_image; ?>"/><br/><br/> 
							<?php if($logo_image != NULL) { 
								echo "<label style='vertical-align:top'>Current Image : </label>";?> 
                                <img height="auto" width="200px" src="../includes/templates/<?php echo $template_dir; ?>/images/logo/<?php echo $logo_image; ?>"/>
							<?php }?>
        				</p>
    				</div>
              	</div>
                <div class="main_menu">
                	<h4 class="accordian-header">Main Menu Style :</h4>  
                    <div class="accordian-content">
                    	<p>                        
                			<label for="main_menu">Select Menu Style :</label>
                            
                            <input type="radio" name="main_menu" value="main_menu_1" <?php if($main_menu=="main_menu_1"){echo "checked";} ?>/>
                            	&nbsp; Simple Menu  &nbsp; &nbsp;
            				
                            <input type="radio" name="main_menu" value="main_menu_2" <?php if($main_menu=="main_menu_2"){echo "checked";} else{}?>/>
                            	&nbsp; Mega Menu &nbsp;
                                
                        </p>
                    </div>
                </div>
                <div class="slideshow">
                	<h4 class="accordian-header">Add Slideshow Images :</h4>
                    <div class="accordian-content">
                    	<p>
                        	<label for="slideshow_image">Slideshow Image:</label>
                            <input type="file" name="slideshow_image[]" multiple id="file" />
                            
                        </p>
                        <div class="banners">
                        	Current Slideshow Images: 
                            <span class="admin-text" style="color:#FF4444">
                                &nbsp; &nbsp; Select Image from below to Delete it.
                            </span>
                            <br/> <br/>
                            <?php while(!$slideshow_query_result->EOF) { 
								$slideshow_image_name = $slideshow_query_result->fields['slideshow_image'];
								$slideshow_image_id = $slideshow_query_result->fields['id'];
							?>
                            <div class="slideshow_image">
                            	<input type="checkbox" name="slideshow_image_id[]" value="<?php echo $slideshow_image_id; ?>" />
                                	<img height="auto" width="120px" src="../includes/templates/<?php echo $template_dir; ?>/images/slideshow/<?php echo $slideshow_image_name; ?>"/>
                            </div>
                            <?php $slideshow_query_result->MoveNext(); } ?>
                        </div>
                    </div>
                </div>
                <div class="store_banners">
                	<h4 class="accordian-header">Custom Top Banners [1] :</h4>
    				<div class="accordian-content">
                        <p>
                        	<!--<span class="admin-text" style="color:#FF4444">
                                &nbsp; &nbsp; Keep size of all images same. Width : 390px, Height : 150px
                            </span>-->
                        </p>
                        <div class="banners">
                        	<p>
        					<label for="display_banner" style="vertical-align:middle">Display Custom Top Banners : </label>
							<input type="radio" name="display_banner" value="yes" <?php if($display_banner=="yes"){echo "checked";} ?>/>
                            	&nbsp; Yes  &nbsp; &nbsp;
							<input type="radio" name="display_banner" value="no" <?php if($display_banner=="no"){echo "checked";} ?>/>
                            	&nbsp; No
        					</p>
                            <br>
                            <p>
                        		<label for="banner1">Top Banner - 1 :</label>
                            	<input type="file" size="30" name="banner1" id="file" value="<?php echo $banner1; ?>"/>
                        	</p>
                            <p>
                        		<label for="banner1_link">Link :</label>
                            	<input type="text" size="60" name="banner1_link" value="<?php echo $banner1_link; ?>"/>
                        	</p>
                            <p>
                                <?php if($banner1 != NULL) { 
								echo "<label style='vertical-align:top'>Current Image : </label>";?> 
                                <img height="auto" width="120px" src="../includes/templates/<?php echo $template_dir; ?>/images/banners/<?php echo $banner1; ?>"/>
							<?php } ?>
                            </p>
                        </div>
                        <div class="banners">
                            <p>
                        		<label for="banner2">Top Banner - 2 :</label>
                            	<input type="file" size="30" name="banner2" id="file" value="<?php echo $banner2; ?>"/>
                        	</p>
                            <p>
                        		<label for="banner2_link">Link :</label>
                            	<input type="text" size="60" name="banner2_link" value="<?php echo $banner2_link; ?>"/>
                        	</p>
                            <p>
                                <?php if($banner2 != NULL) { 
								echo "<label style='vertical-align:top'>Current Image : </label>";?> 
                                <img height="auto" width="120px" src="../includes/templates/<?php echo $template_dir; ?>/images/banners/<?php echo $banner2; ?>"/>
							<?php } ?>
                            </p>
                        </div>
                        <div class="banners">
                            <p>
                        		<label for="banner3">Top Banner - 3 :</label>
                            	<input type="file" size="30" name="banner3" id="file" value="<?php echo $banner3; ?>"/>
                        	</p>
                            <p>
                        		<label for="banner3_link">Link :</label>
                            	<input type="text" size="60" name="banner3_link" value="<?php echo $banner3_link; ?>"/>
                        	</p>
                            <p>
                                <?php if($banner3 != NULL) { 
								echo "<label style='vertical-align:top'>Current Image : </label>";?> 
                                <img height="auto" width="120px" src="../includes/templates/<?php echo $template_dir; ?>/images/banners/<?php echo $banner3; ?>"/>
							<?php } ?>
                            </p>
                        </div>
                    </div>
                </div>
					<div class="store_banners">
						<h4 class="accordian-header">Custom Top Banners [2] :</h4>
						<div class="accordian-content">
							<p>
								<!--<span class="admin-text" style="color:#FF4444">
                                    &nbsp; &nbsp; Keep size of all images same. Width : 390px, Height : 150px
                                </span>-->
							</p>
							<div class="banners">
								<p>
									<label for="display_banner" style="vertical-align:middle">Display Custom Top Banners : </label>
									<input type="radio" name="display_banner2" value="yes" <?php if($display_banner2=="yes"){echo "checked";} ?>/>
									&nbsp; Yes  &nbsp; &nbsp;
									<input type="radio" name="display_banner2" value="no" <?php if($display_banner2=="no"){echo "checked";} ?>/>
									&nbsp; No
								</p>
								<br>
								<p>
									<label for="banner1a">Top Banner - 1a :</label>
									<input type="file" size="30" name="banner1a" id="file" value="<?php echo $banner1a; ?>"/>
								</p>
								<p>
									<label for="banner1a_link">Link :</label>
									<input type="text" size="60" name="banner1a_link" value="<?php echo $banner1a_link; ?>"/>
								</p>
								<p>
									<?php if($banner1a != NULL) {
										echo "<label style='vertical-align:top'>Current Image : </label>";?>
										<img height="auto" width="120px" src="../includes/templates/<?php echo $template_dir; ?>/images/banners/<?php echo $banner1a; ?>"/>
									<?php } ?>
								</p>
							</div>
							<div class="banners">
								<p>
									<label for="banner2a">Top Banner - 2a :</label>
									<input type="file" size="30" name="banner2a" id="file" value="<?php echo $banner2a; ?>"/>
								</p>
								<p>
									<label for="banner2a_link">Link :</label>
									<input type="text" size="60" name="banner2a_link" value="<?php echo $banner2a_link; ?>"/>
								</p>
								<p>
									<?php if($banner2a != NULL) {
										echo "<label style='vertical-align:top'>Current Image : </label>";?>
										<img height="auto" width="120px" src="../includes/templates/<?php echo $template_dir; ?>/images/banners/<?php echo $banner2a; ?>"/>
									<?php } ?>
								</p>
							</div>
							<div class="banners">
								<p>
									<label for="banner3a">Top Banner - 3a :</label>
									<input type="file" size="30" name="banner3a" id="file" value="<?php echo $banner3a; ?>"/>
								</p>
								<p>
									<label for="banner3a_link">Link :</label>
									<input type="text" size="60" name="banner3a_link" value="<?php echo $banner3a_link; ?>"/>
								</p>
								<p>
									<?php if($banner3a != NULL) {
										echo "<label style='vertical-align:top'>Current Image : </label>";?>
										<img height="auto" width="120px" src="../includes/templates/<?php echo $template_dir; ?>/images/banners/<?php echo $banner3a; ?>"/>
									<?php } ?>
								</p>
							</div>
						</div>
					</div>

					<div class="store_banners">
						<h4 class="accordian-header">Custom Top Banners [3]:</h4>
						<div class="accordian-content">
							<p>
								<!--<span class="admin-text" style="color:#FF4444">
                                    &nbsp; &nbsp; Keep size of all images same. Width : 390px, Height : 150px
                                </span>-->
							</p>
							<div class="banners">
								<p>
									<label for="display_banner" style="vertical-align:middle">Display Custom Top Banners : </label>
									<input type="radio" name="display_banner3" value="yes" <?php if($display_banner3=="yes"){echo "checked";} ?>/>
									&nbsp; Yes  &nbsp; &nbsp;
									<input type="radio" name="display_banner3" value="no" <?php if($display_banner3=="no"){echo "checked";} ?>/>
									&nbsp; No
								</p>
								<br>
								<p>
									<label for="banner1c">Top Banner - 1c :</label>
									<input type="file" size="30" name="banner1c" id="file" value="<?php echo $banner1c; ?>"/>
								</p>
								<p>
									<label for="banner1_linkc">Link :</label>
									<input type="text" size="60" name="banner1_linkc" value="<?php echo $banner1_linkc; ?>"/>
								</p>
								<p>
									<?php if($banner1c != NULL) {
										echo "<label style='vertical-align:top'>Current Image : </label>";?>
										<img height="auto" width="120px" src="../includes/templates/<?php echo $template_dir; ?>/images/banners/<?php echo $banner1c; ?>"/>
									<?php } ?>
								</p>
							</div>
							<div class="banners">
								<p>
									<label for="banner2c">Top Banner - 2c :</label>
									<input type="file" size="30" name="banner2c" id="file" value="<?php echo $banner2c; ?>"/>
								</p>
								<p>
									<label for="banner2c_link">Link :</label>
									<input type="text" size="60" name="banner2_linkc" value="<?php echo $banner2_linkc; ?>"/>
								</p>
								<p>
									<?php if($banner2c != NULL) {
										echo "<label style='vertical-align:top'>Current Image : </label>";?>
										<img height="auto" width="120px" src="../includes/templates/<?php echo $template_dir; ?>/images/banners/<?php echo $banner2c; ?>"/>
									<?php } ?>
								</p>
							</div>
							<div class="banners">
								<p>
									<label for="banner3c">Top Banner - 3 :</label>
									<input type="file" size="30" name="banner3c" id="file" value="<?php echo $banner3c; ?>"/>
								</p>
								<p>
									<label for="banner3_linkc">Link :</label>
									<input type="text" size="60" name="banner3_linkc" value="<?php echo $banner3_linkc; ?>"/>
								</p>
								<p>
									<?php if($banner3 != NULL) {
										echo "<label style='vertical-align:top'>Current Image : </label>";?>
										<img height="auto" width="120px" src="../includes/templates/<?php echo $template_dir; ?>/images/banners/<?php echo $banner3c; ?>"/>
									<?php } ?>
								</p>
							</div>
						</div>
					</div>

					<div class="custom_content">
                	<h4 class="accordian-header">Support Icons Above Brand Slider :</h4>
    				<div class="accordian-content">
                        <p>
                        <label for="display_support" style="vertical-align:middle;width:31%" >Display Support Icons Above Brand Slider : </label>
                        <input type="radio" name="display_support" value="yes" <?php if($display_support=="yes"){echo "checked";} ?>/>
                            &nbsp; Yes  &nbsp; &nbsp;
                        <input type="radio" name="display_support" value="no" <?php if($display_support=="no"){echo "checked";} ?>/>
                            &nbsp; No
                        </p>
                        <p>
                        <label for="display_brand_slider" style="vertical-align:middle;width:31%" >Display Brand Slider : </label>
                        <input type="radio" name="display_brand_slider" value="yes" <?php if($display_brand_slider=="yes"){echo "checked";} ?>/>
                            &nbsp; Yes  &nbsp; &nbsp;
                        <input type="radio" name="display_brand_slider" value="no" <?php if($display_brand_slider=="no"){echo "checked";} ?>/>
                            &nbsp; No
                        </p>
                        <br>
                        <div class="custom_block_content">
                        	<h5>Custom Block - 1 </h5>
                    		<p>
                        		<label for="custom_block1_icon">Custom Block Font-awesome Icon :</label>
                            	<input type="text" size="60" name="custom_block1_icon" value="<?php echo $custom_block1_icon; ?>"/>
                        	</p>
                            <p>
                        		<label for="custom_block1_title">Custom Block Title :</label>
                            	<input type="text" size="60" name="custom_block1_title" value="<?php echo $custom_block1_title; ?>"/>
                        	</p>
                            <p>
                        		<label for="custom_block1_subtitle">Custom Block Subtitle :</label>
                            	<input type="text" size="60" name="custom_block1_subtitle" value="<?php echo $custom_block1_subtitle; ?>"/>
                        	</p>
                    	</div>
                        <div class="custom_block_content">
                        	<h5>Custom Block - 2 </h5>
                    		<p>
                        		<label for="custom_block2_icon">Custom Block Font-awesome Icon :</label>
                            	<input type="text" size="60" name="custom_block2_icon" value="<?php echo $custom_block2_icon; ?>"/>
                        	</p>
                            <p>
                        		<label for="custom_block2_title">Custom Block Title :</label>
                            	<input type="text" size="60" name="custom_block2_title" value="<?php echo $custom_block2_title; ?>"/>
                        	</p>
                            <p>
                        		<label for="custom_block2_subtitle">Custom Block Subtitle :</label>
                            	<input type="text" size="60" name="custom_block2_subtitle" value="<?php echo $custom_block2_subtitle; ?>"/>
                        	</p>
                    	</div>
                        <div class="custom_block_content">
                        	<h5>Custom Block - 3 </h5>
                    		<p>
                        		<label for="custom_block3_icon">Custom Block Font-awesome Icon :</label>
                            	<input type="text" size="60" name="custom_block3_icon" value="<?php echo $custom_block3_icon; ?>"/>
                        	</p>
                            <p>
                        		<label for="custom_block3_title">Custom Block Title :</label>
                            	<input type="text" size="60" name="custom_block3_title" value="<?php echo $custom_block3_title; ?>"/>
                        	</p>
                            <p>
                        		<label for="custom_block3_subtitle">Custom Block Subtitle :</label>
                            	<input type="text" size="60" name="custom_block3_subtitle" value="<?php echo $custom_block3_subtitle; ?>"/>
                        	</p>
                    	</div>
                	</div>
    			</div>
                <div class="contact_details">            
					<h4 class="accordian-header">Store Contact Details :</h4>
    				<div class="accordian-content">
                    	<p>
                    		<span class="admin-text" style="color:#FF4444">
                        		Leave empty to remove the detail from template.
                        	</span>
                    	</p>
                    	<p>
                        	<label for="store_address">Address :</label>
                            <textarea rows="3" cols="2" name="store_address" style="width:30%;"><?php echo $store_address; ?></textarea>
                        </p>
                        <p>
                            <label for="store_contact">Contact Number :</label>
                        	<input type="text" size="60" name="store_contact" value="<?php echo $store_contact; ?>" />
                        </p>
                        <p>
                            <label for="store_fax">Fax :</label>
                        	<input type="text" size="60" name="store_fax" value="<?php echo $store_fax; ?>" />
                        </p>
                        <p>
                            <label for="store_skype">Skype Id :</label>
                        	<input type="text" size="60" name="store_skype" value="<?php echo $store_skype; ?>" />
                        </p>
                        <p>
                            <label for="store_email">Store Email Address :</label>
                            <input type="text" size="60" name="store_email" value="<?php echo $store_email; ?>" />
                        </p>
                    </div>
                </div>
                <div class="sociallinks_details">            
					<h4 class="accordian-header">Store Social Links :</h4>
    				<div class="accordian-content">
						<p>
                        <label for="display_social" style="vertical-align:middle;width:21%" >Display Connect With Us Section : </label>
                        <input type="radio" name="display_social" value="yes" <?php if($display_social=="yes"){echo "checked";} ?>/>
                            &nbsp; Yes  &nbsp; &nbsp;
                        <input type="radio" name="display_social" value="no" <?php if($display_social=="no"){echo "checked";} ?>/>
                            &nbsp; No
                        </p>
                        <br>                        
                        <p>
                        	<label for="facebook_link">Facebook Page Link :</label>
                            <input type="text" size="60" name="facebook_link" value="<?php echo $facebook_link; ?>" />
                            <span class="admin-text" style="color:#FF4444">
                                <br/><br/>(e.g : envato). Leave text-box empty to hide the Facebook link.
                            </span>
                        </p>
                        <p>
                        	<label for="twitter_link">Twitter Page Link :</label>
                            <input type="text" size="60" name="twitter_link" value="<?php echo $twitter_link; ?>" />
                            <span class="admin-text" style="color:#FF4444">
                                <br/><br/>(e.g : envato). Leave text-box empty to hide the Twitter link.
                            </span>
                        </p>
                        <p>
                        	<label for="pinterest_link">Pinterest Link :</label>
                            <input type="text" size="60" name="pinterest_link" value="<?php echo $pinterest_link; ?>" />
                            <span class="admin-text" style="color:#FF4444">
                                <br/><br/>(e.g : envato). Leave text-box empty to hide the Pinterest link.
                            </span>
                        </p>
                        <p>
                        	<label for="google_link">Google Plus Link :</label>
                            <input type="text" size="60" name="google_link" value="<?php echo $google_link; ?>" />
                            <span class="admin-text" style="color:#FF4444">
                                <br/><br/>(e.g : https://plus.google.com/yourpage). Leave text-box empty to hide the Google Plus link.
                            </span>
                        </p>
                        <p>
                        	<label for="tumblr_link">Tumblr Page Link :</label>
                            <input type="text" size="60" name="tumblr_link" value="<?php echo $tumblr_link; ?>" />
                            <span class="admin-text" style="color:#FF4444">
                                <br/><br/>(e.g : http://yourpage.tumblr.com). Leave text-box empty to hide the Tumblr link.
                            </span>
                        </p>
                        <p>
                        	<label for="linkedin_link">LinkedIn Page Link :</label>
                            <input type="text" size="60" name="linkedin_link" value="<?php echo $linkedin_link; ?>" />
                            <span class="admin-text" style="color:#FF4444">
                                <br/><br/>Leave text-box empty to hide the LinkedIn link.
                            </span>
                        </p>
                        <p>
                        	<label for="youtube_link">Youtube Page Link :</label>
                            <input type="text" size="60" name="youtube_link" value="<?php echo $youtube_link; ?>" />
                            <span class="admin-text" style="color:#FF4444">
                                <br/><br/>Leave text-box empty to hide the Youtube link.
                            </span>
                        </p>
                    </div>
                </div>
                <div class="newsletter_details">            
					<h4 class="accordian-header">Newletter Subscribe Details :</h4>
    				<div class="accordian-content">
						<p>
                        <label for="display_newsletter" style="vertical-align:middle;width:27.5%" >Display Subscribe to our Newsletter Section : </label>
                        <input type="radio" name="display_newsletter" value="yes" <?php if($display_newsletter=="yes"){echo "checked";} ?>/>
                            &nbsp; Yes  &nbsp; &nbsp;
                        <input type="radio" name="display_newsletter" value="no" <?php if($display_newsletter=="no"){echo "checked";} ?>/>
                            &nbsp; No
                        </p>
                        <br>                        
                        <p>
                        	<label for="newsletter_details">Newsletter Subcribe Code for your Store (Mail Chimp Account) :</label>
            				<textarea rows="5" cols="2" name="newsletter_details" style="width:40%;"><?php echo $newsletter_details; ?></textarea>
            				<span class="admin-text" style="color:#FF4444;">
            					Get this code from your Mail Chimp Account. Follow instructions in Documentation to get the code.
            				</span>
                        </p>
                     </div>
                </div>
                <div class="payment_image">
                	<h4 class="accordian-header">Payment Method Image : </h4>
                    <div class="accordian-content">
						<p>
                        <label for="display_payment_image" style="vertical-align:middle;width:21%" >Display Payment Options Section : </label>
                        <input type="radio" name="display_payment_image" value="yes" <?php if($display_payment_image=="yes"){echo "checked";} ?>/>
                            &nbsp; Yes  &nbsp; &nbsp;
                        <input type="radio" name="display_payment_image" value="no" <?php if($display_payment_image=="no"){echo "checked";} ?>/>
                            &nbsp; No
                        </p>
                        <br>                        
                        <p>
                        	<label for="payment_image">Select Payment Method Image :</label>
                            <input type="file" size="30" name="payment_image" id="file" value="<?php echo $payment_image; ?>"/>
                        </p>
                        <p>
                        	<?php if($payment_image != NULL) { 
							echo "<label style='vertical-align:top'>Current Image : </label>";?> 
                            <img height="auto" width="100px" 
                            	src="../includes/templates/<?php echo $template_dir; ?>/images/banners/<?php echo $payment_image; ?>"/>
							<?php } ?>
                        </p>
                	</div>
                </div>
                <div class="googlemap_details">            
					<h4 class="accordian-header">Google Map on Contact Us Page :</h4>
    				<div class="accordian-content">
						<p>
                        <label for="display_googlemap" style="vertical-align:middle;width:25%" >Display Google Map on Contact Us Page : </label>
                        <input type="radio" name="display_googlemap" value="yes" <?php if($display_googlemap=="yes"){echo "checked";} ?>/>
                            &nbsp; Yes  &nbsp; &nbsp;
                        <input type="radio" name="display_googlemap" value="no" <?php if($display_googlemap=="no"){echo "checked";} ?>/>
                            &nbsp; No
                        </p>
                        <br>                        
                        <p>
                        	<label for="store_map_address">Store Address :</label>
            				<textarea rows="5" cols="2" name="store_map_address" style="width:38%;"><?php echo $store_map_address; ?></textarea>
                        </p>
                        <p>
                        	<label for="latitude_map">Latitude :</label>
            				<input type="text" size="60" name="latitude_map" value="<?php echo $latitude_map; ?>" />
                        </p>
                        <p>
                        	<label for="longitude_map">Longitude :</label>
            				<input type="text" size="60" name="longitude_map" value="<?php echo $longitude_map; ?>" />
                        </p>
                        <p>
                        	<label for="altitude_map">Altitude :</label>
            				<input type="text" size="60" name="altitude_map" value="<?php echo $altitude_map; ?>" />
                        </p>
                     </div>
                </div>
                <div class="aboutus_text">            
					<h4 class="accordian-header">About Us Text in Footer :</h4>
    				<div class="accordian-content">
                        <p>
							<span class="admin-text" style="color:#FF4444"> 
                            	Leave empty to remove the detail from template. 
                            </span>
						</p>
                        <p>
                        	<label for="aboutus_text">About Us Text :</label>
            				<textarea rows="5" cols="2" name="aboutus_text" style="width:40%;"><?php echo $aboutus_text; ?></textarea>
                        </p>
                     </div>
                </div>
                <div class="copyright_details">            
					<h4 class="accordian-header">Copyright Bar (Bottom of Page):</h4>
    				<div class="accordian-content">
                        <p>
							<span class="admin-text" style="color:#FF4444"> 
                            	Leave empty to remove the detail from template. 
                            </span>
						</p>
                        <p>
                        	<label for="store_copyright">Copy Right Information :</label>
                            <input type="text" size="60" name="store_copyright" value="<?php echo $store_copyright; ?>" />
                        </p>
    				</div>
                </div>
                
                <div class="google_details">            
					<h4 class="accordian-header">Google Recaptcha Keys For Sign Up and Contact Us Page :</h4>
    				<div class="accordian-content">
                        <span class="admin-text" style="color:#FF4444">
                        	Leave text-box empty to remove it.<br/><br/>
                        </span>
                        <p>
                        	<label for="google_site_key">Site Key :</label>
                            <input type="text" size="60" name="google_site_key" value="<?php echo $google_site_key; ?>" />
                        </p>
                        <p>
                        	<label for="google_secret_key">Secret Key :</label>
                            <input type="text" size="60" name="google_secret_key" value="<?php echo $google_secret_key; ?>" />
                        </p>
    				</div>
                </div>
                
        		<p style="text-align:center"><input type="submit" name="edify_settings" value="Save Changes" /></p>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- body_eof //-->

<!-- footer //-->
<?php require(DIR_WS_INCLUDES . 'footer.php'); ?>
<!-- footer_eof //-->

</body>
</html>
<?php require(DIR_WS_INCLUDES . 'application_bottom.php'); ?>
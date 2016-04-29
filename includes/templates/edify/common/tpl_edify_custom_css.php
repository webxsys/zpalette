<?php
/**
 * @package templateSystem
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 */
?>
<!--Query to fetch Edify values-->
<?php 
$edify_query = "SELECT * FROM " . DB_PREFIX.edify;
$edify_result = $db->Execute($edify_query);

$theme_color = $edify_result->fields['theme_color'];
$theme_color = (explode(",",$theme_color));

$homepage_version = $edify_result->fields['homepage_version'];
$body_bgimage = $edify_result->fields['body_bgimage'];

$logo_image = $edify_result->fields['logo_image'];
$main_menu = $edify_result->fields['main_menu'];

$store_address = $edify_result->fields['store_address'];
$store_contact = $edify_result->fields['store_contact'];
$store_email = $edify_result->fields['store_email'];
$store_copyright = $edify_result->fields['store_copyright'];
$store_fax = $edify_result->fields['store_fax'];
$store_skype = $edify_result->fields['store_skype'];
$store_map_address = $edify_result->fields['store_map_address'];
$latitude_map = $edify_result->fields['latitude_map'];
$longitude_map = $edify_result->fields['longitude_map'];
$altitude_map = $edify_result->fields['altitude_map'];
$newsletter_details = $edify_result->fields['newsletter_details'];
$aboutus_text = $edify_result->fields['aboutus_text'];

$facebook_link = $edify_result->fields['facebook_link'];
$twitter_link = $edify_result->fields['twitter_link'];
$pinterest_link = $edify_result->fields['pinterest_link'];
$google_link = $edify_result->fields['google_link'];
$tumblr_link = $edify_result->fields['tumblr_link'];
$linkedin_link = $edify_result->fields['linkedin_link'];
$youtube_link = $edify_result->fields['youtube_link'];

$custom_block1_icon = $edify_result->fields['custom_block1_icon'];
$custom_block2_icon = $edify_result->fields['custom_block2_icon'];
$custom_block3_icon = $edify_result->fields['custom_block3_icon'];
			
$custom_block1_title = $edify_result->fields['custom_block1_title'];
$custom_block2_title = $edify_result->fields['custom_block2_title'];
$custom_block3_title = $edify_result->fields['custom_block3_title'];
			
$custom_block1_subtitle = $edify_result->fields['custom_block1_subtitle'];
$custom_block2_subtitle = $edify_result->fields['custom_block2_subtitle'];
$custom_block3_subtitle = $edify_result->fields['custom_block3_subtitle'];

$banner1 = $edify_result->fields['banner1'];
$banner2 = $edify_result->fields['banner2'];
$banner3 = $edify_result->fields['banner3'];

$payment_image = $edify_result->fields['payment_image'];

$banner1_link = $edify_result->fields['banner1_link'];
$banner2_link = $edify_result->fields['banner2_link'];
$banner3_link = $edify_result->fields['banner3_link'];

$display_banner = $edify_result->fields['display_banner'];
$display_social = $edify_result->fields['display_social'];
$display_support = $edify_result->fields['display_support'];
$display_newsletter = $edify_result->fields['display_newsletter'];
$display_googlemap = $edify_result->fields['display_googlemap'];
$display_payment_image = $edify_result->fields['display_payment_image'];
$display_brand_slider = $edify_result->fields['display_brand_slider'];
			
?>
<?php if($this_is_home_page) { 
	$slideshow_query = "SELECT * from " . DB_PREFIX.edify_slideshow;
	$slideshow_query_result = $db->Execute($slideshow_query);
}
?>
<!--Query Ends-->
<style type="text/css">
body{
	background: none repeat scroll 0 0 transparent;	
}
/* Theme Color */
a, a:active, a:visited, #checkoutSuccessOrderLink > a, #checkoutSuccessContactLink > a, #checkoutSuccess a.cssButton.button_logoff, #checkoutSuccess a, #checkoutSuccess a:active, #checkoutSuccess a:visited, .product_title h3, .accordian-header.active, #product_name a, #timeoutDefaultContent a, table#cartContentsDisplay tr th, #prevOrders .tableHeading th, #accountHistInfo .tableHeading, #reviewsWriteReviewer, .bold.user_reviewer, .reviews-list span.date, #loginForm .buttonRow.back.important > a, #logoffDefaultMainContent > a span.pseudolink, .buttonRow.back.important > a, .notfound_title, #createAcctDefaultLoginLink > a, #indexDefaultHeading, #siteMapMainContent a, #siteMapMainContent a:active, #siteMapMainContent a:visited, #unsubDefault a .pseudolink, #unsubDefault a .pseudolink:active, #unsubDefault a .pseudolink:visited, .products_more:active, .products_more:visited, .products_more, #centercontent-wrapper h1, span.title, .current-step, .checkout-steps, #productReviewLink > a, #indexCategories #subcategory_names li:first-child, #reviewsWriteProductPageLink > a, #reviewsWriteReviewPageLink > a, .review_content > p, #productReviewsDefaultProductPageLink > a, .gv_faq a, .gv_faq a:visited, .gv_faq a:active, .alert > a, .alert > a:active, .alert > a:visited, .reviews-list blockquote p a, .reviews-list blockquote p a:active, .reviews-list blockquote p a:visited, .reviews-list blockquote h4 a, .reviews-list blockquote h4 a:active, .reviews-list blockquote h4 a:visited, .nav-maincontainer #cssmenu.small-screen a, .product_info_tab .tabcontents #description #productInfoLink > a:hover, #logoffDefaultMainContent > a span.pseudolink:hover, .short-description > a:hover, .productnewprice > a.more-info-text:focus, .productnewprice > a.more-info-text:visited {
	color: <?php echo $theme_color[0]; ?>;
}
a:hover, #product_name a:hover, #loginForm .buttonRow.back.important > a:hover, .buttonRow.back.important > a:hover, .cartBoxTotal, #checkoutSuccessOrderLink > a:hover, #checkoutSuccessContactLink > a:hover, #checkoutSuccess a.cssButton.button_logoff:hover, #subproduct_name > a:hover, a.table_edit_button span.cssButton.small_edit:hover, #accountDefault a:hover, .allorder_text > a:hover, #reviewsWriteProductPageLink > a:hover, #reviewsWriteReviewPageLink > a:hover, #productReviewLink > a:hover, .buttonRow.product_price > a:hover, #productReviewsDefaultProductPageLink > a:hover, #searchContent a:hover, #siteMapList a:hover, .box_heading_style h1 a:hover, .info-links > li:hover a, #navBreadCrumb li a:hover, .footer-toplinks a:hover, .banner:hover .link:hover, #cartContentsDisplay a.table_edit_button:hover, #timeoutDefaultContent a:hover, #logoffDefaultMainContent > a span.pseudolink, #createAcctDefaultLoginLink > a:hover, #unsubDefault a .pseudolink:hover, .review_content > p i.fa, .gv_faq a:hover, .alert > a:hover, .reviews-list blockquote p a:hover, .reviews-list blockquote h4 a:hover, .header-container #nav li > ul > li:hover > a, .product_info_tab .tabcontents #description #productInfoLink > a, .short-description > a, .short-description > a:visited, .productnewprice > a.more-info-text:hover, #cssmenu .nav.main-menu-2 li > ul > li > a:hover,#cssmenu .nav.main-menu-2 li > ul > li:hover, .header-container #cssmenu .main-menu-2 .submenu .has-sub > a:hover {
	color: <?php echo $theme_color[1]; ?>;
}
.navNextPrevList > a, .login-buttons > a {
	color:<?php echo $theme_color[0]; ?> !important;
}
#checkoutSuccess a:hover, #siteMapMainContent a:hover, .login-buttons > a:hover {
	color: <?php echo $theme_color[1]; ?> !important;
}
td .simple-boxcontent h2, #footer1-wrapper, .topbar_links .menu > li:hover, .topbar_links .menu > li#logoff:hover, .topbar_links .menu > li#login:hover, .productprice-wrapper .product_price {
	background-color: <?php echo $theme_color[0]; ?>;
}
#productAdditionalImages li:hover{
	border: 1px solid <?php echo $theme_color[0]; ?>;
}
.notfound_text {
    background: none repeat scroll 0 0 <?php echo $theme_color[0]; ?>;
}
.owl-theme .owl-controls .owl-page:hover, .addtocart-info .cart_quantity span:hover, #indexCategories #subcategory_names li:hover, #cssmenu.small-screen #menu-button, #cssmenu.small-screen .submenu-button {
	background-color:<?php echo $theme_color[1]; ?>;
	transition: all 0.3s ease-in-out 0s;
		-moz-transition: all 0.3s ease-in-out 0s;
		-webkit-transition: all 0.3s ease-in-out 0s;
		-o-transition: all 0.3s ease-in-out 0s;
		-ms-transition: all 0.3s ease-in-out 0s;
}
#centercontent-wrapper span.centerBoxHeading h2, .categories-wrapper span.centerBoxHeading h2 {
	color:<?php echo $theme_color[0]; ?>;
}
/* Button */
.button, input[type="submit"], input[type="reset"], input[type="button"], .readmore, button, .product-details, .billto-shipto .details, span.details-button input.details-button, .control-buttons button.default, #shoppingCartDefault .buttonRow, #indexCategories #subcategory_names li, .change_address > a, #pageThree .buttonRow.back > a, #pageFour .buttonRow.back > a, #pageTwo .buttonRow.back > a, #topbar-wrapper, #sticky-header-wrapper .topbar_links a, #discountcouponInfo .content .buttonRow.forward > a, .forward.productpage_links #reviewsWriteProductPageLink a {
	background: none repeat scroll 0 0 <?php echo $theme_color[0]; ?> ;
	transition: all 0.3s ease-in-out 0s;
		-moz-transition: all 0.3s ease-in-out 0s;
		-webkit-transition: all 0.3s ease-in-out 0s;
		-o-transition: all 0.3s ease-in-out 0s;
		-ms-transition: all 0.3s ease-in-out 0s;
}
.button:hover, input[type="submit"]:hover, input[type="reset"]:hover, input[type="button"]:hover, .readmore:hover, button:hover, .billto-shipto .details:hover , .profile a:hover, #shoppingCartDefault .buttonRow:hover, .change_address:hover, .change_address > a:hover, #pageThree .buttonRow.back > a:hover, #pageFour .buttonRow.back > a:hover, #pageTwo .buttonRow.back > a:hover, #discountcouponInfo .content .buttonRow.forward > a:hover, .forward.productpage_links #reviewsWriteProductPageLink a:hover {
	background-color:<?php echo $theme_color[1]; ?>;
	transition: all 0.3s ease-in-out 0s;
		-moz-transition: all 0.3s ease-in-out 0s;
		-webkit-transition: all 0.3s ease-in-out 0s;
		-o-transition: all 0.3s ease-in-out 0s;
		-ms-transition: all 0.3s ease-in-out 0s;
}
/*Pagination*/
.pagination-style .current, .pagination-style a:hover {
	background-color:<?php echo $theme_color[1]; ?>;
}
.pagination-style a {
	background-color: <?php echo $theme_color[0]; ?>;
}
/*Sideboxes*/
.rectangle-list a:before {
	background-color: <?php echo $theme_color[0]; ?>;
}
#left-column h3, #right-column h3 {
    background-color: <?php echo $theme_color[0]; ?>;
    border-bottom: 3px solid rgba(0, 0, 0, 0.2);
}
#right-column #categories li:hover a, #left-column #categories li:hover a, #left-column #cartBoxListWrapper li:hover > a, #right-column #cartBoxListWrapper li:hover > a, #right-column .rightBoxContainer #informationContent li:hover > a , #left-column .leftBoxContainer #informationContent li:hover > a, #right-column .rightBoxContainer #moreinformationContent li:hover > a , #left-column .leftBoxContainer #moreinformationContent li:hover > a {
	border-left:4px solid <?php echo $theme_color[1]; ?>;
	color:<?php echo $theme_color[1]; ?>;
}
.rectangle-list a:hover:before {
	background-color:<?php echo $theme_color[1]; ?>;
}
#right-column li a, #left-column li a, .sideBoxContentItem a, .product_sideboxname > a, #right-column li a:active, #left-column li a:active, .sideBoxContentItem a:active, .product_sideboxname > a:active, #right-column li a:visited, #left-column li a:visited, .sideBoxContentItem a:visited, .product_sideboxname > a:visited {
	color: <?php echo $theme_color[0]; ?>;
}
#right-column li a:hover, #left-column li a:hover, .sideBoxContentItem a:hover, .product_sideboxname > a:hover, .sidebox_price .productSpecialPriceSale, .sidebox_price .productSalePrice, .sidebox_price .single_price, .sidebox_price .productSpecialPrice, .sidebox_price .productPriceDiscount, #left-column .leftBoxHeading a:hover, #right-column .rightBoxHeading a:hover, #reviewsContent > a:hover {
	color: <?php echo $theme_color[1]; ?>;
}
.rectangle-list a:hover:after{
	left: -.5em;
	border-left-color: <?php echo $theme_color[1]; ?>;				
}
#custom-content-wrapper .aboutus_heading {
	border-left: 5px solid	<?php echo $theme_color[0]; ?>;
}
.navbar .btn-navbar, .addtocart-info .cart_quantity span {
	background-color: <?php echo $theme_color[0]; ?>;
}
.custom_links.topbar_links.grid-40 li.arrow-down {
	background-color:rgba(0, 0, 0, 0.2);
}
.social_bookmarks li a:hover {
	background-color: <?php echo $theme_color[0]; ?>;
}

a:hover {
    text-decoration: none;
}
.header-container .header .header-top a:hover, .header-container .header .header-content a:hover, .item .product_image .hover_info a:active {
	background: none repeat scroll 0 0 <?php echo $theme_color[0]; ?>;
}
.header-container {
    background: none repeat scroll 0 0 <?php echo $theme_color[2]; ?>;
	border-top:3px solid <?php echo $theme_color[0]; ?>;
}
.header-container .header .header-top .header-top-right ul.links li.last a:hover {
	background-color: <?php echo $theme_color[0]; ?>;
}
/*Nav*/
.nav-maincontainer #nav {
    background: none repeat scroll 0 0 <?php echo $theme_color[1]; ?>;
}
/* Menu Colors */
.header-container #nav > li.tab_active > a, .header-container #nav > li:hover > a, .header-container #nav > li > a:active, .header-container .nav > li > a:hover, .header-container .nav > li > a:focus {
	background-color: <?php echo $theme_color[0]; ?>;
}
.header-container .header a.toggleMenu {
	background-color: <?php echo $theme_color[0]; ?>;
}
.header-container .header a.toggleMenu:hover {
	background-color: <?php echo $theme_color[1]; ?>;
}
.header-container #nav ul li ul a, .header-container .header #nav li ul a {
	color: <?php echo $theme_color[0]; ?>;
}
#nav li > ul {
    border-bottom: 2px solid <?php echo $theme_color[1]; ?>;
	z-index:999;
}
.item .product_image .hover_info .zoom-button a, .item .product_image .hover_info .detailbutton-wrapper a, .centerBoxContentsAlsoPurch .product_image .hover_info .detailbutton-wrapper a, .centerBoxContentsAlsoPurch .product_image .hover_info .zoom-button a, #specialsListing .specialsListBoxContents .product_image .hover_info .detailbutton-wrapper a, #specialsListing .specialsListBoxContents .product_image .hover_info .zoom-button a {
	color: <?php echo $theme_color[1]; ?>;
}
.hover_info h1, .hover_info a:hover {
    background: none repeat scroll 0 0 <?php echo $theme_color[1]; ?>;
}
ul.tabs li.selected a, ul.tabs li a:hover {
	border: 1px solid <?php echo $theme_color[1]; ?>;
	color:<?php echo $theme_color[1]; ?>;
	text-decoration:none;
}
ul.tabs:before {
    background: none repeat scroll 0 0 <?php echo $theme_color[1]; ?>;
}
.item .product_image .blind, .centerBoxContentsAlsoPurch .product_image .blind, .specialsListBoxContents .product_image .blind {
	background: none repeat scroll 0 0 <?php echo $theme_color[1]; ?>;
	opacity:0.95;
}
.item .product_image .hover_info a:hover, .centerBoxContentsAlsoPurch .product_image .hover_info a:hover, .specialsListBoxContents .product_image .hover_info a:hover, #specialsListing .specialsListBoxContents .product_image .hover_info .detailbutton-wrapper a:hover, #specialsListing .specialsListBoxContents .product_image .hover_info .zoom-button a:hover {
	background-color: <?php echo $theme_color[0]; ?>;
	color:#FAFAFA;
}
.centerBoxWrapper .owl-theme .owl-controls .owl-buttons div:hover {
	background-color: <?php echo $theme_color[0]; ?>;
}
/*Product Details*/
.product-name-desc .product_name a:hover {
    color: <?php echo $theme_color[1]; ?>;
}
#whatsNew .centerBoxContentsNew.centeredContent .product_price, #featuredProducts .centerBoxContentsFeatured.centeredContent .product_price, #specialsDefault .centerBoxContentsSpecials.centeredContent .product_price, #specialsListing .specialsListBoxContents .product_price, #alsopurchased_products .product_price, #upcomingProducts .product_price, .productListing-data .product_name > a:hover, .newproductlisting .product_name > a:hover, .productlisting_price .productSpecialPriceSale, .productlisting_price .productSalePrice, .productlisting_price .single_price, .productlisting_price .productSpecialPrice, .productlisting_price .productPriceDiscount, .resultsContainer .productSpecialPrice, .resultsContainer .productPriceDiscount {
	color: <?php echo $theme_color[1]; ?>;
}
.product-name-desc .product_name > a, .product-name-desc .product_name > a:active, .product_name > a:visited, .productListing-data .product_name > a, .newproductlisting .product_name > a, .resultsContainer .s-product-name {
	color: <?php echo $theme_color[0]; ?>;
}
.product-name-desc .product_name a:hover, .resultsContainer .s-product-name:hover {
	color: <?php echo $theme_color[1]; ?>;
}
.navNextPrevList > a:hover {
	color: <?php echo $theme_color[1]; ?> !important;
}
/*Brands*/
#additionalimages-slider .owl-controls .owl-prev:hover, #additionalimages-slider .owl-controls .owl-next:hover, #main-slideshow .owl-controls .owl-prev:hover, #main-slideshow .owl-controls .owl-next:hover, .brands-slider .owl-controls .owl-prev:hover, .brands-slider .owl-controls .owl-next:hover {
	background-color: <?php echo $theme_color[0]; ?>;
}
.brands-wrapper header:before, .category-slideshow-wrapper header:before, .box_heading header:before {
    background: none repeat scroll 0 0 <?php echo $theme_color[1]; ?>;
}
#bar {
    background: none repeat scroll 0 0 <?php echo $theme_color[0]; ?>;
}
/*Footer Top*/
.newsletter #mc_embed_signup input.button{background-color:<?php echo $theme_color[1]; ?>;}
.newsletter #mc_embed_signup input.button:hover{background-color:<?php echo $theme_color[0]; ?>;}
#contactForm-widget input[type="submit"]{
	background-color:<?php echo $theme_color[0]; ?>;
	transition: all 0.3s ease-in-out 0s;
		-moz-transition: all 0.3s ease-in-out 0s;
		-webkit-transition: all 0.3s ease-in-out 0s;
		-o-transition: all 0.3s ease-in-out 0s;
		-ms-transition: all 0.3s ease-in-out 0s;
}
#contactForm-widget input[type="submit"]:hover {
	background-color: <?php echo $theme_color[1]; ?>;
}
.footer-top-wrapper { 
	border-bottom:5px solid <?php echo $theme_color[1]; ?>;
	background:none repeat scroll 0 0 <?php echo $theme_color[2]; ?>;
}
/*Footer*/
.contact-us ul li:hover .fa, .about-us .address:hover .fa{
	background-color:<?php echo $theme_color[1]; ?>;
	transition: all 0.3s ease-in-out 0s;
		-moz-transition: all 0.3s ease-in-out 0s;
		-webkit-transition: all 0.3s ease-in-out 0s;
		-o-transition: all 0.3s ease-in-out 0s;
		-ms-transition: all 0.3s ease-in-out 0s;
}
.mail > a:hover {
	color: <?php echo $theme_color[1]; ?>;
	transition: all 0.3s ease-in-out 0s;
		-moz-transition: all 0.3s ease-in-out 0s;
		-webkit-transition: all 0.3s ease-in-out 0s;
		-o-transition: all 0.3s ease-in-out 0s;
		-ms-transition: all 0.3s ease-in-out 0s;
}
.back-to-top:hover {
    background-color: <?php echo $theme_color[1]; ?>;
	background-position: 100% 100%;
}
/*Sticky Header */
.sticky-header-wrapper {
	background:none repeat scroll 0 0 <?php echo $theme_color[1]; ?>;
}
.sticky-header-wrapper .topbar_links a:hover {
	background:none repeat scroll 0 0 <?php echo $theme_color[0]; ?>;
}
/*Product Info*/
#productGeneral .productprice-amount .productSpecialPrice, #productGeneral .productprice-amount .productPriceDiscount, .product_price.total span.total_price, #reviewsWrite .productprice-amount, #reviewsInfoDefault .productprice-amount, #reviewsDefault .productprice-amount, .single_price {
	color:<?php echo $theme_color[1]; ?>;
}
#navBreadCrumb li, #navBreadCrumb li a, #navBreadCrumb li:last-child a, #navBreadCrumb li:last-child a:active, #navBreadCrumb li:last-child a:visited {
	color: <?php echo $theme_color[0]; ?>;
}
.breadcrumb-current, #navBreadCrumb li:last-child a:hover {
	color: <?php echo $theme_color[1]; ?>;
}
.productListing-odd:hover, .productListing-even:hover, .newproductlisting:hover {
	border-bottom:1px solid <?php echo $theme_color[1]; ?>;
}
#centercontent-wrapper header:before {
	background: none repeat scroll 0 0 <?php echo $theme_color[1]; ?>;
}
#centercontent-wrapper header > h1, .brands-wrapper h2, .category-slideshow-wrapper h2, .box_heading h2 { 
	border: 1px solid <?php echo $theme_color[1]; ?>;
    color: <?php echo $theme_color[1]; ?>;
}
/* Menu Border */
#cssmenu ul ul li.has-sub:before {
	border-left: 4px solid <?php echo $theme_color[0]; ?>;
}
#cssmenu ul ul > li.has-sub:hover:before {
	border-left: 4px solid <?php echo $theme_color[1]; ?>;
}
/*Cart Table*/
.cartTableHeading, #cartSubTotal {
	color: <?php echo $theme_color[0]; ?>;
}
.add_title {
    background: none repeat scroll 0 0 <?php echo $theme_color[1]; ?>;
}
a > .checkout-steps:hover{
	border: 1px solid <?php echo $theme_color[1]; ?>;
	color:<?php echo $theme_color[1]; ?>;
	text-decoration:none;
	transition: all 0.3s ease-in-out 0s;
		-moz-transition: all 0.3s ease-in-out 0s;
		-webkit-transition: all 0.3s ease-in-out 0s;
		-o-transition: all 0.3s ease-in-out 0s;
		-ms-transition: all 0.3s ease-in-out 0s;
}
.review-links > .buttonRow {
    background: none repeat scroll 0 0 <?php echo $theme_color[0]; ?>;
	transition: all 0.3s ease-in-out 0s;
		-moz-transition: all 0.3s ease-in-out 0s;
		-webkit-transition: all 0.3s ease-in-out 0s;
		-o-transition: all 0.3s ease-in-out 0s;
		-ms-transition: all 0.3s ease-in-out 0s;
}
.review-links > .buttonRow:hover {
	background: none repeat scroll 0 0 <?php echo $theme_color[1]; ?>;
	transition: all 0.3s ease-in-out 0s;
		-moz-transition: all 0.3s ease-in-out 0s;
		-webkit-transition: all 0.3s ease-in-out 0s;
		-o-transition: all 0.3s ease-in-out 0s;
		-ms-transition: all 0.3s ease-in-out 0s;
}
/*Top banner*/
.top-banner h3, .top-banner p {
    color: <?php echo $theme_color[0]; ?>;
}
.top-banner:hover h3 {
	color: <?php echo $theme_color[1]; ?>;
	transition: all 0.3s ease-in-out 0s;
		-moz-transition: all 0.3s ease-in-out 0s;
		-webkit-transition: all 0.3s ease-in-out 0s;
		-o-transition: all 0.3s ease-in-out 0s;
		-ms-transition: all 0.3s ease-in-out 0s;
}
/*New Categories Sidebox*/
#nav-cat li.submenu, #nav-cat ul {
   background-color: <?php echo $theme_color[1]; ?>;
}
#nav-cat li:hover, #nav-cat li.submenu:hover {
   background-color: <?php echo $theme_color[0]; ?>;
}
<?php if($homepage_version == 'homepage_version_3') { ?>
.home-top-wrapper, .footer-v3-wrapper {
    background:url("<?php echo $template->get_template_dir('',DIR_WS_TEMPLATE, $current_page_base,'images').'/banners/'.$body_bgimage;?>") no-repeat fixed 0 0 #F1F1F1;
}
<?php } ?>
/* Theme Color Ends*/
<?php if ($display_social=="no" && $display_payment_image=="no") { ?>
	#footer-3, .footer-v3-container .footer-wrapper #footer-3 {display:none}
	#footer-2 {margin-bottom:0}
<?php } ?>
<?php if (HEADER_LANGUAGES_DISPLAY == 'True' && HEADER_CURRENCIES_DISPLAY == 'False' ) { ?>
	.header .block-header .language-switcher {
		border-right: medium none;
    	margin-right: 0;
    	padding-right: 0;	
	}
<?php } ?>
<?php if($main_menu == 'main_menu_2') {?>
@media only screen and (min-width:1217px) and (max-width:1600px) {
#cssmenu ul ul {
    left: auto;
    position: relative;
    width: 100%;
}
#cssmenu ul ul > li.has-sub:before{border:none;}
#cssmenu .nav li > ul > li > a {
    background: transparent none repeat scroll 0 0;
    border: medium none;
    padding: 0;
}
.nav a {padding: 4px 0;}
.header-container .container > .nav-container, .homepage_v3 .header-container .nav-container.col-lg-12 > #cssmenu 
{position: relative;}
}
<?php } ?>
<?php if($display_brand_slider == "no") { ?>
	.custom-content-wrapper {border-bottom: 1px solid #151b23;}
<?php } ?>
<?php if(SHOW_SHOPPING_CART_EMPTY_NEW_PRODUCTS != 0 || SHOW_SHOPPING_CART_EMPTY_SPECIALS_PRODUCTS != 0 || SHOW_SHOPPING_CART_EMPTY_FEATURED_PRODUCTS != 0) { ?>
	#shoppingCartDefault > h2#cartEmptyText {margin-bottom: 30px;}
<?php } ?>
<?php if($this_is_home_page) {?>
	
	.main-breadcrumb{display:none}
		
	<?php if($display_banner == "no") { ?>
		.homepage_v3 .main-top{padding: 0 30px 30px}
	<?php } ?>
	
	<?php if($homepage_version == 'homepage_version_2') { ?>	
		<?php if($display_banner == "no") { ?>
			#main-slideshow {margin-bottom: 30px;}
		<?php } ?>
	<?php } ?>

<?php } ?>
</style>
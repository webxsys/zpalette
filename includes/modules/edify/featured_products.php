<?php
/**
 * featured_products module - prepares content for display
 *
 * @package modules
 * @copyright Copyright 2003-2007 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: featured_products.php 6424 2007-05-31 05:59:21Z ajeh $
 */
if (!defined('IS_ADMIN_FLAG')) {
  die('Illegal Access');
}

// initialize vars
$categories_products_id_list = '';
$list_of_products = '';
$featured_products_query = '';
$display_limit = '';

if ( (($manufacturers_id > 0 && $_GET['filter_id'] == 0) || $_GET['music_genre_id'] > 0 || $_GET['record_company_id'] > 0) || (!isset($new_products_category_id) || $new_products_category_id == '0') ) {
  $featured_products_query = "select distinct p.products_id, p.products_image, pd.products_name, p.master_categories_id
                           from (" . TABLE_PRODUCTS . " p
                           left join " . TABLE_FEATURED . " f on p.products_id = f.products_id
                           left join " . TABLE_PRODUCTS_DESCRIPTION . " pd on p.products_id = pd.products_id )
                           where p.products_id = f.products_id
                           and p.products_id = pd.products_id
                           and p.products_status = 1 and f.status = 1
                           and pd.language_id = '" . (int)$_SESSION['languages_id'] . "'";
						   
		 $last_featured_products_query = "select max(p.products_date_added),p.products_id, p.products_image, pd.products_name, p.master_categories_id
                           from (" . TABLE_PRODUCTS . " p
                           left join " . TABLE_FEATURED . " f on p.products_id = f.products_id
                           left join " . TABLE_PRODUCTS_DESCRIPTION . " pd on p.products_id = pd.products_id )
                           where p.products_id = f.products_id
                           and p.products_id = pd.products_id
                           and p.products_status = 1 and f.status = 1
                           and pd.language_id = '" . (int)$_SESSION['languages_id'] . "'";
						   
						   
} else {
  // get all products and cPaths in this subcat tree
  $productsInCategory = zen_get_categories_products_list( (($manufacturers_id > 0 && $_GET['filter_id'] > 0) ? zen_get_generated_category_path_rev($_GET['filter_id']) : $cPath), false, true, 0, $display_limit);
  
   
  if (is_array($productsInCategory) && sizeof($productsInCategory) > 0) {
    // build products-list string to insert into SQL query
    foreach($productsInCategory as $key => $value) {
      $list_of_products .= $key . ', ';
    }
    $list_of_products = substr($list_of_products, 0, -2); // remove trailing comma

    $featured_products_query = "select distinct p.products_id, p.products_image, pd.products_name, p.master_categories_id
                                from (" . TABLE_PRODUCTS . " p
                                left join " . TABLE_FEATURED . " f on p.products_id = f.products_id
                                left join " . TABLE_PRODUCTS_DESCRIPTION . " pd on p.products_id = pd.products_id)
                                where p.products_id = f.products_id
                                and p.products_id = pd.products_id
                                and p.products_status = 1 and f.status = 1
                                and pd.language_id = '" . (int)$_SESSION['languages_id'] . "'
                                and p.products_id in (" . $list_of_products . ")";
			
	
	
	 $last_featured_products_query = "select max(p.products_date_added),p.products_id, p.products_image, pd.products_name, p.master_categories_id
                                from (" . TABLE_PRODUCTS . " p
                                left join " . TABLE_FEATURED . " f on p.products_id = f.products_id
                                left join " . TABLE_PRODUCTS_DESCRIPTION . " pd on p.products_id = pd.products_id)
                                where p.products_id = f.products_id
                                and p.products_id = pd.products_id
                                and p.products_status = 1 and f.status = 1
                                and pd.language_id = '" . (int)$_SESSION['languages_id'] . "'
                                and p.products_id in (" . $list_of_products . ")";
							
								
								
  }
}
if ($featured_products_query != '') $featured_products = $db->ExecuteRandomMulti($featured_products_query, MAX_DISPLAY_SEARCH_RESULTS_FEATURED);
if ($last_featured_products_query != '') $last_featured_products = $db->ExecuteRandomMulti($last_featured_products_query, MAX_DISPLAY_SEARCH_RESULTS_FEATURED);
  
$row = 0;
$col = 0;
$list_box_contents = array();
$title = '';

 
$num_products_count = ($featured_products_query == '') ? 0 : $featured_products->RecordCount();
// show only when 1 or more
if ($num_products_count > 0) {
  if ($num_products_count < SHOW_PRODUCT_INFO_COLUMNS_FEATURED_PRODUCTS || SHOW_PRODUCT_INFO_COLUMNS_FEATURED_PRODUCTS == 0) {
    $col_width = floor(100/$num_products_count);
  } else {
    $col_width = floor(100/SHOW_PRODUCT_INFO_COLUMNS_FEATURED_PRODUCTS);
  }
 
 
  while (!$featured_products->EOF) {
    $products_price = zen_get_products_display_price($featured_products->fields['products_id']);
		
	$fid=$featured_products->fields['products_id'];
	
	 $products_query = "select * from ".TABLE_PRODUCTS." where products_id='$fid' ORDER by products_date_added DESC";
	 $products_res = $db->Execute($products_query);
	
	 $specials_query = "select * from ".TABLE_SPECIALS." where products_id='$fid'";
	 $specials_res = $db->Execute($specials_query);
	 
	 //$feature_query = "select * from ".TABLE_FEATURED." where products_id='$pid'";
	 //$featured_res = $db->Execute($feature_query);
	 $pid=$products_res->fields['products_id'];
	 $sid=$specials_res->fields['products_id'];
	 
	 
	 if($fid==$pid)
		{
		   $msg_product="<span class='label-featured' title=''>Featured</span>
		   				<span class='label-new' title=''>New</span>";
		}
		else if($fid==$sid)
	     {
		   $msg_product="<span class='label-featured' title=''>Featured</span>
		   				<span class='label-sale' title=''>Sale</span>";
		}
		else
		{
		  $msg_product="<span class='label-featured' title=''>Featured</span>";
		}
	$products_name = $featured_products->fields['products_name'];
	
    if (!isset($productsInCategory[$featured_products->fields['products_id']])) $productsInCategory[$featured_products->fields['products_id']] = zen_get_generated_category_path_rev($featured_products->fields['master_categories_id']);
	
    $list_box_contents[$row][$col] = array('params' =>'class="item centerBoxContentsFeatured centeredContent back wow fadeInUp" data-wow-delay="0.5s"' . ' ',
    'text' => (($featured_products->fields['products_image'] == '' and PRODUCTS_IMAGE_NO_IMAGE_STATUS == 0) ? '' : '
	<div class="productinfo-wrapper">
		<div class="product_image">'.$msg_product.'
			<a href="' . zen_href_link(zen_get_info_page($featured_products->fields['products_id']), 'cPath=' . $productsInCategory[$featured_products->fields['products_id']] . '&products_id=' . $featured_products->fields['products_id']) . '">' . zen_image(DIR_WS_IMAGES . $featured_products->fields['products_image'], $featured_products->fields['products_name'], IMAGE_FEATURED_PRODUCTS_LISTING_WIDTH, IMAGE_FEATURED_PRODUCTS_LISTING_HEIGHT) . '</a>
			<div class="hover_info">
				<div class="zoom-button">
					<a data-toggle="tooltip" data-original-title="View Image" class="group1" href="' . DIR_WS_IMAGES . $featured_products->fields['products_image'] . '">' . '
					<i class="fa fa-eye fa-lg"></i></a>
				</div>
				<div class="detailbutton-wrapper">
					<a data-toggle="tooltip" data-original-title="Product Detail" href="' . zen_href_link(zen_get_info_page($featured_products->fields['products_id']), 'cPath=' . $productsInCategory[$featured_products->fields['products_id']] . '&products_id=' . $featured_products->fields['products_id']) . '"><i class="fa fa-link fa-lg"></i></a>
				</div>
			</div>
		</div>
		<div class="product-name-desc">
			<div class="product_name">') .  
				'<a href="' . zen_href_link(zen_get_info_page($featured_products->fields['products_id']), 'cPath=' . $productsInCategory[$featured_products->fields['products_id']] . '&products_id=' . $featured_products->fields['products_id']) . '">' . $products_name . '</a>
			</div>
			<div class="product_price">' . $products_price . '</div>'
			//<div class="product_description">
				//<p class="short-description">' . $products_description .'</p>
			//</div>
		.'</div>
	</div>' );

    $col ++;
    if ($col > (SHOW_PRODUCT_INFO_COLUMNS_FEATURED_PRODUCTS - 1)) {
      $col = 0;
      $row ++;
    }
    $featured_products->MoveNextRandom();
  }
         
		  

 
  if ($featured_products->RecordCount() > 0) {
    if (isset($new_products_category_id) && $new_products_category_id !=0) {
      $category_title = zen_get_categories_name((int)$new_products_category_id);
      $title = '<div class="box_heading box_heading_featured">
	  				<header><h2>'. TABLE_HEADING_FEATURED_PRODUCTS . /*($category_title != '' ? ' - ' . $category_title : '') .'<a title="View All" href="' . zen_href_link(FILENAME_FEATURED_PRODUCTS) . '">View All<i class="fa fa-angle-double-right"></i></a>*/'</h2></header>
				</div>';
    } else {
      $title = '<div class="box_heading box_heading_featured">
	  				<header><h2>' . TABLE_HEADING_FEATURED_PRODUCTS . /*'<a title="View All" href="' . zen_href_link(FILENAME_FEATURED_PRODUCTS) . '">View All<i class="fa fa-angle-double-right"></i></a>*/
					'</h2></header>
				</div>';
    }
    $zc_show_featured = true;
  }
}
?>
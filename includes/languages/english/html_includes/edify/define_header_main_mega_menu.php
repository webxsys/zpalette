<?php
//
// +----------------------------------------------------------------------+
// |zen-cart Open Source E-commerce                                       |
// +----------------------------------------------------------------------+
// | Copyright (c) 2003 The zen-cart developers                           |
// |                                                                      |
// | http://www.zen-cart.com/index.php                                    |
// |                                                                      |
// | Portions Copyright (c) 2003 osCommerce                               |
// +----------------------------------------------------------------------+
// | This source file is subject to version 2.0 of the GPL license,       |
// | that is bundled with this package in the file LICENSE, and is        |
// | available through the world-wide-web at the following url:           |
// | http://www.zen-cart.com/license/2_0.txt.                             |
// | If you did not receive a copy of the zen-cart license and are unable |
// | to obtain it through the world-wide-web, please send a note to       |
// | license@zen-cart.com so we can mail you a copy immediately.          |
// +----------------------------------------------------------------------+
// $Id: tpl_drop_menu.php  2005/06/15 15:39:05 DrByte Exp $
//

?>
<!-- menu area -->
     <ul id="nav" class="nav main-menu-2">
        <!--Categories Link in Menu-->
        <?php 
            $cat_query = "select * from ".DB_PREFIX."categories where categories_status='1' ORDER BY RAND() LIMIT 1";
            $category = $db->Execute($cat_query);
            $categories_id=$category->fields['categories_id'];
        ?>
        
        <?php			
            // load the UL-generator class and produce the menu list dynamically from there
            require_once (DIR_WS_CLASSES . 'categories_ul_generator.php');
            $zen_CategoriesUL = new zen_categories_ul_generator;
            $menulist = $zen_CategoriesUL->buildTree(true);
            $menulist = str_replace('"level4"','"level5"',$menulist);
            $menulist = str_replace('"level3"','"level4"',$menulist);
            $menulist = str_replace('"level2"','"level3"',$menulist);
            $menulist = str_replace('"level1"','"level2"',$menulist);
            $menulist = str_replace('<li class="">','<li class="">',$menulist);
            $menulist = str_replace("</li>\n</ul>\n</li>\n</ul>\n","</li>\n</ul>\n",$menulist);
            echo $menulist;
        ?>
        <li class="contact_us last">
            <a href="<?php echo zen_href_link(FILENAME_CONTACT_US, '', 'NONSSL'); ?>">
                <?php echo HEADER_TITLE_CONTACT_US; ?>
            </a>
        </li>
      <!--  <li class="navbar-right">
            <a class="shopping_cart_link" href="<?php /*echo zen_href_link(FILENAME_SHOPPING_CART); */?>">
                <?php /*echo BOX_HEADING_SHOPPING_CART; */?>&nbsp;&nbsp;
                <?php /*echo $currencies->format($_SESSION['cart']->show_total());*/?>
            </a>
        </li>-->
    </ul>
    <!-- end dropMenuWrapper-->
    <div class="clearBoth"></div>
    <style type="text/css">
    @media only screen and (min-width:1217px) and (max-width:1600px) {    
        <script>
        $(document).ready(function(){
        $(".unstyled1 > li").css( "height", function(v){
        return Math.random() * 250 + 100 | 0 
        });
        });
        </script>
   }
   </style>
   
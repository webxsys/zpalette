<ul id="nav" class="nav">
    <!--li id='home' -->
        <!-- a href="<?php // echo zen_href_link(FILENAME_DEFAULT); ?>">
        <i class="fa fa-home fa-lg"></i><?php // echo  HEADER_TITLE_CATALOG; ?></a>
    </li -->
    
    <!--Categories Link in Menu-->
    <?php 
        $cat_query = "select * from ".DB_PREFIX."categories where categories_status='1' ORDER BY RAND() LIMIT 1";
        $category = $db->Execute($cat_query);
        $categories_id=$category->fields['categories_id'];
    ?>
    
    <li id='categories'>
        <a href="#">
        <i class="fa fa-inbox fa-lg"></i><?php echo HEADER_TITLE_CATEGORIES; ?>
        </a>
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
        $menulist = str_replace("</li>n</ul>n</li>n</ul>n","</li>n</ul>n",$menulist);
        echo $menulist;
    ?>
    </li>
    <!--Categories Link in Menu Ends-->
    <!--Manufacturers Link in Menu-->
    <?php
    // --- omit fromm main nav - db - 3.23.16
    //     $man_query = "select * from ".DB_PREFIX."manufacturers ORDER BY RAND() LIMIT 1";
    //    $man = $db->Execute($man_query);
    //     $manufacturers_id=$man->fields['manufacturers_id'];
    ?>
    
   <!-- <li id="products">
        <a href="#">
            <i class="fa fa-map-marker fa-lg"></i><?php /*echo "WHERE TO BUY"; */?>
        </a>
            <ul class="">
                <li><a href="#"><?php /*// echo zen_href_link(FILENAME_PRODUCTS_NEW); */?>

                        <?php /*echo "USA"; // CATEGORIES_BOX_HEADING_WHATS_NEW; */?>
                    </a>
                </li>
                <li><a href="<?php /*echo zen_href_link(FILENAME_SHOP_INTERNATIONAL); */?>">
                        <?php /* // echo // CATEGORIES_BOX_HEADING_FEATURED_PRODUCTS; */?>
                    <?php /*echo  "International"; */?>
                    </a>
                </li>
                <li><a href="<?php /*echo zen_href_link(FILENAME_SHOP_ONLINE); */?>">
                        <?php /*// echo CATEGORIES_BOX_HEADING_SPECIALS; */?>
                    <?php /*echo "Online"; */?>
                    </a>
                </li>
                <li><a href="<?php /*echo zen_href_link(FILENAME_AMAZON_RETAILERS); */?>">
                        <?php /*// echo CATEGORIES_BOX_HEADING_SPECIALS; */?>
                        <?php /*echo "Authorized Amazon Retailers"; */?>
                    </a>
                </li>
            </ul>
    </li>-->
   <!-- <li id="brands">
        <a href="#">
        <i class="fa fa-leaf fa-lg"></i><?php /*echo "EXPERIENCE"; */?>
        </a>
                <ul class="">
                    <li><a href="<?php /*echo zen_href_link(FILENAME_VIDEO); */?>">
                            <?php /*echo "Video"; // CATEGORIES_BOX_HEADING_WHATS_NEW; */?>
                        </a>
                    </li>
                    <li><a href="<?php /*echo zen_href_link(FILENAME_WONDERLAND_STORY); */?>">
                            <?php /*echo  "Wonderland Story"; */?>
                        </a>
                    </li>
                    <li><a href="<?php /*echo zen_href_link(FILENAME_CRYSTAL_Z); */?>">
                            <?php /*echo "Crystal Z Palette"; */?>
                        </a>
                    </li>
                   </ul>-->
                <?php
                  // Omit from man nav - db - 03.23.17
                  /*
                  global $languages_id, $db;
                    $manufacturers_query = "select * from ".DB_PREFIX."manufacturers as m join ".DB_PREFIX.
                    "manufacturers_info as mi on m.manufacturers_id = mi.manufacturers_id
                    where mi.languages_id = ". (int)$_SESSION['languages_id'];
                    $manufacturers = $db->Execute($manufacturers_query);
                    while (!$manufacturers->EOF) 
                        {
                            $manufacturers_id=$manufacturers->fields['manufacturers_id'];
                            $manufacturers_name=$manufacturers->fields['manufacturers_name'];
                           if($manufacturers_name !='' )
                             { ?>
                                <li><a href="<?php echo zen_href_link("index&manufacturers_id=".$manufacturers_id.""); ?>">
                                    <?php echo $manufacturers_name; ?></a>			
                                </li>
                                <?php 
                             }
                                $manufacturers->MoveNext();
                        }
                   */
                //
                ?>
<!--      </li>-->
    <!--Manufacturers Link in Menu-->
    
    <!--Display the EZ Pages link in Menu. Uncomment if needed. -->
    <?php if (EZPAGES_STATUS_HEADER == '1' or (EZPAGES_STATUS_HEADER == '2' and (strstr(
    EXCLUDE_ADMIN_IP_FOR_MAINTENANCE, $_SERVER['REMOTE_ADDR'])))) { ?>
    <li id='ezpages' class="<?php if($pg=='ezpages') { echo "tab_active";}?>">
        <a href="#">
            <i class="fa fa-rss-square fa-lg"></i><?php echo "What's New"; // echo HEADER_TITLE_EZPAGES; ?>
        </a>
        <ul class="nav-child unstyled">	
            <?php require($template->get_template_dir('tpl_ezpages_bar_header.php',DIR_WS_TEMPLATE, 
            $current_page_base,'templates'). '/tpl_ezpages_bar_header.php'); ?>
        </ul>    
    </li>		
    <?php } ?>
    <!--EZ Pages Menu Ends Here-->
 <!--   <li class="about_us">
        <a href="#">
            <i class="fa fa-book fa-lg"></i><?php /*echo HEADER_TITLE_SIZE_GUIDE; */?>
        </a>
        <ul class="">
            <li><a href="#"><?php /*// echo zen_href_link(FILENAME_PRODUCTS_NEW); */?>

                    <?php /*echo "How Many Fit ?"; // CATEGORIES_BOX_HEADING_WHATS_NEW; */?>
                </a>
            </li>
            <li><a href="#"><?php /*// echo //zen_href_link(FILENAME_FEATURED_PRODUCTS); */?>
                    <?php /* // echo // CATEGORIES_BOX_HEADING_FEATURED_PRODUCTS; */?>
                    <?php /*echo  "Compare"; */?>
                </a>
            </li>

        </ul>
    </li>-->
 <!--   <li class="about_us">
        <a href="#">
            <i class="fa fa-filter fa-lg"></i><?php /*echo HEADER_TITLE_INSPIRATION; */?>
        </a>
    </li>-->

    <li class="about_us">
            <a href="#">
            <i class="fa fa-pencil fa-lg"></i><?php echo HEADER_TITLE_ABOUT_US; ?>
        </a>
        <ul class="">
            <li><a href="http://www.zpalette.studio/develop/zenas-story-ezp-25.html"><?php // echo zen_href_link(FILENAME_PRODUCTS_NEW); ?>

                    <?php echo "Zena's Story"; // CATEGORIES_BOX_HEADING_WHATS_NEW; ?>
                </a>
            </li>
            <li><a href="http://www.zpalette.studio/develop/behind-the-brand-ezp-26.html"><?php // echo //zen_href_link(FILENAME_FEATURED_PRODUCTS); ?>
                    <?php  // echo // CATEGORIES_BOX_HEADING_FEATURED_PRODUCTS; ?>
                    <?php echo  "Behind The Brand"; ?>
                </a>
            </li>
            <li><a href="#"><?php // echo zen_href_link(FILENAME_SPECIALS); ?>
                    <?php // echo CATEGORIES_BOX_HEADING_SPECIALS; ?>
                    <?php echo "Press Mentions"; ?>
                </a>
            </li>
        </ul>
    </li>

    <li class="contact_us last">
        <a href="<?php echo zen_href_link(FILENAME_CONTACT_US, '', 'NONSSL'); ?>">
            <i class="fa fa-mail-forward fa-lg"></i><?php echo HEADER_TITLE_CONTACT_US; ?>
        </a>
        <ul class="">
            <li><a href="http://www.zpalette.studio/develop/faq-ezp-27.html"><?php // echo zen_href_link(FILENAME_PRODUCTS_NEW); ?>

                    <?php echo "FAQ"; // CATEGORIES_BOX_HEADING_WHATS_NEW; ?>
                </a>
            </li>
            <li><a href="http://www.zpalette.studio/develop/newsletter-ezp-22.html"><?php // echo //zen_href_link(FILENAME_FEATURED_PRODUCTS); ?>
                    <?php  // echo // CATEGORIES_BOX_HEADING_FEATURED_PRODUCTS; ?>
                    <?php echo  "Newsletter Signup"; ?>
                </a>
            </li>
            <li><a href="#"><?php // echo zen_href_link(FILENAME_SPECIALS); ?>
                    <?php // echo CATEGORIES_BOX_HEADING_SPECIALS; ?>
                    <?php echo "Customer Service"; ?>
                </a>
            </li>
            <li><a href="#"><?php // echo zen_href_link(FILENAME_PRODUCTS_NEW); ?>
                    <?php echo "Wholesale Inquires
                    "; // CATEGORIES_BOX_HEADING_WHATS_NEW; ?>

                </a>
            </li>
            <li><a href="#"><?php // echo //zen_href_link(FILENAME_FEATURED_PRODUCTS); ?>
                    <?php  // echo // CATEGORIES_BOX_HEADING_FEATURED_PRODUCTS; ?>
                    <?php echo  "Press Inquires"; ?>
                </a>
            </li>
            <li><a href="#"><?php // echo zen_href_link(FILENAME_SPECIALS); ?>
                    <?php // echo CATEGORIES_BOX_HEADING_SPECIALS; ?>
                    <?php echo "Private Label Inquires"; ?>
                </a>
            </li>

            <li><a href="http://www.zpalette.studio/develop/careers-ezp-28.html"><?php // echo zen_href_link(FILENAME_SPECIALS); ?>
                    <?php // echo CATEGORIES_BOX_HEADING_SPECIALS; ?>
                    <?php echo "Career Opportunities"; ?>
                </a>
            </li>
        </ul>
    </li>
    <li class="navbar-right">
        <a class="shopping_cart_link" href="<?php echo zen_href_link(FILENAME_SHOPPING_CART); ?>">
            <i class="fa fa-shopping-cart fa-lg"></i>
            <?php echo BOX_HEADING_SHOPPING_CART; ?>&nbsp;&nbsp;
            <?php echo $currencies->format($_SESSION['cart']->show_total());?>
        </a>
    </li>
</ul>
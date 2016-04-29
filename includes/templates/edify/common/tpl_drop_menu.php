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
    <!-- menu area/Edit in Admin > Tools > Define Pages Editor > define_header_main_menu.php  -->
    <?php if ($main_menu == 'main_menu_1') { ?>
		<?php include zen_get_file_directory(DIR_WS_LANGUAGES . $_SESSION['language'] . '/html_includes/', 
            FILENAME_DEFINE_HEADER_MAIN_MENU, 'false'); 
        ?>
    <?php }
    
    if ($main_menu == 'main_menu_2') { ?>
		<?php include zen_get_file_directory(DIR_WS_LANGUAGES . $_SESSION['language'] . '/html_includes/', 
            FILENAME_DEFINE_HEADER_MAIN_MEGA_MENU, 'false'); 
        ?>
    <?php } ?>
    
	<!-- end dropMenuWrapper-->
    <div class="clearBoth"></div>
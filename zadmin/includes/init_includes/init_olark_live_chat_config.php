<?php
  if (!defined('IS_ADMIN_FLAG')) {
    die('Illegal Access');
  }
  // add upgrade script
  $olark_live_chat_version = (defined('OLARK_LIVE_CHAT_VERSION') ? OLARK_LIVE_CHAT_VERSION : 'new');
  $current_version = '1.1.2';
  while ($olark_live_chat_version != $current_version) {
    switch($olark_live_chat_version) {
      case 'new':
        // perform upgrade
        if (file_exists(DIR_WS_INCLUDES . 'installers/olark_live_chat/1_0_0.php')) {
          include_once(DIR_WS_INCLUDES . 'installers/olark_live_chat/1_0_0.php');
          $olark_live_chat_version = '1.0.0';          
					break;
        } else {
         	break 2;
				}
      case '1.0.0':
        // perform upgrade
        if (file_exists(DIR_WS_INCLUDES . 'installers/olark_live_chat/1_1_0.php')) {
          include_once(DIR_WS_INCLUDES . 'installers/olark_live_chat/1_1_0.php');
          $olark_live_chat_version = '1.1.0';          
					break;
        } else {
         	break 2;
				}
      case '1.1.0':
        // perform upgrade
        if (file_exists(DIR_WS_INCLUDES . 'installers/olark_live_chat/1_1_1.php')) {
          include_once(DIR_WS_INCLUDES . 'installers/olark_live_chat/1_1_1.php');
          $olark_live_chat_version = '1.1.1';          
					break;
        } else {
         	break 2;
				}
      case '1.1.1':
        // perform upgrade
        if (file_exists(DIR_WS_INCLUDES . 'installers/olark_live_chat/1_1_2.php')) {
          include_once(DIR_WS_INCLUDES . 'installers/olark_live_chat/1_1_2.php');
          $olark_live_chat_version = '1.1.2';          
					break;
        } else {
         	break 2;
				}					 					                  
      default:
        $olark_live_chat_version = $current_version;
        // break all the loops
        break 2;      
    }
  }
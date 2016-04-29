<?php
$configuration = $db->Execute("SELECT configuration_group_id FROM " . TABLE_CONFIGURATION_GROUP . " WHERE configuration_group_title = 'Olark Live Chat Configuration' ORDER BY configuration_group_id ASC;");
if ($configuration->RecordCount() > 0) {
  while (!$configuration->EOF) {
    $db->Execute("DELETE FROM " . TABLE_CONFIGURATION . " WHERE configuration_group_id = " . $configuration->fields['configuration_group_id'] . ";");
    $db->Execute("DELETE FROM " . TABLE_CONFIGURATION_GROUP . " WHERE configuration_group_id = " . $configuration->fields['configuration_group_id'] . ";");
    $configuration->MoveNext();
  }
}

$db->Execute("INSERT INTO " . TABLE_CONFIGURATION_GROUP . " (configuration_group_title, configuration_group_description, sort_order, visible) VALUES ('Olark Live Chat Configuration', 'Set Olark Live Chat Configuration Options', '1', '1');");
$configuration_group_id = $db->Insert_ID();

$db->Execute("UPDATE " . TABLE_CONFIGURATION_GROUP . " SET sort_order = " . $configuration_group_id . " WHERE configuration_group_id = " . $configuration_group_id . ";");

$db->Execute("INSERT INTO " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, date_added, use_function, set_function) VALUES
						('Version', 'OLARK_LIVE_CHAT_VERSION', '1.1.1', 'Version Installed:', " . $configuration_group_id . ", 0, NOW(), NULL, NULL),
						('Enable Olark Live Chat', 'OLARK_STATUS', 'false', 'Enable Olark Live Chat?', " . $configuration_group_id . ", 0, NOW(), NULL, 'zen_cfg_select_option(array(\'true\', \'false\'),'),
						('Site ID', 'OLARK_SITE_ID', '0000-000-00-0000', 'Add your <a href=\"http://www.olark.com/install\" target=\"_blank\">Olark Site ID</a>:', " . $configuration_group_id . ", 10, NOW(), NULL, NULL),
						('Enabled Pages', 'OLARK_ENABLED_PAGES', '*', 'For which pages should Olark be enabled (use * to enable on all pages)?', " . $configuration_group_id . ", 20, NOW(), NULL, NULL);");

$zc150 = (PROJECT_VERSION_MAJOR > 1 || (PROJECT_VERSION_MAJOR == 1 && substr(PROJECT_VERSION_MINOR, 0, 3) >= 5));
if ($zc150) { // continue Zen Cart 1.5.0
  // delete configuration menu
  $db->Execute("DELETE FROM admin_pages WHERE page_key = 'configOlarkLiveChat' LIMIT 1;");
  // add configuration menu
  if (!zen_page_key_exists('configOlarkLiveChat')) {
    zen_register_admin_page('configOlarkLiveChat',
                            'BOX_CONFIGURATION_OLARKLIVECHAT', 
                            'FILENAME_CONFIGURATION',
                            'gID=' . $configuration_group_id, 
                            'configuration', 
                            'Y',
                            $configuration_group_id);
      
    $messageStack->add('Enabled Olark Live Chat Configuration menu.', 'success');
  }
}

$messageStack->add('Installed Olark Live Chat v1.0.0', 'success');
<?php
$db->Execute("UPDATE " . TABLE_CONFIGURATION . " SET configuration_value = '1.1.2' WHERE configuration_key = 'OLARK_LIVE_CHAT_VERSION' LIMIT 1;");
$messageStack->add('Updated Olark Live Chat to v1.1.2', 'success');
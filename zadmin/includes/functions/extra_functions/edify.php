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

if (!defined('IS_ADMIN_FLAG')) {
    die('Illegal Access');
}

if (function_exists('zen_register_admin_page')) {
    if (!zen_page_key_exists('edify')) {
        // Add Color menu to Tools menu
        zen_register_admin_page('edify', 'BOX_TOOLS_EDIFY','FILENAME_EDIFY', '', 'tools', 'Y', 21);
    }
}
?>
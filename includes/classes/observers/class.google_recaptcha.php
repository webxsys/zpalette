<?php
/**
*
* @package plugins
* @copyright Copyright 2003-2015 Zen Cart Development Team
* @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
*
* Designed for v1.5.4
*/

$edify_query = "SELECT * FROM " . DB_PREFIX.edify;
$edify_result = $db->Execute($edify_query);

$google_site_key = $edify_result->fields['google_site_key'];
$google_secret_key = $edify_result->fields['google_secret_key'];
// Register API keys at https://www.google.com/recaptcha/admin
$siteKey = $google_site_key;
$secret = $google_secret_key;

// Zencart stuff
class google_recaptcha extends base {
	function __construct() {
			$this->attach($this, array('NOTIFY_CONTACT_US_CAPTCHA_CHECK', 'NOTIFY_CREATE_ACCOUNT_CAPTCHA_CHECK'));
	}

	function update(&$class, $eventID, $paramsArray = array()) {
		global $messageStack, $error, $secret, $siteKey;
		$event_array = array('NOTIFY_CONTACT_US_CAPTCHA_CHECK' => 'contact', 'NOTIFY_CREATE_ACCOUNT_CAPTCHA_CHECK' => 'create_account');
		// reCAPTCHA response?
		if(isset($_POST['g-recaptcha-response'])){
          $captcha=$_POST['g-recaptcha-response'];
        }
        if(!$captcha && $siteKey != NULL){
		  $messageStack->add('contact', GOOGLE_RECAPTCHA_CHECK_ERROR);
		  $messageStack->add('create_account', GOOGLE_RECAPTCHA_CHECK_ERROR);
          $error = true;
        }
	return $error;
	}
}
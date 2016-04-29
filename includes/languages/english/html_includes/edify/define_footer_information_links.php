<div class="extra-details col-lg-3 col-md-3 col-sm-6 col-xs-12 wow flipInY" data-wow-delay="1">
	<h2><?php echo FOOTER_TITLE_INFORMATIONS; ?></h2>
    <ul class="extra-links">
        <?php if (EZPAGES_STATUS_FOOTER == '1' or (EZPAGES_STATUS_FOOTER == '2' and 
        (strstr(EXCLUDE_ADMIN_IP_FOR_MAINTENANCE, $_SERVER['REMOTE_ADDR'])))) { ?>
        <?php require($template->get_template_dir('tpl_ezpages_bar_footer.php',DIR_WS_TEMPLATE, 
        $current_page_base,'templates'). '/tpl_ezpages_bar_footer.php'); ?>
        <?php } ?>
    </ul>
</div>
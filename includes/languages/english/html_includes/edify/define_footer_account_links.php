<div class="account col-lg-3 col-md-3 col-sm-6 col-xs-12 wow flipInY" data-wow-delay="1.4">
    <h2><?php echo FOOTER_TITLE_MY_ACCOUNT; ?></h2>
    <ul class="extra-links">
        <li>
            <a href="<?php echo zen_href_link(FILENAME_ACCOUNT_HISTORY, '', 'SSL'); ?>">
                <i class="fa fa-arrow-circle-right"></i>		
                <?php echo FOOTER_TITLE_ORDER_HISTORY; ?>
            </a>
        </li>
        <li>
            <a href="<?php echo zen_href_link(FILENAME_ADDRESS_BOOK, '', 'SSL'); ?>">
                <i class="fa fa-arrow-circle-right"></i>	
                <?php echo FOOTER_TITLE_ADDRESS_BOOK; ?>
            </a>
        </li>
        <li>
            <a href="<?php echo zen_href_link(FILENAME_ACCOUNT, '', 'SSL'); ?>">
                <i class="fa fa-arrow-circle-right"></i>		
                <?php echo HEADER_TITLE_MY_ACCOUNT; ?>
            </a>
        </li>
        <li>
            <a href="<?php echo zen_href_link(FILENAME_ACCOUNT_PASSWORD, '', 'SSL'); ?>">
                <i class="fa fa-arrow-circle-right"></i>		
                <?php echo FOOTER_TITLE_CHANGE_PASSWORD; ?>
            </a>
        </li>
        <li>
			<?php if ($_SESSION['customer_id']) { ?>
                <a href="<?php echo zen_href_link(FILENAME_LOGOFF, '', 'SSL'); ?>">
                    <i class="fa fa-arrow-circle-right"></i>
					<?php echo HEADER_TITLE_LOGOFF; ?>
                </a>
            
            <?php } else { ?>
                <a href="<?php echo zen_href_link(FILENAME_CREATE_ACCOUNT, '', 'SSL'); ?>">
                	<i class="fa fa-arrow-circle-right"></i>		
                	<?php echo FOOTER_TITLE_CREATE_ACCOUNT; ?>
                </a>
            <?php } ?>
        </li>
    </ul>
</div>
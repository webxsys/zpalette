<?php if($display_newsletter == "yes") { ?>
<div class="wow bounce footer-1" data-wow-delay="0.4">
    <div class="newsletter">
      <h2><?php echo FOOTER_TITLE_NEWSLETTER; ?></h2>
      <div class="newsletter-details">
          <!-- Begin MailChimp Signup Form -->
          <?php echo $newsletter_details; ?>
          <!--End mc_embed_signup-->
      </div>
    </div>
</div>
<?php } ?>
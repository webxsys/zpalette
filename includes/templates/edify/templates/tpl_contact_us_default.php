<head><title>Contact Us</title></head>

<span class="breadcrumb-title"><?php echo $var_pageDetails->fields['pages_title']; ?></span>
<?php
/**
 * Page Template
 *
 * Loaded automatically by index.php?main_page=contact_us.<br />
 * Displays contact us page form.
 *
 * @package templateSystem
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: tpl_contact_us_default.php 18695 2011-05-04 05:24:19Z drbyte $
 */
?>
        <!-- Google Map Script -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDoRMxiPsqJ9SUuaK1KsCAjd3gqnecjlBw&amp;sensor=false"></script>
    <script type="text/javascript">

      function initialize() {

        // Create an array of styles.
        var styles = [
          {
            stylers: [
              { hue: "<?php echo $theme_color[1]; ?>" },
              { saturation: 0 }
            ]
          },{
            featureType: "road",
            elementType: "geometry",
            stylers: [
              { lightness: 100 },
              { visibility: "simplified" }
            ]
          },{
            featureType: "road",
            elementType: "labels",
            stylers: [
              { visibility: "off" }
            ]
          }
        ];

        // Create a new StyledMapType object, passing it the array of styles,
        // as well as the name to be displayed on the map type control.
        var styledMap = new google.maps.StyledMapType(styles,
        {name: "Styled Map"});


              var mapOptions = {
                zoom: 10,
                center: new google.maps.LatLng(<?php echo $latitude_map;?>, <?php echo $longitude_map;?>),
        mapTypeControlOptions: {
          mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
        }
        }
        var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

        //Associate the styled map with the MapTypeId and set it to display.
        map.mapTypes.set('map_style', styledMap);
        map.setMapTypeId('map_style');

        setMarkers(map, places);
      }

      var places = [
        ['<?php echo $store_map_address;?>', <?php echo $latitude_map;?>, <?php echo $longitude_map;?>, <?php echo $altitude_map;?>]      
		];

      function setMarkers(map, locations) {
        // Add markers to the map
        var image = {
          url: 'img/marker.png',
          // This marker is 40 pixels wide by 42 pixels tall.
          size: new google.maps.Size(32, 40),
          // The origin for this image is 0,0.
          origin: new google.maps.Point(0,0),
          // The anchor for this image is the base of the pin at 20,42.
          anchor: new google.maps.Point(16, 35)
        };

        for (var i = 0; i < locations.length; i++) {
          var place = locations[i];
          var myLatLng = new google.maps.LatLng(place[1], place[2]);
          var marker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            //icon: image,
            title: place[0],
            zIndex: place[1],
            animation: google.maps.Animation.DROP
          });

          var contentString = "Some content";
          google.maps.event.addListener(marker, "click", function() {
            infowindow.setContent(this.html);
            infowindow.open(map, this);
          });
        }
      }

      google.maps.event.addDomListener(window, 'load', initialize);
    </script>

<div class="centerColumn" id="contactUsDefault">
	<?php echo zen_draw_form('contact_us', zen_href_link(FILENAME_CONTACT_US, 'action=send')); ?>
    <header>
		<h1 id="contactus-heading"><?php echo HEADING_TITLE; ?></h1>
	</header>
    <?php
  		if (isset($_GET['action']) && ($_GET['action'] == 'success')) {
	?>
		<div class="alert alert-success alert-dismissable"><?php echo TEXT_SUCCESS; ?></div>
	<?php
  		} 
	?>
    <?php if ($messageStack->size('contact') > 0) echo $messageStack->output('contact'); ?>

	<div class="content">
    	<div class="row address-content">
        	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 store-address">
				<?php //if (CONTACT_US_STORE_NAME_ADDRESS== '1') { ?>
                	<h4>Store Address</h4>
					<address><?php echo nl2br(STORE_NAME_ADDRESS); ?></address>
				<?php //} ?>
			</div>
            <div class="static-content col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<?php if (DEFINE_CONTACT_US_STATUS >= '1' and DEFINE_CONTACT_US_STATUS <= '2') { ?>
				<?php
				/**
				 * require html_define for the contact_us page
				 */
				  require($define_page);
				?>
			</div>
		</div>
	</div>
	<div class="content">
		<?php
		// show dropdown if set
    		if (CONTACT_US_LIST !=''){
		?>
		<label class="inputLabel" for="send-to"><?php echo SEND_TO_TEXT; ?></label>
		<?php echo zen_draw_pull_down_menu('send_to',  $send_to_array, 0, 'id="send-to"') . '<span class="alert-text">' . ENTRY_REQUIRED_SYMBOL . '</span>'; ?>
		<br class="clearBoth" />
		<?php
    		}
		?>
        <div class="row sender-name-email">
        	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 sender-name">
        		<label><?php echo ENTRY_NAME . '<span class="alertrequired">' . ENTRY_REQUIRED_SYMBOL . '</span>'; ?></label>
        		<?php echo zen_draw_input_field('contactname', $name, ' size="40" id="contactname"') ; ?>
        	</div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 sender-email" for="email-address">
        		<label><?php echo ENTRY_EMAIL . '<span class="alertrequired">' . ENTRY_REQUIRED_SYMBOL . '</span>'; ?></label>
                <?php echo zen_draw_input_field('email', ($email_address), ' size="40" id="email-address"') ; ?>
        	</div>
		</div>
        <br class="clearBoth" />
        <div class="row message-detail">
			<div class="col-lg-12 contactus-message" for="enquiry">
        		<label><?php echo ENTRY_ENQUIRY . '<span class="alertrequired">' . ENTRY_REQUIRED_SYMBOL . '</span>'; ?></label>
				<?php echo zen_draw_textarea_field('enquiry', '30', '7', $enquiry, ' id="enquiry"'); ?>
        	</div>
		</div>
        <br class="clearBoth">
        <!-- bo Google reCAPTCHA  -->
        <?php if ($siteKey != NULL) { ?>
        <script src='https://www.google.com/recaptcha/api.js'></script>
		<div class="row">	
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 recaptcha-details">
                <label>
                    <?php echo GOOGLE_RECAPTCHA . '<span class="alertrequired">' . ENTRY_REQUIRED_SYMBOL . '</span>'; ?>
                </label>
                <div class="g-recaptcha" data-sitekey="<?php echo $siteKey;?>"></div>
            </div>
        </div>    
        <?php  }else { ?>
        <?php } ?> 
        <!-- eo Google reCAPTCHA  -->

        <div class="row contactus-sendbutton">
        	<div class="col-lg-12">
            	<div class="alert-text forward"><?php echo FORM_REQUIRED_INFORMATION; ?></div>
				<?php echo zen_image_submit(BUTTON_IMAGE_SEND, BUTTON_SEND_ALT); ?>
        	</div>
        </div>
	</div>
	
    <?php if($display_googlemap == 'yes') {?>
    	<div id="map-canvas"></div>
	<?php } ?>
<?php
	}
?>
</form>
</div>
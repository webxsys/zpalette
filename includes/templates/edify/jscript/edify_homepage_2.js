// JavaScript Document
/**
* @author Perfectus Inc.
* @author website www.perfectusinc.com
* @copyright Copyright 2015-2016 Perfectus Inc.
* JS Document
*/
//Scroll to top Script
var jq=jQuery.noConflict();jq(function(){jq.fn.scrollToTop=function(){jq(this).hide().removeAttr("href");if(jq(window).scrollTop()!="0"){jq(this).fadeIn("slow")}var a=jq(this);jq(window).scroll(function(){if(jq(window).scrollTop()>"350"){jq(a).fadeIn("slow")}else{jq(a).fadeOut("slow")}});jq(this).click(function(){jq("html, body").animate({scrollTop:0},"slow")})}});jq(function(){jq("#w2b-StoTop").scrollToTop()});var acc=jQuery.noConflict();acc(document).ready(function(){acc(".accordian-content").hide();acc(".accordian-header:first").addClass("active").next().show();acc(".accordian-header").click(function(){if(acc(this).next().is(":hidden")){acc(".accordian-header").removeClass("active").next().slideUp();acc(this).toggleClass("active").next().slideDown()}return false})});

var img=jQuery.noConflict();
img(document).ready(function(){
	img(".group1").colorbox({rel:"group1"});
		img("#click").click(function(){
			img("#click").css({"background-color":"#f00",color:"#fff",cursor:"inherit"}).text("Open this window again and this message will still be here.");	
			return false
		})
	});
	

var sticky = jQuery.noConflict();
	sticky(document).ready(function(){
			var scroll_pos = 0;
            sticky(document).scroll(function() { 
            scroll_pos = sticky(this).scrollTop();
			
			if (sticky(window).width() < 768) {
				sticky(".sticky-header-wrapper").css('display', 'none');
			}
            else if(scroll_pos > 250 && sticky(window).width() > 767) {
				sticky(".sticky-header-wrapper").fadeIn();
			}
			else {
				sticky(".sticky-header-wrapper").fadeOut();
			}
		});
	});


var sap = jQuery.noConflict();
sap('.sp-plus').on('click', function(){
 var oldVal = sap('.quantity-input').val();
    var newVal = (parseInt(sap('.quantity-input').val(),10) +1);
  sap('.quantity-input').val(newVal);
});

sap('.sp-minus').on('click', function(){
 var oldVal = sap('.quantity-input').val();
    var newVal = (parseInt(sap('.quantity-input').val(),10) -1);
    if (oldVal > 1) {
            var newVal = parseFloat(oldVal) - 1;
        } else {
            var newVal = 1;
        }
  sap('.quantity-input').val(newVal);
});



var $ = jQuery.noConflict();
$('.arrow-down').click(function() {
	$('.extrabox').slideToggle('slow');
	$('.arrow-down').addClass('opened')
    return false;
});


// Ajax Contact
	if ($("#contactForm")[0]) {
		$('#contactForm').submit(function () {
			$('#contactForm .error').remove();
			$('#contactForm .requiredField').removeClass('fielderror');
			$('#contactForm .requiredField').addClass('fieldtrue');
			$('#contactForm span strong').remove();
			var hasError = false;
			$('#contactForm .requiredField').each(function () {
				if (jQuery.trim($(this).val()) === '') {
					var labelText = $(this).prev('label').text();
					$(this).addClass('fielderror');
					$('#contactForm span').html('<strong>*Please fill out all fields.</strong>');
					hasError = true;
				} else if ($(this).hasClass('email')) {
					var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
					if (!emailReg.test(jQuery.trim($(this).val()))) {
						var labelText = $(this).prev('label').text();
						$(this).addClass('fielderror');
						$('#contactForm span').html('<strong>Is incorrect your email address</strong>');
						hasError = true;
					}
				}
			});
			if (!hasError) {
				$('#contactForm').slideDown('normal', function () {
					$("#contactForm #sendMessage").addClass('load-color');
					$("#contactForm #sendMessage").attr("disabled", "disabled").addClass("btn-success").val('Sending message. Please wait...');
				});
				var formInput = $(this).serialize();
				$.post($(this).attr('action'), formInput, function (data) {
					$('#contactForm').slideUp("normal", function () {
						$(this).before('<div class="alert alert-success"><p>Thanks!</strong> Your email was successfully sent. We check Our email all the time.</p></div>');
					});
				});
			}
			return false;
		});
	}
	if ($("#contactForm-widget")[0]) {
		$('#contactForm-widget').submit(function () {
			$('#contactForm-widget .error').remove();
			$('#contactForm-widget .requiredField').removeClass('fielderror');
			$('#contactForm-widget .requiredField').addClass('fieldtrue');
			$('#contactForm-widget span strong').remove();
			var hasError = false;
			$('#contactForm-widget .requiredField').each(function () {
				if (jQuery.trim($(this).val()) === '') {
					var labelText = $(this).prev('label').text();
					$(this).addClass('fielderror');
					$('#contactForm-widget span').html('<strong>*Please fill out all fields.</strong>');
					hasError = true;
				} else if ($(this).hasClass('email')) {
					var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
					if (!emailReg.test(jQuery.trim($(this).val()))) {
						var labelText = $(this).prev('label').text();
						$(this).addClass('fielderror');
						$('#contactForm-widget span').html('<strong>Is incorrect your email address</strong>');
						hasError = true;
					}
				}
			});
			if (!hasError) {
				$('#contactForm-widget').slideDown('normal', function () {
					$("#contactForm-widget #sendMessage").addClass('load-color');
					$("#contactForm-widget #sendMessage").attr("disabled", "disabled").val('Sending message. Please wait...');
					$('#contactForm-widget span').html('<i class="fa fa-spinner fa-spin"></i>');
				});
				var formInput = $(this).serialize();
				$.post($(this).attr('action'), formInput, function (data) {
					$('#contactForm-widget').slideUp("normal", function () {
						$(this).before('<div class="alert alert-success"><p>Thanks!</strong> Your email was successfully sent. We check Our email all the time, so we should be in touch soon.</p></div>');
					});
				});
			}
			return false;
		});
	}


$(document).ready(function() {

      var owl = $("#specials-slider");
      	owl.owlCarousel({
		  items : 3, //10 items above 1000px browser width
		  itemsDesktop : [1400,3], //5 items between 1000px and 901px
		  itemsDesktopSmall : [1199,2], // 3 items betweem 900px and 601px
		  itemsTablet: [900,2], //2 items between 600 and 0;
		  itemsMobile : [480,1],
		  rewindNav: false,
		  navigation : true // itemsMobile disabled - inherit from itemsTablet option
      });

	  var owl = $("#new-slider");
      	owl.owlCarousel({
		  items : 3, //10 items above 1000px browser width
		  itemsDesktop : [1400,3], //5 items between 1400px and 1025px
		  itemsDesktopSmall : [1199,2], // 2 items betweem 900px and 601px
		  itemsTablet: [900,2], //2 items between 600 and 0;
		  itemsMobile : [480,1],
		  rewindNav: false,
		  navigation : true // itemsMobile disabled - inherit from itemsTablet option
      });
	  var owl = $("#shoppingCartDefault #featured-slider-inner, #shoppingCartDefault #new-slider-inner, #shoppingCartDefault #special-slider-inner");
      owl.owlCarousel({
      items : 4, //10 items above 1000px browser width
      itemsDesktop : [1400,4], //5 items between 1400px and 1025px
      itemsDesktopSmall : [1199,3], // 3 items betweem 1024px and 901px
      itemsTablet: [900,2], //2 items between 900 and 481;
      itemsMobile : [480,1], //1 item between 480 and 0;
	  rewindNav: false,
	  navigation : true // itemsMobile disabled - inherit from itemsTablet option
      });
	  
	  var owl = $("#featured-slider");
      	owl.owlCarousel({
		  items : 3, //10 items above 1000px browser width
		  itemsDesktop : [1400,3], //5 items between 1000px and 901px
		  itemsDesktopSmall : [1199,2], // 3 items betweem 900px and 601px
		  itemsTablet: [900,2], //2 items between 600 and 0;
		  itemsMobile : [480,1],
		  rewindNav: false,
		  navigation : true // itemsMobile disabled - inherit from itemsTablet option
      });
	  
	  var owl = $("#featured-slider-inner, #new-slider-inner, #special-slider-inner");
      	owl.owlCarousel({
		  items : 3, //10 items above 1000px browser width
  		  itemsDesktop : [1400,3], //5 items between 1400px and 1025px
		  itemsDesktopSmall : [1199,2], // 3 items betweem 1024px and 901px
		  itemsTablet: [900,2], //2 items between 900 and 481;
		  itemsMobile : [480,1], //1 item between 480 and 0;
		  rewindNav: false,
		  navigation : true // itemsMobile disabled - inherit from itemsTablet option
      });
	  
	  var owl = $("#alsopurchased_products");
      	owl.owlCarousel({
		  items : 3, //10 items above 1000px browser width
		  itemsDesktop : [1400,3], //5 items between 1400px and 1025px
		  itemsDesktopSmall : [1199,2], // 3 items betweem 1024px and 901px
		  itemsTablet: [900,2], //2 items between 900 and 481;
		  itemsMobile : [480,1], //1 item between 480 and 0;
		  rewindNav: false,
		  navigation : true // itemsMobile disabled - inherit from itemsTablet option
      });
	  
	  var owl = $("#additionalimages-slider");
      owl.owlCarousel({
      items : 4, //10 items above 1000px browser width
      itemsDesktop : [1400,3], //5 items between 1000px and 901px
      itemsDesktopSmall : [900,3], // 3 items betweem 900px and 601px
      itemsTablet: [600,3], //2 items between 600 and 0;
      itemsMobile : [480,3],
	  rewindNav: false,
	  navigation : true // itemsMobile disabled - inherit from itemsTablet option
      });
	  
	  var owl = $(".brands");
      	owl.owlCarousel({
		  items : 6, //10 items above 1000px browser width
		  itemsDesktop : [1400,5], //5 items between 1400px and 1025px
		  itemsDesktopSmall : [1024,4], // 3 items betweem 1024px and 901px
		  itemsTablet: [900,3], //2 items between 900 and 481;
		  itemsMobile : [480,2], //1 item between 480 and 0;
		  rewindNav: false,
		  navigation : true // itemsMobile disabled - inherit from itemsTablet option
      });
	  
	$("#main-slideshow").owlCarousel({
		slideSpeed : 400,
		paginationSpeed : 400,
		singleItem : true,
		navigation : true,
		autoPlay :true,
		stopOnHover:true,
	});

});

$(document).ready(function(){
    $(".product_image a").tooltip({
        placement : 'top'
    });
	$(".arrow-down a").tooltip({
        placement : 'left'
    });
	$("header h1 i.fa").tooltip({
        placement : 'top'
    });
	$(".product-details-review .smallProductImage a").tooltip({
        placement : 'top'
    });
	$(".product-details-review .product-review-default h4 a").tooltip({
        placement : 'top'
    });
	$(".product-details-review .product-review-default p a").tooltip({
        placement : 'top'
    });
	$(".social_bookmarks li a").tooltip({
        placement : 'top'
    });
});


/*Menu JS*/
$("#cssmenu").menumaker({
  title: "MAIN MENU",
  format: "multitoggle"
 });
   
   $(document).ready(function() {
    $('a.moduleBox').click(function() { // show selected module(s)
    // variables
      var popID = $(this).attr('rel');
      var popNAV = $(this).attr('class');
    // clear out menu styles and apply active
      $('a.moduleBox').css('background', '');
      $(this).css('background', '');
    // hide all wrappers and display the one selected
      $('.centerBoxWrapper').hide();
      // check if all or single selection
      if (popID != 'viewAll') {
        $('#' + popID).show();
      } else {
       $('.centerBoxWrapper').show();
      }
    });
	
	$('a.navOne').click(function() {
		$('a.navOne').addClass('active');
		$('a.navTwo').removeClass('active');
		$('a.navThree').removeClass('active');
	});
	
	$('a.navTwo').click(function() {
		$('a.navOne').removeClass('active');
		$('a.navTwo').addClass('active');
		$('a.navThree').removeClass('active');
	});
	
	$('a.navThree').click(function() {
		$('a.navOne').removeClass('active');
		$('a.navTwo').removeClass('active');
		$('a.navThree').addClass('active');
	});
	
  });
    

var doc = document.documentElement;
doc.setAttribute('data-useragent', navigator.userAgent);

$(window).bind('resize load', function() {
    if ($(this).width() < 975) {
        $('#refine-search, #refine-search-1, #refine-search-2, #refine-search-3').removeClass('in');
        $('#refine-search, #refine-search-1, #refine-search-2, #refine-search-3').addClass('out');
    } else {
        $('#refine-search, #refine-search-1, #refine-search-2, #refine-search-3').removeClass('out');
        $('#refine-search, #refine-search-1, #refine-search-2, #refine-search-3').addClass('in');
    }
});
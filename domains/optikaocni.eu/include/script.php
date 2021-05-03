<!-- Common Scripts -->
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.easing-1.3.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.slicknav.min.js"></script>

<!-- Smooth Scroll -->
<script type="text/javascript" src="assets/js/sscr.js"></script>
<!-- // Smooth Scroll -->

<!-- Preloader Starts -->
<script type="text/javascript" src="assets/js/jpreloader.min.js"></script>
<!-- Preloader End -->

<!-- Light Box JS -->
<script type="text/javascript" src="assets/js/ekko-lightbox.min.js"></script>
<!-- // Light Box JS -->

<!-- Image Hover Overlay Effect -->
<script type="text/javascript" src="assets/js/modernizr-2.8.3.min.js"></script>	
<script type="text/javascript" src="assets/js/jquery.hoverdir.js"></script>	
<!-- // Image Hover Overlay Effect -->

<!-- // Common Scripts -->

<!-- Date And Time Picker -->
<script type="text/javascript" src="assets/js/bootstrap-datetimepicker.min.js"></script>
<!-- // Date And Time Picker -->

<!-- Google Map -->
<!--<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="assets/js/custom-google-map.js"></script>-->
<!-- // Google Map -->

<!-- Twenty Twenty Slider -->
<script type="text/javascript" src="assets/js/jquery.event.move.js"></script>
<script type="text/javascript" src="assets/js/jquery.twentytwenty.js"></script>
<!-- // Twenty Twenty Slider -->

<!-- Owl Slider JS -->
<script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="assets/js/custom-owl.js"></script>
<!-- // Owl Slider JS -->

<!-- BX Slider JS -->
<script type="text/javascript" src="assets/js/jquery.bxslider.min.js"></script>
<script type="text/javascript" src="assets/js/custom-bxslider.js"></script>
<script type="text/javascript" src="assets/js/jquery.isotope.min.js"></script>
<!-- // BX Slider JS -->

<!-- Revolution Slider 4.6.5 -->
<script type="text/javascript" src="assets/revolution-4.6.5/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="assets/revolution-4.6.5/js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="assets/revolution-4.6.5/js/custom-renovation-slide-thumbs.js"></script>
<!-- Revolution Slider 4.6.5 -->

<script>
// DOM  starts here 

jQuery(document).ready(function($){
"use strict"; 
// Preloaer Script
jQuery("body").jpreLoader(
	  {
		splashID:"#jSplash",
		showPercentage:!0,
		autoClose:!0,
		showSplash: true,
		splashFunction:function(){
		$("#sk-spinner").delay(1250).animate({opacity:1},700,"linear");
 		}
	})
});
// dom END

</script>

<!-- Animate It -->
<script type="text/javascript" src="assets/js/css3-animate-it.js"></script>
<!-- // Animate It -->

<!-- Custom General JS -->
<script type="text/javascript" src="assets/js/custom-general.js"></script>
<!-- //  Custom General JS -->


<script src="assets/js/jquery-3.3.1.min.js"></script>
	<script src="assets/js/instagramFeed.js"></script>
	<script>
		$(function () {
			$('#instagramImages').instagramFeed({
			
				//Main Options
				accessToken: '7643423891.1677ed0.1912db7c1dca41b0bb5478d4150319ad', // Enter your Instagram account Access Token. You can generate it here: http://instagram.pixelunion.net
				pluginWidth: '100', // Feed width in percents
				postsQuantity: '10', // Number of photos to display initially
				columnsQuantity: '3', // Number of columns in the feed: 2 or 3
				columnsQuantity480: '3', // Number of columns in the feed when width is less than 480px: 2 or 3
				spaceBetweenImages: '1', // Space between the photos in the feed. Min: 0, Max: 3
				borderRadius: '5', // Photos corner radius. Max: 50
				overlayColor: '#000', // Photos overlay color on rollover
				overlayOpacity: '0.7', // Photos overlay opacity on rollover. Min: 0, Max: 1
				likesColor: '#fff', // Color of photo likes
				commentsColor: '#fff', // Color of photo comments
				iconsColor: '#fff', // Color of the likes and comments icons
				openLinks: '_blank', // Open Instagram links in the same or new browser tab: _self or _blank
				
				//Load More Button Options
				loadmoreBtnText: 'ZOBRAZIT VÍCE', // Load More button text
				loadmoreBtnWidth: '150px', // Load More button width
				loadmoreBtnHeight: '45px', // Load More button height
				loadmoreBtnTextSize: '13px', // Load More button text size
				loadmoreBtnFontFamily: 'roboto', // Load More button text font
				loadmoreBtnTextColor: '#fff', // Load More button text color
				loadmoreBtnTextOnHover: '#fff', // Load More button text color on rollover
				loadmoreBtnBackground: '#dd3333', // Load More button background color
				loadmoreBtnBackgroundOnHover: 'black', // Load More button background color on rollover
				loadmoreBtnBorderRadius: '5px', // Load More button corner radius								
				loadmoreBtnHide: 'true', // Hide Load More button: false, true
			});
		});
	</script>
    
    <style>
    .instaWrap{width:9% !important;}
    </style>
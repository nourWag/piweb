<footer>
  <div class="container">
	<div class="row">
	  <?php if ($informations) { ?>
	  <div class="col-sm-2">
		<h5><?php echo $text_information; ?></h5>
		<ul class="list-unstyled">
		  <?php foreach ($informations as $information) { ?>
		  <li><a href="<?php echo $information['href']; ?>"><?php echo $information['title']; ?></a></li>
		  <?php } ?>
		</ul>
	  </div>
	  <?php } ?>
	  <div class="col-sm-2">
		<h5><?php echo $text_service; ?></h5>
		<ul class="list-unstyled">
		  <li><a href="<?php echo $contact; ?>"><?php echo $text_contact; ?></a></li>
		  <li><a href="<?php echo $return; ?>"><?php echo $text_return; ?></a></li>
		  <li><a href="<?php echo $sitemap; ?>"><?php echo $text_sitemap; ?></a></li>
		</ul>
	  </div>
	  <div class="col-sm-2">
		<h5><?php echo $text_extra; ?></h5>
		<ul class="list-unstyled">
		  <li><a href="<?php echo $manufacturer; ?>"><?php echo $text_manufacturer; ?></a></li>
		  <li><a href="<?php echo $voucher; ?>"><?php echo $text_voucher; ?></a></li>
		  <li><a href="<?php echo $affiliate; ?>"><?php echo $text_affiliate; ?></a></li>
		  <li><a href="<?php echo $special; ?>"><?php echo $text_special; ?></a></li>
		</ul>
	  </div>
	  <div class="col-sm-2">
		<h5><?php echo $text_account; ?></h5>
		<ul class="list-unstyled">
		  <li><a href="<?php echo $account; ?>"><?php echo $text_account; ?></a></li>
		  <li><a href="<?php echo $order; ?>"><?php echo $text_order; ?></a></li>
		  <li><a href="<?php echo $wishlist; ?>"><?php echo $text_wishlist; ?></a></li>
		  <li><a href="<?php echo $newsletter; ?>"><?php echo $text_newsletter; ?></a></li>
		</ul>
	  </div>
	  <div class="col-sm-4">
		<!--<h5><?php echo $text_contact; ?></h5>
		<ul class="list-unstyled">
		  <li><?php echo $address; ?></li>
		  <li class="phone"><?php echo $telephone; ?></li>
		  <li class="phone"><?php echo $fax; ?></li>
		  
		</ul>
		<div class="socials">
			<a href="//www.facebook.com/"><i class="fa fa-facebook"></i></a>
			<a href="//www.facebook.com/"><i class="fa fa-twitter"></i></a>
			<a href="//www.facebook.com/"><i class="fa fa-rss"></i></a>
		</div>-->
	  </div>
	</div>
	
  </div>
	<div class="copyright">
		<div class="container">
			<a href="http://www.templatemonster.com/" rel="nofollow" target="_blank"><img src="image/catalog/footer-logo.png" alt="logo"></a>
			<?php echo $powered; ?><!-- [[%FOOTER_LINK]] -->
		</div> 
	</div>
</footer>
<script src="catalog/view/theme/theme509/js/livesearch.js" type="text/javascript"></script>

</div>

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true&sensor=false"></script>
        
        <script type="text/javascript">
            // When the window has finished loading create our google map below
            google.maps.event.addDomListener(window, 'load', init);
        
            function init() {
                // Basic options for a simple Google Map
                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                var mapOptions = {
                    // How zoomed in you want the map to start at (always required)
                    zoom: 11,
					scrollwheel: false,

                    // The latitude and longitude to center the map (always required)
                    center: new google.maps.LatLng(40.6700, -73.9400), // New York

                    // How you would like to style the map. 
                    // This is where you would paste any style found on Snazzy Maps.
                    styles: [{featureType:"landscape",stylers:[{saturation:-100},{lightness:65},{visibility:"on"}]},{featureType:"poi",stylers:[{saturation:-100},{lightness:51},{visibility:"simplified"}]},{featureType:"road.highway",stylers:[{saturation:-100},{visibility:"simplified"}]},{featureType:"road.arterial",stylers:[{saturation:-100},{lightness:30},{visibility:"on"}]},{featureType:"road.local",stylers:[{saturation:-100},{lightness:40},{visibility:"on"}]},{featureType:"transit",stylers:[{saturation:-100},{visibility:"simplified"}]},{featureType:"administrative.province",stylers:[{visibility:"off"}]/**/},{featureType:"administrative.locality",stylers:[{visibility:"off"}]},{featureType:"administrative.neighborhood",stylers:[{visibility:"on"}]/**/},{featureType:"water",elementType:"labels",stylers:[{visibility:"on"},{lightness:-25},{saturation:-100}]},{featureType:"water",elementType:"geometry",stylers:[{hue:"#ffff00"},{lightness:-25},{saturation:-97}]}]
                };

                // Get the HTML DOM element that will contain your map 
                // We are using a div with id="map" seen below in the <body>
                var mapElement = document.getElementById('map');

                // Create the Google Map using out element and options defined above
                var map = new google.maps.Map(mapElement, mapOptions);
            }
        </script>

</body></html>

<div class="box facebook info col-lg-4">
	<div class="box-heading">
		<h3><?php echo $heading_title; ?></h3>
	</div>
	<div class="box-content">
		<div 
		class="fb-like-box"
		data-href="<?php echo $page_url; ?>"
		data-width="<?php echo $width; ?>"
		data-height="<?php echo $height; ?>"
		data-show-faces="<?php echo $show_faces; ?>"
		data-stream="<?php echo $show_stream; ?>"
		data-header="<?php echo $show_header; ?>"
		data-colorscheme="<?php echo $color_scheme; ?>"
		data-show-border="<?php echo $show_border; ?>"></div>
	</div>
</div>


<script>
  window.fbAsyncInit = function() {
    FB.init({
      <?php if ($flb_app_id) { ?>
		appId      : '<?php echo $flb_app_id; ?>', // App ID
	<?php } ?>
      xfbml      : true,
      version    : 'v2.2'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>

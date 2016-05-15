jQuery(document).ready(function(){
/**************swipe menu***************/
jQuery('#page').click(function(){
	if(jQuery(this).parents('body').hasClass('ind')){
		jQuery(this).parents('body').removeClass('ind');
		return false
	}
	})
	jQuery('.swipe-control').click(function(){
		if(jQuery(this).parents('body').hasClass('ind')){
		jQuery(this).parents('body').removeClass('ind');
		return false
	}
	else{
		jQuery(this).parents('body').addClass('ind');
		return false
	}
})
/************************************************************************************************shadow height*****************************************************************************************************/
var sect = 1;
$(document).ready(function() {
	$('.swipe').height($(window).height()-50);

	$(window).resize(function() {
		$('.swipe').height($(window).height()-50);
	});

	var sects = $('.swipe').size();

});
/**************lazy load***************/
jQuery("img.lazy").unveil(1, function(){
	jQuery(this).load(function() {
		jQuery(this).animate({'opacity':1}, 700);
	});
});

/************product gallery on product page***********/
$("#gallery_zoom").elevateZoom({gallery:'image-additional', cursor: 'pointer', galleryActiveClass: 'active', imageCrossfade: true}); 
//pass the images to Fancybox
$("#gallery_zoom").bind("click", function(e) {  
  var ez =   $('#gallery_zoom').data('elevateZoom');	
	$.fancybox(ez.getGalleryList());
  return false;
});
$('#image-additional').bxSlider({
	pager:false,
	controls:true,
	slideMargin:10,
	minSlides: 3,
	maxSlides: 4,
	slideWidth:70,
	infiniteLoop:false,
	moveSlides:1
});
$('#gallery').bxSlider({
	pager:false,
	controls:true,
	minSlides: 1,
	maxSlides: 1,
	infiniteLoop:false,
	moveSlides:1
});

/**********************************************************add icon aside li *****************************************************************************/
	$(document).ready(function(){
		$('column').find('.box-category .menu  li li a').prepend('<i class="fa fa-angle-right "></i>');
		$('#content').find('ul.list-unstyled li a').prepend('<i class="fa fa-angle-right "></i>');
		$('.site-map-page').find(' ul li a').prepend('<i class="fa fa-angle-right "></i>');
		$('.manufacturer-content ').find(' div>a').prepend('<i class="fa fa-angle-right "></i>');
	});
/******************* category name height**************************/
(function($){$.fn.equalHeights=function(minHeight,maxHeight){tallest=(minHeight)?minHeight:0;this.each(function(){if($(this).height()>tallest){tallest=$(this).height()}});if((maxHeight)&&tallest>maxHeight)tallest=maxHeight;return this.each(function(){$(this).height(tallest)})}})(jQuery)
$(window).load(function(){
	if($("#content .product-grid .name").length){
	$("#content .product-grid .name").equalHeights()}
});
/**************related name height ******************/
(function($){$.fn.equalHeights=function(minHeight,maxHeight){tallest=(minHeight)?minHeight:0;this.each(function(){if($(this).height()>tallest){tallest=$(this).height()}});if((maxHeight)&&tallest>maxHeight)tallest=maxHeight;return this.each(function(){$(this).height(tallest)})}})(jQuery)
$(window).load(function(){
	if($(".maxheight-r").length){
	$(".maxheight-r").equalHeights()}
});
/******************************************************/
(function($){ //create closure so we can safely use $ as alias for jQuery
	  $(document).ready(function(){
		var exampleOptions = {
			delay:       1000,                            // one second delay on mouseout
			animation:   {opacity:'show',height:'show'},  // fade-in and slide-down animation
			speed:       'fast',                          // faster animation speed
			autoArrows:  true
		}
		// initialise plugin
		var example = $('#tm_menu').superfish(exampleOptions);
	  });

	})(jQuery); 
/***********CATEGORY DROP DOWN****************/
jQuery("#menu-icon").on("click", function(){
  jQuery("#menu-gadget .menu").slideToggle();
  jQuery(this).toggleClass("active");
 });

  jQuery('#menu-gadget .menu').find('li>ul').before('<i class="fa fa-angle-down"></i>');
  jQuery('#menu-gadget .menu li i').on("click", function(){
   if (jQuery(this).hasClass('fa-angle-up')) { jQuery(this).removeClass('fa-angle-up').parent('li').find('> ul').slideToggle(); } 
	else {
	 jQuery(this).addClass('fa-angle-up').parent('li').find('> ul').slideToggle();
	}
  });
/***********column dropdown box*******************/
  if ($('body').width() < 768) {
		leftColumn = $('body').find('#column-left');
		leftColumn.remove().insertAfter('#content');
	  jQuery("img.lazy").unveil(1, function(){
			jQuery(this).load(function() {
				jQuery(this).animate({'opacity':1}, 700);
			});
		});
		jQuery('.col-sm-3 .box-heading h3').append('<i class="fa fa-plus-circle"></i>');
		jQuery('.col-sm-3 .box-heading').on("click", function(){
		if (jQuery(this).find('i').hasClass('fa-minus-circle')) { jQuery(this).find('i').removeClass('fa-minus-circle').parents('.col-sm-3 .box').find('.box-content').slideToggle(); }
		else {
			jQuery(this).find('i').addClass('fa-minus-circle').parents('.col-sm-3 .box').find('.box-content').slideToggle();
		}
		})
	};
/************************* RELATED PRODUCTS************************************/
$('.related-slider').bxSlider({
	pager:false,
	controls:true,
	slideMargin:30,
	minSlides: 1,
	maxSlides: 4,
	slideWidth: 170,
	infiniteLoop:false,
	moveSlides:1
});

/*********product tabs**********/
if ($('body').width() < 768) {
	jQuery('.tab-heading').append('<i class="fa fa-plus-circle"></i>');
	jQuery('.tab-heading').on("click", function(){
	if (jQuery(this).find('i').hasClass('fa-minus-circle')) { jQuery(this).find('i').removeClass('fa-minus-circle').parents('.tabs').find('.tab-content').slideToggle(); }
		else {
		jQuery(this).find('i').addClass('fa-minus-circle').parents('.tabs').find('.tab-content').slideToggle();
	}
	})
	};
/*var isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent);
*********************************
if(!isMobile) {
	$(".box_html.video_block").vide("image/catalog/video/video_1");
}*/

$(".box_html.video_block").vide("image/catalog/video/video_1");
});


/***********************Green Sock*******************************/

$(document).ready(function(){
	var stickMenu = false;
	var docWidth= $('body').find('.container').width();
	
	
	if(!isMobile) {
	// init controller
	controller = new ScrollMagic();
	
	// assign handler "scene" and add it to Controller
	fadein_left = jQuery('.banners > div:nth-child(1)');
	fadein_bottom = jQuery('.banners > div:nth-child(2)');
	fadein_right = jQuery('.banners > div:nth-child(3)');

	fadein_left_2 = jQuery('.advertising div.col-sm-4:nth-child(1)');
	fadein_bottom_2 = jQuery('.advertising div.col-sm-4:nth-child(2)');
	fadein_right_2 = jQuery('.advertising div.col-sm-4:nth-child(3)');
	
	left_animate = TweenMax.from(fadein_left, 0.5, {left:"-200px", alpha: 0, ease:Power1.easeOut});
	bottom_animate = TweenMax.from(fadein_bottom, 0.5, {bottom:"-200px", alpha: 0, ease:Power1.easeOut});
	right_animate = TweenMax.from(fadein_right, 0.5, {right:"-200px", alpha: 0, ease:Power1.easeOut});
		

	
	left_animate_2 = TweenMax.from(fadein_left_2, 0.5, {left:"-200px", alpha: 0, ease:Power1.easeOut});
	bottom_animate_2 = TweenMax.from(fadein_bottom_2, 0.5, {bottom:"-200px", alpha: 0, ease:Power1.easeOut});
	right_animate_2 = TweenMax.from(fadein_right_2, 0.5, {right:"-200px", alpha: 0, ease:Power1.easeOut});

	  if(jQuery(".banners").length){ 
	   var scene_1 = new ScrollScene({
		triggerElement: ".banners",
		offset: -300
		}).setTween(left_animate)
		  .addTo(controller)
		  .reverse(false); 
	
	   var scene_2 = new ScrollScene({
		triggerElement: ".banners",
		offset: -300
		}).setTween(bottom_animate)
		  .addTo(controller)
		  .reverse(false); 
	   var scene_3 = new ScrollScene({
		triggerElement: ".banners",
		offset: -300
		}).setTween(right_animate)
		  .addTo(controller)
		  .reverse(false); 
	  };
	  

	  
	  if(jQuery(".advertising").length){ 
	   var scene_4 = new ScrollScene({
		triggerElement: ".advertising",
		offset: -100
		}).setTween(left_animate_2)
		  .addTo(controller)
		  .reverse(false); 
	
	   var scene_5 = new ScrollScene({
		triggerElement: ".advertising",
		offset: -100
		}).setTween(bottom_animate_2)
		  .addTo(controller)
		  .reverse(false); 
	   var scene_6 = new ScrollScene({
		triggerElement: ".advertising",
		offset: -100
		}).setTween(right_animate_2)
		  .addTo(controller)
		  .reverse(false); 
	  };
	}
	
})
var isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent);

/***********************************/
if(!isMobile) {
	$(".box_html.video_block").vide("image/catalog/video/video_1");
}


function listBlocksAnimate(block,element,row,offset,difEffect){
	if(!isMobile) {
		if(jQuery(block).length){
			  var i = 0;
			  var j = row;
			  var k = 1;
			  var effect = -1;

			  $(element).each(function() {
				  i++;
				  
				  if(i>j){
					j += row;
					k = i;
					effect = effect*(-1);
				  }
				  
				  if(effect == -1 && difEffect == true) {
					ef = TweenMax.from(element+':nth-child('+i+')', 0.5, {left:-1*200-i*300+"px", alpha: 0, ease:Power1.easeOut})
					
				  } else {
					ef = TweenMax.from(element+':nth-child('+i+')', 0.5, {right:-1*200-i*300+"px", alpha: 0, ease:Power1.easeOut}) 
				  }
				  
				  var scene_new = new ScrollScene({
					triggerElement: element+':nth-child('+k+')',
					offset: offset,
					}).setTween(ef)
					  .addTo(controller)
					  .reverse(false);
			});
		  }
	}
}

function listTabsAnimate(element){
	if(!isMobile) {
		if(jQuery(element).length){
			TweenMax.staggerFromTo(element, 0.3, {alpha: 0, rotationY:-90, ease:Power1.easeOut},{alpha: 1, rotationY:0, ease:Power1.easeOut}, 0.1);
		}
	}
}

$(window).load(function(){
	 listBlocksAnimate('.box.featured', '.box.featured .product-layout', 4, -300, true);
	 listBlocksAnimate('#homepage-blog', '#homepage-blog li', 1, -400, true);
	 if(!isMobile) {
		 if(jQuery(".parallax-1").length){ 
			 var welcome = new TimelineMax();
			 
			 welcome.from(".parallax-1 h4",0.5,{top:-300, autoAlpha:0})
			 .from(".parallax-1 h2",0.5,{right:-300, autoAlpha:0})
			 .from(".parallax-1 h1",0.5,{left:-300, autoAlpha:0})
			 .from(".parallax-1 h3",0.5,{right:-300, autoAlpha:0})
			 .from(".parallax-1 a",0.5,{bottom:-200,autoAlpha:0});
			 
			var scene_welcome = new ScrollScene({triggerElement: ".parallax-1",offset: -100}).setTween(welcome).addTo(controller).reverse(false); 
		 }
		 if(jQuery(".parallax-2").length){ 
			 var welcome = new TimelineMax();
			 
			 welcome.from(".parallax-2 h4",0.5,{top:-300, autoAlpha:0})
			 .from(".parallax-2 h2",0.5,{right:-300, autoAlpha:0})
			 .from(".parallax-2 h1",0.5,{left:-300, autoAlpha:0})
			 .from(".parallax-2 h3",0.5,{right:-300, autoAlpha:0})
			 .from(".parallax-2 a",0.5,{bottom:-200,autoAlpha:0});
			 
			var scene_welcome = new ScrollScene({triggerElement: ".parallax-2",offset: -100}).setTween(welcome).addTo(controller).reverse(false); 
		 }
		 if(jQuery(".parallax-3").length){ 
			 var welcome = new TimelineMax();
			 
			 welcome.from(".parallax-3 h4",0.5,{top:-300, autoAlpha:0})
			 .from(".parallax-3 h2",0.5,{right:-300, autoAlpha:0})
			 .from(".parallax-3 h1",0.5,{left:-300, autoAlpha:0})
			 .from(".parallax-3 h3",0.5,{right:-300, autoAlpha:0})
			 .from(".parallax-3 a",0.5,{bottom:-200,autoAlpha:0});
			 
			var scene_welcome = new ScrollScene({triggerElement: ".parallax-3",offset: -100}).setTween(welcome).addTo(controller).reverse(false); 
		 }
		 if(jQuery(".parallax-4").length){ 
			 var welcome = new TimelineMax();
			 
			 welcome.from(".parallax-4 h4",0.5,{top:-300, autoAlpha:0})
			 .from(".parallax-4 h2",0.5,{right:-300, autoAlpha:0})
			 .from(".parallax-4 h1",0.5,{left:-300, autoAlpha:0})
			 .from(".parallax-4 h3",0.5,{right:-300, autoAlpha:0})
			 .from(".parallax-4 a",0.5,{bottom:-200,autoAlpha:0});
			 
			var scene_welcome = new ScrollScene({triggerElement: ".parallax-4",offset: -100}).setTween(welcome).addTo(controller).reverse(false); 
		 }
	 }
});


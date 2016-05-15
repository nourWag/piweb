//global variables
var responsiveflag = false;

$(document).ready(function(){
	highdpiInit();
	responsiveResize();
	$(window).resize(responsiveResize);
	if (navigator.userAgent.match(/Android/i))
	{
		var viewport = document.querySelector('meta[name="viewport"]');
		viewport.setAttribute('content', 'initial-scale=1.0,maximum-scale=1.0,user-scalable=0,width=device-width,height=device-height');
		window.scrollTo(0, 1);
	}
	blockHover();
	if (typeof quickView !== 'undefined' && quickView)
		quick_view();
	dropDown();

	if (typeof page_name != 'undefined' && !in_array(page_name, ['index', 'product']))
	{
		bindGrid();

 		$(document).on('change', '.selectProductSort', function(e){
			if (typeof request != 'undefined' && request)
				var requestSortProducts = request;
 			var splitData = $(this).val().split(':');
			if (typeof requestSortProducts != 'undefined' && requestSortProducts)
				document.location.href = requestSortProducts + ((requestSortProducts.indexOf('?') < 0) ? '?' : '&') + 'orderby=' + splitData[0] + '&orderway=' + splitData[1];
    	});

		$(document).on('change', 'select[name="n"]', function(){
			$(this.form).submit();
		});

		$(document).on('change', 'select[name="manufacturer_list"], select[name="supplier_list"]', function() {
			if (this.value != '')
				location.href = this.value;
		});

		$(document).on('change', 'select[name="currency_payement"]', function(){
			setCurrency($(this).val());
		});
	}

	$(document).on('click', '.back', function(e){
		e.preventDefault();
		history.back();
	});
	
	jQuery.curCSS = jQuery.css;
	if (!!$.prototype.cluetip)
		$('a.cluetip').cluetip({
			local:true,
			cursor: 'pointer',
			dropShadow: false,
			dropShadowSteps: 0,
			showTitle: false,
			tracking: true,
			sticky: false,
			mouseOutClose: true,
			fx: {             
		    	open:       'fadeIn',
		    	openSpeed:  'fast'
			}
		}).css('opacity', 0.8);

	if (!!$.prototype.fancybox)
		$.extend($.fancybox.defaults.tpl, {
			closeBtn : '<a title="' + FancyboxI18nClose + '" class="fancybox-item fancybox-close" href="javascript:;"></a>',
			next     : '<a title="' + FancyboxI18nNext + '" class="fancybox-nav fancybox-next" href="javascript:;"><span></span></a>',
			prev     : '<a title="' + FancyboxI18nPrev + '" class="fancybox-nav fancybox-prev" href="javascript:;"><span></span></a>'
		});
});

function highdpiInit()
{
	if($('.replace-2x').css('font-size') == "1px")
	{		
		var els = $("img.replace-2x").get();
		for(var i = 0; i < els.length; i++)
		{
			src = els[i].src;
			extension = src.substr( (src.lastIndexOf('.') +1) );
			src = src.replace("." + extension, "2x." + extension);
			
			var img = new Image();
			img.src = src;
			img.height != 0 ? els[i].src = src : els[i].src = els[i].src;
		}
	}
}

// Used to compensante Chrome/Safari bug (they don't care about scroll bar for width)
function scrollCompensate() 
{
    var inner = document.createElement('p');
    inner.style.width = "100%";
    inner.style.height = "200px";

    var outer = document.createElement('div');
    outer.style.position = "absolute";
    outer.style.top = "0px";
    outer.style.left = "0px";
    outer.style.visibility = "hidden";
    outer.style.width = "200px";
    outer.style.height = "150px";
    outer.style.overflow = "hidden";
    outer.appendChild(inner);

    document.body.appendChild(outer);
    var w1 = inner.offsetWidth;
    outer.style.overflow = 'scroll';
    var w2 = inner.offsetWidth;
    if (w1 == w2) w2 = outer.clientWidth;

    document.body.removeChild(outer);

    return (w1 - w2);
}

function responsiveResize()
{
	compensante = scrollCompensate();
	if (($(window).width()+scrollCompensate()) <= 767 && responsiveflag == false)
	{
		accordion('enable');
	    accordionFooter('enable');
		responsiveflag = true;
	}
	else if (($(window).width()+scrollCompensate()) >= 768)
	{
		accordion('disable');
		accordionFooter('disable');
	    responsiveflag = false;
	}
}

function blockHover(status)
{
	$(document).off('mouseenter').on('mouseenter', '.product_list.grid li.ajax_block_product .product-container', function(e){

		if ('ontouchstart' in document.documentElement)
			return;
		if ($('body').find('.container').width() == 1170)
		{
			//var pcHeight = $(this).parent().outerHeight();
			//var pcPHeight = $(this).parent().find('.button-container').outerHeight() + $(this).parent().find('.comments_note').outerHeight() + $(this).parent().find('.functional-buttons').outerHeight();
			$(this).parent().addClass('hovered');
			//$(this).parent().css('height', pcHeight + pcPHeight).css('margin-bottom', pcPHeight * (-1));
		}
	});

	$(document).off('mouseleave').on('mouseleave', '.product_list.grid li.ajax_block_product .product-container', function(e){
		if ($('body').find('.container').width() == 1170)
			$(this).parent().removeClass('hovered');
	});
}

function quick_view()
{
	$(document).on('click', '.quick-view:visible, .quick-view-mobile:visible', function(e) 
	{
		e.preventDefault();
		var url = this.rel;
		if (url.indexOf('?') != -1)
			url += '&';
		else
			url += '?';

		if (!!$.prototype.fancybox)
			$.fancybox({
				'padding':  0,
				'width':    1087,
				'height':   610,
				'type':     'iframe',
				'href':     url + 'content_only=1'
			});
	});
}

function bindGrid()
{
	var view = $.totalStorage('display');
	
	if (!view && (typeof displayList != 'undefined') && displayList)
		view = 'list';
	
	if (view && view != 'grid')
		display(view);
	else
		$('.display').find('li#grid').addClass('selected');
	
	$(document).on('click', '#grid', function(e){
		e.preventDefault();
		display('grid');
	});
	
	$(document).on('click', '#list', function(e){
		e.preventDefault();
		display('list');
	});
}
if(nbItemsPerLine != 'undefined' && nbItemsPerLineTablet != 'undefined') {var nbItemsPerLine = nbItemsPerLine; var nbItemsPerLineTablet = nbItemsPerLineTablet}else{var nbItemsPerLine =''; var nbItemsPerLineTablet ='';}
function display(view)
{
	if (view == 'list')
	{
		$('ul.product_list').removeClass('grid').addClass('list row');
		$('.product_list > li').removeClass('col-xs-12 col-sm-'+12/nbItemsPerLineTablet+' col-md-'+ 12/nbItemsPerLine).addClass('col-xs-12');
		$('.product_list > li').each(function(index, element) {
			html = '';
			html = '<div class="product-container"><div class="row">';
				html += '<div class="left-block col-xs-4">' + $(element).find('.left-block').html() + '</div>';
				html += '<div class="center-block col-xs-8 col-sm-8">';
					html += '<div class="product-flags">'+ $(element).find('.product-flags').html() + '</div>';
					html += '<h5 itemprop="name">'+ $(element).find('h5').html() + '</h5>';
					html += '<p class="product-desc">'+ $(element).find('.product-desc').html() + '</p>';
					var price = $(element).find('.content_price').html();       // check : catalog mode is enabled
					if (price != null) { 
						html += '<div class="content_price">'+ price + '</div>';
					}
					var colorList = $(element).find('.color-list-container').html();
					if (colorList != null) {
						html += '<div class="color-list-container">'+ colorList +'</div>';
					}
					var availability = $(element).find('.availability').html();	// check : catalog mode is enabled
					if (availability != null) {
						html += '<span class="availability">'+ availability +'</span>';
					}
					html += '<div class="button-container">'+ $(element).find('.button-container').html() +'</div>';
					html += '<div class="functional-buttons">' + $(element).find('.functional-buttons').html() + '</div>';
					var rating = $(element).find('.comments_note').html(); // check : rating
					if (rating != null) { 
						html += '<div itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating" class="comments_note">'+ rating + '</div>';
					}
				html += '</div>';
			html += '</div></div>';
		$(element).html(html);
		});		
		$('.display').find('li#list').addClass('selected');
		$('.display').find('li#grid').removeAttr('class');
		$.totalStorage('display', 'list');
	}
	else 
	{
		$('ul.product_list').removeClass('list').addClass('grid row');
		$('.product_list > li').removeClass('col-xs-12').addClass('col-xs-12 col-sm-'+12/nbItemsPerLineTablet+' col-md-' + 12/nbItemsPerLine);
		$('.product_list > li').each(function(index, element) {
		html = '';
		html += '<div class="product-container">';
			html += '<div class="left-block">' + $(element).find('.left-block').html() + '</div>';
			html += '<div class="right-block">';
				html += '<div class="product-flags">'+ $(element).find('.product-flags').html() + '</div>';
				html += '<h5 itemprop="name">'+ $(element).find('h5').html() + '</h5>';
				var rating = $(element).find('.comments_note').html(); // check : rating
					if (rating != null) { 
						html += '<div itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating" class="comments_note">'+ rating + '</div>';
					}
				html += '<p itemprop="description" class="product-desc">'+ $(element).find('.product-desc').html() + '</p>';
				var price = $(element).find('.content_price').html(); // check : catalog mode is enabled
					if (price != null) { 
						html += '<div class="content_price">'+ price + '</div>';
					}
				//html += '<div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="button-container">'+ $(element).find('.button-container').html() +'</div>';
				var colorList = $(element).find('.color-list-container').html();
				if (colorList != null) {
					html += '<div class="color-list-container">'+ colorList +'</div>';
				}
				var availability = $(element).find('.availability').html(); // check : catalog mode is enabled
				if (availability != null) {
					html += '<span class="availability">'+ availability +'</span>';
				}
			html += '</div>';
			html += '<div class="functional-buttons clearfix">' + $(element).find('.functional-buttons').html() + '</div>';
		html += '</div>';		
		$(element).html(html);
		
		});
		$('.display').find('li#grid').addClass('selected');
		$('.display').find('li#list').removeAttr('class');
		$.totalStorage('display', 'grid');
	}	
}

function dropDown() 
{
	elementClick = '#header .current';
	elementSlide =  'ul.toogle_content';       
	activeClass = 'active';			 

	$(elementClick).on('click', function(e){
		e.stopPropagation();
		var subUl = $(this).next(elementSlide);
		if(subUl.is(':hidden'))
		{
			subUl.slideDown();
			$(this).addClass(activeClass);	
		}
		else
		{
			subUl.slideUp();
			$(this).removeClass(activeClass);
		}
		$(elementClick).not(this).next(elementSlide).slideUp();
		$(elementClick).not(this).removeClass(activeClass);
		e.preventDefault();
	});

	$(elementSlide).on('click', function(e){
		e.stopPropagation();
	});

	$(document).on('click', function(e){
		e.stopPropagation();
		var elementHide = $(elementClick).next(elementSlide);
		$(elementHide).slideUp();
		$(elementClick).removeClass('active');
	});
}

function accordionFooter(status)
{
	if(status == 'enable')
	{
		$('#footer .footer-block h4').on('click', function(){
			$(this).toggleClass('active').parent().find('.toggle-footer').stop().slideToggle('medium');
		})
		$('#footer').addClass('accordion').find('.toggle-footer').slideUp('fast');
	}
	else
	{
		$('.footer-block h4').removeClass('active').off().parent().find('.toggle-footer').removeAttr('style').slideDown('fast');
		$('#footer').removeClass('accordion');
	}
}

//   TOGGLE COLUMNS
function accordion(status){
		leftColumnBlocks = $('#left_column');
		if(status == 'enable'){
			$(leftColumnBlocks).remove();
			$(leftColumnBlocks).insertAfter('#center_column').find('#categories_block_left ul.block_content').slideToggle('fast');
			$.uniform.update("#layered_form input[type='checkbox'], #layered_form input[type='radio'], select.form-control");
			if(typeof(categoryReload) != 'undefined') {categoryReload()}
			if(typeof(sliderList) != 'undefined') {initSliders()}
			$('#right_column .block:not(#layered_block_left) .title_block, #left_column .block:not(#layered_block_left) .title_block, #left_column #newsletter_block_left h4').on('click', function(){
				$(this).toggleClass('active').parent().find('.block_content').stop().slideToggle('medium');
			})
			$('#right_column, #left_column').addClass('accordion').find('.block:not(#layered_block_left) .block_content').slideUp('fast');
		}else{
			$(leftColumnBlocks).remove();
			$(leftColumnBlocks).insertBefore('#center_column');
			$.uniform.update("#layered_form input[type='checkbox'], #layered_form input[type='radio'], select.form-control");
			if(typeof(categoryReload) != 'undefined') {categoryReload()}
			if(typeof(sliderList) != 'undefined') {initSliders()}
			$('#right_column .block:not(#layered_block_left) .title_block, #left_column .block:not(#layered_block_left) .title_block, #left_column #newsletter_block_left h4').removeClass('active').off().parent().find('.block_content').removeAttr('style').slideDown('fast');
			$('#left_column, #right_column').removeClass('accordion');
		}
	}
	
/* Stik Up menu script */
(function($){
	$.fn.tmStickUp=function(options){ 
		
		var getOptions = {
			correctionSelector: $('.correctionSelector')
		}
		$.extend(getOptions, options); 

		var
			_this = $(this)
		,	_window = $(window)
		,	_document = $(document)
		,	thisOffsetTop = 0
		,	thisOuterHeight = 0
		,	thisMarginTop = 0
		,	thisPaddingTop = 0
		,	documentScroll = 0
		,	pseudoBlock
		,	lastScrollValue = 0
		,	scrollDir = ''
		,	tmpScrolled
		;

		init();
		function init(){
			thisOffsetTop = parseInt(_this.offset().top);
			thisMarginTop = parseInt(_this.css("margin-top"));
			thisOuterHeight = parseInt(_this.outerHeight(true));

			$('<div class="pseudoStickyBlock"></div>').insertAfter(_this);
			pseudoBlock = $('.pseudoStickyBlock');
			pseudoBlock.css({"position":"relative", "display":"block"});
			addEventsFunction();
		}//end init

		function addEventsFunction(){
			_document.on('scroll', function() {
				tmpScrolled = $(this).scrollTop();
					if (tmpScrolled > lastScrollValue){
						scrollDir = 'down';
					} else {
						scrollDir = 'up';
					}
				lastScrollValue = tmpScrolled;

				correctionValue = getOptions.correctionSelector.outerHeight(true);
				documentScroll = parseInt(_window.scrollTop());

				if(thisOffsetTop - correctionValue < documentScroll){
					_this.addClass('isStuck');
					_this.css({position:"fixed", top:correctionValue});
					pseudoBlock.css({"height":thisOuterHeight});
				}else{
					_this.removeClass('isStuck');
					_this.css({position:"relative", top:0});
					pseudoBlock.css({"height":0});
				}
			}).trigger('scroll');
		}
	}//end tmStickUp function
})(jQuery)

$(document).ready(function(){
	var stickMenu = false;
	var docWidth= $('body').find('.container').width();
	if(stickMenu && docWidth > 780) {
		$('body').find('#block_top_menu').wrapInner('<div class="stickUpTop"><div class="stickUpHolder container">');
		$('#block_top_menu').tmStickUp();
	}
	$("#htmlcontent_top > .container > ul > li").fitText(2, { minFontSize: '3px', maxFontSize: '15px' });
	if(!isMobile) {
	// init controller
	controller = new ScrollMagic();
	
	// assign handler "scene" and add it to Controller
	fadein_left = jQuery('#htmlcontent_top li:nth-child(1)');
	fadein_bottom = jQuery('#htmlcontent_top li:nth-child(2)');
	fadein_right = jQuery('#htmlcontent_top li:nth-child(3)');
	fadein_left_1 = jQuery('#htmlcontent_home li:nth-child(1)');
	fadein_right_1 = jQuery('#htmlcontent_home li:nth-child(2)');
	fadein_left_2 = jQuery('#tmhtmlcontent_home li:nth-child(1)');
	fadein_bottom_2 = jQuery('#tmhtmlcontent_home li:nth-child(2)');
	fadein_right_2 = jQuery('#tmhtmlcontent_home li:nth-child(3)');
	
	left_animate = TweenMax.from(fadein_left, 0.5, {left:"-80px", alpha: 0, ease:Power1.easeOut});
	bottom_animate = TweenMax.from(fadein_bottom, 0.5, {bottom:"-80px", alpha: 0, ease:Power1.easeOut});
  	right_animate = TweenMax.from(fadein_right, 0.5, {right:"-80px", alpha: 0, ease:Power1.easeOut});
		
	left_animate_1 = TweenMax.from(fadein_left_1, 0.5, {left:"-80px", alpha: 0, ease:Power1.easeOut});
	right_animate_1 = TweenMax.from(fadein_right_1, 0.5, {right:"-80px", alpha: 0, ease:Power1.easeOut});
	
	left_animate_2 = TweenMax.from(fadein_left_2, 0.5, {left:"-80px", alpha: 0, ease:Power1.easeOut});
	bottom_animate_2 = TweenMax.from(fadein_bottom_2, 0.5, {bottom:"-80px", alpha: 0, ease:Power1.easeOut});
  	right_animate_2 = TweenMax.from(fadein_right_2, 0.5, {right:"-80px", alpha: 0, ease:Power1.easeOut});
	
	

	  if(jQuery("#htmlcontent_top").length){ 
	   var scene_1 = new ScrollScene({
		triggerElement: "#htmlcontent_top",
		offset: -300
		}).setTween(left_animate)
		  .addTo(controller)
		  .reverse(false); 
	
	   var scene_2 = new ScrollScene({
		triggerElement: "#htmlcontent_top",
		offset: -300
		}).setTween(bottom_animate)
		  .addTo(controller)
		  .reverse(false); 
	   var scene_3 = new ScrollScene({
		triggerElement: "#htmlcontent_top",
		offset: -300
		}).setTween(right_animate)
		  .addTo(controller)
		  .reverse(false); 
	  };
	  
	  if(jQuery("#htmlcontent_home").length){ 
	  	var scene_4 = new ScrollScene({
		triggerElement: "#htmlcontent_home",
		offset: -100
		}).setTween(left_animate_1)
		  .addTo(controller)
		  .reverse(false); 

	   var scene_5 = new ScrollScene({
		triggerElement: "#htmlcontent_home",
		offset: -100
		}).setTween(right_animate_1)
		  .addTo(controller)
		  .reverse(false); 
	  }
	  
	  if(jQuery("#tmhtmlcontent_home").length){ 
	   var scene_8 = new ScrollScene({
		triggerElement: "#tmhtmlcontent_home",
		offset: -100
		}).setTween(left_animate_2)
		  .addTo(controller)
		  .reverse(false); 
	
	   var scene_9 = new ScrollScene({
		triggerElement: "#tmhtmlcontent_home",
		offset: -100
		}).setTween(bottom_animate_2)
		  .addTo(controller)
		  .reverse(false); 
	   var scene_10 = new ScrollScene({
		triggerElement: "#tmhtmlcontent_home",
		offset: -100
		}).setTween(right_animate_2)
		  .addTo(controller)
		  .reverse(false); 
	  };
	}
	
})
var isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent);

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
	 listBlocksAnimate('#homefeatured', '#homefeatured li', 4, -300, true);
	 listBlocksAnimate('#homepage-blog', '#homepage-blog li', 1, -400, true);
	 if(!isMobile) {
		 if(jQuery("#tmhtmlcontent-tc-item-1").length){ 
			 var welcome = new TimelineMax();
			 
			 welcome.from("#tmhtmlcontent-tc-item-1 h2",0.5,{top:-300, autoAlpha:0})
			 .from("#tmhtmlcontent-tc-item-1 h3",0.5,{autoAlpha:0})
			 .from("#tmhtmlcontent-tc-item-1 p",0.5,{autoAlpha:0})
			 .from("#tmhtmlcontent-tc-item-1 .button-container",0.5,{bottom:-200,autoAlpha:0});
			 
			var scene_welcome = new ScrollScene({
			triggerElement: "#tmhtmlcontent-tc-item-1",
			offset: -100
			}).setTween(welcome)
			  .addTo(controller)
			  .reverse(false); 
		 }
	 }
});
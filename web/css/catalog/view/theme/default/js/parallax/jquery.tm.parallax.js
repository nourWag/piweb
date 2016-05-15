;(function($, window, document, undefined) {
	$.fn.tmParallax = function (selector, options, callback) {
		var els = this,
		items = {}
		items.src = [],
		items.heights = [];
		els.each(function(n){
			el = $(this);
			items.src[n] = el.attr('data-background');
		})
		function loader(items, thingToDo, allDone) {
		    if (!items) {
		        // nothing to do.
		        return;
		    }

		    if ("undefined" === items.length) {
		        // convert single item to array.
		        items = [items];
		    }

		    var count = items.src.length;

		    // this callback counts down the things to do.
		    var thingToDoCompleted = function (items, i) {
		        count--;
		        if (0 == count) {
		            allDone(items);
		        }
		    };

		    for (var i = 0; i < items.src.length; i++) {
		        // 'do' each thing, and await callback.
		        thingToDo(items, i, thingToDoCompleted);
		    }
		}

		function loadImage(items, i, onComplete) {
		    var onLoad = function (e) {
		    	items.heights[i] = e.target.height;
		        e.target.removeEventListener("load", onLoad);

		        // this next line can be removed.
		        // only here to prove the image was loaded.

		        // notify that we're done.
		        onComplete(items, i);
		    }
		    var img = new Image();
		    img.addEventListener("load", onLoad, false);
		    img.src = items.src[i];
		}



		loader(items, loadImage, function () {
			els.each(function(n){
				el = $(this);
				el.css({backgroundImage: 'url('+items.src[n]+')'})
				global_set();
			})
		});
		function global_set(){
			function set_position(){
				els.each(function(n){
					el = $(this);
					if(items.heights[n] > $(window).height()){
						var offset_top = 0,
						offset_bottom = el.offset().top;
						if(el.offset().top > $(window).height()){
							offset_top = el.offset().top - $(window).height();
						}
						if($(document).height() - el.offset().top - el.outerHeight() < $(window).height()){
							offset_bottom = $(document).height() - el.offset().top - el.outerHeight();
						}
						if($(document).height() - el.offset().top - el.outerHeight() > $(window).height()){
							offset_bottom = $(window).height();
						}
						//scroll_val = 100*($(window).scrollTop() - offset_top)/(el.outerHeight() + offset_bottom);
						scroll_val = 100 - 100*($(window).scrollTop() - offset_top)/(el.outerHeight() + offset_bottom);
						el.css({backgroundPosition: '50% '+ scroll_val + '%'})
					}
					else{
						var offset_top = 0,
						offset_bottom = el.offset().top;
						if(el.offset().top > $(window).height()){
							offset_top = el.offset().top - $(window).height();
						}
						if($(document).height() - el.offset().top - el.outerHeight() < $(window).height()){
							offset_bottom = $(document).height() - el.offset().top - el.outerHeight();
						}
						if($(document).height() - el.offset().top - el.outerHeight() > $(window).height()){
							offset_bottom = $(window).height();
						}
						scroll_val = el.offset().top - $(window).scrollTop() - (items.heights[n] - el.outerHeight())*($(window).scrollTop() - offset_top)/(el.outerHeight() + offset_bottom);
						//scroll_val = el.offset().top - $(window).scrollTop() - (items.heights[n] - el.outerHeight())*($(window).scrollTop() - offset_top)/(el.outerHeight() + offset_bottom);
						el.css({backgroundPosition: '50% '+ scroll_val + 'px'})
					}
				})
			}
			set_position();
			
			$(window).scroll(function(){
				set_position();
			})
			$(window).resize($.throttle(50, function(){
				set_position();
			}))
		}
	}
}(jQuery, this, document));
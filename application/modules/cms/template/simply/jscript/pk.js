jQuery.noConflict();

/*
  * WE CALL PK_ FUNCTIONS
*/

jQuery(document).ready(function() {
	jQuery("#menu").pk_menu();
	jQuery("#featured_items").pk_gallery();
	jQuery("#slide").pk_gallery({
		thumbs: "#list div",
		slideshow: false,
		transition: "fade",
		easing: "linear",
		speedIn: 400,
		speedOut: 400
	});
	jQuery("#works").pk_works();
	jQuery("#speedy_form_mail").pk_form();
	
	/**/
	
	jQuery("#twitter").pk_twitter();
	jQuery("#featured a, .older_posts a").pk_tooltip();
	
	/**/
			
	jQuery("body").pk_improvements();
});

/*
  * PK_MENU ***
*/

(function($) {
	$.fn.pk_menu = function(options) {
		var defaults = {
			autoPosition: false,
			limitValue: "wrapper",
			easing: "easeOutQuint",
			speedIn: 400,
			speedOut: 200
		};
		
		var settings = $.extend({}, defaults, options);
		
		/**/
		
		return this.each(function () {
			var $root = $(this);
			var $mainmenu = $(">ul", this);
			var $headers = $mainmenu.find("ul").parent();
			var $limitValue = (settings.limitValue == "document") ? $(window).width() : 960;
            
			/**/
		
			$headers.each(function () {
				var $curobj = $(this);
				var $subul = $(this).find('ul:first');
				var $ul = $("ul", $curobj);
				var $rounded = $(".last", $root).length;
			
				$("ul ul", $root).css({"display": "none"});
				$("ul li ul a", $root).css({"text-align": "center"});
			
				/**/
			
				function getProperty($li, $ul) {
					$li.dimensions = {
						w: $li.offsetWidth, 
						h: $li.offsetHeight, 
						subulw: $ul.outerWidth(), 
						subulh: $ul.outerHeight()
					}
					return $li.dimensions;
				}
			
				function showMenu ($element, $e) {
					$element.css({visibility:'visible'});
					$element.hoverFlow($e.type, {
      					'height': 'show'
    				}, settings.speedIn, settings.easing);
				}
 
    			function hideMenu ($element, $e) {
    				$element.hoverFlow($e.type, {
      					'height': 'hide'
    				}, settings.speedOut, settings.easing, function() {
    					$element.hide();
    				});
    			}
			
				/**/
			
				$curobj.hover(function(e) {
					getProperty(this, $subul);
					var $targetul = $(this).find("ul:first");
					var $offset = $(this).offset();
				
					if($curobj.parents("ul").length == 1) {
						$ul.css({visibility:'hidden'});
						this.firstLevel = true;
						$subul.css({top: 40 + "px", left: -((this.dimensions.subulw - this.dimensions.w) / 2) + "px"});
					} else {
						this.firstLevel = false;
						$subul.css({top: 0});
					}
					
					if(this.firstLevel) {
						var menuleft = 0;
					} else {
						var menuleft = this.dimensions.w;
					}
					
					if($offset.left + menuleft + this.dimensions.subulw > $limitValue) {
						if(this.firstLevel) {
							menuleft = -(this.dimensions.subulw + this.dimensions.w);
						} else {
							if($rounded > 0) {
								menuleft = -(this.dimensions.w);
							} else {
								menuleft = -(this.dimensions.w + 2);
							}
						}
					}
				
					if(settings.autoPosition == true) {
						$targetul.css({left:menuleft + "px"});
					}
					showMenu($targetul, e);
				}, function(e) {
					var $targetul = $(this).find("ul:first");
					hideMenu($targetul, e);
				});
			});
		});
	};
})(jQuery);

/*
  * PK_GALLERY ***
*/

(function($) {
	$.fn.pk_gallery = function(options) {
		var defaults = {
			photos: ".item",
			thumbs: ".numbers a",
			slideshow: true,
			transition: "slide",
			easing: "easeOutExpo",
			speedIn: 1000,
			speedOut: 1000,
			timer: 5000
		};
		
		var settings = $.extend({}, defaults, options);
		
		/**/
		
		return this.each(function() {
			var $root = $(this);
			var $items = $(settings.photos , $root);
			var $thumbs = $(settings.thumbs, $root);
			var $totItems = $items.length;
			var $index = 0;
			var $verse = "right";
			var $interval = null;
			var $movies = [];
			
			/**/
			
			function slideshow($index) {
				if($index){
					var id = $index;
				} else {
					var id = 0;
				}
				$interval = setInterval(
					function() {
						play(id);
					}, settings.timer
				);
			}
			
			function play($index) {
				var id = $index;
				if(id < ($thumbs.length - 1)) {
					id++;
				} else {
					id = 0;
				}
				$thumbs.filter(":eq("+ id +")").trigger("click", [true]);
			}
			
			function changeThumbs($id, $current) {
				for(i = 0; i < $thumbs.length; i++) {
					$thumbs.filter(":eq("+ i +")").removeClass("current");
				}
				$current.addClass("current");
				$index = $id;
			}
			
			/**/
	
			$thumbs.each(function(i) {
				$movies[i] = $items.filter(":eq(" + i + ")").find(".movie").html();
				$(this).click(function() {
					var $new_item = $items.filter(":eq(" + i + ")");
					var $media = $items.filter(":eq(" + i + ")").find(".movie").length;
					
					this.id = i;
					
					if(settings.slideshow) {
						if($interval) {
							clearInterval($interval);
						}
						if($media == 0) {
							slideshow(this.id);
						}
					}
					
					if($new_item.css("display") == "none") {
						if($items.filter(":visible").find(".movie")) {
							$items.find(".movie").empty();
						}
						if($media > 0) {
							$new_item.find(".movie").html($movies[this.id]);
						}
						if(settings.transition == "slide") {
							if(this.id > $index) {
								$verse = "right";
								var oldValue = -60;
								var newValue = 540;
							} else {
								if(this.id == 0 && $index == ($totItems - 1)) {
									$verse = "right";
									var oldValue = -60;
									var newValue = 540;
								} else {
									$verse = "left";
									var oldValue = 60;
									var newValue = -540;
								}
							}
							$items.filter(":visible").css("zIndex", 0).stop().animate({
								"margin-left": oldValue + "px"
							}, settings.speedOut, settings.easing, function() { $items.hide(); });
							$new_item.show().stop().css({"zIndex": 1, "margin-left": newValue + "px"}).animate({
								"margin-left": 0 + "px"
							}, settings.speedOut, settings.easing, function() { $new_item.show(); });
						} else {
							if($.browser.msie && settings.thumbs == "#list div") {
								$items.filter(":visible").hide();
								$new_item.show();
							} else {
								$items.filter(":visible").fadeOut(settings.speedOut, settings.easing);
								$new_item.fadeIn(settings.speedIn, settings.easing);
							}
						}
					}
					
					changeThumbs(this.id, $(this));
					
					return false;
				});
			});
			
			/**/
			
			$thumbs.filter(":eq(0)").trigger("click", [true]);
			
			/* SHADOW */
			
			$("#fetured_items_content").pk_shadows();
		});
	}
})(jQuery);

/*
  * PK_SCROLL ***
*/

(function($) {
	$.fn.pk_scroll = function(options){
		var defaults = {
			visibleItems: 1,
			scrollValue: 240,
			width: 240,
			height: 130,
			buttonPrev: '.sn_prev',
			buttonNext: '.sn_next',	
			easing: "easeOutBack",
			speed: 400
		}; 
		
		var settings = $.extend({}, defaults, options);
		
		return this.each(function() {  
			var $root = $(this);
			var $buttonNext = $(settings.buttonNext);
			var $buttonPrev = $(settings.buttonPrev);
			var $totalItems = $("li", $root).length;
			var $limitScroll = $totalItems - (settings.visibleItems);
			var $listWidth = $totalItems * settings.scrollValue;
			var $indexScroll = 0;
			
			/**/
			
			$($root).css({'overflow' : 'hidden', 'width': settings.width + "px", 'height' : settings.height + 'px'});
			$("ul", $root).css('width', $listWidth + "px");
			
			/**/
			
			function scroll($button) {
				if ($button == "next") {
					$indexScroll = ($indexScroll >= $limitScroll) ? $limitScroll : $indexScroll + 1;	
				} else {
					$indexScroll = ($indexScroll <= 0) ? 0 : $indexScroll - 1;
				}
				scrollValue = ($indexScroll * settings.scrollValue * -1);
				$("ul", $root).animate({ 
					marginLeft: scrollValue 
				}, settings.speed, settings.easing);				
			};
			
			/**/

			$buttonNext.click(function() {	
				scroll("next");
				if ($indexScroll >= $limitScroll) {
					$("img", this).attr('src', 'images/skin/button_next_off.png');
				}
				$("img", $buttonPrev).attr('src', 'images/skin/button_prev.png');
			});
			$buttonPrev.click(function() {		
				scroll("prev");
				if ($indexScroll <= 0) {
					$("img", this).attr('src', 'images/skin/button_prev_off.png');
				}
				$("img", $buttonNext).attr('src', 'images/skin/button_next.png');
			});	
			
			/**/
			
			if($totalItems > settings.visibleItems) {
				$("img", $buttonPrev).attr('src', 'images/skin/button_prev_off.png');
			}
		});
	};
})(jQuery);

/*
  * PK_WORKS ***
*/

(function($) {
	$.fn.pk_works = function(options) {
		var defaults = {
			easing: "easeOutExpo",
			speedIn: 600,
			speedOut: 200
		};
	
		var settings = $.extend({}, defaults, options);
		
		return this.each(function () {
			var $root = $(this);
			var $works = $(".previews", $root);
			
			/* ROLLOVER */
			
			$works.each(function (i){
				var $item = $(this);
				var $buttonsNextPrev = $(".prev, .next", $item);
				var $buttonInfo = $(".button_info", $item);
				
				$(".previews_content", $item).pk_shadows();
				
				$("." + (i + 1), this).pk_scroll({
					visibleItems: 1,
					scrollValue: 240,
					width: 240,
					height: 130,
					buttonPrev: '.p' + (i + 1),
					buttonNext: '.n' + (i + 1),	
					easing: "easeOutCirc",
					speed: 300
				});
				
				$item.hover(function (i) {
					if($(".images img", this).length > 1) {
						($.browser.msie) ? $buttonsNextPrev.show() : $buttonsNextPrev.fadeIn(settings.speedIn);
					}
					if($(".info", this).length > 0) {
						($.browser.msie) ? $buttonInfo.show() : $buttonInfo.fadeIn(settings.speedIn);
					}
				}, function(i) {
					($.browser.msie) ? $buttonsNextPrev.hide() : $buttonsNextPrev.fadeOut(settings.speedOut);
					($.browser.msie) ? $buttonInfo.hide() : $buttonInfo.fadeOut(settings.speedOut);
					$(".info p", this).stop().animate({"margin-top": -130}, settings.speedOut, settings.easing, function(){
						$(".info", $item).hide();
					});
				});
				
				$buttonInfo.bind("mouseenter", function() {
					($.browser.msie) ? $(this).hide() : $(this).fadeOut(settings.speedOut);
					$(".info p", $item).stop().animate({"margin-top": 0, "opacity": 1}, settings.speedIn, settings.easing);
					$(".info", $item).show().bind("mouseleave", function() {
						$(".info p", $item).stop().animate({"margin-top": -130, "opacity": 0.8}, (settings.speedIn / 2), "easeOutExpo", function(){
							($.browser.msie) ? $buttonInfo.show() : $buttonInfo.fadeIn(settings.speedIn);
							$(".info", $item).hide();
						});
					});
				});
			});
		});
	}
})(jQuery);

/*
  * PK_FORM ***
*/

(function($) {
	$.fn.pk_form = function(options) {
		var defaults = {
			php: "sendMail.php",
			text: "Your message has been sent. Thanks ;-)",
			textfields: ["#name", "#email", "#subject", "#message"],
			response: "#response",
			submit: "#submit",
			timer: 4000,
			easing: "",
			speedIn: 400,
			speedOut: 400
		};
		
		var settings = $.extend({}, defaults, options);
		
		return this.each(function () {
			var $root = $(this);
			var $response = $(settings.response);
			var $submit = $(settings.submit);
			
			/**/
			
			function showResponse($timer) {
				$submit.fadeOut(5, function() {;
					$response.css("opacity", 0);
					$response.show().stop().animate({
 						opacity: 1
 					}, settings.speedIn, settings.easing, function(){
						interval = setInterval(hideResponse, $timer);
					});
				});
			}
			
			function hideResponse() {
				clearInterval(interval);
				$response.stop().animate({
					opacity:0
				}, settings.speedIn, settings.easing, function() {
					$response.hide();
					$submit.fadeIn(400);
				});
			}
			
			/**/
		
			$root.submit(function(){
				$.ajax({
					type: "POST",
					url: settings.php,
					data: $(this).serialize(),
					success: function(output) {
						$response.ajaxComplete(function() {
							if(output == 'ok') {
								$("#name", $root).val('Name');
								$("#email", $root).val('Email');
								$("#subject", $root).val('Subject');
								$("#message", $root).text('Message');
								$(this).html("<p>" + settings.text
								+ "</p>");
								showResponse(settings.timer * 2);
							} else {
								$(this).html(output);
								showResponse(settings.timer);
							}
						});
					}
				});
				return false;
			});
		});
	}
})(jQuery);

/*
  * PK_SHADOWS ***
*/

(function($) {
	$.fn.pk_shadows = function(options) {
		var defaults = {
			type: "div"
		};
		
		var settings = $.extend({}, defaults, options);
		
		return this.each(function () {
			var $root = $(this);
			var $msie6 = $.browser.msie && $.browser.version < 7;
			
			if(!$msie6) {
				if(settings.type == "div"){
					var $shadowWidth = $root.width();
					var $shadowHeight = $root.height();
				} else {
					var imagePreloader = new Image(); 
					imagePreloader.src = $("img", $root).attr("src"); 
					imagePreloader.onload = function() {
						var $shadowWidth = imagePreloader.width;
						var $shadowHeight = imagePreloader.height;
					};
				}
			
				$root.prepend("<img src='images/skin/top_shadow.png' alt='' class='top_shadow' />");
				$root.prepend("<img src='images/skin/right_shadow.png' alt='' class='right_shadow' />");
			
				$(".top_shadow", $root).css({
					"width": $shadowWidth,
					"height": 7
				});
				$(".right_shadow", $root).css({
					"height": $shadowHeight,
					"width": 7
				});
			}
		});
	}
})(jQuery);

/*
  * PK_TOOLTIP ***
*/

(function($) {
	$.fn.pk_tooltip = function() {
		return this.each(function(i) {
			var $thumb = $(this).attr('rel');
			
			$("body").append("<div class='tooltip' id='tooltip" + i + "'><img src='" + $thumb + "' alt='' /></div>");
			var $tooltip = $("#tooltip" + i);
		
			if($(this).attr("rel") != "" && $(this).attr("rel") != "undefined" ) {
				$(this).mouseover(function() {
					$tooltip.css({opacity:1, display:"none"}).fadeIn(400);
				}).mousemove(function(mouse) {
					var left_position;
					var top_position;
					var offset = 20;

					left_position = mouse.pageX - ($tooltip.width() / 2);
					top_position = mouse.pageY - $tooltip.height() - offset;
	
					$tooltip.css({left:left_position, top:top_position});
				}).mouseout(function(){
					$tooltip.css({left:"-9999px"});				  
				});
			}
		});
	};
})(jQuery);

/*
  * PK_TWITTER ***
*/

(function($) {
	$.fn.pk_twitter = function(options) {
		var defaults = {
			user: "parkerandkent",
			count: 1
		};
	
		var settings = $.extend({}, defaults, options);
		
		String.prototype.linkify = function() {
			return this.replace(/[A-Za-z]+:\/\/[A-Za-z0-9-_]+\.[A-Za-z0-9-_:%&\?\/.=]+/, function(m) {
				return m.link(m);
			});
		};
		
		function get_time(time_value) {
	  		var values = time_value.split(" ");
	  		time_value = values[1] + " " + values[2] + ", " + values[5] + " " + values[3];
	 		var parsed_date = Date.parse(time_value);
	  		var relative_to = (arguments.length > 1) ? arguments[1] : new Date();
	  		var delta = parseInt((relative_to.getTime() - parsed_date) / 1000);
	  		delta = delta + (relative_to.getTimezoneOffset() * 60);
	  
	  		var r = '';
	  		if (delta < 60) {
				r = 'a minute ago';
	  		} else if(delta < 120) {
				r = 'couple of minutes ago';
	  		} else if(delta < (45*60)) {
				r = (parseInt(delta / 60)).toString() + ' minutes ago';
	 		} else if(delta < (90*60)) {
				r = 'an hour ago';
	  		} else if(delta < (24*60*60)) {
				r = '' + (parseInt(delta / 3600)).toString() + ' hours ago';
	  		} else if(delta < (48*60*60)) {
				r = '1 day ago';
	  		} else {
				r = (parseInt(delta / 86400)).toString() + ' days ago';
	  		}
	  
	  		return r;
		};
		
		return this.each(function () {
			var $root = $(this);
			
			$.getJSON('http://twitter.com/status/user_timeline/' + settings.user + '.json?count=' + settings.count + '&callback=?', function(data){
				$.each(data, function(index, item){
					$root.append('<div class="tweet"><p>' + item.text.linkify() + '<small>' + get_time(item.created_at) + '</small></p></div>');
				});
			});
		});
	}
})(jQuery);

/*
  * PK_IMPROVEMENTS ***
*/

(function($) {
	$.fn.pk_improvements = function(options) {
		var defaults = {
			easing: "easeOutQuint",
			speedIn: "fast",
			speedOut: "fast"
		};
	
		var settings = $.extend({}, defaults, options);
		
		return this.each(function () {
			var $root = $(this);
			
			/* BLOG: SHADOW IMAGES */
			
			$(".shadow_image", this).pk_shadows({
				type: "image"
			});
			$("#comments .gravatar, #form form", this).pk_shadows();
			
			/* BLOG: BUTTONS ROLLOVER */
			
			$("#post_navigation img", this).hover(function() {
				$(this).stop().css({"opacity": 0.5}, settings.speedOut, settings.easing);
			}, function() { 
				$(this).stop().css({"opacity": 1}, settings.speedIn, settings.easing);
			});
			
			/* ABOUT: SWITCH CONTACT */
			
			var $div = null;
			var $height = null;

			$("#contact_info, #contact_form").hide().css("position", "absolute");
			
			$("#button_contact_info").click(function() {
				$height = $("#contact_info").outerHeight(true);
				$("#contact_form").fadeOut("fast");
				$("#contacts").stop().animate({"height": $height + "px"});
				$("#contact_info").fadeIn("slow");
				/**/
				$(this).stop().animate({"opacity": 0.3});
				$("#button_contact_form").stop().animate({"opacity": 1});
			});
			$("#button_contact_form").click(function() {
				$height = $("#contact_form").outerHeight(true);
				$("#contact_info").fadeOut("fast");
				$("#contacts").stop().animate({"height": $height + "px"});
				$("#contact_form").fadeIn("slow");
				/**/
				$(this).stop().animate({"opacity": 0.3});
				$("#button_contact_info").stop().animate({"opacity": 1});
			});
			$("#button_contact_form").trigger("click", [true]);
			
			/* ABOUT: THUMBS SLIDE */
			
			$(".thumbs_shadow", this).pk_shadows()
			$(".thumbs", this).show().pk_scroll({
				visibleItems: 5,
				scrollValue: 97,
				width: 478,
				height: 60,
				buttonPrev: '.thumbs_slide .prev',
				buttonNext: '.thumbs_slide .next',	
				easing: "easeOutQuad",
				speed: 300
			});
			
			/* BLOG: POSTS SLIDE */
			
			$("#slide_posts_shadow", this).css("height", 300 + "px").pk_shadows();
			$("#slide_posts_content", this).css("height", 300 + "px").pk_scroll({
				visibleItems: 2,
				scrollValue: 257,
				width: 529,
				height: 305,
				buttonPrev: '#sp_prev',
				buttonNext: '#sp_next',	
				easing: "easeOutQuad",
				speed: 300
			});
			
			/* PRETTYPHOTO --- theme: light_rounded / dark_rounded / light_square / dark_square */
			
			if($("body").find("a[rel^='prettyPhoto']").length > 1) {
				$("a[rel^='prettyPhoto']").prettyPhoto({
					"default_width": 820,
					"default_height": 485,
					"opacity": 0.5,
					"theme": 'dark_square'	
				});
			}
		});
	}
})(jQuery);


/*
  * END PK_CODE ***
*/


/*
  * hoverFlow - A Solution to Animation Queue Buildup in jQuery
  * Version 1.00

  * Copyright (c) 2009 Ralf Stoltze, http://www.2meter3.de/code/hoverFlow/
  * Dual-licensed under the MIT and GPL licenses.
  * http://www.opensource.org/licenses/mit-license.php
  * http://www.gnu.org/licenses/gpl.html
*/


(function($) {
	$.fn.hoverFlow = function(type, prop, speed, easing, callback) {
		/*
		  * only allow hover events
		*/ 
		
		if ($.inArray(type, ['mouseover', 'mouseenter', 'mouseout', 'mouseleave']) == -1) {
			return this;
		}
	
		/*
		  * build animation options object from arguments
		  * based on internal speed function from jQuery core
		*/
		
		var opt = typeof speed === 'object' ? speed : {
			complete: callback || !callback && easing || $.isFunction(speed) && speed,
			duration: speed,
			easing: callback && easing || easing && !$.isFunction(easing) && easing
		};
		
		/*
		  * run immediately
		*/
		
		opt.queue = false;
			
		/*
		  * wrap original callback and add dequeue
		*/ 
		
		var origCallback = opt.complete;
		opt.complete = function() {
		
			/* execute next function in queue */
			$(this).dequeue();
			
			/* execute original callback */
			if ($.isFunction(origCallback)) {
				origCallback.call(this);
			}
		};
		
		/*
		  * keep the chain intact
		*/
		
		return this.each(function() {
			var $this = $(this);
		
			/* set flag when mouse is over element */
			if (type == 'mouseover' || type == 'mouseenter') {
				$this.data('jQuery.hoverFlow', true);
			} else {
				$this.removeData('jQuery.hoverFlow');
			}
			
			/* enqueue function */
			
			$this.queue(function() {				
				/* check mouse position at runtime */
				var condition = (type == 'mouseover' || type == 'mouseenter') ?
				
				/* read: true if mouse is over element */
				$this.data('jQuery.hoverFlow') !== undefined :
					
				/* read: true if mouse is _not_ over element */
				$this.data('jQuery.hoverFlow') === undefined;
					
				/* 
				  * only execute animation if condition is met, which is:
				  * - only run mouseover animation if mouse _is_ currently over the element
				  * - only run mouseout animation if the mouse is currently _not_ over the element
				*/
				
				if(condition) {
					$this.animate(prop, opt);
				/* else, clear queue, since there's nothing more to do */
				} else {
					$this.queue([]);
				}
			});

		});
	};
})(jQuery);
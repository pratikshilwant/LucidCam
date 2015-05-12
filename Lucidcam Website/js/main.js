/* ==============================================
DROPDOWN TOP BAR
=============================================== */
$('.tn-language').hover(function () {
    $(this).find('.dropdown-menu').first().stop(true, true).fadeIn(400);
}, function () {
    $(this).find('.dropdown-menu').first().stop(true, true).fadeOut(400)
});

 /* ==============================================
PAGE LOADER
=============================================== */

'use strict';
$(window).load(function() {
	
	/*$('a[href!=""] ').click(function (e){
			var href =  $(this).attr('href');
			if (href.indexOf('#') != false) {
				$(".loader-item").fadeIn(500);
				$("#pageloader").fadeIn(500);
			}
			
			
	});*/
	$(".loader-item").delay(300).fadeOut("slow");
	$("#pageloader").delay(1200).fadeOut("slow");
});

 /* ==============================================
Home demo 2 - Revolution slider 
=============================================== */
var revapi;

		jQuery(document).ready(function() {
			   revapi = jQuery('.tp-banner').revolution(
				{
					delay:9000,
					startheight: 800,
					startwidth: 960,
					hideThumbs: 10,
					navigationType: "both",
					navigationArrows: "verticalcentered",
					navigationStyle: "round",
					touchenabled: "on",
					onHoverStop: "on",
					navOffsetHorizontal: 0,
					navOffsetVertical: 20,
					stopAtSlide: -1,
					stopAfterLoops: -1,
					shadow: 0,
					fullWidth:"on",
				});

		});	//ready
		
		
 /* ==============================================
RESPONSIVE VIDEO
=============================================== */
$(document).ready(function(){
	$(".responsive-video").fitVids();
  });

/* ==============================================
HEADER STICKY MENU
=============================================== */
$(function () {
    // Do our DOM lookups beforehand
    var nav_container = $("header");
    var nav = $("div.stickmenu");
    var top_spacing = 0;
    var waypoint_offset = 50;
    nav_container.waypoint({
        handler: function (event, direction) {
            if (direction == 'down') {
                nav_container.css({
                    'height': nav.outerHeight()
                });
                nav.stop().addClass("sticky").css("top", -nav.outerHeight()).animate({
                    "top": top_spacing
                });
            } else {
                nav_container.css({
                    'height': 'auto'
                });
                nav.stop().removeClass("sticky").css("top", nav.outerHeight() + waypoint_offset).animate({
                    "top": ""
                });
            }
        },
        offset: function () {
            return -nav.outerHeight() - waypoint_offset;
        }
    });
});


/* ==============================================
HTML5 PLAYER
=============================================== */
$('audio,video').mediaelementplayer();
$('video').mediaelementplayer({
	success: function(media, node, player) {
		var events = ['loadstart', 'play','pause', 'ended'];
		
		for (var i=0, il=events.length; i<il; i++) {
			
			var eventName = events[i];
			
			media.addEventListener(events[i], function(e) {
				$('#output').append( $('<div>' + e.type + '</div>') );
			});
			
		}
	}
});

/* ==============================================
S-QUALITY
=============================================== */
jQuery(document).ready(function () {
    // This button will increment the value
    $('.qtyplus').click(function (e) {
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        fieldName = $(this).attr('field');
        // Get its current value
        var currentVal = parseInt($('input[name=' + fieldName + ']').val());
        // If is not undefined
        if (!isNaN(currentVal)) {
            // Increment
            $('input[name=' + fieldName + ']').val(currentVal + 1);
        } else {
            // Otherwise put a 0 there
            $('input[name=' + fieldName + ']').val(0);
        }
    });
    // This button will decrement the value till 0
    $(".qtyminus").click(function (e) {
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        fieldName = $(this).attr('field');
        // Get its current value
        var currentVal = parseInt($('input[name=' + fieldName + ']').val());
        // If it isn't undefined or its greater than 0
        if (!isNaN(currentVal) && currentVal > 0) {
            // Decrement one
            $('input[name=' + fieldName + ']').val(currentVal - 1);
        } else {
            // Otherwise put a 0 there
            $('input[name=' + fieldName + ']').val(0);
        }
    });
});

/* ==============================================
MOBILE MENU
=============================================== */

$(function () {
    $('#mobile-menu').dlmenu({
        animationClasses: {
            classin: 'dl-animate-in-2',
            classout: 'dl-animate-out-2'
        }
    });
});

/* ==============================================
PRETTYPHOTO
=============================================== */

jQuery(document).ready(function ($) {

    var lightboxArgs = {
        animation_speed: 'fast',
        overlay_gallery: true,
        autoplay_slideshow: false,
        slideshow: 5000,
        /* light_rounded / dark_rounded / light_square / dark_square / facebook */
        theme: 'pp_default',
        opacity: 0.8,
        show_title: false,
        social_tools: "",
        deeplinking: false,
        allow_resize: true,
        /* Resize the photos bigger than viewport. true/false */
        counter_separator_label: '/',
        /* The separator for the gallery counter 1 "of" 2 */
        default_width: 940,
        default_height: 529
    };

    if (jQuery('a[href$=jpg], a[href$=JPG], a[href$=jpeg], a[href$=JPEG], a[href$=png], a[href$=gif], a[href$=bmp]:has(img), a[class^="prettyPhoto"]').length) {
        jQuery('a[href$=jpg], a[href$=JPG], a[href$=jpeg], a[href$=JPEG], a[href$=png], a[href$=gif], a[href$=bmp]:has(img), a[class^="prettyPhoto"]').prettyPhoto(lightboxArgs);
    }
    if (jQuery("a[rel^='prettyPhoto']").length) {
        jQuery("a[rel^='prettyPhoto']").prettyPhoto({
            animation_speed: 'normal',
            theme: 'pp_default',
            slideshow: 3000,
            autoplay_slideshow: false
        });
    }

});


/* ==============================================
GO TO TOP
=============================================== */

jQuery(document).ready(function ($) {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 50) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $("html, body").animate({
            scrollTop: 0
        }, 500);
        return false;
    });
    $('.go-to-top').click(function () {
        $("html, body").animate({
            scrollTop: 0
        }, 500);
        return false;
    });
});



/* ==============================================
 SMOOTH SCROLL
=============================================== */	

$(function() {
		$('.scroll').bind('click', function(event) {
			var $anchor = $(this);
			var headerH = $('.nav-container').outerHeight();
			$('html, body').stop().animate({
				scrollTop : $($anchor.attr('href')).offset().top - headerH + "px"
			}, 1200, 'easeInOutExpo');

			event.preventDefault();
		});
		
	});
	
	
	

/* ==============================================
ACCORDIONS & TOGGLES
=============================================== */


function toggleChevron(e) {
    $(e.target)
        .prev('.panel-heading')
        .find("i.indicator")
        .toggleClass('fa-angle-down fa-angle-up');
}
$('#accordion').on('hidden.bs.collapse', toggleChevron);
$('#accordion').on('shown.bs.collapse', toggleChevron);


(function ($) {
    $(document).ready(function () {
        $('#toggles .panel-title a').click(function (e) {
            var collapse_item = $('#toggles ' + this.hash)
            collapse_item.collapse('toggle')
        });
        $('#toggles').on('hidden.bs.collapse', toggleChevron);
        $('#toggles').on('shown.bs.collapse', toggleChevron);
    });
})(jQuery)


/* ==============================================
PROGRESS BAR
=============================================== */

$(window).ready(function (e) {
    $.each($('div.progress-bar'), function () {
        $(this).css('width', $(this).attr('aria-valuetransitiongoal') + '%');
    });
});

/* =========================================================
PARALLAX 
============================================================ */

$(document).ready(function () {
    $.stellar({
        horizontalScrolling: false,
        verticalOffset: 40
    });
});

/* ==============================================
OWL CAROUSEL
=============================================== */
jQuery(document).ready(function (e) {
    var owl = e(".ca-list-items");
    owl.owlCarousel({
        itemsCustom: [
            [0, 1],
            [450, 2],
            [600, 2],
            [700, 3]
        ],
        navigation: false
    });
    e("#top-pro").owlCarousel({
        navigation: true
    });
});




$(document).ready(function () {
    $(".list-pro").owlCarousel({
        navigation: false,
		pagination: true,
		autoPlay: true,
        afterInit: function (elem) {
            var that = this
            that.owlControls.prependTo(elem)
        }
    });

});




$(document).ready(function () {

    var owl = $("#related-post");

    owl.owlCarousel({
        items: 3, //10 items above 1000px browser width
        itemsDesktop: [1000, 3], //5 items between 1000px and 901px
        itemsDesktopSmall: [900, 2], // betweem 900px and 400px
		itemsTablet: [400, 1], //2 items between 400 and 0
        pagination: false,
        itemsMobile: false // itemsMobile disabled - inherit from itemsTablet option
    });

    // Custom Navigation Events
    $(".next").click(function () {
        owl.trigger('owl.next');
    })
    $(".prev").click(function () {
        owl.trigger('owl.prev');
    })
    $(".play").click(function () {
        owl.trigger('owl.play', 1000); //owl.play event accept autoPlay speed as second parameter
    })
    $(".stop").click(function () {
        owl.trigger('owl.stop');
    })

});



/* Gallery carousel  */
$(document).ready(function () {

    $(".g-carousel").owlCarousel({
        pagination: false,
        navigation: true,
        navigationText: [
            "<i class='fa fa-angle-left'></i>",
            "<i class='fa fa-angle-right'></i>"
        ],
        afterInit: function (elem) {
            var that = this
            that.owlControls.prependTo(elem)
        }

    });

});



/* =========================================================
TESTIMONIALS SLIDE
============================================================ */

    $(document).ready(function() {
     
    $("#testimonials-slide").owlCarousel({
    autoPlay : 3000,
    stopOnHover : true,
    navigation:true,
	navigationText: [
            "<i class='fa fa-angle-left'></i>",
            "<i class='fa fa-angle-right'></i>"
        ],
    paginationSpeed : 1000,
    goToFirstSpeed : 2000,
    singleItem : true,
    autoHeight : true,
    transitionStyle:"backSlide"
    });
     
    });



/* =========================================================
TESTIMONIALS GROUP
============================================================ */

    $(document).ready(function() {
     
    var sync1 = $("#testimonial");
    var sync2 = $("#client");
     
    sync2.owlCarousel({
    items : sync1.children().length ,
    itemsDesktop : [1199,8],
    itemsDesktopSmall : [979,6],
    itemsTablet : [768,4],
    itemsMobile : [350,3],
    pagination:false,
	autoHeight : true,
    responsiveRefreshRate : 100,
    afterInit : function(el){
    el.find(".owl-item").eq(0).addClass("synced");
    }
    });
	
	sync1.owlCarousel({
    singleItem : true,
    slideSpeed : 1000,
	autoPlay: true,
    navigation: false,
	 navigationText: [
            "<i class='fa fa-angle-left'></i>",
            "<i class='fa fa-angle-right'></i>"
        ],
    pagination:false,
    afterAction : syncPosition,
    responsiveRefreshRate : 200,
    });
     
    function syncPosition(el){
    var current = this.currentItem;
    $("#client")
    .find(".owl-item")
    .removeClass("synced")
    .eq(current)
    .addClass("synced")
    if($("#client").data("owlCarousel") !== undefined){
    center(current)
    }
    }
     
    $("#client").on("click", ".owl-item", function(e){
    e.preventDefault();
    var number = $(this).data("owlItem");
    sync1.trigger("owl.goTo",number);
    });
     
    function center(number){
    var sync2visible = sync2.data("owlCarousel").owl.visibleItems;
    var num = number;
    var found = false;
    for(var i in sync2visible){
    if(num === sync2visible[i]){
    var found = true;
    }
    }
     
    if(found===false){
    if(num>sync2visible[sync2visible.length-1]){
    sync2.trigger("owl.goTo", num - sync2visible.length+2)
    }else{
    if(num - 1 === -1){
    num = 0;
    }
    sync2.trigger("owl.goTo", num);
    }
    } else if(num === sync2visible[sync2visible.length-1]){
    sync2.trigger("owl.goTo", sync2visible[1])
    } else if(num === sync2visible[0]){
    sync2.trigger("owl.goTo", num-1)
    }
    }
     
    });




/* =========================================================
SINGLE GALLERY
============================================================ */

$(document).ready(function () {
    var owl = $(".single-gallery");
    owl.owlCarousel({
        navigation: true,
        navigationText: [
            "<i class='fa fa-angle-left'></i>",
            "<i class='fa fa-angle-right'></i>"
        ],
        slideSpeed : 300,
		 singleItem:true,
		 pagination : false,
    });

});


/* =========================================================
SINGLE GALLERY WITH THUMBNAIL
============================================================ */

    $(document).ready(function() {
     
    var sync1 = $("#preview");
    var sync2 = $("#thumb");
	 
    sync2.owlCarousel({
	 items : parseFloat(sync2.attr("count")) || sync1.children().length,
	 navigation: true,
    itemsDesktop : [1199,10],
    itemsDesktopSmall : [979,10],
    itemsTablet : [768,6],
    itemsMobile : [479,3],
    pagination:false,
	 navigationText: [
            "<i class='fa fa-angle-left'></i>",
            "<i class='fa fa-angle-right'></i>"
        ],
    responsiveRefreshRate : 100,
    afterInit : function(el){
    el.find(".owl-item").eq(0).addClass("active");
    }
    });
     
    sync1.owlCarousel({
    singleItem : true,
    slideSpeed : 1000,
    navigation: true,
	navigationText: [
            "<i class='fa fa-angle-left'></i>",
            "<i class='fa fa-angle-right'></i>"
        ],
    pagination:false,
    afterAction : syncPosition,
    responsiveRefreshRate : 200,
    });
     
    function syncPosition(el){
    var current = this.currentItem;
    $("#thumb")
    .find(".owl-item")
    .removeClass("active")
    .eq(current)
    .addClass("active")
    if($("#thumb").data("owlCarousel") !== undefined){
    center(current)
    }
    }
     
    $("#thumb").on("click", ".owl-item", function(e){
    e.preventDefault();
    var number = $(this).data("owlItem");
    sync1.trigger("owl.goTo",number);
    });
     
    function center(number){
    var sync2visible = sync2.data("owlCarousel").owl.visibleItems;
    var num = number;
    var found = false;
    for(var i in sync2visible){
    if(num === sync2visible[i]){
    var found = true;
    }
    }
     
    if(found===false){
    if(num>sync2visible[sync2visible.length-1]){
    sync2.trigger("owl.goTo", num - sync2visible.length+2)
    }else{
    if(num - 1 === -1){
    num = 0;
    }
    sync2.trigger("owl.goTo", num);
    }
    } else if(num === sync2visible[sync2visible.length-1]){
    sync2.trigger("owl.goTo", sync2visible[1])
    } else if(num === sync2visible[0]){
    sync2.trigger("owl.goTo", num-1)
    }
    }
     
    });




/* =========================================================
PORTFOLIO
============================================================ */

$(window).load(function() {
    // init Isotope
    var $container = $('.port-wrap').isotope({
        itemSelector: '.port-item',
        layoutMode: 'fitRows',
    });

    // filter functions
    var filterFns = {};

    // bind filter a click
    $('#filters').on('click', 'a', function () {
        var filterValue = $(this).attr('data-filter');
        // use filterFn if matches value
        filterValue = filterFns[filterValue] || filterValue;
        $container.isotope({
            filter: filterValue
        });
    });

    // change is-checked class on link
    $('.link-group').each(function (i, buttonGroup) {
        var $buttonGroup = $(buttonGroup);
        $buttonGroup.on('click', 'a', function () {
            $buttonGroup.find('.checked').removeClass('checked');
            $(this).addClass('checked');
        });
    });

});



/* =========== mansory layout ==========*/

(function ($) {
    var $container = $('.man-portfolio'),
        colWidth = function () {
            var w = $container.width(),
                columnNum = 1,
                columnWidth = 0;
            if (w > 1200) {
                columnNum = 5;
            } else if (w > 900) {
                columnNum = 4;
            } else if (w > 600) {
                columnNum = 3;
            } else if (w > 300) {
                columnNum = 2;
            }
            columnWidth = Math.floor(w / columnNum);
            $container.find('.item').each(function () {
                var $item = $(this),
                    multiplier_w = $item.attr('class').match(/item-w(\d)/),
                    multiplier_h = $item.attr('class').match(/item-h(\d)/),
                    width = multiplier_w ? columnWidth * multiplier_w[1] - 4 : columnWidth - 4,
                    height = multiplier_h ? columnWidth * multiplier_h[1] * 0.5 - 4 : columnWidth * 0.5 - 4;
                $item.css({
                    width: width,
                    height: height
                });
            });
            return columnWidth;
        },
        isotope = function () {
            $container.isotope({
                resizable: false,
                itemSelector: '.item',
                masonry: {
                    columnWidth: colWidth(),
                    gutterWidth: 4
                }
            });
        };
	
	// filter functions
    var filterFns = {};

    // bind filter a click
    $('#filters').on('click', 'a', function () {
        var filterValue = $(this).attr('data-filter');
        // use filterFn if matches value
        filterValue = filterFns[filterValue] || filterValue;
        $container.isotope({
            filter: filterValue
        });
    });

    // change is-checked class on link
    $('.link-group').each(function (i, buttonGroup) {
        var $buttonGroup = $(buttonGroup);
        $buttonGroup.on('click', 'a', function () {
            $buttonGroup.find('.checked').removeClass('checked');
            $(this).addClass('checked');
        });
    });
	
    isotope();
    $(window).smartresize(isotope);

	
	
}(jQuery));


/* =========================================================
MASONRY BLOG
============================================================ */



$(window).load(function() {
  
  var $container = $('.masonry-blog'),
      $body = $('body'),
      colW = 40,
      columns = null;
  
  $container.isotope({
    // disable window resizing
    resizable: false,
    masonry: {
      columnWidth: colW
    }
  });
  
  $(window).smartresize(function(){
    // check if columns has changed
    var currentColumns = Math.floor( ( $body.width() -10 ) / colW );
    if ( currentColumns !== columns ) {
      // set new column count
      columns = currentColumns;
      // apply width to container manually, then trigger relayout
      $container.width( columns * colW )
        .isotope('reLayout');
    }
    
  }).smartresize(); // trigger resize to set container width
  
});



/* ==============================================
SLIDER RANGER
=============================================== */
$(function () {
    $("#slider-range").slider({
        range: true,
        min: 0,
        max: 500,
        values: [75, 300],
        slide: function (event, ui) {
            $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
        }
    });
    $("#amount").val("$" + $("#slider-range").slider("values", 0) +
        " - $" + $("#slider-range").slider("values", 1));
});


/* ==============================================
FANCY SELECT
=============================================== */
$('.cat-filter').fancySelect();

/* ==============================================
SWITCH CATEGORY
=============================================== */

$('.list').on('click', function () {
    if (!$(this).hasClass('active')) {
        $('.all-products').addClass('list-style') /*.hide().fadeIn("fast")*/ ;
        $(this).addClass('active');
        $('.grid').removeClass('active');
    }

});

$('.grid').on('click', function () {
    if (!$(this).hasClass('active')) {
        $('.all-products').removeClass('list-style') /*.hide().fadeIn("fast")*/ ;
        $(this).addClass('active');
        $('.list').removeClass('active');
    }
});

/* =========================================================
CIRCLE COUNT
============================================================ */
$(document).ready(function () {
    $('#myCount1').circliful();
    $('#myCount2').circliful();
    $('#myCount3').circliful();
});

/* ==============================================
FULL SCREEN
=============================================== */
onew = $(window).width();
oneh = $(window).height(); //- $('#top-nav').height();
$('.full-screen').height(oneh);


/* ==============================================
BACKGROUND VIDEO 
=============================================== */
jQuery(function(){
            jQuery(".player").mb_YTPlayer();
		});
		
		
/* ==============================================
COUNTER NUMBER
=============================================== */
jQuery(document).ready(function( $ ) {
        $('.counter').counterUp({
            delay: 5,
            time: 1500
        });
    });

/* ==============================================
CIRCLE COUNTDOWN 
=============================================== */
jQuery(document).ready(function( $ ) {
$(".countdown").TimeCircles({
    "animation": "smooth",
    "bg_width": 0.8,
    "fg_width": 0.016,
    "circle_bg_color": "rgba(200, 200, 200, .2)",
    "time": {
        "Days": {
            "text": "Days",
            "color": "#4796fe",
            "show": true
        },
        "Hours": {
            "text": "Hours",
            "color": "#96aafb",
            "show": true
        },
        "Minutes": {
            "text": "Minutes",
            "color": "#9b91fc",
            "show": true
        },
        "Seconds": {
            "text": "Seconds",
            "color": "#aa88fc",
            "show": true
        }
    }
});
});
/* Text slide */
(function($){
  $.fn.list_ticker = function(options){
    
    var defaults = {
      speed:4000,
	  effect:'slide'
    };
    
    var options = $.extend(defaults, options);
    
    return this.each(function(){
      
      var obj = $(this);
      var list = obj.children();
      list.not(':first').hide();
      
      setInterval(function(){
        
        list = obj.children();
        list.not(':first').hide();
        
        var first_li = list.eq(0)
        var second_li = list.eq(1)
		
		if(options.effect == 'slide'){
			first_li.slideUp();
			second_li.slideDown(function(){
				first_li.remove().appendTo(obj);
			});
		} else if(options.effect == 'fade'){
			first_li.fadeOut(function(){
				second_li.fadeIn();
				first_li.remove().appendTo(obj);
			});
		}
      }, options.speed)
    });
  };
})(jQuery);



/* ==============================================
ANIMATED SCROLL
=============================================== */
(function ($) {
    'use strict';
    window.scrollReveal = new scrollReveal({
        reset: true
    });

    // See: http://stackoverflow.com/a/11381730/989439
    var isMobile = (function () {
        var check = false;
        (function (a) {
            if (/(android|ipad|playbook|silk|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(a) || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0, 4))) check = true
        })(navigator.userAgent || navigator.vendor || window.opera);
        return check;
    })();

    // This function returns the appropriate CSS-transition end event name
    // to the transitionEnd variable. e.g usage: $(el).on('transitionEnd', func(e));
    var transitionEnd = (function () {
        var t;
        var el = document.createElement('fakeelement');
        var transitions = {
            'transition': 'transitionend',
            'OTransition': 'oTransitionEnd',
            'MozTransition': 'transitionend',
            'WebkitTransition': 'webkitTransitionEnd'
        }

        for (t in transitions) {
            if (el.style[t] !== undefined) {
                return transitions[t];
            }
        }
    })();

    // Just for fun, let’s log out the results above.
    // console.log("Is the current device mobile? " + isMobile + "\n" + "CSS transitions end-event name: " + transitionEnd);

})();

/*-------------------------------------
	Fixed Header
---------------------------------------*/
$(window).scroll(function(){
    if ($(window).scrollTop() >= 1) {
        $('.top-fixed-header').addClass("fixed-header");
    }
    else {
        $('.top-fixed-header').removeClass('fixed-header');
    }
});

/*-------------------------------------
	Mega Menu
---------------------------------------*/

$(document).ready(function() {
    // executes when HTML-Document is loaded and DOM is ready

// breakpoint and up
    $(window).resize(function(){
        if ($(window).width() >= 980){

            // when you hover a toggle show its dropdown menu
            $(".navbar .dropdown-toggle").hover(function () {
                $(this).parent().toggleClass("show");
                $(this).parent().find(".dropdown-menu").toggleClass("show");
            });

            // hide the menu when the mouse leaves the dropdown
            $( ".navbar .dropdown-menu" ).mouseleave(function() {
                $(this).removeClass("show");
            });

            // do something here
        }
    });

// document ready
});


/*-------------------------------------
	Testimonial Slider
---------------------------------------*/
var owl = $('#testimonial');
owl.owlCarousel({
    items: 3,
    loop: true,
    margin: 30,
    nav: true,
    navText:["<div class='nav-btn prev-slide'><i class='fa fa-angle-left'></i> </div>","<div class='nav-btn next-slide'><i class='fa fa-angle-right'></i></div>"],
    navSpeed: 1500,
    autoplay:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        960:{
            items:1
        },
        1200:{
            items:3
        }
    }
});


/*-------------------------------------
	Instagram Slider
---------------------------------------*/
var owl = $('#instagram-slider');
owl.owlCarousel({
    items: 7,
    loop: true,
    margin: 6,
    nav: false,
    navSpeed: 1500,
    autoplay:true,
    responsive:{
        0:{
            items:2
        },
        600:{
            items:3
        },
        960:{
            items:5
        },
        1200:{
            items:7
        }
    }
});


/*-------------------------------------
	Video Series
---------------------------------------*/
var owl = $('#video-series-1');
owl.owlCarousel({
    items: 3,
    loop: true,
    margin: 30,
    nav: true,
    navText:["<div class='nav-btn prev-slide'><i class='fa fa-angle-left'></i> </div>","<div class='nav-btn next-slide'><i class='fa fa-angle-right'></i></div>"],
    navSpeed: 1500,
    autoplay:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        960:{
            items:1
        },
        1200:{
            items:3
        }
    }
});

/*-------------------------------------
	Video Series
---------------------------------------*/
var owl = $('#video-series-2');
owl.owlCarousel({
    items: 3,
    loop: true,
    margin: 30,
    nav: true,
    navText:["<div class='nav-btn prev-slide'><i class='fa fa-angle-left'></i> </div>","<div class='nav-btn next-slide'><i class='fa fa-angle-right'></i></div>"],
    navSpeed: 1500,
    autoplay:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        960:{
            items:1
        },
        1200:{
            items:3
        }
    }
});
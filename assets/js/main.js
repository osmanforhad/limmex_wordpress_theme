/* ---------------------------------------------------------------------------------------
* 
* Template:		
* Author:		Limmex Automation
* URL:			https://www.limmexautomation.com
*

--------------------------------------------------------------------------------------- */


(function ($) {
    "use strict";


    /* =================================
     ===  main mobile menu          
     =================================== */
    $('header .main-menu nav').slicknav({
        prependTo: '.mobile-menu-add',
        parentTag: "B",
        closeOnClick: false,
        allowParentLinks: false,
        nestedParentLinks: false,
        showChildren: false,
        closedSymbol: '&#xeaca;',
        openedSymbol: '&#xeac8;',

    });

    
    /* =================================
 ===  projects sliders        
 =================================== */
    
    $('.slider').slick({
	dots: false,
	infinite: true,
	centerMode: true,
	centerPadding: '11%',
	slidesToShow: 1,
//    autoplay: true,
	speed: 500,
        arrows: true,
         prevArrow:'<button class="slick-prev"> < </button>',
  nextArrow:'<button class="slick-next"> > </button>',
responsive: [
    {
      breakpoint: 768,
      settings: {
//        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
//        arrows: false,
        centerMode: true,
        centerPadding: '0px',
        slidesToShow: 1
      }
    }
  ]
});
    
    
    /* =================================
 ===  Testimonial sliders            
 =================================== */
    
    $('.testimonial-sliders').slick({
	dots: false,
	infinite: true,
	centerMode: true,
	centerPadding: '25%',
	slidesToShow: 1,
//    autoplay: true,
	speed: 500,
        arrows: true,
         prevArrow:'<button class="slick-prev"> < </button>',
  nextArrow:'<button class="slick-next"> > </button>',
  responsive: [
    {
      breakpoint: 768,
      settings: {
//        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
//        arrows: false,
        centerMode: true,
        centerPadding: '0px',
        slidesToShow: 1
      }
    }
  ]
});
    


sal({
    threshold: 0.2,
    once: true,
  });
  

    /* =================================
 ===  heder fixed              
 =================================== */

    $(window).scroll(function () {
        if ($(this).scrollTop() > 1) {
            $('header').addClass("sticky");
        } else {
            $('header').removeClass("sticky");
        }
    });



    /* =================================
 ===  scroll top to bottom               
 =================================== */
    $(window).scroll(function () {

        if ($(this).scrollTop() > 50) {
            $('#back-top').fadeIn();
        } else {
            $('#back-top').fadeOut();
        }
    });
    // scroll body to 0px on click
    $('#back-top').click(function () {
        $('#back-top a').tooltip('hide');
        $('body,html').animate({
            scrollTop: 0
        }, 800);
        return false;
    });

    // $('#back-top').tooltip('hide');




})(jQuery);

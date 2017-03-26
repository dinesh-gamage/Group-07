/**
 * Lamedic
 *
 * This file contains all template JS functions
 *
 * @package Lamedic
--------------------------------------------------------------
                   Contents
--------------------------------------------------------------

 * 01 - Owl Carousel 
 * 02 - Navigation / Menu
 * 03 - Progress Bar 
 * 04 - Facts Count 
 * 05 - Video Play   
 * 06 - Portfolio Filter 
 * 07 - Event Countdown 
 * 08 - Product Zoom 
 * 09 - Price Slider / Filter
 * 10 - Quantity Increase Decrease
 * 11 - Portfolio Lightbox Gallery
 * 12 - Datepicker
 * 13 - Preloader 

--------------------------------------------------------------*/

(function($) {
  "use strict";

// Owl Carousel 
  // Home Banner Slider
    $("#home-banner").owlCarousel({
      loop: true,
      items: 1,
      dots: false,
      nav: false,
      autoHeight: false,
      touchDrag: true,
      mouseDrag: true,
      margin: 0,
      autoplay: true,
      slideSpeed: 300,
      navText: ['', ''],
      responsive: {
        0: {
            items: 1,
            nav: false,
            dots: false,
        },
        600: {
            items: 1,
            nav: false,
            dots: false,
        },
        768: {
            items: 1,
            nav: false,
        },
        1100: {
            items: 1,
            nav: false,
        }
      }
    });

  // Testimonial Slider
    $("#testimonial-slider").owlCarousel({
      loop: true,
      items: 1,
      dots: false,
      nav: true,
      autoHeight: false,
      touchDrag: true,
      mouseDrag: true,
      margin: 0,
      autoplay: true,
      slideSpeed: 300,
      navText: ['', ''],
      responsive: {
        0: {
            items: 1,
            nav: false,
            dots: false,
        },
        600: {
            items: 1,
            nav: false,
            dots: false,
        },
        768: {
            items: 1,
            nav: false,
        },
        1100: {
            items: 1,
            nav: true,
        }
      }
    });

  // Latest News Slider
    $("#letest-news-slider").owlCarousel({
      loop: true,
      items: 1,
      dots: false,
      nav: true,
      autoHeight: false,
      touchDrag: true,
      mouseDrag: true,
      margin: 0,
      autoplay: true,
      slideSpeed: 300,
      navText: ['', ''],
      responsive: {
        0: {
            items: 1,
            nav: false,
            dots: false,
        },
        600: {
            items: 1,
            nav: false,
            dots: false,
        },
        768: {
            items: 1,
            nav: false,
        },
        1100: {
            items: 1,
            nav: true,
        }
      }
    });

  // Clients Slider
    $("#client-slider").owlCarousel({
      loop: true,
      items: 6,
      dots: false,
      nav: false,
      autoHeight: false,
      touchDrag: true,
      mouseDrag: true,
      margin: 30,
      autoplay: false,
      slideSpeed: 300,
      navText: ['', ''],
      responsive: {
        0: {
            items: 1,
            nav: false,
            dots: false,
        },
        600: {
            items: 3,
            nav: false,
            dots: false,
        },
        768: {
            items: 4,
            nav: false,
        },
        1100: {
            items: 6,
            nav: false,
        }
      }
    });

    // Blog Block Slider
    $("#blog-block-slider").owlCarousel({
      loop: true,
      items: 1,
      dots: false,
      nav: true,
      autoHeight: false,
      touchDrag: true,
      mouseDrag: true,
      margin: 0,
      autoplay: true,
      slideSpeed: 300,
      navText: ['', ''],
      responsive: {
        0: {
            items: 1,
            nav: false,
            dots: false,
        },
        600: {
            items: 1,
            nav: false,
            dots: false,
        },
        768: {
            items: 1,
            nav: false,
        },
        1100: {
            items: 1,
            nav: true,
        }
      }
    });

// Navigation / Menu
    $("#cssmenu").menumaker({
      title: "Menu",
      format: "multitoggle"
    });

// Progress Bar 
    // For Doctors Portfolio Page
    if ($('.scroll-bar').length) {    
      $('.scroll-bar').appear(function(){
        var el = $(this);
        var percent = el.data('percent');
        $(el).css('width',percent);
      },{accY: -50});
    }

// Facts Count 
    if ($('.counter').length) {   
      jQuery(document).ready(function( $ ) {
        $('.counter').counterUp({
          delay: 20,
          time: 2000
        });
      });  
    }
    
// Video Play     
    $('.btn-video-play').on('click',function() {
      $('.video-item .video-preview').append(video_url);
      $(this).hide();
    }); 

// Portfolio Filter
    $(function() {
        var selectedClass = "";
        $(".fil-cat").on('click',function(){ 
        selectedClass = $(this).attr("data-rel"); 
         $("#portfolio").fadeTo(100, 0.1);
        $("#portfolio .portfolio-block").not("."+selectedClass).fadeOut().removeClass('scale-anm');
        setTimeout(function() {
          $("."+selectedClass).fadeIn().addClass('scale-anm');
          $("#portfolio").fadeTo(300, 1);
        }, 300);     
      });
    });

// Event Countdown 
    // Comming Soon Page Event
    if($('.comming-countdown').length){  
      $('.comming-countdown').each(function() {
      var $this = $(this), finalDate = $(this).data('countdown');
      $this.countdown(finalDate, function(event) {
        var $this = $(this).html(event.strftime('' + '<div class="counter-col-days"><span class="count-days">%D </span>:</div> ' + '<div class="counter-col"><span class="count-hours">%H</span> <span class="count-number">:</span> </div>  ' + '<div class="counter-col"><span class="count-minutes">%M</span> <span class="count-number">:</span> </div>  ' + '<div class="counter-col"><span class="count-seconds">%S</span></div>'));
      });
     });
    }
    
// Product Zoom 
    jQuery(window).load(function() {
      $("#zoom-01").elevateZoom({gallery:'gallery-01', zoomType: 'lens', lensShape: 'round', lensSize : 200, galleryActiveClass: 'active', imageCrossfade: true}); 
      $("#zoom-01").on("click", function(e) {  
        var ez =   $('#zoom-01').data('elevateZoom'); 
        $.fancybox(ez.getGalleryList());
        return false;
      }); 
    });  

// Price Slider / Filter
    $( "#slider-range" ).slider({
        range: true,
        min: 0,
        max: 1000,
        values: [ 50, 250 ],
        slide: function( event, ui ) {
            $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
        }
    });
    $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
        " - $" + $( "#slider-range" ).slider( "values", 1 ) );

// Quantity Increase Decrease
    $(".cart-plus-minus").append('<div class="dec qtybutton"><i class="fa fa-angle-down"></i></div><div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>');
      $(".qtybutton").on("click", function() {
    var $button = $(this);
    var oldValue = $button.parent().find("input").val();
    if ($button.text() == " ") {
      var newVal = parseFloat(oldValue) + 1;
    } else {
       // Don't allow decrementing below zero
      if (oldValue > 0) {
      var newVal = parseFloat(oldValue) - 1;
      } else {
      newVal = 0;
        }
        }
    $button.parent().find("input").val(newVal);
    });    

// Portfolio Lightbox Gallery
    $(function() {
      $('.popup-gallery').magnificPopup({
        delegate: '.portfolio-img a',
        type: 'image',    
        tLoading: 'Loading image #%curr%...',
        mainClass: 'mfp-img-mobile',    
        gallery: {
          enabled: true,
          navigateByImgClick: true,
          preload: [0,1] // Will preload 0 - before current, and 1 after the current image
        },
        image: {
          tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
          titleSrc: function(item) {
            return item.el.attr('title') + '<small>by Lamadic</small>';
          }
        }
      });
    });

// Datepicker
    if ($('.date-pick').length) {
      $('.date-pick').datepicker({
        format : "dd/mm/yyyy",
		  startDate: '+1d',
      });
    }
// Preloader   
    $(window).load(function() { 
      $('.status').fadeOut();
      $('.preloader').delay(350).fadeOut('slow'); 
    }); 

})(jQuery);


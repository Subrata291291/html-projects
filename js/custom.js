// Header js   
$(document).ready(function() {
  $(window).scroll(function() {
    if ($(document).scrollTop() > 270) {
      $(".header-area").addClass("shrink shadow")
    } else {
      $(".header-area").removeClass("shrink shadow")
    }
  });
});
  
// Catelog slider js
$(".catelog-slider").slick({
  dots: false,
  infinite: true,
  centerMode: false,
  // centerPadding: '0px',
  arrows: true,
  autoplay: false,
  fade: false,
  slidesToShow: 2,
  slidesToScroll: 1,
  responsive: [{
      breakpoint: 1399,
      settings: {
        arrows: false,
        dots: true,
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
      }
    },
    {
      breakpoint: 991,
      settings: {
        dots: true,
        arrows: false,
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
      }
    },
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 1,
        dots: true,
        arrows: false,
        slidesToScroll: 1
      }
    }
  ]
});

// Catelog slider js
$(".review-slider").slick({
  dots: false,
  infinite: true,
  centerMode: false,
  // centerPadding: '0px',
  arrows: true,
  autoplay: false,
  fade: false,
  slidesToShow: 1,
  slidesToScroll: 1,
  responsive: [{
      breakpoint: 1399,
      settings: {
        arrows: false,
        dots: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
      }
    },
    {
      breakpoint: 991,
      settings: {
        dots: true,
        arrows: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
      }
    },
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 1,
        dots: true,
        arrows: false,
        slidesToScroll: 1
      }
    }
  ]
});

// Init AOS
function aos_init() {
  AOS.init({
    duration: 1000,
    easing: "ease-in-out-back",
    once: true
  });
}
$(window).on('load', function() {
  aos_init();
});
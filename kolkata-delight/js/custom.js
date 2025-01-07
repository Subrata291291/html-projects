 // Product slider js
 $(".banner_slider").slick({
  dots: false,
  infinite: true,
  arrows: false,
  autoplay: true,
  fade: false,
  slidesToShow: 1,
  slidesToScroll: 1,
  responsive: [{
      breakpoint: 1399,
      settings: {
        dots: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
      }
    },
    {
      breakpoint: 991,
      settings: {
        dots: false,
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
        dots: false,
        arrows: false,
        slidesToScroll: 1
      }
    }
  ]
});

 
 
 // Product slider js
 $(".popular_slider").slick({
    dots: false,
    infinite: true,
    arrows: false,
    autoplay: true,
    fade: false,
    slidesToShow: 5,
    slidesToScroll: 2,
    responsive: [{
        breakpoint: 1399,
        settings: {
          dots: false,
          slidesToShow: 5,
          slidesToScroll: 1,
          infinite: true,
        }
      },
      {
        breakpoint: 991,
        settings: {
          dots: false,
          arrows: false,
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
        }
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 2,
          dots: false,
          arrows: false,
          slidesToScroll: 1
        }
      }
    ]
  });

 // Product tab area
  $(document).ready(function() {
    $('.tabs li').click(function() {
      var tab_id = $(this).attr('data-tab');
      $('.tabs li').removeClass('current');
      $('.tab-content').removeClass('current');
      $(this).addClass('current');
      $("#" + tab_id).addClass('current');
    })
  });

 // Shrink header 
  $(document).ready(function() {
    $(window).scroll(function() {
      if ($(document).scrollTop() > 270) {
        $(".menu-area").addClass("shrink")
      } else {
        $(".menu-area").removeClass("shrink")
      }
    });
  });

//Review Slider
$(".review_slider").slick({
  centerMode: true,
  centerPadding: '60px',
  dots: false,
  infinite: true,
  arrows: false,
  autoplay: true,
  fade: false,
  slidesToShow: 4,
  slidesToScroll: 2,
  responsive: [{
      breakpoint: 1399,
      settings: {
        dots: false,
        slidesToShow: 4,
        slidesToScroll: 1,
        infinite: true,
      }
    },
    {
      breakpoint: 991,
      settings: {
        dots: false,
        arrows: false,
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
      }
    },
    {
      breakpoint: 767,
      settings: {
        centerMode:false,
        slidesToShow: 1,
        dots: false,
        arrows: false,
        slidesToScroll: 1
      }
    }
  ]
});

//Loader Js
$(window).on('load', function() {
  $('#preloader').hide();
});


//Fancybox
  $(document).ready(function() {
    // add all to same gallery
    $(".gallery a").attr("data-fancybox","mygallery");
    // assign captions and title from alt-attributes of images:
    $(".gallery a").each(function(){
      $(this).attr("data-caption", $(this).find("img").attr("alt"));
      $(this).attr("title", $(this).find("img").attr("alt"));
    });
    // start fancybox:
    $(".gallery a").fancybox();
  });
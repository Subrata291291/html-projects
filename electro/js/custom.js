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
 $(".category-slider").slick({
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


  let lastScrollTop = 0;
  const header = document.getElementById("custom-header");
  
  window.addEventListener("scroll", function() {
      let currentScroll = window.pageYOffset || document.documentElement.scrollTop;
  
      if (currentScroll > lastScrollTop) {
          // Downscroll
          header.style.top = "-150px"; // Hide header on downscroll
      } else {
          // Upscroll
          header.style.top = "0"; // Show header on upscroll
      }
      lastScrollTop = currentScroll <= 0 ? 0 : currentScroll; // For Mobile or negative scrolling
  }, false);
  
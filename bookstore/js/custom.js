// Modal area js
$ (window).ready (function () {
  setTimeout (function () {
    $ ('#myModal').modal ("show")
  }, 10000)
});
      
      
// Nav area js   
      const navbar_icon = document.querySelector(".navbar_icon");
      navbar_icon.addEventListener("click", function() {
        const body = document.body;
        body.classList.toggle("nav-open");
      });


// Banner slideer js
        $(".banner_slider").slick({
          dots: false,
          infinite: true,
          arrows: true,
          autoplay: true,
          slidesToShow: 1,
          slidesToScroll: 1,
          responsive: [
            {
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
              dots: true,
              arrows:false,
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
              arrows:false,
              slidesToScroll: 1
            }
          }
          ]
        });



// Category slider js
        $(".cat_slider").slick({
          dots: false,
          infinite: true,
          arrows: false,
          autoplay: true,
          slidesToShow: 3,
          slidesToScroll: 1,
          responsive: [
            {
            breakpoint: 1199,
            settings: {
              dots: false,
              slidesToShow: 3,
              slidesToScroll: 1,
              infinite: true,
              dots: true
            }
          },
          {
            breakpoint: 991,
            settings: {
              dots: false,
              slidesToShow: 2,
              slidesToScroll: 1,
              infinite: true,
              dots: true
            }
          },
          {
            breakpoint: 767,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 2
            }
          }
          ]
        });

 // Header js   
      $(document).ready(function() {
        $(window).scroll(function() {
          if ($(document).scrollTop() > 270) {
            $(".header_area").addClass("shrink")
          } else {
            $(".header_area").removeClass("shrink")
          }
        });
      });

// Tab area js
$(document).ready(function() {
        $('ul.tabs li').click(function() {
          var tab_id = $(this).attr('data-tab');
          $('ul.tabs li').removeClass('current');
          $('.tab-content').removeClass('current');
          $(this).addClass('current');
          $("#" + tab_id).addClass('current');
        })
      });



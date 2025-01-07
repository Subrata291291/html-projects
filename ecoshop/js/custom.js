// Banner slider js
$(".banner-slider").slick({
    dots: true,
    infinite: true,
    arrows: false,
    autoplay: true,
    fade: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    responsive: [{
        breakpoint: 1399,
        settings: {
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

  // Product slider js
$(".product-slider").slick({
  dots: true,
  infinite: true,
  arrows: false,
  autoplay: true,
  fade: false,
  slidesToShow: 5,
  slidesToScroll: 3,
  responsive: [{
      breakpoint: 1399,
      settings: {
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
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
      }
    },
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 3,
        dots: true,
        arrows: false,
        slidesToScroll: 3
      }
    }
  ]
});

  // Product slider js
  $(".fresh-product-slider").slick({
    dots: true,
    infinite: true,
    arrows: false,
    autoplay: true,
    fade: false,
    slidesToShow: 5,
    slidesToScroll: 3,
    responsive: [{
        breakpoint: 1399,
        settings: {
          dots: true,
          slidesToShow: 3,
          slidesToScroll: 1,
          infinite: true,
        }
      },
      {
        breakpoint: 991,
        settings: {
          dots: true,
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

// Add shadow class on scroll to Logo area
window.onscroll = function() { shadow() };
let menu = document.getElementById("logo-area");
function shadow() {
  if (window.pageYOffset ) {
    menu.classList.add("shadow");
  } else {
    menu.classList.remove("shadow");
  }
}

//Loader Js
      $(window).on('load', function() {
        $('#preloader').hide();
      });


// countdown----------
function CountDown(lastDate) {
  const selectDay = document.getElementById("day");
  const selectHour = document.getElementById("hour");
  const selectMinute = document.getElementById("minute");
  const selectSecound = document.getElementById("second");
  if (selectDay && selectHour && selectMinute && selectSecound) {
    let showDate = "";
    let showHour = "";
    let showMinute = "";
    let showSecound = "";
    // count Down
    const provideDate = new Date(lastDate);
    // format date
    const year = provideDate.getFullYear();
    const month = provideDate.getMonth();
    const date = provideDate.getDate();
    const hours = provideDate.getHours();
    const minutes = provideDate.getMinutes();
    const seconds = provideDate.getSeconds();

    // date calculation logic
    const _seconds = 1000;
    const _minutes = _seconds * 60;
    const _hours = _minutes * 60;
    const _date = _hours * 24;
    const timer = setInterval(() => {
      const now = new Date();
      const distance =
        new Date(year, month, date, hours, minutes, seconds).getTime() -
        now.getTime();
      if (distance < 0) {
        document.getElementById('countdown-text').innerHTML = "Sale is Closed"
        document.getElementById('grab-deal').style.visibility="hidden";
        document.getElementById('sale-area').style.backgroundImage = "url('../images/grocery-bg-1.webp')";
        clearInterval(timer);
        return;
      }
      showDate = Math.floor(distance / _date);
      showMinute = Math.floor((distance % _hours) / _minutes);
      showHour = Math.floor((distance % _date) / _hours);
      showSecound = Math.floor((distance % _minutes) / _seconds);
      selectDay.innerText = showDate < 10 ? `0${showDate}` : showDate;
      selectHour.innerText = showHour < 10 ? `0${showHour}` : showHour;
      selectMinute.innerText = showMinute < 10 ? `0${showMinute}` : showMinute;
      selectSecound.innerText =
        showSecound < 10 ? `0${showSecound}` : showSecound;
    }, 1000);
  }
}
CountDown("2024-05-28T19:44:00.000000+05:30");


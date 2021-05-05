$(function () {
  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
      $('.header__main').addClass("fixed-me");
    } else {
      $(".header__main").removeClass("fixed-me");
    }
  });
});


$('.nav-item').click(function () {
  responsiveBtnIcon.classList.toggle("--is-open");
  navMenu.classList.toggle("--is-open");
});

$(document).ready(function () {
  $('.toTop').on('click', function (e) {
    e.preventDefault();
    $('html,body').animate({ // 有些瀏覽器只支援html，有些只支援body 所以兩個都寫進去
      scrollTop: 0,
    }, 700)
  });

});



$('.single-item').slick({
  autoplay: true,
  autoplaySpeed: 6000,
  speed: 500,
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: true,
  dots: false,
  responsive: [{
      breakpoint: 700,
      settings: {
        arrows: false,
        dots: false,
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      }
    }
  ]
});



$(function () {
  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
      $('.logo').addClass("here");
    } else {
      $(".logo").removeClass("here");
    }
  });
});

const responsiveBtnIcon = document.querySelector(".responsive-menu-btn");
const navMenu = document.querySelector(".nav__menu");

responsiveBtnIcon.addEventListener("click", () => {
  responsiveBtnIcon.classList.toggle("--is-open");
  navMenu.classList.toggle("--is-open");
});
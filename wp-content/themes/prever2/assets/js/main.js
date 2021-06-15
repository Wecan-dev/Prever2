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

$('.main-slider__mobile').slick({
    dots: false,
    autoplaySpeed: 6000,
	      arrows: true,
    slidesToScroll: 1,
	    slidesToShow: 3,
	 adaptiveHeight: true,
    responsive: [
		{
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
      }
    },
    {
    breakpoint: 700,
    settings: {
      arrows: true,
      dots: false,
      slidesToShow: 1,
      slidesToScroll: 1,
		 adaptiveHeight: true
    }
  },
		{
    breakpoint: 320,
    settings: {
      arrows: true,
      dots: false,
      slidesToShow: 1,
      slidesToScroll: 1,
		 adaptiveHeight: true
    }
  }
  ]});

$('.main-slider__mobile1').slick({
    dots: false,
    autoplaySpeed: 6000,
	      arrows: true,
    slidesToScroll: 1,
	    slidesToShow: 3,
	 
    responsive: [
		{
      breakpoint: 1025,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
      }
    },
    {
    breakpoint: 700,
    settings: {
      arrows: true,
      dots: false,
      slidesToShow: 1,
      slidesToScroll: 1,
	
    }
  },
		{
    breakpoint: 320,
    settings: {
      arrows: true,
      dots: false,
      slidesToShow: 1,
      slidesToScroll: 1,
	
    }
  }
  ]});

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


$(".btn-collapse").click(function() {
  var next = $(this).next();
  $(".collapse").not(next).slideUp();
  next.slideToggle();
});

$('.text-left').click(function(){
	$('.li-hover-tabs').removeClass('active');
	$('.text-left').removeClass('active');
	$(this).addClass('active');
	$(this).parent().parent('.li-hover-tabs').addClass('active');
})
import Swiper from 'swiper/bundle';

$(function() {

  var heroSwiperThumbs = new Swiper('.hero-swiper-thumbs', {
    spaceBetween: 0,
    slidesPerView: 4,
  });

  var heroSwiper = new Swiper('.hero-swiper', {
    slidesPerView: 1,
    spaceBetween: 0,
    loop: true,
    //effect: 'fade',
    autoplay: {
      delay: 4000,
      disableOnInteraction: false,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    thumbs: {
      swiper: heroSwiperThumbs,
    },
  });

  var categorie1BlockSwiper = new Swiper('.section-slider-w-sidebar-swiper', {
    slidesPerView: 1,
    spaceBetween: 0,
    loop: true,
    navigation: {
      nextEl: ".categorie-1-block-slider-button-next",
      prevEl: ".categorie-1-block-slider-button-prev",
    },
  });

  var partnersSwiper = new Swiper('.partners-swiper', {
    slidesPerView: 6,
    spaceBetween: 30,
    loop: true,
    //speed: 6000,
    //slidesPerView: 'auto',
    /*autoplay: {
      delay: 1,
      disableOnInteraction: false,
    },*/
  });

});
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
    thumbs: {
      swiper: heroSwiperThumbs,
    },
  });

  var categorie1BlockSwiper = new Swiper('.section-slider-w-sidebar-swiper', {
    slidesPerView: 1,
    spaceBetween: 0,
    loop: true,
    navigation: {
      nextEl: ".section-slider-w-sidebar-button-next",
      prevEl: ".section-slider-w-sidebar-button-prev",
    },
  });

  var marktplatzSwiper = new Swiper('.swiper-marktplatz', {
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

  var clubEventsSwiper = new Swiper('.swiper-club-events', {
    slidesPerView: 1,
    grid: {
      rows: 2,
    },
    spaceBetween: 30,
    navigation: {
      nextEl: ".section-club-events-button-next",
      prevEl: ".section-club-events-button-prev",
    },
  });

});
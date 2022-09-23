import Swiper from 'swiper/bundle';

$(function() {

 /* var heroSwiperThumbs = new Swiper('.hero-swiper-thumbs', {
    breakpoints: {
      576: {
        slidesPerView: 1,
        spaceBetween: 0,
      },
      768: {
        slidesPerView: 2,
        spaceBetween: 0,
      },
      992: {
        slidesPerView: 3,
        spaceBetween: 0,
      },
      1200: {
        slidesPerView: 4,
        spaceBetween: 0,
      },
    },
    spaceBetween: 0,
    slidesPerView: 1,
  });*/

  var heroSwiper = new Swiper('.hero-swiper', {
    breakpoints: {
      1200: {
        slidesPerView: 1,
        spaceBetween: 0,
        loop: true
      },
    },
    slidesPerView: 1,
    spaceBetween: 0,
    loop: false,
    //effect: 'fade',
    autoplay: {
      delay: 4000,
      disableOnInteraction: false,
    },
    navigation: {
      nextEl: ' .hero-swiper-button-next',
      prevEl: ' .hero-swiper-button-prev',
    },
    scrollbar: {
      el: ".hero-swiper-scrollbar",
      hide: false,
    },
    /*thumbs: {
      swiper: heroSwiperThumbs,
    },*/
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
    breakpoints: {
      576: {
        slidesPerView: 2,
        spaceBetween: 30,
      },
      768: {
        slidesPerView: 2,
        spaceBetween: 30,
      },
      992: {
        slidesPerView: 4,
        spaceBetween: 30,
      },
      1200: {
        slidesPerView: 6,
        spaceBetween: 30,
      },
    },
    //slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    speed: 6000,
    slidesPerView: 'auto',
    autoplay: {
      delay: 1,
      disableOnInteraction: false,
    },
  });

  var clubEventsSwiper = new Swiper('.swiper-club-events', {
    slidesPerView: 1,
    grid: {
      fill: 'column',
      rows: 2,
    },
    spaceBetween: 30,
    navigation: {
      nextEl: ".section-club-events-button-next",
      prevEl: ".section-club-events-button-prev",
    },
  });

  var sidebarSwiper = new Swiper(".sidebar-swiper", {
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      renderBullet: function (index, className) {
        var bulletLabels = [];
        $( '.sidebar-swiper .swiper-wrapper .swiper-slide' ).each(function(i) {
          bulletLabels.push($(this).attr( 'data-name' ));
        });
        return '<span class="' + className + ' swiper-pagination-bullet">' + ( bulletLabels[index] ) + "</span>";
      },
    },
  });

});
$(function () {

  let options = {
      loop: true,
      slidesPerGroup: 1,
      spaceBetween: 30,
      nested: false,
      allowTouchMove: true,
      // watchOverflow: true,
      centeredSlides: true,
      slidesPerView: 'auto',
      lazy: {
        loadPrevNext: true,
        loadPrevNextAmount: 9
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true
      },    
      breakpoints: {
        320: {
          spaceBetween: 8,
          lazy: {
            loadPrevNextAmount: 1
          },
        },
        992: {
          spaceBetween: 15,
          lazy: {
            loadPrevNextAmount: 3
          },
        },
        1920: {
          lazy: {
            loadPrevNextAmount: 9
          },
        }
      },
      navigation: {
        nextEl: '.swiper__btn-next',
        prevEl: '.swiper__btn-prev'
      }
    }

  /* Platform */
  $('.broadcasts__slider-mk').each(function (index, el) {
    const swiperGroup4 = new Swiper('.broadcasts__slider-mk', options);
  });

  $('.broadcasts__slider-owners').each(function (index, el) {
    const swiperGroup5 = new Swiper('.broadcasts__slider-owners', options);
  });

  $('.broadcasts__slider-forums').each(function (index, el) {
    const swiperGroup6 = new Swiper('.broadcasts__slider-forums', options);
  });  

});
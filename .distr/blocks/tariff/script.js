$(function () {

  initTogglePrice();

  function initTogglePrice() {
    let
      tab = $('.payments__wrapper_1 .price__tabs-link'),
      price_card = $('.payments__wrapper_1 .price-card'),
      targetElem;


    tab.on('click', function () {
      targetElem = $(this).attr("data-href")
      console.log(targetElem);
      tab.removeClass('active');
      $(this).addClass('active');
      price_card.removeClass('active');
      $(targetElem).addClass('active');
    })
  }


  /* Platform */
  $('.payments__slider').each(function (index, el) {
    let slider_wrapper = $('.payments__slider-wrap');

    if ($(window).innerWidth() <= 575) {
      slider_wrapper.addClass('swiper-wrapper').removeClass('payments__slider-wrap');
      const swiperGroup4 = new Swiper('.payments__slider', {
        loop: false,
        autoplay: false,
        slidesPerGroup: 1,
        slidesPerView: 1,
        spaceBetween: 20,
        allowTouchMove: true,
        watchOverflow: true,
        centeredSlides: true,
        mousewheel: {
          forceToAxis: true,
        },
        breakpoints: {
          320: {
            slidesPerView: 1.8,
          }
          ,
          480: {
            slidesPerView: 2,
          }
        },
        navigation: {
          nextEl: $('.platform__btn-prev'),
          prevEl: $('.platform__btn-next')
        }
      });
    }
  });





});
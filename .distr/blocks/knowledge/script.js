$(function () {

  initTriggersBox();

  function initTriggersBox() {
    let root = $('.knowledge__box');
    if (!root.length) return;

    let elements = root.html();
    root.append(elements);

    root.marquee({
      speed: 25,
      direction: 'left',
      loop: -1,
      duplicated: true,
      startVisible:true,
      /* pauseOnHover:true */
    });
  }

});
$(window).on('load', function () {
  jQuery(function ($) {
    const slideShop = $('.p-shop__area').on('click', function () {
      $(this).next().slideToggle();
      $(this).toggleClass('active');
    });
  });
});

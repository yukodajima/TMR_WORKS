$(window).on('load', function () {
  jQuery(function ($) {
    const slideContact = $('.p-contact__text').on('click', function () {
      $(this).next().slideToggle();
      $(this).children().toggleClass('open');
    });
  });
});

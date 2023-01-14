$(window).on('load', function () {
  jQuery(function ($) {
    const slideQuestion = $('.p-question__text').on('click', function () {
      $(this).next().slideToggle();
      $(this).children().toggleClass('open');
    });
  });
});

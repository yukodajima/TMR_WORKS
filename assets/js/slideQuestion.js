$(window).on('load', function () {
  jQuery(function ($) {
    const slideQuestion = $('.p-question__textBox').on('click', function () {
      $(this).next().slideToggle();
      $(this).find(".p-question__triger").toggleClass('open');
    });
  });
});

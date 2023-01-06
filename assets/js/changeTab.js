$(window).on('load', function () {
  jQuery(function ($) {
    const changeTab = $('.p-menu__textContainer').on('click', function () {
      $('.p-menu__textContainer').removeClass('orange');
      $('.p-menu__title').removeClass('white');
      $('.p-menu__subTitle').removeClass('white');
      let index = $('.p-menu__textContainer').index(this);
      $('.p-menu__textContainer').eq(index).addClass('orange');
      $('.p-menu__title').eq(index).addClass('white');
      $('.p-menu__subTitle').eq(index).addClass('white');
    });
  });
});

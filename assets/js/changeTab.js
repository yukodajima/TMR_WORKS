$(window).on('load', function () {
  jQuery(function ($) {
    const changeTab = $('.p-topMenu__textContainer').on('click', function () {
      $('.p-topMenu__textContainer').removeClass('orange');
      $('.p-topMenu__title').removeClass('white');
      $('.p-topMenu__subTitle').removeClass('white');
      let index = $('.p-topMenu__textContainer').index(this);
      $('.p-topMenu__textContainer').eq(index).addClass('orange');
      $('.p-topMenu__title').eq(index).addClass('white');
      $('.p-topMenu__subTitle').eq(index).addClass('white');
    });
  });
});

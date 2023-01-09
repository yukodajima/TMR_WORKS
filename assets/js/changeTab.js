$(window).on('load', function () {
  jQuery(function ($) {
    let tab = $('.p-topMenu__textContainer');
    let title = $('.p-topMenu__title');
    let subTitle = $('.p-topMenu__subTitle');
    let parent = $('.l-container');
    let list = $('.p-topMenu__list');
    const changeTab = tab.on('click', function () {
      tab.removeClass('orange');
      title.removeClass('white');
      subTitle.removeClass('white');
      let index = tab.index(this);
      tab.eq(index).addClass('orange');
      title.eq(index).addClass('white');
      subTitle.eq(index).addClass('white');
      $(this).closest(parent).find(list).removeClass('show');
      $(this).closest(parent).find(list).eq($(this).index()).addClass('show');
    });
  });
});

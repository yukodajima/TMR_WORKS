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
    let tab2 = $('.p-menu__textContainer');
    let title2 = $('.p-menu__title');
    let subTitle2 = $('.p-menu__subTitle');
    let parent2 = $('.l-container');
    let list2 = $('.p-menu__list');
    const changeTab2 = tab2.on('click', function () {
      tab2.removeClass('orange');
      title2.removeClass('white');
      subTitle2.removeClass('white');
      let index = tab2.index(this);
      tab2.eq(index).addClass('orange');
      title2.eq(index).addClass('white');
      subTitle2.eq(index).addClass('white');
      $(this).closest(parent2).find(list2).removeClass('show');
      $(this).closest(parent2).find(list2).eq($(this).index()).addClass('show');
    });
  });
});

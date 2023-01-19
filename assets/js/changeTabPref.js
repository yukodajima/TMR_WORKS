$(window).on('load', function () {
  jQuery(function ($) {
    let tab = $('.p-shopList__areaItem');
    let parent = $('.l-container');
    let list = $('.p-shopList__shopInfoWrapper');
    const changeTabPref = tab.on('click', function () {
      list.removeClass('active');
      let index = $('tab').index(this);
      $(this).closest(parent).find(list).removeClass('show');
      $(this).closest(parent).find(list).eq($(this).index()).addClass('show');
    });
  });
});

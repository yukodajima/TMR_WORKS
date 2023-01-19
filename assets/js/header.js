$(window).on('load', function () {
  jQuery(function ($) {

    const $drawerMenu = $(".p-header__drawerMenu")
    const $drawerMenuItem = $(".p-header__drawerMenuItem")
    const $shopList = $(".p-header__shopList")
    const $menuList = $(".p-header__menuList")
    const $menu = $(".p-header__menu")
    const $menuLine = $(".p-header__menuLine")
    var $windowWidth = $(this).width()
    var $bp = 900

    if ($windowWidth > $bp) {
      $menuList.show()
    }

    $menu.on("click", function () {
      $menuList.slideToggle()
      $menuLine.toggleClass("open")
    })

    $(window).resize(function () {
      var $windowWidth = $(this).width()
      var $bp = 900

      if ($windowWidth > $bp) {
        $menuList.css("display", "flex")
        $shopList.css("display", "none")
        $menuLine.removeClass("open")
      } else {
        $menuList.css("display", "none")
        $menuLine.removeClass("open")
      }
    })
    let $win = $(window);
    $win.on("load resize", function(){
      if($drawerMenuItem.hasClass("open")){
        $drawerMenuItem.removeClass("open")
        $shopList.slideToggle();
      }
    })
    $drawerMenu.on("click", function () {
      if (window.matchMedia("(max-width: 900px)").matches) {
        $drawerMenuItem.toggleClass('open');
        $shopList.slideToggle();
      }
    })
  });
});
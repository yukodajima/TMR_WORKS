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

    $drawerMenu.on('click', function () {
      $drawerMenuItem.toggleClass('open');
      $shopList.slideToggle();
    });

    if($windowWidth > $bp) {
      $menuList.show()
    }

    $menu.on("click", function(){
      $menuList.slideToggle()
      $menuLine.toggleClass("open")
      })

    $(window).resize(function(){
      var $windowWidth = $(this).width()
      var $bp = 900

      if($windowWidth > $bp){
        $menuList.css("display", "flex")
        $shopList.css("display", "none")
        $menuLine.removeClass("open")
      } else {
        $menuList.css("display", "none")
        $menuLine.removeClass("open")
      }
    })
  });
});
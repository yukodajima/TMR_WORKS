$(window).on('load', function () {
  jQuery(function ($) {
    console.log("ok");
   $(".p-header__menu").on("click", function(){
    $(".p-header__menuList").toggleClass("open")
    $(".p-header__menuList").slideToggle()
   })
   $('.p-header__drawerMenu').on('click', function () {
    $(".p-header__drawerMenuItem").toggleClass('open');
    $('.p-header__shopList').slideToggle();
  });
  });
});
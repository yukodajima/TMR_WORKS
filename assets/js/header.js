$(window).on('load', function () {
  jQuery(function ($) {
    console.log("ok");
   $(".p-header__menu").on("click", function(){
    $(".p-header__menuList").addClass("open")
   })
  });
});
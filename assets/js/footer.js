// $(window).on("load", function(){
//   jQuery(function($){
//     const $trigger = $(".p-footer__trigger")
//     const $shopList = $(".p-footer__shopList")
//     const $shopItem = $(".p-footer__shopItem")
//     var $windowWidth = $(this).width()
//     var $bp = 900

//     if($windowWidth > $bp){
//       $shopItem.show()
//     }
//     $shopList.on("click", function () {
//       if (window.matchMedia("(max-width: 900px)").matches) {
//         $trigger.toggleClass('open');
//         $shopItem.slideToggle();
//       }
//     })
//     $(window).resize(function(){
//       var $windowWidth = $(this).width()
//       var $bp = 900

//       if($windowWidth > $bp){
//         $shopItem.show()
//         $trigger.removeClass("open")
//       } else {
//         $shopItem.hide()
//         $trigger.removeClass("open")
//       }
//     })


//   })
// })
$(window).on("load", function(){
  jQuery(function($){
    const $slideFooter = $(".p-footer__triger")
    var $windowWidth = $(this).width()
    var $bp = 900

    if($windowWidth > $bp){
      $(".p-footer__shopItem").show()
    }
    $slideFooter.on('click', function () {
      $(this).toggleClass('open');
      $('.p-footer__shopItem').slideToggle();
    });

    $(window).resize(function(){
      var $windowWidth = $(this).width()
      var $bp = 900

      if($windowWidth > $bp){
        $(".p-footer__shopItem").show()
        $(".p-footer__shopItem").removeClass("open")
        console.log("ok");
      } else {
        $(".p-footer__shopItem").hide()
        $(".p-footer__shopItem").removeClass("open")
      }
    })


  })
})
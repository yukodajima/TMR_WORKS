$(window).on('load', function () {
  jQuery(function($) {
    let $windowWidth = $(window).width()
    let $bp = 900
    const shopArea = $(".p-shop__area")

    if($windowWidth > $bp) {
      $("p-shop__loopBox").show()
    }

    $(window).resize(function(){
      let $windowWidth = $(this).width()

      if($windowWidth > $bp){
        $(".p-shop__loopBox").css("display", "block")
        shopArea.removeClass("active")
      }else{
        $(".p-shop__loopBox").css("display", "none")
        shopArea.removeClass("active")
      }
    })

    shopArea.on("click", function(){
      if(window.matchMedia("(max-width: 900px)").matches){
        $(this).toggleClass("active");
        $(this).next().slideToggle();
      }
    })
    const alwaysDisplay = $(".p-shop__area:contains('関東')");
    alwaysDisplay.next().css("display","block");
  });
});
jQuery(document).ready(function(){
  $(document).on('click','.bubble-wrap',function(){
      $(".bubble").toggleClass("active");
      $(".bubbleback").toggleClass("active");
      $(".first").toggleClass("active");
      $(".second").toggleClass("active");
      $(".third").toggleClass("active");
      $(".heady").toggleClass("active");
      $(".navitems").toggleClass("active");
  });
});
$(window).scroll(function(e)
  {
    var offsetRange = $(window).height() / 3,
        offsetTop = $(window).scrollTop() + offsetRange + $("#workintro2").outerHeight(true),
        offsetBottom = offsetTop + offsetRange;

    $("#exporevideo").each(function () { 
      var y1 = $(this).offset().top;
      var y2 = offsetTop;
      if (y1 + $(this).outerHeight(true) < y2 || y1 > offsetBottom) {
        this.pause(); 
      } else {
        this.play();
      }
    });
});
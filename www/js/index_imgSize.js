function imgSize(){
  $(document).ready(function(){
    if (window.matchMedia("(min-width: 840px)").matches)
    {
      var imgWidth = $(".js-project_img").width();
      $(".js-project_img").css('height', imgWidth);
    }
  });
}
imgSize();

function imgResize() {
  $(document).ready(function(){
    $(window).resize(function() {
      imgSize();
    });
  });
}
imgResize();

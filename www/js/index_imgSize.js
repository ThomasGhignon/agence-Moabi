function imgSize(){
  $(document).ready(function(){
    var imgWidth = $(".js-project_img").width();
    $(".js-project_img").css('height', imgWidth);
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

function offsetTxt()
{
  $(document).ready(function(){
    if (window.matchMedia("(min-width: 840px)").matches)
    {
      var offsetLine_1 = $(".js-offsetLine1").offset().left;
      var offsetLine_2 = $(".js-offsetLine2").offset().left;

      var distance = parseInt(offsetLine_2) - parseInt(offsetLine_1);

      $(".js-desc_content").css('margin-left', distance);
    }

  });
}
offsetTxt();

function offsetTxtResize() {
  $(document).ready(function(){
    $(window).resize(function() {
      offsetTxt();
    });
  });
}
offsetTxtResize();

function offsetTxt()
{
  $(document).ready(function(){
    var offsetLine_1 = $(".js-offsetLine1").offset().left;
    var offsetLine_2 = $(".js-offsetLine2").offset().left;

    var distance = parseInt(offsetLine_2) - parseInt(offsetLine_1);

    $(".project-right_content .js-desc_content").css('margin-left', distance);
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

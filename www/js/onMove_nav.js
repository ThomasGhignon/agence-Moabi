function onMove()
{
  $(document).ready(function(){
    var lastScrollTop = 0;
    $(window).on( "scroll", function(){
       var st = $( this ).scrollTop();
       if (st<150){
        // top
         $(".onMoveNav").removeClass("navShow");
         $(".onMoveNav").addClass("navHidden");
       }else{
        if ( st > lastScrollTop ){
          // to bottom
           $(".onMoveNav").removeClass("navShow");
           $(".onMoveNav").addClass("navHidden");
         } else {
          // to top
           $(".onMoveNav").removeClass("navHidden");
           $(".onMoveNav").addClass("navShow");
         }
       }
       lastScrollTop = st;
    });
  });
}
onMove();

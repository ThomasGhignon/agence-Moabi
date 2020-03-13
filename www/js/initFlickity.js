// 1st carousel, main
$('.carousel-main').flickity({
  cellAlign: 'center',
  contain: true,
  pageDots: false,
  wrapAround: true,
  fade: true,
  lazyLoad: true
});


function getMembersDesc(){
  $(document).ready(function(){
    $.getJSON( "json/data_members.json", function( data ) {
      var $carousel = $('.carousel-main');
      $carousel.on( 'select.flickity', function( event, index ) {
        $(".members-desc>span").text(data.member[index].name);
        $(".members-desc>p").text(data.member[index].desc);
      });
    });
  });
}
getMembersDesc();


// 2nd carousel, navigation
$('.carousel-nav').flickity({
  asNavFor: '.carousel-main',
  contain: true,
  pageDots: false,
  wrapAround: true,
  prevNextButtons: false,
  freeScroll: false
});

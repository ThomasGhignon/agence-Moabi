function initFlickity()
{
  $(document).ready(function(){
    $('.main-carousel').flickity({
      // options
      cellAlign: 'center',
      contain: true,
      pageDots: false,
      wrapAround: true,
      lazyLoad: true,

    });

    var $carousel = $('.main-carousel').flickity();

    $carousel.on( 'select.flickity', function( event, index ) {
      console.log( 'Flickity select ' + index );
    });
  });
}
initFlickity();

function navButton(){
  $(document).ready(function(){
    $(".js-navHamburger").click(function(){
      $(".js-navHamburger").toggleClass('active');
      $(".responsiveNav").toggleClass('responsiveNav_active');
      $("body").toggleClass('js-body_activeNav');
      $("nav").toggleClass('nav_active');
      $(".onMoveNav").toggleClass('onMoveNav_active');
    });
    $(".responsiveNav a").click(function(){
      $("body").removeClass('js-body_activeNav');
      $(".js-navHamburger").removeClass('active');
      $(".responsiveNav").toggleClass('responsiveNav_active');
      $("nav").removeClass('nav_active');
      $(".onMoveNav").removeClass('onMoveNav_active');
    });
  });
}
navButton();

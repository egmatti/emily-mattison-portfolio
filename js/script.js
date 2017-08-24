// GETTING STARTED EXAMPLE
// $(document).ready(function(){
//   // jQuery code
// });

jQuery(document).ready(function($) {

  // MEDIA QUERIES

  const mediaQuerySmall = window.matchMedia( "(max-width: 767px)" );
  const mediaQueryMedium = window.matchMedia( "(max-width: 1025px)" );


  // FIXDED HEADER ON SCROLL

  var lastScrollTop = 0;
  // element should be replaced with the actual target element on which you have applied scroll, use window in case of no target element.
  window.addEventListener("scroll", function(){ // or window.addEventListener("scroll"....
     var st = window.pageYOffset || document.documentElement.scrollTop;
     if (st > lastScrollTop){
       //downscroll code
         $("header").slideUp();
        //  $("#home-page header").css("position", "static");
     } else {
        // upscroll code
        $("header").slideDown();
        // $("#home-page header").css("position", "fixed");
     }
     lastScrollTop = st;
  }, false);


  // MAIN NAV MOBILE DROPDOWN

  $(".main-nav-mobile-icon").on( "click", function() {
    $(".main-nav-mobile-dropdown").slideToggle();
    $(".box-shadow-cover").slideToggle();
  });


  // BUTTON COLOR CHANGE

  $(".button").click(function() {
    $(this).css({"background": "#1fd4f9", "border": "2px solid #1fd4f9"});
    $(this).find("span").css("color", "#fff");
  });


  // INSTAGRAM FOLLOW BUTTON

  $(".button-instagram").click(function() {
    $(this).find("span").html("Thanks!");
  });


  // CONTACT SEND BUTTON

  $(".button-send").click(function() {
    $(this).find("span").html("Sent!");
  });


  // RÉSUMÉ VIEW BUTTON

  $(".button-resume").click(function() {
    $(this).find("span").html("Thanks!");
  });


  // SITE VIEW BUTTON

  $(".button-site").click(function() {
    $(this).find("span").html("Thanks!");
  });


  // CONTACT FORM BUTTON DIV HEIGHT

  var fieldsetHeight = $(".contact-form fieldset").outerHeight();

  if (mediaQuerySmall.matches) {
    // window width is less than 767px

  } else if (mediaQueryMedium.matches) {
    // window width is less than 1025px

  } else {
    // window width is at least 1025px
    $(".contact-form .button-div").css({"height": fieldsetHeight});
  };


  // DIRECTORY ROW FIGURE HEIGHT

  var secondRowFigureWidth = $(".directory__figure--second-row .directory__image-container").outerWidth();
  var secondRowFigureHeight = secondRowFigureWidth / 2;

  if (mediaQuerySmall.matches) {
    // window width is less than 767px
    $(".directory__figure--second-row .directory__image-container").css({"height": secondRowFigureHeight});
  } else if (mediaQueryMedium.matches) {
    // window width is less than 1025px
    $(".directory__figure--second-row .directory__image-container").css({"height": secondRowFigureHeight, "min-height": 145.5});
  } else {
    // window width is at least 1025px
    $(".directory__figure--second-row .directory__image-container").css({"height": secondRowFigureHeight, "min-height": 296.5});
  };


  var otherRowFigureWidth = $(".directory__figure--other-row .directory__image-container").outerWidth();
  var otherRowFigureHeight = otherRowFigureWidth / 2;

  if (mediaQuerySmall.matches) {
    // window width is less than 767px
    $(".directory__figure--other-row .directory__image-container").css({"height": otherRowFigureHeight});
  } else if (mediaQueryMedium.matches) {
    // window width is less than 1025px
    $(".directory__figure--other-row .directory__image-container").css({"height": otherRowFigureHeight, "min-height": 83.5});
  } else {
    // window width is at least 1025px
    $(".directory__figure--other-row .directory__image-container").css({"height": otherRowFigureHeight, "min-height": 184.5});
  };

});

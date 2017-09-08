// ==========================================
// WORK PAGE
// ==========================================

jQuery(document).ready(function($) {

  // MEDIA QUERIES

  const mediaQuerySmall = window.matchMedia( "(max-width: 767px)" );
  const mediaQueryMedium = window.matchMedia( "(max-width: 1025px)" );


  // DIRECTORY NAV HEIGHT AND DIRECTORY ROW POSITIONING

  $(window).load( function() {
    var firstRowFigureHeight = $("#work-page .directory__figure--first-row").outerHeight();
    var directoryNavContainerHeight = firstRowFigureHeight - 100 - 50;
    var directoryNavHeight = directoryNavContainerHeight - 75;
    $("#work-page .directory-nav-container").css({"height": directoryNavContainerHeight});

    if (mediaQuerySmall.matches) {
      // window width is less than 767px

    } else if (mediaQueryMedium.matches) {
      // window width is less than 1025px
      $("#work-page .directory-nav").css({"height": directoryNavHeight, "min-height": 50});
    } else {
      // window width is at least 1025px
      $("#work-page .directory-nav").css({"height": directoryNavHeight, "min-height": 100});
    }
  });


  // SCROLL REVEAL

  window.sr = ScrollReveal({distance: "30px", duration: 500, scale: 0});
  sr.reveal('.directory__figure--first-row', {delay: 425});
  sr.reveal('.directory__figure--second-row', {delay: 250}, 175);
  sr.reveal('.directory__figure--other-row', {delay: 250}, 175);

});

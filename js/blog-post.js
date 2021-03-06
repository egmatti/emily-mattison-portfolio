// ==========================================
// BLOG POST PAGE
// ==========================================

jQuery(document).ready(function($) {

  // MEDIA QUERIES

  const mediaQuerySmall = window.matchMedia( "(max-width: 767px)" );
  const mediaQueryMedium = window.matchMedia( "(max-width: 1025px)" );


  // FIXED SHARE FIGURE ON SCROLL

  // Get the position from the top of the page
  var startY = 445;

  $(window).scroll(function(){
      checkY();
  });

  function checkY(){
    if( $(window).scrollTop() > startY ){
      if (mediaQuerySmall.matches) {
        // window width is less than 767px

      } else if (mediaQueryMedium.matches) {
        // window width is less than 1025px

      } else {
        // window width is at least 767px
        $("#blog-post-page figure").css({"margin-left": "8.25%", "position": "fixed", "transform": "translate(25px, -450px)"})
        $("#blog-post-page .blog-post-container").css({"left": "190px"})
      }
    } else {
      if (mediaQuerySmall.matches) {
        // window width is less than 767px

      } else if (mediaQueryMedium.matches) {
        // window width is less than 1025px

      } else {
        // window width is at least 767px
        $("#blog-post-page figure").css({"margin-left": "0%", "position": "relative", "transform": "translate(0px, 0px)"})
        $("#blog-post-page .blog-post-container").css({"left": "60px"})
      }
    }
  };

  // Do this on load just in case the user starts half way down the page
  checkY();


  // BLOG POST CONTAINER WIDTH

  var contentSectionWidth = $("#blog-post-page .content-section").width();
  var blogPostContainerWidth = contentSectionWidth - 325 - 125 - 100;

  if (mediaQuerySmall.matches) {
    // window width is less than 767px

  } else if (mediaQueryMedium.matches) {
    // window width is less than 1025px

  } else {
    // window width is at least 767px
    $("#blog-post-page .blog-post-container").css({"width": blogPostContainerWidth});
  }

});

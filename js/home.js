// ==========================================
// HOME PAGE
// ==========================================

jQuery(document).ready(function($) {

  // MEDIA QUERIES

  const mediaQuerySmall = window.matchMedia( "(max-width: 767px)" );
  const mediaQueryMedium = window.matchMedia( "(max-width: 1025px)" );


  // SCROLL REVEAL

  window.sr = ScrollReveal({distance: "30px", duration: 500, scale: 0});
  sr.reveal('.about-section div', {delay: 250});
  sr.reveal('.about-section img', {delay: 475});

  sr.reveal('.blog-section .share-figure', {delay: 250});

  sr.reveal('.instagram-slider-for--desktop img', {delay: 250}, 175);
  sr.reveal('.instagram-slider-for--tablet img', {delay: 250}, 175);
  sr.reveal('.button-instagram', {delay: 1025});

  sr.reveal('.contact-section .left-column', {delay: 250});
  sr.reveal('.contact-section .right-column', {delay: 250});


  // BLOG SLIDER

  $(".blog-slider-for").slick({
   arrows: false,
   asNavFor: ".blog-slider-nav",
   fade: true,
   slidesToScroll: 1,
   slidesToShow: 1,
   vertical: false
  });

  $(".blog-slider-nav").slick({
    arrows: false,
    asNavFor: ".blog-slider-for",
    infinite: false,
    focusOnSelect: true,
    slidesToScroll: 10,
    slidesToShow: 10,
    vertical: true
  });


  // BLOG SLIDER NAV PANEL HEIGHT

  $(document).ready(function(){
    if (mediaQuerySmall.matches) {
      // window width is less than 767px
      $("#home-page .blog-section .blog-slider-nav").css({"height": 300});
    } else if (mediaQueryMedium.matches) {
      // window width is less than 1025px
      $("#home-page .blog-section .blog-slider-nav").css({"height": 300});
    } else {
      // window width is at least 1025px
      var blogPostHeight = $("#home-page .blog-section .slick-current").outerHeight();
      $("#home-page .blog-section .blog-slider-nav").css({"height": blogPostHeight});

      $('#home-page .blog-section .slick-active').on( "click", function() {
        blogPostHeight = $("#home-page .blog-section .slick-current").outerHeight();
        $("#home-page .blog-section .blog-slider-nav").css({"height": blogPostHeight});
      });
    }
  });


  // INSTAGRAM SLIDER

  $(".instagram-slider-for--desktop").slick({
   arrows: true,
   infinite: true,
   slidesToScroll: 1,
   slidesToShow: 3,
   vertical: false
  });

  $(".instagram-slider-for--tablet").slick({
   arrows: true,
   infinite: true,
   slidesToScroll: 1,
   slidesToShow: 2,
   vertical: false
  });

  $(".instagram-slider-for--mobile").slick({
   arrows: true,
   infinite: true,
   slidesToScroll: 1,
   slidesToShow: 1,
   vertical: false
  });

  $("#home-page .instagram-section .slick-next").on("click", function() {
    $(".instagram-slider-for--desktop img").css({"opacity": 1, "transform": "none", "-webit-transform": "none"});
  });
  $("#home-page .instagram-section .slick-prev").on("click", function() {
    $(".instagram-slider-for--desktop img").css({"opacity": 1, "transform": "none", "-webit-transform": "none"});
  });

  $("#home-page .instagram-section .slick-next").on("click", function() {
    $(".instagram-slider-for--tablet img").css({"opacity": 1, "transform": "none", "-webit-transform": "none"});
  });
  $("#home-page .instagram-section .slick-prev").on("click", function() {
    $(".instagram-slider-for--tablet img").css({"opacity": 1, "transform": "none", "-webit-transform": "none"});
  });

});

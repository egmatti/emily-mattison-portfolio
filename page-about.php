<!-- ==========================================
ABOUT PAGE
========================================== -->

<?php
/*
  Template Name: About Page
*/
?>


<?php get_header(); ?>


<!-- HERO -->

    <section class="hero-section">
      <div class="headline-container">
        <h1>About</h1>
      </div>
    </section>


<!-- OVERVIEW SECTION -->

    <section class="project-overview-section">
      <div class="project-overview-section__line--hero"></div>
      <div class="project-overview-section__line--overview"></div>
      <div class="project-overview-section__description-container">
        <div class="project-overview-section__description">
          <h1 class="center">Hi, I'm Emily!</h1>
          <p class="large-body-text center">I'm a graphic designer and web developer with a passion for helping brands and artists show off the things that make them great. I also enjoy listening to music and playing with my energetic golden retriever.</p>
          <p class="large-body-text center">What started off as a willingness to help the organizations I was a part of in college create fun posters and brochures has transformed into a life-long love of design and a desire to help others embrace their identities in cool, visually appealing ways.</p>
          <img src="<?php bloginfo('stylesheet_directory'); ?>/images/about/notebook.png" alt="Notebook with magnolia flower sketch"/>
        </div>
      </div>
    </section>


<!-- MAIN IMAGE SECTION -->

    <section class="project-main-image-section">
      <div class="project-main-image-section__background">
      </div>
      <div class="project-main-image-section__image-container">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/about/portrait.png" alt=""/>
      </div>
    </section>


<!-- DIVIDER -->

    <div class="divider-white">
    </div>


<!-- MAIN BODY SECTION -->

    <section class="main-body-section">
      <div class="left-column">
        <div class="main-body-section__description">
          <p class="no-headline large-body-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
          <p class="large-body-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.</p>
          <p class="large-body-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi.</p>
          <p class="large-body-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Donec elementum ligula eu sapien consequat eleifend. Donec nec dolor erat, condimentum sagittis sem. Praesent.</p>
          <p class="large-body-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.</p>
        </div>
      </div>
      <div class="right-column button-div">
        <div class="button-container">
          <a><div class="button button-resume">
            <span>View Résumé</span>
          </div></a>
        </div>
      </div>
    </section>


<!-- DIVIDER -->

    <div class="divider-white">
    </div>


<!-- CONTACT SECTION -->

    <?php @include 'contact-form.php'; ?>


<?php get_footer(); ?>

<!-- ==========================================
BALLAD PAGE
========================================== -->

<?php
/*
  Template Name: Ballad Page
*/
?>


<?php get_header(); ?>



<!-- HERO -->

    <section class="hero-section">
      <div class="headline-container">
        <h1>ballad App</h1>
      </div>
    </section>


<!-- PROJECT OVERVIEW SECTION -->

    <section class="project-overview-section">
      <div class="project-overview-section__line--hero"></div>
      <div class="project-overview-section__line--overview"></div>
      <div class="project-overview-section__description-container">
        <div class="project-overview-section__description">
          <p class="large-body-text center no-headline">For our final project at The Iron Yard, a fellow UI Design student and I teamed up with a Java student to design and develop ballad, an app that allows songwriters to easily write and save lyrics on their computer or mobile device.</p>
          <p class="large-body-text center">The prototype that we created offers users rhyme suggestions as they write lyrics and also enables them to save and share their ballads with other users.</p>
          <div class="button-container">
            <a href="http://ballad.herokuapp.com/" target="_blank"><div class="button button-site">
              <span>View Site</span>
            </div></a>
          </div>
        </div>
      </div>
    </section>


<!-- PROJECT MAIN IMAGE SECTION -->

    <section class="project-main-image-section">
      <div class="project-main-image-section__background">
        <div class="project-main-image-section__description-container">
          <div class="project-main-image-section__description">
            <h5>Role</h5>
            <p>UI Designer</p>
          </div>
          <div class="project-main-image-section__description">
            <h5>Date</h5>
            <p>Spring 2017</p>
          </div>
          <div class="project-main-image-section__description">
            <h5>Front End Developer</h5>
            <p>Isaiah Anderson</p>
          </div>
          <div class="project-main-image-section__description">
            <h5>Back End Developer</h5>
            <p>Joshua O'Brian</p>
          </div>
        </div>
      </div>
      <div class="project-main-image-section__image-container">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/projects/ballad/ballad-main-image.png" alt="ballad app on desktop and mobile"/>
      </div>
    </section>


<!-- DIVIDER -->

    <div class="divider-white">
    </div>


<!-- PROJECT MOBILE MOCKUPS SECTION -->

    <section class="project-mobile-mockups-section">
      <div class="project-mobile-mockups-section__image-container--left">
        <img class="project-mobile-mockups-section__image" src="<?php bloginfo('stylesheet_directory'); ?>/images/projects/ballad/mobile-mockups/home-page-mockup.png" alt="ballad Home page on mobile">
      </div>

      <div class="project-mobile-mockups-section__image-container--right">
        <img class="project-mobile-mockups-section__image" src="<?php bloginfo('stylesheet_directory'); ?>/images/projects/ballad/mobile-mockups/profile-page-mockup.png" alt="ballad Profile page on mobile">
      </div>
    </section>


<!-- DIVIDER -->

    <div class="divider-white">
    </div>


<!-- PROJECT BACKGROUND IMAGE SECTION -->

    <section class="project-background-image-section">
    </section>


<!-- DIVIDER -->

    <div class="divider-white">
    </div>


<!-- PROJECT FLOAT SECTION -->

      <section class="project-float-section">
        <div class="project-float-section__image-container--right">
          <img class="project-float-section__image" src="<?php bloginfo('stylesheet_directory'); ?>/images/projects/ballad/mobile-mockups/editor-page-mockups.png" alt="ballad Editor page on mobile">
        </div>
        <div class="project-float-section__div--left">
          <p>In discussing which features to include in the prototype, we decided that we wanted to prioritize the ability to add verse, chorus, and other sections to ballads, select from a list of popular rhyme schemes or create custom ones, and make ballads public or private all from the Editor page.</p>
          <p>We designed the app so that users would be able to access these features through a slideout menu when writing or editing their ballads on a mobile device.</p>
        </div>
      </section>


<!-- DIVIDER -->

    <div class="divider-white">
    </div>


<!-- PROJECT DESKTOP MOCKUPS SECTION -->

    <section class="project-desktop-mockups-section">
      <div class="project-desktop-mockups-section__border"></div>
      <div class="project-desktop-mockups-section__background--white">
        <div class="project-desktop-mockups-section__description-container">
          <p class="project-desktop-mockups-section__description">In order to make the app easier to navigate, we decided to keep the design elements consistent across several pages. The My ballads page, Profile page, and Popular page all display the titles and excerpts from individual ballads in either card view or list view, depending on whichever one the user selects. Users can also search for specific ballads from a search bar on each of these pages.</p>
        </div>
        <div class="project-desktop-mockups-section__line"></div>
      </div>

      <div class="project-desktop-mockups-section__background--gray">
        <div class="project-desktop-mockups-section__row--first">
          <img class="project-desktop-mockups-section__image--laptop" src="<?php bloginfo('stylesheet_directory'); ?>/images/projects/ballad/laptop.png" alt="ballad Home page on desktop">
        </div>
        <div class="project-desktop-mockups-section__row--second">
          <img class="project-desktop-mockups-section__image" src="<?php bloginfo('stylesheet_directory'); ?>/images/projects/ballad/desktop-mockups/editor-page-mockup.png" alt="ballad Editor page on desktop">
          <img class="project-desktop-mockups-section__image" src="<?php bloginfo('stylesheet_directory'); ?>/images/projects/ballad/desktop-mockups/ballad-page-mockup.png" alt="ballad My Ballads page on desktop">
        </div>
        <div class="project-desktop-mockups-section__row--last">
          <img class="project-desktop-mockups-section__image" src="<?php bloginfo('stylesheet_directory'); ?>/images/projects/ballad/desktop-mockups/profile-page-mockup.png" alt="ballad Profile page on desktop">
          <img class="project-desktop-mockups-section__image" src="<?php bloginfo('stylesheet_directory'); ?>/images/projects/ballad/desktop-mockups/popular-page-mockup.png" alt="ballad Popular page on desktop">
        </div>
      </div>
    </section>


<!-- DIVIDER -->

    <div class="divider-white">
    </div>


<!-- PROJECT FULL DESKTOP MOCKUP SECTION -->

    <section class="project-full-desktop-mockup-section">
      <div class="mockup-image-container">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/projects/ballad/full-desktop-mockup.png" alt="ballad Home page on desktop">
      </div>
    </section>


<!-- DIVIDER -->

    <div class="divider-white">
    </div>


<?php get_footer(); ?>

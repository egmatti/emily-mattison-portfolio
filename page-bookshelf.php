<!-- ==========================================
BOOKSHELF PAGE
========================================== -->

<?php
/*
  Template Name: Bookshelf Page
*/
?>


<?php get_header(); ?>


<!-- HERO -->

    <section class="hero-section">
      <div class="headline-container">
        <h1>Bookshelf App</h1>
      </div>
    </section>


<!-- PROJECT OVERVIEW SECTION -->

    <section class="project-overview-section">
      <div class="project-overview-section__line--hero"></div>
      <div class="project-overview-section__line--overview"></div>
      <div class="project-overview-section__description-container">
        <div class="project-overview-section__description">
          <p class="large-body-text center no-headline">To demonstrate the process that goes into both designing and developing a one page website or app, our instructor at The Iron Yard asked us to create our own version of the “My Books” page on Goodreads’ website.</p>
          <p class="large-body-text center">In my redesign, I focused on making the site more inviting and intriguing by altering the page’s color palette to be a bit more “cozy” and by reshaping the page’s basic table format into a skeuomorphic bookshelf.</p>
          <div class="button-container">
            <a href="https://egmatti.github.io/goodreadsbookshelf/" target="_blank"><div class="button button-site">
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
            <p>UI Designer, Developer</p>
          </div>
          <div class="project-main-image-section__description">
            <h5>Date</h5>
            <p>Spring 2017</p>
          </div>
          </div>
        </div>
      </div>
      <div class="project-main-image-section__image-container">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/projects/bookshelf/bookshelf-main-image.png" alt="Bookshelf app on desktop"/>
      </div>
    </section>


<!-- DIVIDER -->

    <div class="divider-white">
    </div>


<!-- PROJECT MOBILE MOCKUPS SECTION -->

    <section class="project-mobile-mockups-section">
      <div class="project-mobile-mockups-section__image-container--left">
        <img class="project-mobile-mockups-section__image" src="<?php bloginfo('stylesheet_directory'); ?>/images/projects/bookshelf/mobile-mockups/mobile-mockup.png" alt="Bookshelf app on mobile">
      </div>

      <div class="project-mobile-mockups-section__image-container--right">
        <img class="project-mobile-mockups-section__image" src="<?php bloginfo('stylesheet_directory'); ?>/images/projects/bookshelf/mobile-mockups/mobile-modal-mockup.png" alt="Bookshelf app on mobile with modal displaying book view">
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
          <p class="project-desktop-mockups-section__description">Inspired by another project I had recently made using Adobe Illustrator’s gradient mesh tool, I decided to replicate the mesh tool’s effects in HTML and CSS using a variety of linear gradients to reflect how the light and shadows would appear on an actual bookshelf. Once a user clicks on a specific book, information about that book appears in a modal over the screen.</p>
        </div>
        <div class="project-desktop-mockups-section__line"></div>
      </div>

      <div class="project-desktop-mockups-section__background--gray">
        <div class="project-desktop-mockups-section__row--first">
          <img class="project-desktop-mockups-section__image--laptop" src="<?php bloginfo('stylesheet_directory'); ?>/images/projects/bookshelf/laptop.png" alt="Bookshelf app on desktop">
        </div>
        <div class="project-desktop-mockups-section__row--last">
          <img class="project-desktop-mockups-section__image" src="<?php bloginfo('stylesheet_directory'); ?>/images/projects/bookshelf/desktop-mockups/desktop-mockup.png" alt="Bookshelf app on desktop">
          <img class="project-desktop-mockups-section__image" src="<?php bloginfo('stylesheet_directory'); ?>/images/projects/bookshelf/desktop-mockups/desktop-modal-mockup.png" alt="Bookshelf app on desktop with modal displaying book view">
        </div>
      </div>
    </section>


<!-- DIVIDER -->

    <div class="divider-white">
    </div>


<!-- PROJECT FULL DESKTOP MOCKUP SECTION -->

    <section class="project-full-desktop-mockup-section">
      <div class="mockup-image-container">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/projects/bookshelf/desktop-mockups/desktop-mockup.png" alt="Bookshelf app on desktop">
      </div>
    </section>


<!-- DIVIDER -->

    <div class="divider-white">
    </div>


<?php get_footer(); ?>

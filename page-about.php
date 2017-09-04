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
          <p class="large-body-text center">I’m a graphic designer and web developer as well as a music fan, environmental activist, dog owner, and occasional yogi. I’m excited by the possibility of learning and creating new things and enjoy figuring out what makes a person or group unique and how to make their talents more easily recognized by other people.</p>
          <p class="large-body-text center">Thanks for stopping by to get to know a little more about me and please feel free to reach out if you’re interested in working together or just discussing life.</p>
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
          <p class="no-headline large-body-text">My name is Emily Mattison and I’m a graphic designer and web developer from Spartanburg, SC. I’ve always enjoyed making original things and this early creative spark inspired me to major in English in college so that I could study creative writing. While at school, I got involved with several on-campus organizations that had lots of gifted writers, but not many people who could quickly and easily layout magazines and brochures in a visually appealing way. With a little bit of knowledge of Adobe InDesign, I found myself stepping in to fill those gaps.</p>
          <p class="large-body-text">In the time since then, I’ve taken a variety of graphic communications, art, and user interface design classes, which have allowed me to expand on those initial design skills with a number of cool results. While taking a graphic design internship in Charleston, SC in the fall after I graduated, I became interested in one day using my abilities to provide marketing and creative direction to emerging musical artists.</p>
          <p class="large-body-text">Nowadays, I spend my free time looking for opportunities to make album artwork or websites for musicians and going to concerts or conferences to learn more about web development and the music industry. I also try to volunteer with the Sierra Club and often take my golden retriever on long walks around our neighborhood.</p>
          <p class="large-body-text">If you’re interested in working together or just discussing life, please feel free to reach out. It’s always fun to meet someone new!</p>
        </div>
      </div>
      <div class="right-column button-div">
        <div class="button-container">
          <a href="<?php bloginfo('stylesheet_directory'); ?>/emily-mattison-resume.pdf" target="_blank"><div class="button button-resume">
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

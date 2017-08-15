<!-- ==========================================
THE LATEST PAGE
========================================== -->

<?php
/*
  Template Name: The Latest Page
*/
?>

<?php get_header(); ?>


<!-- HERO -->

    <section class="hero-section">
      <div class="headline-container">
        <h1><span>the   </span>Latest</h1>
      </div>
    </section>


<!-- CONTENT SECTION -->

    <section class="content-section">

      <div class="directory-nav-container">
        <h4>Recent</h4>
        <div class="directory-nav-border"></div>
        <div class="directory-nav">

          <?php @include 'directory-nav-query.php'; ?>

        </div>
      </div>

      <div class="directory">
        <div class="directory__row--first">
          <a href="blog-post.html" class="directory__link--first-row"><figure class="directory__figure--first-row">
            <div class="push-pin-container">
              <img class="push-pin" src="<?php bloginfo('stylesheet_directory'); ?>/images/the-latest/push-pin.png" alt="Push pin">
            </div>
              <img src="<?php bloginfo('stylesheet_directory'); ?>/images/the-latest/blog-posts/the-iron-yard.png" alt="The Iron Yard classroom">
            <figcaption>
              <div>
                <span>June 7, 2017</span>
                <h2>Blog Post 7</h2>
              </div>
            </figcaption>
          </figure></a>
        </div>

        <div class="directory__row--second">
          <a class="directory__link--second-row"><figure class="directory__figure--second-row">
            <div class="directory__image-container">
              <img src="<?php bloginfo('stylesheet_directory'); ?>/images/the-latest/blog-posts/stax.png" alt="Jim Stewart and Estelle Axton from Stax Records">
            </div>
            <figcaption>
              <div>
                <span>June 6, 2017</span>
                <h3>Blog Post 6</h3>
              </div>
            </figcaption>
          </figure></a>
          <a class="directory__link--second-row"><figure class="directory__figure--second-row">
            <div class="directory__image-container">
              <img src="<?php bloginfo('stylesheet_directory'); ?>/images/the-latest/blog-posts/coffee-app.png" alt="Voyage screen from my Coffee App">
            </div>
            <figcaption>
              <div>
                <span>June 5, 2017</span>
                <h3>Blog Post 5</h3>
              </div>
            </figcaption>
          </figure></a>
        </div>

        <div class="directory__row--other">
          <a class="directory__link--other-row"><figure class="directory__figure--other-row">
            <div class="directory__image-container">
              <img src="<?php bloginfo('stylesheet_directory'); ?>/images/the-latest/blog-posts/rocket-gray-background.png" alt="Early rocket illustrations for Shane Daly">
            </div>
            <figcaption>
              <div>
                <span>June 4, 2017</span>
                <h4>Blog Post 4</h4>
              </div>
            </figcaption>
          </figure></a>
          <a class="directory__link--other-row"><figure class="directory__figure--other-row">
            <div class="directory__image-container">
              <img src="<?php bloginfo('stylesheet_directory'); ?>/images/the-latest/blog-posts/a3c.png" alt="Hip Hop photography panel at the A3C Conference in October 2016">
            </div>
            <figcaption>
              <div>
                <span>June 3, 2017</span>
                <h4>Blog Post 3</h4>
              </div>
            </figcaption>
          </figure></a>
          <a class="directory__link--other-row"><figure class="directory__figure--other-row">
            <div class="directory__image-container">
              <img src="<?php bloginfo('stylesheet_directory'); ?>/images/the-latest/blog-posts/pablo.png" alt="Kanye West performing in Atlanta as part of his 2016 Saint Pablo Tour">
            </div>
            <figcaption>
              <div>
                <span>June 2, 2017</span>
                <h4>Blog Post 2</h4>
              </div>
            </figcaption>
          </figure></a>
        </div>

        <div class="directory__row--last">
          <a class="directory__link--other-row"><figure class="directory__figure--other-row">
            <div class="directory__image-container">
              <img src="<?php bloginfo('stylesheet_directory'); ?>/images/the-latest/blog-posts/sullivan's.png" alt="My golden retriever enjoying a great Saturday at Sullivan's Island">
            </div>
            <figcaption>
              <div>
                <span>June 1, 2017</span>
                <h4>Blog Post 1</h4>
              </div>
            </figcaption>
          </figure></a>

      </div>

    </section>


<?php get_footer(); ?>

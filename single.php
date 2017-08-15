<!-- ==========================================
BLOG POST
========================================== -->

<?php get_header(); ?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  
<!-- HERO -->

    <section class="hero-section">
      <div class="headline-container">
        <span><?php the_time( get_option( 'date_format' ) ); ?></span>
        <h1><?php the_title(); ?></h1>
      </div>
    </section>


<!-- CONTENT SECTION -->

    <section class="content-section">

      <div class="push-pin-container">
        <img class="push-pin" src="<?php bloginfo('stylesheet_directory'); ?>/images/the-latest/push-pin.png" alt="Push pin">
      </div>

      <figure class="share-figure">
        <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_post_thumbnail_alt(); ?>">
        <figcaption>
          <div class="blog-social-media-container">
            <ul class="blog-social-media">
              <li class="blog-social-media__item"><a><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              <li class="blog-social-media__item"><a><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
              <li class="blog-social-media__item"><a><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </figcaption>
      </figure>

      <div class="blog-post-container">
        <?php the_content(); ?>
      </div>

    <?php endwhile; else : endif; ?>

      <div class="directory-nav-container">
        <h4>Recent</h4>
        <div class="directory-nav-border"></div>
        <div class="directory-nav">
          <div class="directory-nav__post">
            <img src="images/the-latest/blog-posts/the-iron-yard.png" alt="Blog Post 7">
            <article>
              <span>June 7, 2017</span>
              <h5>Blog Post 7</h5>
            </article>
          </div>
          <div class="directory-nav__post">
            <img src="images/the-latest/blog-posts/stax.png" alt="Blog Post 6">
            <article>
              <span>June 6, 2017</span>
              <h5>Blog Post 6</h5>
            </article>
          </div>
          <div class="directory-nav__post">
            <img src="images/projects/coffee-app/mockups/coffeeapp_mockups_Voyage.png" alt="Blog Post 5">
            <article>
              <span>June 5, 2017</span>
              <h5>Blog Post 5</h5>
            </article>
          </div>
          <div class="directory-nav__post">
            <img src="images/the-latest/blog-posts/rocket.png" alt="Blog Post 4">
            <article>
              <span>June 4, 2017</span>
              <h5>Blog Post 4</h5>
            </article>
          </div>
          <div class="directory-nav__post">
            <img src="images/the-latest/blog-posts/a3c.png" alt="Blog Post 3">
            <article>
              <span>June 3, 2017</span>
              <h5>Blog Post 3</h5>
            </article>
          </div>
          <div class="directory-nav__post">
            <img src="images/the-latest/blog-posts/pablo.png" alt="Blog Post 2">
            <article>
              <span>June 2, 2017</span>
              <h5>Blog Post 2</h5>
            </article>
          </div>
          <div class="directory-nav__post">
            <img src="images/the-latest/blog-posts/sullivan's.png" alt="Blog Post 1">
            <article>
              <span>June 1, 2017</span>
              <h5>Blog Post 1</h5>
            </article>
          </div>
        </div>
      </div>
    </section>


<?php get_footer(); ?>

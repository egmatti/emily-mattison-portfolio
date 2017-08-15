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

          <?php @include 'directory-nav-query.php'; ?>

        </div>
      </div>
    </section>


<?php get_footer(); ?>

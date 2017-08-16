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

        <?php

          $args = array (
            'post_type' => 'post',
            'posts_per_page' => -1
          );

          $the_latest_query = new WP_Query($args);

        ?>

        <?php

          if ( $the_latest_query->have_posts() ) : while ( $the_latest_query->have_posts() ) :  $the_latest_query->the_post();

            if ( $the_latest_query->current_post == 0 ) {  // first post

        ?>
              <div class="directory__row--first">
                <a href="<?php the_permalink(); ?>" class="directory__link--first-row"><figure class="directory__figure--first-row">
                  <div class="push-pin-container">
                    <img class="push-pin" src="<?php bloginfo('stylesheet_directory'); ?>/images/the-latest/push-pin.png" alt="Push pin">
                  </div>
                    <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_post_thumbnail_alt(); ?>">
                  <figcaption>
                    <div>
                      <span><?php the_time( get_option( 'date_format' ) ); ?></span>
                      <h2><?php the_title(); ?></h2>
                    </div>
                  </figcaption>
                </figure></a>
              </div>

        <?php

            } elseif ( $the_latest_query->current_post == 1 ) {  // second post

        ?>

            <div class="directory__row--second">
              <a href="<?php the_permalink(); ?>" class="directory__link--second-row"><figure class="directory__figure--second-row">
                <div class="directory__image-container">
                  <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_post_thumbnail_alt(); ?>">
                </div>
                <figcaption>
                  <div>
                    <span><?php the_time( get_option( 'date_format' ) ); ?></span>
                    <h3><?php the_title(); ?></h3>
                  </div>
                </figcaption>
              </figure></a>

        <?php

            } elseif ( $the_latest_query->current_post == 2 ) {  // third post

        ?>

            <a href="<?php the_permalink(); ?>" class="directory__link--second-row"><figure class="directory__figure--second-row">
              <div class="directory__image-container">
                <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_post_thumbnail_alt(); ?>">
              </div>
              <figcaption>
                <div>
                  <span><?php the_time( get_option( 'date_format' ) ); ?></span>
                  <h3><?php the_title(); ?></h3>
                </div>
              </figcaption>
            </figure></a>
          </div>

          <div class="directory__row--other">

        <?php

            } else {

        ?>

            <a href="<?php the_permalink(); ?>" class="directory__link--other-row"><figure class="directory__figure--other-row">
              <div class="directory__image-container">
                <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_post_thumbnail_alt(); ?>">
              </div>
              <figcaption>
                <div>
                  <span><?php the_time( get_option( 'date_format' ) ); ?></span>
                  <h4><?php the_title(); ?></h4>
                </div>
              </figcaption>
            </figure></a>

        <?php

            }

          endwhile; endif; wp_reset_postdata();

        ?>

        </div>

      </div>
    </section>
    

<?php get_footer(); ?>

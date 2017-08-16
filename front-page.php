<!-- ==========================================
HOME PAGE
========================================== -->

<?php
/*
  Template Name: Home Page
*/
?>

<?php get_header(); ?>


<!-- HERO -->

    <section class="hero-section">
    </section>


<!-- ABOUT SECTION -->

    <section class="about-section">
      <div>
        <h1 class="gray-headline center">Show Off Your Good Side</h1>
        <p class="large-body-text center">I'm a graphic designer and web developer with a passion for helping brands and artists show off the things that make them great.</p>
        <p class="large-body-text center">What started off as a willingness to help the organizations I was a part of in college create fun posters and brochures has transformed into a life-long love of design and a desire to help others embrace their identities in cool, visually appealing ways.</p>
        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/home/mirror-and-lipstick.png" alt="Compact mirror and lipstick"/>
      </div>
    </section>


<!-- BLOG SECTION -->

    <section class="blog-section">

      <div id="blog-div" class="left-column">
        <div class="blog-slider-for">

          <?php

            $args = array(
              'post_type' => 'post',
              'posts_per_page' => '10'
            );

            $slider_for_query = new WP_Query($args);

          ?>

          <?php if ( $slider_for_query->have_posts() ) : while ( $slider_for_query->have_posts() ) : $slider_for_query->the_post(); ?>

            <div class="blog-slider-for__post">
              <figure class="share-figure">
                <?php if ( has_post_thumbnail() ) : ?>
                    <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_post_thumbnail_alt(); ?>">
                <?php endif; ?>
                <figcaption>
                  <div class="share-container">
                    <span>Share</span>
                  </div>
                  <div class="blog-social-media-container">
                    <ul class="blog-social-media">
                      <li class="blog-social-media__item"><a href="<?php the_field( 'facebook_share', false ); ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                      <li class="blog-social-media__item"><a href="<?php the_field( 'pinterest_share', false ) ?>" target="_blank"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                      <li class="blog-social-media__item"><a href="<?php the_field( 'twitter_share', false ); ?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    </ul>
                  </div>
                </figcaption>
              </figure>
              <article class="blog-post-container">
                <span><?php the_time( get_option( 'date_format' ) ); ?></span>
                <h3><?php the_title(); ?></h3>
                <?php the_content(); ?>
              </article>
            </div>

          <?php endwhile; endif; wp_reset_postdata(); ?>

        </div>
      </div>

      <div id="blog-column" class="right-column">
        <div class="blog-slider-nav directory-nav">

          <?php

            $args = array(
              'post_type' => 'post',
              'posts_per_page' => '10'
            );

            $slider_nav_query = new WP_Query($args);

          ?>

          <?php if ( $slider_nav_query->have_posts() ) : while ( $slider_nav_query->have_posts() ) : $slider_nav_query->the_post(); ?>

            <div class="blog-slider-nav__post directory-nav__post">
              <?php if ( has_post_thumbnail() ) : ?>
                  <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_post_thumbnail_alt(); ?>">
              <?php endif; ?>
              <article>
                <span><?php the_time( get_option( 'date_format' ) ); ?></span>
                <h5><?php the_title(); ?></h5>
              </article>
            </div>

          <?php endwhile; endif; wp_reset_postdata(); ?>

        </div>
      </div>
    </section>


<!-- INSTAGRAM SECTION -->

    <section class="instagram-section">

      <div class=instagram-div>
        <div class="instagram-slider-for--desktop">

          <?php

            $args = array(
              'post_type' => 'instagram_post',
              'posts_per_page' => '12'
            );

            $instagram_desktop_query = new WP_Query($args);

          ?>

          <?php if ( $instagram_desktop_query->have_posts() ) : while ( $instagram_desktop_query->have_posts() ) : $instagram_desktop_query->the_post(); ?>

            <div class="instagram-slider-for__post">
              <?php the_content(); ?><img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"/></a>
            </div>

          <?php endwhile; endif; wp_reset_postdata(); ?>

        </div>

        <div class="instagram-slider-for--tablet">

          <?php

            $args = array(
              'post_type' => 'instagram_post',
              'posts_per_page' => '12'
            );

            $instagram_tablet_query = new WP_Query($args);

          ?>

          <?php if ( $instagram_tablet_query->have_posts() ) : while ( $instagram_tablet_query->have_posts() ) : $instagram_tablet_query->the_post(); ?>

            <div class="instagram-slider-for__post">
              <?php the_content(); ?><img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"/></a>
            </div>

          <?php endwhile; endif; wp_reset_postdata(); ?>

        </div>

        <div class="instagram-slider-for--mobile">

          <?php

            $args = array(
              'post_type' => 'instagram_post',
              'posts_per_page' => '12'
            );

            $instagram_mobile_query = new WP_Query($args);

          ?>

          <?php if ( $instagram_mobile_query->have_posts() ) : while ( $instagram_mobile_query->have_posts() ) : $instagram_mobile_query->the_post(); ?>

            <div class="instagram-slider-for__post">
              <?php the_content(); ?><img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"/></a>
            </div>

          <?php endwhile; endif; wp_reset_postdata(); ?>

        </div>
      </div>

      <div class="button-container">
        <a href="https://www.instagram.com/emilymattisondesign/" target="_blank"><div class="button button-instagram">
          <span>Follow @emilymattisondesign on Instagram</span>
        </div></a>
      </div>

      <div class="button-container--mobile">
        <div class="button button-instagram">
          <span>Follow on Instagram</span>
        </div>
      </div>

    </section>


<!-- CONTACT SECTION -->

    <?php @include 'contact-form.php'; ?>


<?php get_footer(); ?>

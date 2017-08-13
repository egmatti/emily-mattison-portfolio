<!-- ==========================================
FRONT PAGE
========================================== -->

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

          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <div class="blog-slider-for__post">
              <figure class="share-figure">
                <img src="images/the-latest/blog-posts/the-iron-yard.png" alt="Blog Post 7">
                <figcaption>
                  <div class="share-container">
                    <span>Share</span>
                  </div>
                  <div class="blog-social-media-container">
                    <ul class="blog-social-media">
                      <li class="blog-social-media__item"><a><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                      <li class="blog-social-media__item"><a><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                      <li class="blog-social-media__item"><a><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    </ul>
                  </div>
                </figcaption>
              </figure>
              <article class="blog-post-container">
                <span>June 7, 2017</span>
                <h3><?php the_title(); ?></h3>
                <p><?php the_content(); ?></p>
              </article>
            </div>

          <?php endwhile; else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
          <?php endif; ?>

        </div>
      </div>

      <div id="blog-column" class="right-column">
        <div class="blog-slider-nav directory-nav">

          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <div class="blog-slider-nav__post directory-nav__post">
              <img src="images/the-latest/blog-posts/the-iron-yard.png" alt="Blog Post 7">
              <article>
                <span>June 7, 2017</span>
                <h5><?php the_title(); ?></h5>
              </article>
            </div>

          <?php endwhile; else : ?>
  	         <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
          <?php endif; ?>

        </div>
      </div>
    </section>


<?php get_footer(); ?>

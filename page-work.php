<!-- ==========================================
WORK PAGE
========================================== -->

<?php
/*
  Template Name: Work Page
*/
?>


<?php get_header(); ?>


<!-- HERO -->

    <section class="hero-section">
      <div class="headline-container">
        <h1>Work</h1>
      </div>
    </section>


<!-- CONTENT SECTION -->

    <section class="content-section">

      <div class="directory-nav-container">
        <h4>Recent</h4>
        <div class="directory-nav-border"></div>
        <div class="directory-nav">
          <a href="<?php echo get_page_link( get_page_by_title( "Ballad" )->ID ); ?>"><div class="directory-nav__post">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/work/projects/ballad.png" alt="ballad app">
            <article>
              <h5>ballad App</h5>
            </article>
          </div></a>
          <a href="<?php echo get_page_link( get_page_by_title( "Dog Adoption" )->ID ); ?>"><div class="directory-nav__post">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/work/projects/dog-adoption.png" alt="Dog adoption website">
            <article>
              <h5>Dog Adoption Website</h5>
            </article>
          </div></a>
          <a href="<?php echo get_page_link( get_page_by_title( "Bookshelf" )->ID ); ?>"><div class="directory-nav__post">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/work/projects/bookshelf.png" alt="Bookshelf app">
            <article>
              <h5>Bookshelf App</h5>
            </article>
          </div></a>
          <a href="<?php echo get_page_link( get_page_by_title( "Coffee App" )->ID ); ?>"><div class="directory-nav__post">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/work/projects/coffee-app.png" alt="Coffee app">
            <article>
              <h5>Coffee App</h5>
            </article>
          </div></a>
          <a href="<?php echo get_page_link( get_page_by_title( "Dogtooth Cover Art" )->ID ); ?>"><div class="directory-nav__post">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/work/projects/dogtooth-cover-art.png" alt="Dogtooth cover art">
            <article>
              <h5>Dogtooth<br>Cover Art</h5>
            </article>
          </div></a>
          <a href="<?php echo get_page_link( get_page_by_title( "TopTix" )->ID ); ?>"><div class="directory-nav__post">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/work/projects/toptix-proposal.png" alt="TopTix sales proposals">
            <article>
              <h5>TopTix Marketing</h5>
            </article>
          </div></a>
          <a href="<?php echo get_page_link( get_page_by_title( "Stillwater Shirt" )->ID ); ?>"><div class="directory-nav__post">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/work/projects/stillwater-shirt.png" alt="Stillwater T-Shirt">
            <article>
              <h5>Stillwater T-Shirt</h5>
            </article>
          </div></a>
          <a href="<?php echo get_page_link( get_page_by_title( "Jamaica Stickers" )->ID ); ?>"><div class="directory-nav__post">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/work/projects/jamaica-stickers.png" alt="Jamaica stickers">
            <article>
              <h5>Jamaica Stickers</h5>
            </article>
          </div></a>
          <a href="<?php echo get_page_link( get_page_by_title( "Dogs Booklet" )->ID ); ?>"><div class="directory-nav__post">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/work/projects/dogs-booklet.png" alt="Dogs! booklet">
            <article>
              <h5>Dogs! Booklet</h5>
            </article>
          </div></a>
          <a href="<?php echo get_page_link( get_page_by_title( "Chronicle" )->ID ); ?>"><div class="directory-nav__post">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/work/projects/chronicle-magazine.png" alt="Chronicle Magazine">
            <article>
              <h5>Chronicle Magazine</h5>
            </article>
          </div></a>
        </div>
      </div>

      <div class="directory">
        <div class="directory__row--first">
          <a href="<?php echo get_page_link( get_page_by_title( "Ballad" )->ID ); ?>" class="directory__link--first-row"><figure class="directory__figure--first-row">
              <img src="<?php bloginfo('stylesheet_directory'); ?>/images/work/projects/ballad.png" alt="ballad app my teammates and I designed and built while at The Iron Yard">
            <figcaption>
              <div>
                <h2>ballad App</h2>
              </div>
            </figcaption>
          </figure></a>
        </div>

        <div class="directory__row--second">
          <a href="<?php echo get_page_link( get_page_by_title( "Dog Adoption" )->ID ); ?>" class="directory__link--second-row"><figure class="directory__figure--second-row">
              <img src="<?php bloginfo('stylesheet_directory'); ?>/images/work/projects/dog-adoption.png" alt="Dog adoption website my teammates and I designed while at The Iron Yard">
            <figcaption>
              <div>
                <h3>Dog Adoption Website</h3>
              </div>
            </figcaption>
          </figure></a>
          <a href="<?php echo get_page_link( get_page_by_title( "Bookshelf" )->ID ); ?>" class="directory__link--second-row"><figure class="directory__figure--second-row">
            <div class="directory__image-container">
              <img src="<?php bloginfo('stylesheet_directory'); ?>/images/work/projects/bookshelf.png" alt="Bookshelf app I designed while at The Iron Yard">
            </div>
            <figcaption>
              <div>
                <h3>Bookshelf App</h3>
              </div>
            </figcaption>
          </figure></a>
        </div>

        <div class="directory__row--other">
          <a href="<?php echo get_page_link( get_page_by_title( "Coffee App" )->ID ); ?>" class="directory__link--other-row"><figure class="directory__figure--other-row">
              <img src="<?php bloginfo('stylesheet_directory'); ?>/images/work/projects/coffee-app.png" alt="Coffee app I designed while at The Iron Yard">
            <figcaption>
              <div>
                <h4>Coffee App</h4>
              </div>
            </figcaption>
          </figure></a>
          <a href="<?php echo get_page_link( get_page_by_title( "Dogtooth Cover Art" )->ID ); ?>" class="directory__link--other-row"><figure class="directory__figure--other-row">
              <img src="<?php bloginfo('stylesheet_directory'); ?>/images/work/projects/dogtooth-cover-art.png" alt="Album artwork I designed for hip hop producer Dogtooth">
            <figcaption>
              <div>
                <h4>Dogtooth Cover Art</h4>
              </div>
            </figcaption>
          </figure></a>
          <a href="<?php echo get_page_link( get_page_by_title( "TopTix" )->ID ); ?>" class="directory__link--other-row"><figure class="directory__figure--other-row">
            <div class="directory__image-container">
              <img src="<?php bloginfo('stylesheet_directory'); ?>/images/work/projects/toptix-proposal.png" alt="An example of the proposals I designed for my former company, TopTix">
            </div>
            <figcaption>
              <div>
                <h4>TopTix Marketing</h4>
              </div>
            </figcaption>
          </figure></a>
        </div>

        <div class="directory__row--other">
          <a href="<?php echo get_page_link( get_page_by_title( "Stillwater Shirt" )->ID ); ?>" class="directory__link--other-row"><figure class="directory__figure--other-row">
            <div class="directory__image-container">
              <img src="<?php bloginfo('stylesheet_directory'); ?>/images/work/projects/stillwater-shirt.png" alt="The t-shirt I designed based on the fictional band Stillwater in my Graphic Communications class">
            </div>
            <figcaption>
              <div>
                <h4>Stillwater T-Shirt</h4>
              </div>
            </figcaption>
          </figure></a>
          <a href="<?php echo get_page_link( get_page_by_title( "Jamaica Stickers" )->ID ); ?>" class="directory__link--other-row"><figure class="directory__figure--other-row">
            <div class="directory__image-container">
              <img src="<?php bloginfo('stylesheet_directory'); ?>/images/work/projects/jamaica-stickers.png" alt="The Jamaica stickers that I designed in my Graphic Communications class">
            </div>
            <figcaption>
              <div>
                <h4>Jamaica Stickers</h4>
              </div>
            </figcaption>
          </figure></a>
          <a href="<?php echo get_page_link( get_page_by_title( "Dogs Booklet" )->ID ); ?>" class="directory__link--other-row"><figure class="directory__figure--other-row">
            <div class="directory__image-container">
              <img src="<?php bloginfo('stylesheet_directory'); ?>/images/work/projects/dogs-booklet.png" alt="The Dogs! booklet that I designed in my Graphic Communications class">
            </div>
            <figcaption>
              <div>
                <h4>Dogs! Booklet</h4>
              </div>
            </figcaption>
          </figure></a>
        </div>

        <div class="directory__row--last">
          <a href="<?php echo get_page_link( get_page_by_title( "Chronicle" )->ID ); ?>" class="directory__link--other-row"><figure class="directory__figure--other-row">
            <div class="directory__image-container">
              <img src="<?php bloginfo('stylesheet_directory'); ?>/images/work/projects/chronicle-magazine.png" alt="Chronicle Magazine Spring 2014 and marketing collateral">
            </div>
            <figcaption>
              <div>
                <h4>Chronicle Magazine</h4>
              </div>
            </figcaption>
          </figure></a>
        </div>

      </div>

    </section>


<?php get_footer(); ?>

<!-- ==========================================
DIRECTORY NAV QUERY
========================================== -->

<?php

  $args = array(
    'post_type' => 'post',
    'posts_per_page' => '10'
  );
  
  $directory_nav_query = new WP_Query($args);

?>

<?php if ( $directory_nav_query->have_posts() ) : while ( $directory_nav_query->have_posts() ) : $directory_nav_query->the_post(); ?>

  <a href="<?php the_permalink(); ?>"><div class="directory-nav__post">
    <?php if ( has_post_thumbnail() ) : ?>
        <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_post_thumbnail_alt(); ?>">
    <?php endif; ?>
    <article>
      <span><?php the_time( get_option( 'date_format' ) ); ?></span>
      <h5><?php the_title(); ?></h5>
    </article>
  </div></a>

<?php endwhile; endif; wp_reset_postdata(); ?>

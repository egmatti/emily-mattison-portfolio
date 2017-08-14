<!-- ==========================================
FUNCTIONS
========================================== -->

<?php

function emily_mattison_portfolio_styles() {
  wp_enqueue_style('style_css', get_template_directory_uri() . '/style.css');
}

add_action('wp_enqueue_scripts', 'emily_mattison_portfolio_styles');

function emily_mattison_portfolio_js() {
  wp_enqueue_script('fontawesome_js', 'https://use.fontawesome.com/ab03b8820e.js', '', '', false);

  wp_enqueue_script('velocity_js', get_template_directory_uri() . '/js/velocity.min.js', '', '', true);

  wp_enqueue_script('scrollreveal_js', get_template_directory_uri() . '/js/scrollreveal.min.js', '', '', true);

  wp_enqueue_script('slick_js', get_template_directory_uri() . '/js/slick.js', array('jquery'), '', true);

  wp_enqueue_script('script_js', get_template_directory_uri() . '/js/script.js', array('jquery', 'velocity_js'), '', true);

  if( is_front_page() )
  {
      wp_enqueue_script('home_js', get_template_directory_uri() . '/js/home.js', array('jquery', 'fontawesome_js', 'velocity_js', 'scrollreveal_js', 'slick_js', 'script_js'), '', false);
  }

  if( is_page_template('page-about.php') )
  {
      wp_enqueue_script('about_js', get_template_directory_uri() . '/js/about.js', array('jquery', 'fontawesome_js', 'velocity_js', 'scrollreveal_js', 'slick_js', 'script_js'), '', false);
  }
}

add_action('wp_enqueue_scripts', 'emily_mattison_portfolio_js');

add_theme_support( 'post-thumbnails' );

?>

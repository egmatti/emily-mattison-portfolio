<?php

add_theme_support( 'menus' );

function register_theme_menus() {
  register_nav_menus(
    array (
      'primary-menu' => __( 'Primary Menu' )
    )
  );
}

add_action( 'init', 'register_theme_menus' );

add_theme_support( 'post-thumbnails' );

function emily_mattison_portfolio_styles() {
  wp_enqueue_style('style_css', get_template_directory_uri() . '/style.css');
}

add_action('wp_enqueue_scripts', 'emily_mattison_portfolio_styles');

function emily_mattison_portfolio_js() {
  wp_enqueue_script('fontawesome_js', 'https://use.fontawesome.com/ab03b8820e.js', '', '', false);

  wp_enqueue_script('velocity_js', get_template_directory_uri() . '/js/velocity.min.js', array('jquery'), '', true);

  wp_enqueue_script('scrollreveal_js', get_template_directory_uri() . '/js/scrollreveal.min.js', '', '', true);

  wp_enqueue_script('slick_js', get_template_directory_uri() . '/js/slick.js', array('jquery'), '', true);

  wp_enqueue_script('script_js', get_template_directory_uri() . '/js/script.js', array('jquery', 'velocity_js'), '', true);

  if( is_front_page() )
  {
      wp_enqueue_script('home_js', get_template_directory_uri() . '/js/home.js', array('jquery', 'fontawesome_js', 'velocity_js', 'scrollreveal_js', 'slick_js', 'script_js'), '', false);
  }

  if( is_home() )
  {
      wp_enqueue_script('the-latest_js', get_template_directory_uri() . '/js/the-latest.js', array('jquery', 'fontawesome_js', 'velocity_js', 'scrollreveal_js', 'slick_js', 'script_js'), '', false);
  }

  if( is_page_template('page-about.php') )
  {
      wp_enqueue_script('about_js', get_template_directory_uri() . '/js/about.js', array('jquery', 'fontawesome_js', 'velocity_js', 'scrollreveal_js', 'slick_js', 'script_js'), '', false);
  }

  if( is_page_template('page-ballad.php') )
  {
      wp_enqueue_script('ballad_js', get_template_directory_uri() . '/js/ballad.js', array('jquery', 'fontawesome_js', 'velocity_js', 'scrollreveal_js', 'slick_js', 'script_js'), '', false);
  }

  if( is_page_template('page-bookshelf.php') )
  {
      wp_enqueue_script('bookshelf_js', get_template_directory_uri() . '/js/bookshelf.js', array('jquery', 'fontawesome_js', 'velocity_js', 'scrollreveal_js', 'slick_js', 'script_js'), '', false);
  }

  if( is_page_template('page-chronicle.php') )
  {
      wp_enqueue_script('chronicle_js', get_template_directory_uri() . '/js/chronicle.js', array('jquery', 'fontawesome_js', 'velocity_js', 'scrollreveal_js', 'slick_js', 'script_js'), '', false);
  }

  if( is_page_template('page-coffee-app.php') )
  {
      wp_enqueue_script('coffee-app_js', get_template_directory_uri() . '/js/coffee-app.js', array('jquery', 'fontawesome_js', 'velocity_js', 'scrollreveal_js', 'slick_js', 'script_js'), '', false);
  }

  if( is_page_template('page-dog-adoption.php') )
  {
      wp_enqueue_script('dog-adoption_js', get_template_directory_uri() . '/js/dog-adoption.js', array('jquery', 'fontawesome_js', 'velocity_js', 'scrollreveal_js', 'slick_js', 'script_js'), '', false);
  }

  if( is_page_template('page-dogs-booklet.php') )
  {
      wp_enqueue_script('dogs-booklet_js', get_template_directory_uri() . '/js/dogs-booklet.js', array('jquery', 'fontawesome_js', 'velocity_js', 'scrollreveal_js', 'slick_js', 'script_js'), '', false);
  }

  if( is_page_template('page-dogtooth-cover-art.php') )
  {
      wp_enqueue_script('dogtooth-cover-art_js', get_template_directory_uri() . '/js/dogtooth-cover-art.js', array('jquery', 'fontawesome_js', 'velocity_js', 'scrollreveal_js', 'slick_js', 'script_js'), '', false);
  }

  if( is_page_template('page-jamaica-stickers.php') )
  {
      wp_enqueue_script('jamaica-stickers_js', get_template_directory_uri() . '/js/jamaica-stickers.js', array('jquery', 'fontawesome_js', 'velocity_js', 'scrollreveal_js', 'slick_js', 'script_js'), '', false);
  }

  if( is_page_template('page-stillwater-shirt.php') )
  {
      wp_enqueue_script('stillwater-shirt_js', get_template_directory_uri() . '/js/stillwater-shirt.js', array('jquery', 'fontawesome_js', 'velocity_js', 'scrollreveal_js', 'slick_js', 'script_js'), '', false);
  }

  if( is_page_template('page-toptix.php') )
  {
      wp_enqueue_script('toptix_js', get_template_directory_uri() . '/js/toptix.js', array('jquery', 'fontawesome_js', 'velocity_js', 'scrollreveal_js', 'slick_js', 'script_js'), '', false);
  }

  if( is_page_template('page-work.php') )
  {
      wp_enqueue_script('work_js', get_template_directory_uri() . '/js/work.js', array('jquery', 'fontawesome_js', 'velocity_js', 'scrollreveal_js', 'slick_js', 'script_js'), '', false);
  }
}

add_action('wp_enqueue_scripts', 'emily_mattison_portfolio_js');

?>

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

  global $post;

  if( is_page() || is_single() )
  {
    switch($post->post_name) // post_name is the post slug which is more consistent for matching to here
    {
        case 'about':
            wp_enqueue_script('about_js', get_template_directory_uri() . '/js/about.js', array('jquery', 'fontawesome_js', 'velocity_js', 'scrollreveal_js', 'slick_js', 'script_js'), '', true);
            break;
        case 'ballad':
            wp_enqueue_script('ballad_js', get_template_directory_uri() . '/js/ballad.js', array('jquery', 'fontawesome_js', 'velocity_js', 'scrollreveal_js', 'slick_js', 'script_js'), '', true);
            break;
        case 'bookshelf':
            wp_enqueue_script('bookshelf_js', get_template_directory_uri() . '/js/bookshelf.js', array('jquery', 'fontawesome_js', 'velocity_js', 'scrollreveal_js', 'slick_js', 'script_js'), '', true);
            break;
        case 'chronicle':
            wp_enqueue_script('chronicle_js', get_template_directory_uri() . '/js/chronicle.js', array('jquery', 'fontawesome_js', 'velocity_js', 'scrollreveal_js', 'slick_js', 'script_js'), '', true);
            break;
        case 'coffee-app':
            wp_enqueue_script('coffee-app_js', get_template_directory_uri() . '/js/coffee-app.js', array('jquery', 'fontawesome_js', 'velocity_js', 'scrollreveal_js', 'slick_js', 'script_js'), '', true);
            break;
        case 'dog-adoption':
            wp_enqueue_script('dog-adoption_js', get_template_directory_uri() . '/js/dog-adoption.js', array('jquery', 'fontawesome_js', 'velocity_js', 'scrollreveal_js', 'slick_js', 'script_js'), '', true);
            break;
        case 'dogs-booklet':
            wp_enqueue_script('dogs-booklet_js', get_template_directory_uri() . '/js/dogs-booklet.js', array('jquery', 'fontawesome_js', 'velocity_js', 'scrollreveal_js', 'slick_js', 'script_js'), '', true);
            break;
        case 'dogtooth-cover-art':
            wp_enqueue_script('dogtooth-cover-art_js', get_template_directory_uri() . '/js/dogtooth-cover-art.js', array('jquery', 'fontawesome_js', 'velocity_js', 'scrollreveal_js', 'slick_js', 'script_js'), '', true);
            break;
        case 'jamaica-stickers':
            wp_enqueue_script('jamaica-stickers_js', get_template_directory_uri() . '/js/jamaica-stickers.js', array('jquery', 'fontawesome_js', 'velocity_js', 'scrollreveal_js', 'slick_js', 'script_js'), '', true);
            break;
        case 'stillwater-shirt':
            wp_enqueue_script('stillwater-shirt_js', get_template_directory_uri() . '/js/stillwater-shirt.js', array('jquery', 'fontawesome_js', 'velocity_js', 'scrollreveal_js', 'slick_js', 'script_js'), '', true);
            break;
        case 'the-latest':
            wp_enqueue_script('the-latest_js', get_template_directory_uri() . '/js/the-latest.js', array('jquery', 'fontawesome_js', 'velocity_js', 'scrollreveal_js', 'slick_js', 'script_js'), '', true);
            break;
        case 'toptix':
            wp_enqueue_script('toptix_js', get_template_directory_uri() . '/js/toptix.js', array('jquery', 'fontawesome_js', 'velocity_js', 'scrollreveal_js', 'slick_js', 'script_js'), '', true);
            break;
        case 'work':
            wp_enqueue_script('work_js', get_template_directory_uri() . '/js/work.js', array('jquery', 'fontawesome_js', 'velocity_js', 'scrollreveal_js', 'slick_js', 'script_js'), '', true);
            break;
        case 'blog-post':
            wp_enqueue_script('blog-post_js', get_template_directory_uri() . '/js/blog-post.js', array('jquery', 'fontawesome_js', 'velocity_js', 'scrollreveal_js', 'slick_js', 'script_js'), '', true);
            break;
    }
  }
}

add_action('wp_enqueue_scripts', 'emily_mattison_portfolio_js');

add_theme_support( 'post-thumbnails' );

?>

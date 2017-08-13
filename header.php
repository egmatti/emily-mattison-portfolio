<!-- ==========================================
HEADER
========================================== -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>

    <?php wp_head(); ?>

<!-- FAVICON -->

    <link rel="apple-touch-icon" sizes="57x57" href="images/favicon.ico/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="images/favicon.ico/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/favicon.ico/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/favicon.ico/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/favicon.ico/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/favicon.ico/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="images/favicon.ico/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/favicon.ico/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon.ico/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="images/favicon.ico/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon.ico/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="images/favicon.ico/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.ico/favicon-16x16.png">
    <link rel="manifest" href="images/favicon.ico/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="images/favicon.ico/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
  </head>
  <body id="home-page">


<!-- HEADER -->

    <header>
      <a href="<?php bloginfo('url'); ?>"><img class="main-nav-logo" src="<?php bloginfo('stylesheet_directory'); ?>/images/logo-black.svg" alt="<?php bloginfo('name'); ?>"></a>
      <ul class="main-nav">
        <li class="main-nav__item--first"><a href="about.html">About</a></li>
        <li class="main-nav__item"><a href="work.html">Work</a></li>
        <li class="main-nav__item--last"><a href="the-latest.html"><span>the   </span>Latest</a></li>
      </ul>

      <i class="main-nav-mobile-icon fa fa-bars" aria-hidden="true"></i>
      <div class="box-shadow-cover"></div>
      <div class="main-nav-mobile-dropdown">
        <ul class="main-nav-mobile">
          <li class="main-nav-mobile__item"><a href="about.html">About</a></li>
          <li class="main-nav-mobile__item"><a href="work.html">Work</a></li>
          <li class="main-nav-mobile__item--last"><a href="the-latest.html"><span>the   </span>Latest</a></li>
        </ul>
      </div>
    </header>

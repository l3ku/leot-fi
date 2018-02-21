<?php
/**
 * File for displaying header content.
 *
 * @package portfolio
 */
?>

<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
  <head>
    <title>
      <?php if ( !empty( wp_title( '', false ) ) ) echo wp_title( '', false ); ?>
    </title>

    <!-- Black browser bar on mobile -->
    <meta name="theme-color" content="black">
    <meta name="msapplication-navbutton-color" content="black">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale = 1.0,
    maximum-scale=1.0, user-scalable=no" />
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
    <header class="header-container header-image container-fluid"
    style="background-image: url(<?php header_image(); ?>)">

      <!-- Header title and description -->
      <div id="header-title-container">
        <h1 id="header-title">
          <a href="<?php echo get_option('home'); ?>">
            <?php bloginfo('name') ?>
          </a>
        </h1>
        <div id="header-description">
          <?php bloginfo('description'); ?>
        </div><!-- .header-description -->
      </div><!-- .header-title-container -->

      <!-- Header nav menu -->
      <nav class="navbar">
        <div class="container nav-container">
          <?php
          wp_nav_menu(array(
              'theme_location' => 'primary',
              'container' => false,
              'menu_class' => 'nav navbar-nav'));
          ?>
        </div><!-- .container .nav-container -->
      </nav>

    </header>

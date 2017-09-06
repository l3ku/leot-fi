<?php
/**
* @package portfolio
*/
?>

<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
    <title><?php if (!empty(wp_title('', false))) { echo wp_title('', false); } ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="profile" href="http://gmpg.org/xfn/11">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="header-container header-image container-fluid"
    style="background-image: url(<?php header_image(); ?>)">
        <div id="header-title-container">
            <h1 id="header-title">
                <a href="<?php echo get_option('home'); ?>"><?php bloginfo('name') ?></a>
            </h1>
            <div id="header-description">
                <?php bloginfo('description'); ?>
            </div><!-- .description -->
        </div><!-- .header-title-container -->
        <!-- The header nav menu -->
        <nav class="navbar">
            <div id="container nav-container">
                <?php wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'container' => false,
                    'menu_class' => 'nav navbar-nav')); ?>
            </div>
        </nav>
    </header>

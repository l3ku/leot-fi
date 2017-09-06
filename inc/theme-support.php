<?php
/*
    @package portfolio
*/
add_theme_support('custom-header', array(
    'default-image' => get_template_directory_uri() . '/images/apple-camera-desk-office.jpg',
));
add_theme_support('custom-logo');
add_theme_support('post-thumbnails');

/* ACTIVATE NAVMENU OPTION */
function portfolio_register_nav_menus() {
    register_nav_menu('header-menu', __('The main navigation menu which appears in the top right corner', 'leotoikka'));
}
add_action('after_setup_theme', 'portfolio_register_nav_menus');

add_filter( 'the_excerpt', 'shortcode_unautop');
add_filter( 'the_excerpt', 'do_shortcode');



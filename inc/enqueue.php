<?php
/*
    @package portfolio
*/

/* =================================
ENQUEUE FRONTEND STYLES AND SCRIPTS
================================= */
function portfolio_enqueue_scripts() {
    // Google fonts
    wp_enqueue_style('google_fonts', 'https://fonts.googleapis.com/css?family=Dancing+Script|Raleway', null, 'all');
    // Bootstrap css
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', null, 'all');
    // Frontend custom css
    wp_enqueue_style('frontend_custom', get_template_directory_uri() . '/assets/css/frontend.css', null, 'all');

    // Bootstrap js, requires jquery to work properly
    wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'portfolio_enqueue_scripts');

/* =================================
ENQUEUE ADMIN STYLES AND SCRIPTS
================================= */
function portfolio_enqueue_admin_scripts() {
    wp_enqueue_media();

    // Localize and enqueue admin JavaScript
    wp_register_script('portfolio-admin-script', get_template_directory_uri() .
    '/assets/js/portfolio.admin.js', array('jquery'), '1.0.0', true);

    $translation_array = array(
    	'choose_profile_pic_title' => __('Choose a Profile Picture', 'leotoikka'),
        'choose_profile_pic_text' => __('Choose Picture', 'leotoikka'),
        'choose_home_pic_title'  => __('Choose a Home Page Image', 'leotoikka'),
        'choose_home_pic_text'  => __('Choose Image', 'leotoikka'),
    );

    wp_localize_script('portfolio-admin-script', 'loc_object', $translation_array);
    wp_enqueue_script('portfolio-admin-script');

    // Admin CSS
    wp_enqueue_style('portfolio-admin-css', get_template_directory_uri() . '/assets/css/admin.css', null, 'all');

}
add_action('admin_enqueue_scripts', 'portfolio_enqueue_admin_scripts');

/* =================================
LOAD THEME TEXTDOMAIN
================================= */
function portfolio_load_textdomain() {
    load_theme_textdomain('leotoikka', get_template_directory() . '/languages');
}
add_action('after_setup_theme', 'portfolio_load_textdomain');

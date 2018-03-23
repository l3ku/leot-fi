<?php
/**
 * Enqueue frontend and admin scripts/styles, load textdomain.
 *
 * @package portfolio
 */

/* =================================
ENQUEUE FRONTEND STYLES AND SCRIPTS
================================= */
function portfolio_enqueue_scripts() {
  // NOTE: Fonts should be moved to local directory for speed optimization
  wp_enqueue_style( 'google_fonts', 'https://fonts.googleapis.com/css?family=Dancing+Script|Raleway', null, 'all' );
  wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/dist/css/bootstrap.min.css', null, 'all' );
  wp_enqueue_style( 'portfolio-css', get_template_directory_uri() . '/assets/dist/css/frontend.min.css', null, 'all' );
}
add_action('wp_enqueue_scripts', 'portfolio_enqueue_scripts');

/* =================================
ENQUEUE ADMIN STYLES AND SCRIPTS
================================= */
function portfolio_enqueue_admin_scripts() {
  wp_enqueue_media();

  // Localize and enqueue admin JavaScript
  wp_register_script( 'portfolio-admin-script', get_template_directory_uri() .
    '/assets/dist/js/portfolio.admin.min.js', array( 'jquery' ), '1.0.0', true );

  $translation_array = array(
  	'choose_profile_pic_title' => __( 'Choose a Profile Picture', 'leotoikka' ),
    'choose_profile_pic_text' => __( 'Choose Picture', 'leotoikka' ),
    'choose_home_pic_title'  => __( 'Choose a Home Page Image', 'leotoikka' ),
    'choose_home_pic_text'  => __( 'Choose Image', 'leotoikka' ),
  );

  wp_localize_script( 'portfolio-admin-script', 'loc_object', $translation_array );
  wp_enqueue_script( 'portfolio-admin-script' );
  wp_enqueue_style( 'portfolio-admin-css', get_template_directory_uri() . '/assets/dist/css/admin.min.css', null, 'all' );

}
add_action( 'admin_enqueue_scripts', 'portfolio_enqueue_admin_scripts' );

/* =================================
LOAD THEME TEXTDOMAIN
================================= */
function portfolio_load_textdomain() {
  load_theme_textdomain( 'leotoikka', get_template_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'portfolio_load_textdomain' );

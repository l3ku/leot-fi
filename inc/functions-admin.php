<?php
/**
 * Admin custom functions.
 *
 * @package portfolio
 */

function portfolio_add_admin_page() {
    add_menu_page(
        __( 'Portfolio Theme Settings', 'leotoikka' ),
        __( 'Theme Settings', 'leotoikka' ),
        'manage_options',
        'portfolio_theme_settings',
        'portfolio_create_social_page',
        'dashicons-admin-generic',
        61
    );
    add_submenu_page(
      'portfolio_theme_settings',
      __( 'Portfolio Social Settings', 'leotoikka' ),
      __( 'Social', 'leotoikka' ),
      'manage_options',
      'portfolio_theme_settings',
      'portfolio_create_social_page'
    );
    add_submenu_page(
      'portfolio_theme_settings',
      __( 'Portfolio Page Settings', 'leotoikka' ),
      __( 'Pages', 'leotoikka' ),
      'manage_options',
      'portfolio_page_settings',
      'portfolio_create_pages_page'
    );

    // The custom settings for the theme_location
    add_action( 'admin_init', 'portfolio_settings_init' );
}

// Include admin menu setup only for capability 'manage_options'
if ( current_user_can( 'manage_options' ) ) {
    add_action( 'admin_menu', 'portfolio_add_admin_page' );
}

function portfolio_create_social_page() {
    require_once( get_template_directory() . '/inc/templates/portfolio-social.php' );
}

function portfolio_create_pages_page() {
    require_once( get_template_directory() . '/inc/templates/portfolio-pages.php' );
}

function portfolio_settings_init() {
    require_once( get_template_directory() . '/inc/theme-options.php' );
    portfolio_register_settings();
}

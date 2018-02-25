<?php
/**
 * Register theme settings/options.
 *
 * @package portfolio
 */

function portfolio_settings_profile_picture() {
    $picture = esc_attr( get_option( 'profile_picture' ) );
    if ( empty( $picture ) ) {
        echo '<div id="personal-image-container" style="background-image: url(' .  get_template_directory_uri() . '/images/profile.jpg' . ')"><button id="upload-profile-pic" class="button-secondary">' . __( 'Choose Picture', 'leotoikka' ) . '</button></div><input type="hidden" name="profile_picture" id="profile-picture" value="">';
    } else {
        echo '<div id="personal-image-container" style="background-image: url(' .  $picture . ')"><button id="upload-profile-pic" class="button-secondary">' . __( 'Change Picture', 'leotoikka' ) . '</button></div><input type="hidden" name="profile_picture" id="profile-picture" value="' . $picture . '">';

    }
}

function portfolio_settings_twitter_handler() {
    $twitter = esc_attr( get_option( 'twitter_handler' ) );
    echo '<input type="text" class="social-form-field" name="twitter_handler" placeholder="' . __( 'Enter your Twitter URL', 'leotoikka' ) . '" value="' . $twitter . '">';
}

function portfolio_settings_facebook_handler() {
    $facebook = esc_attr( get_option( 'facebook_handler' ) );
    echo '<input type="text" class="social-form-field" name="facebook_handler" placeholder="' . __( 'Enter your Facebook URL', 'leotoikka' ) . '" value="' . $facebook . '">';
}

function portfolio_settings_github_handler() {
    $github = esc_attr( get_option( 'github_handler' ) );
    echo '<input type="text" class="social-form-field" name="github_handler" placeholder="' . __( 'Enter your Github URL', 'leotoikka' ) . '" value="' . $github . '">';
}

function portfolio_settings_linkedin_handler() {
    $linkedin = esc_attr( get_option( 'linkedin_handler' ) );
    echo '<input type="text" class="social-form-field" name="linkedin_handler" placeholder="' . __( 'Enter your LinkedIn URL', 'leotoikka' ) . '" value="' . $linkedin . '">';
}

function portfolio_social_description() {
    echo '<p>' . __( 'Change your profile picture and social media addresses.', 'leotoikka' ) . '</p>';
}

function portfolio_settings_home_page_text() {
    $content = get_option( 'home_content' );
    wp_editor( $content, 'homecontent', array( 'textarea_name' => 'home_content' ) );
}

function portfolio_settings_home_page_picture() {
    $home_picture = esc_attr( get_option( 'home_picture' ) );
    if ( empty( $home_picture ) ) {
        echo '<div id="home-page-picture-preview" style="background-image: url()"><button id="upload-home-pic" class="button-secondary">' . __( 'Choose Picture', 'leotoikka' ) . '</button></div><input type="hidden" name="home_picture" id="home-page-picture" value="">';
    } else {
        echo '<div id="home-page-picture-preview" style="background-image: url(' . $home_picture . ')"><button id="upload-home-pic" class="button-secondary">' . __( 'Choose Picture', 'leotoikka' ) . '</button></div><input type="hidden" name="home_picture" id="home-page-picture" value="' . $home_picture . '">';
    }
}

function portfolio_home_description() {
    echo '<p>' . __( 'Change the text and picture displayed on the home page', 'leotoikka' ) . '</p>';
}

/* ================================
CUSTOM SETTINGS FOR ADMIN PANEL
=================================*/
function portfolio_register_settings() {
    /* SOCIAL SETTINGS */
    register_setting( 'portfolio-social-settings-group', 'profile_picture' );
    register_setting( 'portfolio-social-settings-group', 'twitter_handler' );
    register_setting( 'portfolio-social-settings-group', 'facebook_handler' );
    register_setting( 'portfolio-social-settings-group', 'github_handler' );
    register_setting( 'portfolio-social-settings-group', 'linkedin_handler' );

    add_settings_section( 'portfolio-social-settings', __( 'Portfolio Social Settings', 'leotoikka' ), 'portfolio_social_description', 'portfolio_social_settings' );

    add_settings_field( 'profile-picture', __( 'Profile Picture', 'leotoikka' ), 'portfolio_settings_profile_picture', 'portfolio_social_settings', 'portfolio-social-settings' );
    add_settings_field( 'twitter-handler', __( 'Twitter URL', 'leotoikka' ), 'portfolio_settings_twitter_handler', 'portfolio_social_settings', 'portfolio-social-settings' );
    add_settings_field( 'facebook-handler', __( 'Facebook URL', 'leotoikka' ), 'portfolio_settings_facebook_handler', 'portfolio_social_settings', 'portfolio-social-settings' );
    add_settings_field( 'github-handler', __( 'Github URL', 'leotoikka' ), 'portfolio_settings_github_handler', 'portfolio_social_settings', 'portfolio-social-settings' );
    add_settings_field( 'linkedin-handler', __( 'LinkedIn URL', 'leotoikka' ), 'portfolio_settings_linkedin_handler', 'portfolio_social_settings', 'portfolio-social-settings' );

    /* PAGE SETTINGS */
    add_settings_section( 'portfolio-page-settings-home', __( 'Portfolio Home Page Settings', 'leotoikka' ), 'portfolio_home_description', 'portfolio_home_settings' );
    register_setting( 'portfolio-home-settings-group', 'home_content' );
    register_setting( 'portfolio-home-settings-group', 'home_picture' );
    add_settings_field( 'home-content', __( 'Home Page Text', 'leotoikka' ), 'portfolio_settings_home_page_text', 'portfolio_home_settings', 'portfolio-page-settings-home' );
    add_settings_field( 'home-picture', __( 'Home Page Picture', 'leotoikka' ), 'portfolio_settings_home_page_picture', 'portfolio_home_settings', 'portfolio-page-settings-home' );
}

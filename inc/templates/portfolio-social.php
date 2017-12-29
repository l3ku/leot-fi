<?php
/**
 * File for displaying "Social" page settings content.
 *
 * @package portfolio
 */

settings_errors();
?>

<div class="wrap">
  <form method="post" action="options.php" class="portfolio-general-form">
    <?php settings_fields('portfolio-social-settings-group'); ?>
    <?php do_settings_sections('portfolio_social_settings'); ?>
    <?php submit_button(__('Save Changes', 'leotoikka'), 'primary', 'btnSubmit'); ?>
  </form>
</div><!-- .wrap -->

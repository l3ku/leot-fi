<?php settings_errors(); ?>
<div class="wrap">
    <form method="post" action="options.php" class="portfolio-general-form">
    <?php settings_fields('portfolio-home-settings-group'); ?>
    <?php do_settings_sections('portfolio_home_settings'); ?>
    <?php submit_button(__('Save Changes', 'leotoikka'), 'primary', 'btnSubmit'); ?>
</form>
</div><!-- .wrap -->

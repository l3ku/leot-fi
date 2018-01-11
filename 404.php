<?php
/**
 * File for displaying 404 not found page.
 *
 * @package portfolio
 */

get_header();
?>

<div class="leotoikka-wrapper not-found-wrapper">
  <h1 class="not-found-title">
    <?php _e( 'Page not found!', 'leotoikka' ); ?>
  </h1>
  <p class="not-found-content">
    <?php _e( 'Sorry, but it seems that you have tried to access a page that no longer exists...', 'leotoikka' ); ?>
  </p>
</div>

<?php
get_footer();

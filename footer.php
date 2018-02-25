<?php
/**
 * File for footer content.
 *
 * @package portfolio
 */

wp_footer();
?>

<div class="footer-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-12">

        <!-- Copyright -->
        <div id="footer-copyright">
          &copy;
          <a href="<?php echo get_option( 'home' ); ?>">
            Leo Toikka
          </a> <?php echo date( 'Y' ); ?>
        </div>

        <div class="social-media-wrapper">

          <!-- Twitter -->
          <a class="twitter-link" href="<?php echo esc_attr(get_option('twitter_handler')); ?>">
            <div class="twitter-logo" style="background-image: url(<?php echo get_template_directory_uri() . '/images/twitter.png'; ?>)">
            </div>
          </a>

          <!-- Facebook -->
          <a class="facebook-link" href="<?php echo esc_attr(get_option('facebook_handler')); ?>">
            <div class="facebook-logo" style="background-image: url(<?php echo get_template_directory_uri() . '/images/facebook.png'; ?>)">
            </div>
          </a>

          <!-- Github -->
          <a class="github-link" href="<?php echo esc_attr(get_option('github_handler')); ?>">
            <div class="github-logo" style="background-image: url(<?php echo get_template_directory_uri() . '/images/github.png'; ?>)">
            </div>
          </a>

          <!-- LinkedIn -->
          <a class="linkedin-link" href="<?php echo esc_attr(get_option('linkedin_handler')); ?>">
            <div class="linkedin-logo" style="background-image: url(<?php echo get_template_directory_uri() . '/images/linkedin.png'; ?>)">
            </div>
          </a>

        </div><!-- .social-media-wrapper -->
      </div><!-- .col-xs-12 -->''
    </div><!-- .row -->
  </div><!-- .container-fluid -->
</div><!-- .footer-wrapper -->
</body>
</html>

<?php
/**
* @package portfolio
*/
wp_footer();
?>

<div class="footer-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12">
                <div id="footer-copyright">&copy; <a href="<?php echo get_option('home'); ?>">Leo Toikka</a> <?php the_time('Y'); ?></div>
                <div class="social-media-wrapper">
                    <a class="twitter-link" href="<?php echo esc_attr(get_option('twitter_handler')); ?>"><div class="twitter-logo" style="background-image: url(<?php echo get_template_directory_uri() . '/images/Twitter-96.png'; ?>)"></div></a>
                    <a class="facebook-link" href="<?php echo esc_attr(get_option('facebook_handler')); ?>"><div class="facebook-logo" style="background-image: url(<?php echo get_template_directory_uri() . '/images/Facebook-96.png'; ?>)"></div></a>
                    <a class="github-link" href="<?php echo esc_attr(get_option('github_handler')); ?>"><div class="github-logo" style="background-image: url(<?php echo get_template_directory_uri() . '/images/GitHub-128.png'; ?>)"></div></a>
                    <a class="linkedin-link" href="<?php echo esc_attr(get_option('linkedin_handler')); ?>"><div class="linkedin-logo" style="background-image: url(<?php echo get_template_directory_uri() . '/images/LinkedIn-96.png'; ?>)"></div></a>
                </div>
            </div><!-- .col-xs-8 -->
        </div><!-- .row -->
    </div><!-- .container -->
</div><!-- .footer-wrapper -->
</body>
</html>

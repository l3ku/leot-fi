<?php
/**
 * Template Name: Contact page
 *
 * @package portfolio
 */

get_header();
?>

<div class="contact-page-wrapper">
  <div class="container-fluid">
    <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ): the_post(); ?>
        <h1 class="page-title"><?php the_title(); ?></h2>
        <p class="contact-page-text-content"><?php the_content(); ?></p>
      <?php endwhile; ?>
    <?php endif; ?>
  </div><!-- .container-fluid -->
</div><!-- .contact-page-wrapper -->

<?php
get_footer();

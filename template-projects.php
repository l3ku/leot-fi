<?php
/**
 * Template Name: Projects page
 *
 * @package portfolio
 */

get_header();
?>

<?php $wp_all_query = new WP_Query( array( 'post_type' => 'post', 'post_status' => 'publish', 'posts_per_page' => 3 ) ); ?>
<?php if ( $wp_all_query->have_posts() ) : ?>
<div class="container-fluid project-wrapper">
  <?php while ( $wp_all_query->have_posts() ) : $wp_all_query->the_post(); ?>
    <div class="row project-row">
      <article class="project-preview">
        <div class="project-preview-title">
          <a class="project-preview-title-link" href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
          </a>
        </div><!-- .project-preview-title -->
        <div class="col-md-5 col-xs-12">
          <?php if ( has_post_thumbnail() ): ?>
            <a href="<?php the_permalink(); ?>">
              <img class="img-responsive center-block project-preview-image" src="<?php the_post_thumbnail_url( 'large' ); ?>">
            </a>
          <?php endif; ?>
        </div><!-- .col-md-5 .col-xs-12 -->

        <div class="col-md-7 col-xs-12">
          <p class="project-preview-excerpt">
            <?php the_excerpt(); ?>
          </p>
          <a class="project-read-more" href="<?php the_permalink(); ?>">
            Read more...
          </a>
        </div><!-- .col-md-7 .col-xs-12 -->

      </article>
    </div><!-- .row .project-row -->

    <!-- Include separator only if there are still posts remaining -->
    <?php if ( $wp_all_query->current_post + 1 < $wp_all_query->post_count ) : ?>
      <hr class="projects-hr">
    <?php endif; ?>

  <?php endwhile; ?>
</div><!-- .project-wrapper -->
<?php endif; ?>

<?php
get_footer();

<?php
/*
* Template Name: Projects page
* @package portfolio
*/

get_header();
$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>3));
if ($wpb_all_query->have_posts()): ?>
<div class="container-fluid project-wrapper">
    <?php while ($wpb_all_query->have_posts()): $wpb_all_query->the_post(); ?>
        <div class="row project-row">
        <article class="project-preview">
            <div class="col-md-5 col-xs-12">
            <?php if (has_post_thumbnail()): ?>
                <a href="<?php the_permalink(); ?>">
                    <img class="img-responsive center-block" src="<?php the_post_thumbnail_url('large'); ?>">
                </a>
            <?php endif; ?>
            </div>
            <div class="col-md-7 col-xs-12">
                <div class="project-preview-title"><a class="project-preview-title-link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
                <p class="project-preview-excerpt"><?php the_excerpt(); ?></p>
                <a class="project-read-more" href="<?php the_permalink(); ?>">Read more...</a>
            </div>
        </article>
      </div><!-- .row -->
      <hr class="projects-hr">
    <?php endwhile; ?>
</div><!-- .project-wrapper -->
<?php endif;
get_footer();

<?php
/*
* Template Name: Projects page
* @package portfolio
*/

get_header();
$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>3));
if ($wpb_all_query->have_posts()): ?>
<div class="container project-wrapper">
    <?php while ($wpb_all_query->have_posts()): $wpb_all_query->the_post(); ?>
        <article class="project-preview">
            <div class="project-preview-title"><a class="project-preview-title-link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
	    <?php if (has_post_thumbnail()): ?>
	    <a href="<?php the_permalink(); ?>">
		<img class="img-responsive center-block" src="<?php the_post_thumbnail_url('large'); ?>">
	    </a>
	    <?php endif; ?>
	    <p class="project-preview-excerpt"><?php the_excerpt(); ?></p>
            <a class="project-read-more" href="<?php the_permalink(); ?>">Read more...</a>
        </article>
    <?php endwhile; ?>
</div><!-- .project-wrapper -->
<?php endif;
get_footer();

<?php
/**
*@package portfolio
* Generic template for displaying single posts. Use category-{NAME}.php if
* different templates are needed for various categories.
*/

get_header(); ?>

<div class="container content-area">
    <?php while (have_posts()): the_post(); ?>
        <article class="single-post">
            <h1 class="post-title">
                <?php the_title(); ?>
            </h2>
            <p class="post-content">
                <?php the_content();?>
            </p>
        </article>
    <?php endwhile; ?>
</div>

<?php get_footer();

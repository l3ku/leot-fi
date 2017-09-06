<?php
/**
* @package portfolio
*/

get_header(); ?>
<div class="index-wrapper">
    <div class="index-black">
        <div class="container-fluid">
            <div class="row">
                <div class="coding-info col-xs-8">
                    <?php get_template_part( 'template-parts/content-homeinfo'); ?>
                </div><!-- .col-xs-4 -->
                <div class="col-xs-4">
                    <image src="<?php echo esc_attr(get_option('profile_picture')); ?>"
                        class="img-responsive img-circle" id="personal-image">
                </div><!-- .col-xs-4 -->
            </div><!-- .row -->
            <div class="row">
                <hr>
                <h1 class="recent-projects"><?php echo 'Recent Projects'; ?></h1>
                <!-- Add area for projects -->
                    <div class="projects-preview">
                        <?php $wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>2));
                        if ($wpb_all_query->have_posts()):
                            while ($wpb_all_query->have_posts()): $wpb_all_query->the_post();
                                $post_id = get_the_ID(); ?>
                                <div class="col-md-6 col-xs-12">
                                    <div class="projects-preview-entry">
                                        <a class="projects-preview-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        <a class="projects-preview-thumbnail" href="<?php the_permalink(); ?>"><img class="img-responsive center-block" src="<?php echo get_the_post_thumbnail_url($post_id); ?>"></a>
                                    </div><!--.projects-preview-entry-->
                                </div><!--.col-xs-6-->
                            <?php endwhile;
                        endif; ?>
                    </div><!--.projects-preview-->
            </div><!--.row-->
        </div><!-- .container -->
    </div><!-- .index-black -->
    <div class="index-lower" style="background-image: linear-gradient(to bottom, black,  rgba(0, 0, 0, 0) 60%, black 100%),
    url(<?php echo esc_attr(get_option('home_picture')) ?>)">
    </div><!-- .index-lower -->
</div><!-- .index-wrapper -->

<?php
get_footer();

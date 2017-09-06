<?php
/**
* Template Name: CV Page
* @package portfolio
*/

get_header(); ?>

<div class="container cv-wrapper">
    <div class="row">
        <div class="col-md-3 col-xs-12 cv-profile-image-wrapper">
            <image src="<?php echo esc_attr(get_option('profile_picture')); ?>"
            class="img-responsive cv-personal-image" id="cv-personal-image">
        </div><!-- .col-xs-3 .cv-profile-image -->
        <div class="cv-motivation-text-wrapper col-md-9 col-xs-12">
            <?php if ( have_posts() ):
                while ( have_posts() ): the_post(); ?>
                    <h1 class="page-title"><?php the_title(); ?></h2>
                    <p class="cv-motivation-text-content"><?php the_content(); ?></p>
                <?php endwhile;
            endif; ?>
        </div><!-- .cv-motivation-text-wrapper -->
    </div><!-- .row -->
    <div class="education-wrapper row">
        <div class="cv-row-image education-image col-md-3 col-xs-12">
            <img class="cv-row-image img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/icons8-Student-Male-100.png">
        </div><!-- .education-image .col-xs-3 -->
        <div class="education-content col-md-9 col-xs-12">
            <?php the_field('cv_education', get_the_ID()); ?>
        </div><!-- .education-content -->
    </div><!-- education-wrapper .row -->
    <div class="it-skills-wrapper row">
        <div class="it-skills-image col-md-3 col-xs-12">
            <img class="cv-row-image img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/icons8-Code-100.png">
        </div><!-- .it-skills-image .col-xs-3 -->
        <div class="it-skills-content col-md-9 col-xs-12">
            <?php the_field('cv_it_skills', get_the_ID()); ?>
        </div><!-- .it-skills-content -->
    </div><!-- .it-skills-wrapper .row -->
    <div class="language-skills-wrapper row">
        <div class="language-skills-image col-md-3 col-xs-12">
            <img class="cv-row-image img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/icons8-Language-100.png">
        </div><!-- .language-skills-image .col-xs-3 -->
        <div class="language-skills-content col-md-9 col-xs-12">
            <?php the_field('cv_language_skills', get_the_ID()); ?>
        </div><!-- .language-skills-content -->
    </div><!-- .language-skills-wrapper .row -->
    <div class="work-experience-wrapper row">
        <div class="work-experience-image col-md-3 col-xs-12">
            <img class="cv-row-image img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/icons8-Business-100.png">
        </div><!-- .work-experience-image .col-xs-3 -->
        <div class="work-experience-content col-md-9 col-xs-12">
            <?php the_field('cv_work_experience', get_the_ID()); ?>
        </div><!-- .work-experience-content -->
    </div><!-- .work-experience-wrapper .row -->
</div><!-- .cv-wrapper -->

<?php get_footer();

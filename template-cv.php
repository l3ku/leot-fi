<?php
/**
 * Template Name: CV page
 *
 * @package portfolio
 */

get_header();
?>

<div class="container-fluid cv-wrapper">

  <!-- Row containing profile image and motivation text -->
  <div class="row">
    <div class="col-md-3 col-xs-12 cv-profile-image-wrapper">
      <img src="<?php echo esc_attr( get_option( 'profile_picture' ) ); ?>"
        class="img-responsive cv-personal-image" id="cv-personal-image"
        alt="<?php esc_attr_e( 'CV picture of Leo', 'leotoikka' ); ?>">
    </div><!-- .col-md-3 .col-xs-12 .cv-profile-image -->
    <div class="cv-motivation-text-wrapper col-md-9 col-xs-12">
      <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
          <h1 class="page-title"><?php the_title(); ?></h1>
          <p class="cv-motivation-text-content"><?php the_content(); ?></p>
        <?php endwhile; ?>
      <?php endif; ?>
    </div><!-- .cv-motivation-text-wrapper .col-md-9 .col-xs-12 -->
  </div><!-- .row -->

  <!-- Row containing education information -->
  <div class="education-wrapper row">
    <div class="education-image col-md-3 col-xs-12">
      <img class="cv-row-image img-responsive"
        src="<?php echo get_template_directory_uri() . '/images/student.png'; ?>"
        alt="<?php esc_attr_e( 'Student gradutation hat', 'leotoikka' ); ?>">
    </div><!-- .education-image .col-xs-3 -->
    <div class="education-content col-md-9 col-xs-12">
      <?php the_field('cv_education', get_the_ID()); ?>
    </div><!-- .education-content -->
  </div><!-- education-wrapper .row -->

  <!-- Row containing IT skills -->
  <div class="it-skills-wrapper row">
    <div class="it-skills-image col-md-3 col-xs-12">
        <img class="cv-row-image img-responsive"
          src="<?php echo get_template_directory_uri() . '/images/code.png'; ?>"
          alt="<?php esc_attr_e( 'Code brackets', 'leotoikka' ); ?>">
    </div><!-- .it-skills-image .col-xs-3 -->
    <div class="it-skills-content col-md-9 col-xs-12">
      <?php the_field('cv_it_skills', get_the_ID()); ?>
    </div><!-- .it-skills-content -->
  </div><!-- .it-skills-wrapper .row -->

  <!-- Row containing language skills -->
  <div class="language-skills-wrapper row">
    <div class="language-skills-image col-md-3 col-xs-12">
      <img class="cv-row-image img-responsive"
        src="<?php echo get_template_directory_uri() . '/images/language.png'; ?>"
        alt="<?php esc_attr_e( 'Cartoon speaking bubble', 'leotoikka' ); ?>">
    </div><!-- .language-skills-image .col-xs-3 -->
    <div class="language-skills-content col-md-9 col-xs-12">
      <?php the_field('cv_language_skills', get_the_ID()); ?>
    </div><!-- .language-skills-content -->
  </div><!-- .language-skills-wrapper .row -->

  <!-- Row containing work experience -->
  <div class="work-experience-wrapper row">
    <div class="work-experience-image col-md-3 col-xs-12">
      <img class="cv-row-image img-responsive"
        src="<?php echo get_template_directory_uri() . '/images/business.png'; ?>"
        alt="<?php esc_attr_e( 'Work briefcase', 'leotoikka' ); ?>">
    </div><!-- .work-experience-image .col-xs-3 -->
    <div class="work-experience-content col-md-9 col-xs-12">
      <?php the_field('cv_work_experience', get_the_ID()); ?>
    </div><!-- .work-experience-content .col-md-9 .col-xs-12 -->
  </div><!-- .work-experience-wrapper .row -->
</div><!-- .container-fluid .cv-wrapper-->

<?php
get_footer();

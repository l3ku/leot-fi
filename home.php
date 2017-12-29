<?php
/**
 * File for displaying home page content.
 *
 * @package portfolio
 */

get_header();
?>

<div class="index-wrapper">
  <div class="index-black">
    <div class="container-fluid">

      <!-- First row contains profile image and brief info -->
      <div class="row">
        <div class="col-xs-12 col-md-2">
          <image src="<?php echo esc_attr( get_option( 'profile_picture' ) ); ?>"
            class="img-circle center-block" id="personal-image">
        </div><!-- .col-xs-12 .col-md-2 -->
        <div class="coding-info col-xs-12 col-md-10">
          <?php $homeinfo = esc_attr( get_option( 'home_content' ) ); ?>
          <?php if ( $homeinfo ) : ?>
            <div class="homeinfo-text">
              <?php echo $homeinfo; ?>
            </div><!-- .homeinfo-text -->
          <?php endif; ?>
        </div><!-- .coding-info .col-xs-12 .col-md-10 -->
      </div><!-- .row -->

      <!-- Second row contains project showcase -->
      <div class="row">
        <hr>
        <h1 class="recent-projects"><?php echo 'Recent Projects'; ?></h1>
        <div class="projects-preview">
          <?php $wpb_all_query = new WP_Query( array( 'post_type' => 'post', 'post_status' => 'publish', 'posts_per_page' => 2 ) ); ?>
          <?php if ( $wpb_all_query->have_posts() ) : ?>
            <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
              <?php $post_id = get_the_ID(); ?>
              <div class="col-md-6 col-xs-12">
                <div class="projects-preview-entry">
                  <a class="projects-preview-title" href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                  </a>
                  <a class="projects-preview-thumbnail" href="<?php the_permalink(); ?>">
                    <img class="img-responsive center-block" src="<?php echo get_the_post_thumbnail_url( $post_id ); ?>">
                  </a>
                </div><!-- .projects-preview-entry -->
              </div><!-- .col-md-6 .col-xs-12 -->
            <?php endwhile; ?>
          <?php endif; ?>
        </div><!-- .projects-preview -->
      </div><!-- .row -->

    </div><!-- .container-fluid -->
  </div><!-- .index-black -->

  <!-- Create neat gradient image just above the footer -->
  <div class="index-lower"
  <?php if ( get_option( 'home_picture' ) ) : ?>
    style="background-image: linear-gradient(to bottom, black,  rgba(0, 0, 0, 0) 60%, black 100%),
    url(<?php echo esc_attr( get_option( 'home_picture' ) ); ?>)"
    <?php endif; ?>>
  </div><!-- .index-lower -->
</div><!-- .index-wrapper -->

<?php
get_footer();

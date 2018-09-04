<?php
/**
 * Register ACF fields.
 *
 * @package portfolio
 */

if ( function_exists( 'register_field_group' ) ) {
  register_field_group( array (
    'id' => 'acf_resume-page-fields',
    'title' => __( 'Resume Page Fields', 'leotoikka' ),
    'fields' => array (
      array (
        'key' => 'field_597450f575c77',
        'label' => __( 'Education', 'leotoikka' ),
        'name' => 'cv_education',
        'type' => 'wysiwyg',
        'instructions' => __( 'Insert your education here.', 'leotoikka' ),
        'default_value' => '',
        'toolbar' => 'full',
        'media_upload' => 'yes',
      ),
      array (
        'key' => 'field_59745e44f3b4f',
        'label' => __( 'IT Skills', 'leotoikka' ),
        'name' => 'cv_it_skills',
        'type' => 'wysiwyg',
        'instructions' => __( 'Evaluate your current IT skills.', 'leotoikka' ),
        'default_value' => '',
        'toolbar' => 'full',
        'media_upload' => 'yes',
      ),
      array (
        'key' => 'field_59745e28f3b4e',
        'label' => __( 'Language Skills', 'leotoikka' ),
        'name' => 'cv_language_skills',
        'type' => 'wysiwyg',
        'instructions' => __( 'Evaluate your current language skills.', 'leotoikka' ),
        'default_value' => '',
        'toolbar' => 'full',
        'media_upload' => 'yes',
      ),
      array (
        'key' => 'field_5974516875c78',
        'label' => __( 'Work Experience', 'leotoikka' ),
        'name' => 'cv_work_experience',
        'type' => 'wysiwyg',
        'instructions' => __( 'Insert your work experience here.', 'leotoikka' ),
        'default_value' => '',
        'toolbar' => 'full',
        'media_upload' => 'yes',
      ),
      array (
        'key' => 'field_59745e99f3b50',
        'label' => __( 'Hobbies', 'leotoikka' ),
        'name' => 'cv_hobbies',
        'type' => 'wysiwyg',
        'instructions' => __( 'Tell us what you like to do during your spare time.', 'leotoikka' ),
        'default_value' => '',
        'toolbar' => 'full',
        'media_upload' => 'yes',
      ),
    ),
    'location' => array (
      array (
        array (
          'param' => 'page',
          'operator' => '==',
          'value' => '165',
          'order_no' => 0,
          'group_no' => 0,
        ),
      ),
    ),
    'options' => array (
      'position' => 'normal',
      'layout' => 'no_box',
      'hide_on_screen' => array (
      ),
    ),
    'menu_order' => 0,
  ));
}

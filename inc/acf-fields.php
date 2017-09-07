<?php
/**
* @package portfolio
*/
if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_resume-page-fields',
		'title' => 'Resume Page Fields',
		'fields' => array (
			array (
				'key' => 'field_597450f575c77',
				'label' => 'Education',
				'name' => 'cv_education',
				'type' => 'wysiwyg',
				'instructions' => 'Insert your education here',
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'yes',
			),
			array (
				'key' => 'field_59745e44f3b4f',
				'label' => 'IT Skills',
				'name' => 'cv_it_skills',
				'type' => 'wysiwyg',
				'instructions' => 'Evaluate your current IT skills.',
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'yes',
			),
			array (
				'key' => 'field_59745e28f3b4e',
				'label' => 'Language Skills',
				'name' => 'cv_language_skills',
				'type' => 'wysiwyg',
				'instructions' => 'Evaluate your current language skills.',
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'yes',
			),
			array (
				'key' => 'field_5974516875c78',
				'label' => 'Work Experience',
				'name' => 'cv_work_experience',
				'type' => 'wysiwyg',
				'instructions' => 'Insert your work experience here.',
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'yes',
			),
			array (
				'key' => 'field_59745e99f3b50',
				'label' => 'Hobbies',
				'name' => 'cv_hobbies',
				'type' => 'wysiwyg',
				'instructions' => 'Tell us what you like to do during your spare time.',
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

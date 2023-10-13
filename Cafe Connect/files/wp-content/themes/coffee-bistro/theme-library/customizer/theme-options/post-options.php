<?php

/**
 * Post Options
 *
 * @package coffee_bistro
 */

$wp_customize->add_section(
	'coffee_bistro_post_options',
	array(
		'title' => esc_html__( 'Post Options', 'coffee-bistro' ),
		'panel' => 'coffee_bistro_theme_options',
	)
);

// Post Options - Hide Date.
$wp_customize->add_setting(
	'coffee_bistro_post_hide_date',
	array(
		'default'           => false,
		'sanitize_callback' => 'coffee_bistro_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Coffee_Bistro_Toggle_Switch_Custom_Control(
		$wp_customize,
		'coffee_bistro_post_hide_date',
		array(
			'label'   => esc_html__( 'Hide Date', 'coffee-bistro' ),
			'section' => 'coffee_bistro_post_options',
		)
	)
);

// Post Options - Hide Author.
$wp_customize->add_setting(
	'coffee_bistro_post_hide_author',
	array(
		'default'           => false,
		'sanitize_callback' => 'coffee_bistro_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Coffee_Bistro_Toggle_Switch_Custom_Control(
		$wp_customize,
		'coffee_bistro_post_hide_author',
		array(
			'label'   => esc_html__( 'Hide Author', 'coffee-bistro' ),
			'section' => 'coffee_bistro_post_options',
		)
	)
);

// Post Options - Hide Category.
$wp_customize->add_setting(
	'coffee_bistro_post_hide_category',
	array(
		'default'           => false,
		'sanitize_callback' => 'coffee_bistro_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Coffee_Bistro_Toggle_Switch_Custom_Control(
		$wp_customize,
		'coffee_bistro_post_hide_category',
		array(
			'label'   => esc_html__( 'Hide Category', 'coffee-bistro' ),
			'section' => 'coffee_bistro_post_options',
		)
	)
);

// Post Options - Hide Tag.
$wp_customize->add_setting(
	'coffee_bistro_post_hide_tags',
	array(
		'default'           => false,
		'sanitize_callback' => 'coffee_bistro_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Coffee_Bistro_Toggle_Switch_Custom_Control(
		$wp_customize,
		'coffee_bistro_post_hide_tags',
		array(
			'label'   => esc_html__( 'Hide Tag', 'coffee-bistro' ),
			'section' => 'coffee_bistro_post_options',
		)
	)
);

// Post Options - Related Post Label.
$wp_customize->add_setting(
	'coffee_bistro_post_related_post_label',
	array(
		'default'           => __( 'Related Posts', 'coffee-bistro' ),
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'coffee_bistro_post_related_post_label',
	array(
		'label'    => esc_html__( 'Related Posts Label', 'coffee-bistro' ),
		'section'  => 'coffee_bistro_post_options',
		'settings' => 'coffee_bistro_post_related_post_label',
		'type'     => 'text',
	)
);

// Post Options - Hide Related Posts.
$wp_customize->add_setting(
	'coffee_bistro_post_hide_related_posts',
	array(
		'default'           => false,
		'sanitize_callback' => 'coffee_bistro_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Coffee_Bistro_Toggle_Switch_Custom_Control(
		$wp_customize,
		'coffee_bistro_post_hide_related_posts',
		array(
			'label'   => esc_html__( 'Hide Related Posts', 'coffee-bistro' ),
			'section' => 'coffee_bistro_post_options',
		)
	)
);

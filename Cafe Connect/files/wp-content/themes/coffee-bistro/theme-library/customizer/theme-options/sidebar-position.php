<?php

/**
 * Sidebar Position
 *
 * @package coffee_bistro
 */

$wp_customize->add_section(
	'coffee_bistro_sidebar_position',
	array(
		'title' => esc_html__( 'Sidebar Position', 'coffee-bistro' ),
		'panel' => 'coffee_bistro_theme_options',
	)
);

// Sidebar Position - Global Sidebar Position.
$wp_customize->add_setting(
	'coffee_bistro_sidebar_position',
	array(
		'sanitize_callback' => 'coffee_bistro_sanitize_select',
		'default'           => 'right-sidebar',
	)
);

$wp_customize->add_control(
	'coffee_bistro_sidebar_position',
	array(
		'label'   => esc_html__( 'Global Sidebar Position', 'coffee-bistro' ),
		'section' => 'coffee_bistro_sidebar_position',
		'type'    => 'select',
		'choices' => array(
			'right-sidebar' => esc_html__( 'Right Sidebar', 'coffee-bistro' ),
			'left-sidebar'  => esc_html__( 'Left Sidebar', 'coffee-bistro' ),
			'no-sidebar'    => esc_html__( 'No Sidebar', 'coffee-bistro' ),
		),
	)
);

// Sidebar Position - Post Sidebar Position.
$wp_customize->add_setting(
	'coffee_bistro_post_sidebar_position',
	array(
		'sanitize_callback' => 'coffee_bistro_sanitize_select',
		'default'           => 'right-sidebar',
	)
);

$wp_customize->add_control(
	'coffee_bistro_post_sidebar_position',
	array(
		'label'   => esc_html__( 'Post Sidebar Position', 'coffee-bistro' ),
		'section' => 'coffee_bistro_sidebar_position',
		'type'    => 'select',
		'choices' => array(
			'right-sidebar' => esc_html__( 'Right Sidebar', 'coffee-bistro' ),
			'left-sidebar'  => esc_html__( 'Left Sidebar', 'coffee-bistro' ),
			'no-sidebar'    => esc_html__( 'No Sidebar', 'coffee-bistro' ),
		),
	)
);

// Sidebar Position - Page Sidebar Position.
$wp_customize->add_setting(
	'coffee_bistro_page_sidebar_position',
	array(
		'sanitize_callback' => 'coffee_bistro_sanitize_select',
		'default'           => 'right-sidebar',
	)
);

$wp_customize->add_control(
	'coffee_bistro_page_sidebar_position',
	array(
		'label'   => esc_html__( 'Page Sidebar Position', 'coffee-bistro' ),
		'section' => 'coffee_bistro_sidebar_position',
		'type'    => 'select',
		'choices' => array(
			'right-sidebar' => esc_html__( 'Right Sidebar', 'coffee-bistro' ),
			'left-sidebar'  => esc_html__( 'Left Sidebar', 'coffee-bistro' ),
			'no-sidebar'    => esc_html__( 'No Sidebar', 'coffee-bistro' ),
		),
	)
);

<?php

/**
 * Breadcrumb
 *
 * @package coffee_bistro
 */

$wp_customize->add_section(
	'coffee_bistro_breadcrumb',
	array(
		'title' => esc_html__( 'Breadcrumb', 'coffee-bistro' ),
		'panel' => 'coffee_bistro_theme_options',
	)
);

// Breadcrumb - Enable Breadcrumb.
$wp_customize->add_setting(
	'coffee_bistro_enable_breadcrumb',
	array(
		'sanitize_callback' => 'coffee_bistro_sanitize_switch',
		'default'           => true,
	)
);

$wp_customize->add_control(
	new Coffee_Bistro_Toggle_Switch_Custom_Control(
		$wp_customize,
		'coffee_bistro_enable_breadcrumb',
		array(
			'label'   => esc_html__( 'Enable Breadcrumb', 'coffee-bistro' ),
			'section' => 'coffee_bistro_breadcrumb',
		)
	)
);

// Breadcrumb - Separator.
$wp_customize->add_setting(
	'coffee_bistro_breadcrumb_separator',
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default'           => '/',
	)
);

$wp_customize->add_control(
	'coffee_bistro_breadcrumb_separator',
	array(
		'label'           => esc_html__( 'Separator', 'coffee-bistro' ),
		'active_callback' => 'coffee_bistro_is_breadcrumb_enabled',
		'section'         => 'coffee_bistro_breadcrumb',
	)
);

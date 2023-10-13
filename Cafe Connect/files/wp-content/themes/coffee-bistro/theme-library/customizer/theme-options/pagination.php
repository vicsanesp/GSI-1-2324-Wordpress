<?php

/**
 * Pagination
 *
 * @package coffee_bistro
 */

$wp_customize->add_section(
	'coffee_bistro_pagination',
	array(
		'panel' => 'coffee_bistro_theme_options',
		'title' => esc_html__( 'Pagination', 'coffee-bistro' ),
	)
);

// Pagination - Enable Pagination.
$wp_customize->add_setting(
	'coffee_bistro_enable_pagination',
	array(
		'default'           => true,
		'sanitize_callback' => 'coffee_bistro_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Coffee_Bistro_Toggle_Switch_Custom_Control(
		$wp_customize,
		'coffee_bistro_enable_pagination',
		array(
			'label'    => esc_html__( 'Enable Pagination', 'coffee-bistro' ),
			'section'  => 'coffee_bistro_pagination',
			'settings' => 'coffee_bistro_enable_pagination',
			'type'     => 'checkbox',
		)
	)
);

// Pagination - Pagination Type.
$wp_customize->add_setting(
	'coffee_bistro_pagination_type',
	array(
		'default'           => 'default',
		'sanitize_callback' => 'coffee_bistro_sanitize_select',
	)
);

$wp_customize->add_control(
	'coffee_bistro_pagination_type',
	array(
		'label'           => esc_html__( 'Pagination Type', 'coffee-bistro' ),
		'section'         => 'coffee_bistro_pagination',
		'settings'        => 'coffee_bistro_pagination_type',
		'active_callback' => 'coffee_bistro_is_pagination_enabled',
		'type'            => 'select',
		'choices'         => array(
			'default' => __( 'Default (Older/Newer)', 'coffee-bistro' ),
			'numeric' => __( 'Numeric', 'coffee-bistro' ),
		),
	)
);

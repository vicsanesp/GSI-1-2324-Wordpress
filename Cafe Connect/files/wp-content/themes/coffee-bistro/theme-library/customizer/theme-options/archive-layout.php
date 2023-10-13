<?php

/**
 * Archive Layout
 *
 * @package coffee_bistro
 */

$wp_customize->add_section(
	'coffee_bistro_archive_layout',
	array(
		'title' => esc_html__( 'Archive Layout', 'coffee-bistro' ),
		'panel' => 'coffee_bistro_theme_options',
	)
);

// Archive Layout - Column Layout.
$wp_customize->add_setting(
	'coffee_bistro_archive_column_layout',
	array(
		'default'           => 'column-3',
		'sanitize_callback' => 'coffee_bistro_sanitize_select',
	)
);

$wp_customize->add_control(
	'coffee_bistro_archive_column_layout',
	array(
		'label'   => esc_html__( 'Select Column Layout', 'coffee-bistro' ),
		'section' => 'coffee_bistro_archive_layout',
		'type'    => 'select',
		'choices' => array(
			'column-2' => __( 'Column 2', 'coffee-bistro' ),
			'column-3' => __( 'Column 3', 'coffee-bistro' ),
			'column-4' => __( 'Column 4', 'coffee-bistro' ),
		),
	)
);

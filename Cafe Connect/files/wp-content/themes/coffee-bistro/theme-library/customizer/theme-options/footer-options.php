<?php

/**
 * Footer Options
 *
 * @package coffee_bistro
 */

$wp_customize->add_section(
	'coffee_bistro_footer_options',
	array(
		'panel' => 'coffee_bistro_theme_options',
		'title' => esc_html__( 'Footer Options', 'coffee-bistro' ),
	)
);

$copyright_default = sprintf( esc_html_x( 'Copyright &copy; %1$s %2$s', '1: Year, 2: Site Title with home URL', 'coffee-bistro' ), '[the-year]', '[site-link]' );
$wp_customize->add_setting(
	'coffee_bistro_footer_copyright_text',
	array(
		'default'           => $copyright_default,
		'sanitize_callback' => 'wp_kses_post',
		'transport'         => 'refresh',
	)
);

$wp_customize->add_control(
	'coffee_bistro_footer_copyright_text',
	array(
		'label'    => esc_html__( 'Copyright Text', 'coffee-bistro' ),
		'section'  => 'coffee_bistro_footer_options',
		'settings' => 'coffee_bistro_footer_copyright_text',
		'type'     => 'textarea',
	)
);

// Footer Options - Scroll Top.
$wp_customize->add_setting(
	'coffee_bistro_scroll_top',
	array(
		'sanitize_callback' => 'coffee_bistro_sanitize_switch',
		'default'           => true,
	)
);

$wp_customize->add_control(
	new Coffee_Bistro_Toggle_Switch_Custom_Control(
		$wp_customize,
		'coffee_bistro_scroll_top',
		array(
			'label'   => esc_html__( 'Enable Scroll Top Button', 'coffee-bistro' ),
			'section' => 'coffee_bistro_footer_options',
		)
	)
);

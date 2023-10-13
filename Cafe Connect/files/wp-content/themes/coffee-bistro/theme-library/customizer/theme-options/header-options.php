<?php

/**
 * Header Options
 *
 * @package coffee_bistro
 */


// Site Title - Enable Setting.
$wp_customize->add_setting(
	'coffee_bistro_enable_site_title_setting',
	array(
		'default'           => true,
		'sanitize_callback' => 'coffee_bistro_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Coffee_Bistro_Toggle_Switch_Custom_Control(
		$wp_customize,
		'coffee_bistro_enable_site_title_setting',
		array(
			'label'    => esc_html__( 'Disable Site Title', 'coffee-bistro' ),
			'section'  => 'title_tagline',
			'settings' => 'coffee_bistro_enable_site_title_setting',
		)
	)
);

// Tagline - Enable Setting.
$wp_customize->add_setting(
	'coffee_bistro_enable_tagline_setting',
	array(
		'default'           => false,
		'sanitize_callback' => 'coffee_bistro_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Coffee_Bistro_Toggle_Switch_Custom_Control(
		$wp_customize,
		'coffee_bistro_enable_tagline_setting',
		array(
			'label'    => esc_html__( 'Enable Tagline', 'coffee-bistro' ),
			'section'  => 'title_tagline',
			'settings' => 'coffee_bistro_enable_tagline_setting',
		)
	)
);

$wp_customize->add_section(
	'coffee_bistro_header_options',
	array(
		'panel' => 'coffee_bistro_theme_options',
		'title' => esc_html__( 'Header Options', 'coffee-bistro' ),
	)
);

// Header Options - Enable Topbar.
$wp_customize->add_setting(
	'coffee_bistro_enable_topbar',
	array(
		'sanitize_callback' => 'coffee_bistro_sanitize_switch',
		'default'           => false,
	)
);

$wp_customize->add_control(
	new Coffee_Bistro_Toggle_Switch_Custom_Control(
		$wp_customize,
		'coffee_bistro_enable_topbar',
		array(
			'label'   => esc_html__( 'Enable Topbar', 'coffee-bistro' ),
			'section' => 'coffee_bistro_header_options',
		)
	)
);

// Header Options - Welcome Text.
$wp_customize->add_setting(
	'coffee_bistro_welcome_topbar_text',
	array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'coffee_bistro_welcome_topbar_text',
	array(
		'label'           => esc_html__( 'Topbar Text', 'coffee-bistro' ),
		'section'         => 'coffee_bistro_header_options',
		'type'            => 'text',
		'active_callback' => 'coffee_bistro_is_topbar_enabled',
	)
);

// Header Options - Email Address.
$wp_customize->add_setting(
	'coffee_bistro_email_topbar_address',
	array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_email',
	)
);

$wp_customize->add_control(
	'coffee_bistro_email_topbar_address',
	array(
		'label'           => esc_html__( 'Email Address', 'coffee-bistro' ),
		'section'         => 'coffee_bistro_header_options',
		'type'            => 'text',
		'active_callback' => 'coffee_bistro_is_topbar_enabled',
	)
);

// Header Options - Location.
$wp_customize->add_setting(
	'coffee_bistro_location_topbar',
	array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'coffee_bistro_location_topbar',
	array(
		'label'           => esc_html__( 'Location', 'coffee-bistro' ),
		'section'         => 'coffee_bistro_header_options',
		'type'            => 'text',
		'active_callback' => 'coffee_bistro_is_topbar_enabled',
	)
);

// Header Options - Button Text.
$wp_customize->add_setting(
	'coffee_bistro_button_header_text',
	array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'coffee_bistro_button_header_text',
	array(
		'label'           => esc_html__( 'Button Text', 'coffee-bistro' ),
		'section'         => 'coffee_bistro_header_options',
		'type'            => 'text',
		'active_callback' => 'coffee_bistro_is_topbar_enabled',
	)
);

// Header Options - Button Link.
$wp_customize->add_setting(
	'coffee_bistro_button_header_link',
	array(
		'default'           => '',
		'sanitize_callback' => 'esc_url_raw',
	)
);

$wp_customize->add_control(
	'coffee_bistro_button_header_link',
	array(
		'label'           => esc_html__( 'Button Link', 'coffee-bistro' ),
		'section'         => 'coffee_bistro_header_options',
		'type'            => 'url',
		'active_callback' => 'coffee_bistro_is_topbar_enabled',
	)
);
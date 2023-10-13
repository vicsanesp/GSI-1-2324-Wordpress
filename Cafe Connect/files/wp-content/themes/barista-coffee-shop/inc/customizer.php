<?php
/**
 * Barista Coffee Shop Theme Customizer
 *
 * @link: https://developer.wordpress.org/themes/customize-api/customizer-objects/
 *
 * @package Barista Coffee Shop
 */

if ( ! defined( 'BARISTA_COFFEE_SHOP_URL' ) ) {
    define( 'BARISTA_COFFEE_SHOP_URL', __( 'https://www.themagnifico.net/themes/coffee-wordpress-theme/','barista-coffee-shop' ));
}
if ( ! defined( 'BARISTA_COFFEE_SHOP_BUY_TEXT' ) ) {
    define( 'BARISTA_COFFEE_SHOP_BUY_TEXT', __( 'Buy Barista Coffee Shop Pro','barista-coffee-shop' ));
}

use WPTRT\Customize\Section\Barista_Coffee_Shop_Button;

add_action( 'customize_register', function( $manager ) {

    $manager->register_section_type( Barista_Coffee_Shop_Button::class );

    $manager->add_section(
        new Barista_Coffee_Shop_Button( $manager, 'barista_coffee_shop_pro', [
            'title'       => __( 'Coffee Shop Pro', 'barista-coffee-shop' ),
            'priority'    => 0,
            'button_text' => __( 'GET PREMIUM', 'barista-coffee-shop' ),
            'button_url'  => esc_url( 'https://www.themagnifico.net/themes/coffee-wordpress-theme/', 'barista-coffee-shop')
        ] )
    );

} );

// Load the JS and CSS.
add_action( 'customize_controls_enqueue_scripts', function() {

    $version = wp_get_theme()->get( 'Version' );

    wp_enqueue_script(
        'barista-coffee-shop-customize-section-button',
        get_theme_file_uri( 'vendor/wptrt/customize-section-button/public/js/customize-controls.js' ),
        [ 'customize-controls' ],
        $version,
        true
    );

    wp_enqueue_style(
        'barista-coffee-shop-customize-section-button',
        get_theme_file_uri( 'vendor/wptrt/customize-section-button/public/css/customize-controls.css' ),
        [ 'customize-controls' ],
        $version
    );

} );

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function barista_coffee_shop_customize_register($wp_customize){

    // Pro Version
    class Barista_Boffee_Shop_Customize_Pro_Version extends WP_Customize_Control {
        public $type = 'pro_options';

        public function render_content() {
            echo '<span>For More <strong>'. esc_html( $this->label ) .'</strong>?</span>';
            echo '<a href="'. esc_url($this->description) .'" target="_blank">';
                echo '<span class="dashicons dashicons-info"></span>';
                echo '<strong> '. esc_html( BARISTA_COFFEE_SHOP_BUY_TEXT,'barista-coffee-shop' ) .'<strong></a>';
            echo '</a>';
        }
    }

    // Custom Controls
    function Barista_Boffee_Shop_sanitize_custom_control( $input ) {
        return $input;
    }
    $wp_customize->get_setting('blogname')->transport = 'postMessage';
    $wp_customize->get_setting('blogdescription')->transport = 'postMessage';

    $wp_customize->add_setting('barista_coffee_shop_logo_title', array(
        'default' => true,
        'sanitize_callback' => 'barista_coffee_shop_sanitize_checkbox'
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize,'barista_coffee_shop_logo_title',array(
        'label'          => __( 'Enable Disable Title', 'barista-coffee-shop' ),
        'section'        => 'title_tagline',
        'settings'       => 'barista_coffee_shop_logo_title',
        'type'           => 'checkbox',
    )));

    $wp_customize->add_setting('barista_coffee_shop_theme_description', array(
        'default' => false,
        'sanitize_callback' => 'barista_coffee_shop_sanitize_checkbox'
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize,'barista_coffee_shop_theme_description',array(
        'label'          => __( 'Enable Disable Tagline', 'barista-coffee-shop' ),
        'section'        => 'title_tagline',
        'settings'       => 'barista_coffee_shop_theme_description',
        'type'           => 'checkbox',
    )));

    //Logo
    $wp_customize->add_setting('barista_coffee_shop_logo_max_height',array(
        'default'   => '24',
        'sanitize_callback' => 'barista_coffee_shop_sanitize_number_absint'
    ));
    $wp_customize->add_control('barista_coffee_shop_logo_max_height',array(
        'label' => esc_html__('Logo Width','barista-coffee-shop'),
        'section'   => 'title_tagline',
        'type'      => 'number'
    ));

    // General Settings
     $wp_customize->add_section('barista_coffee_shop_general_settings',array(
        'title' => esc_html__('General Settings','barista-coffee-shop'),
        'priority'   => 30,
    ));

    $wp_customize->add_setting('barista_coffee_shop_preloader_hide', array(
        'default' => '0',
        'sanitize_callback' => 'barista_coffee_shop_sanitize_checkbox'
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize,'barista_coffee_shop_preloader_hide',array(
        'label'          => __( 'Show Theme Preloader', 'barista-coffee-shop' ),
        'section'        => 'barista_coffee_shop_general_settings',
        'settings'       => 'barista_coffee_shop_preloader_hide',
        'type'           => 'checkbox',
    )));

     $wp_customize->add_setting( 'barista_coffee_shop_preloader_bg_color', array(
        'default' => '#fff',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'barista_coffee_shop_preloader_bg_color', array(
        'label' => esc_html__('Preloader Background Color','barista-coffee-shop'),
        'section' => 'barista_coffee_shop_general_settings',
        'settings' => 'barista_coffee_shop_preloader_bg_color'
    )));

    $wp_customize->add_setting( 'barista_coffee_shop_preloader_dot_1_color', array(
        'default' => '#c1753d',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'barista_coffee_shop_preloader_dot_1_color', array(
        'label' => esc_html__('Preloader First Dot Color','barista-coffee-shop'),
        'section' => 'barista_coffee_shop_general_settings',
        'settings' => 'barista_coffee_shop_preloader_dot_1_color'
    )));

    $wp_customize->add_setting( 'barista_coffee_shop_preloader_dot_2_color', array(
        'default' => '#c1753d',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'barista_coffee_shop_preloader_dot_2_color', array(
        'label' => esc_html__('Preloader Second Dot Color','barista-coffee-shop'),
        'section' => 'barista_coffee_shop_general_settings',
        'settings' => 'barista_coffee_shop_preloader_dot_2_color'
    )));

    $wp_customize->add_setting('barista_coffee_shop_sticky_header', array(
      'default' => false,
      'sanitize_callback' => 'barista_coffee_shop_sanitize_checkbox'
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize,'barista_coffee_shop_sticky_header',array(
          'label'          => __( 'Show Sticky Header', 'barista-coffee-shop' ),
          'section'        => 'barista_coffee_shop_general_settings',
          'settings'       => 'barista_coffee_shop_sticky_header',
          'type'           => 'checkbox',
    )));

    $wp_customize->add_setting('barista_coffee_shop_scroll_hide', array(
        'default' => false,
        'sanitize_callback' => 'barista_coffee_shop_sanitize_checkbox'
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize,'barista_coffee_shop_scroll_hide',array(
          'label'          => __( 'Show Scroll To Top', 'barista-coffee-shop' ),
          'section'        => 'barista_coffee_shop_general_settings',
          'settings'       => 'barista_coffee_shop_scroll_hide',
          'type'           => 'checkbox',
    )));

    $wp_customize->add_setting('barista_coffee_shop_scroll_top_position',array(
        'default' => 'Right',
        'sanitize_callback' => 'barista_coffee_shop_sanitize_choices'
    ));
    $wp_customize->add_control('barista_coffee_shop_scroll_top_position',array(
        'type' => 'radio',
        'section' => 'barista_coffee_shop_general_settings',
        'choices' => array(
            'Right' => __('Right','barista-coffee-shop'),
            'Left' => __('Left','barista-coffee-shop'),
            'Center' => __('Center','barista-coffee-shop')
        ),
    ) );

  // Product Columns
   $wp_customize->add_setting( 'barista_coffee_shop_products_per_row' , array(
       'default'           => '3',
       'transport'         => 'refresh',
       'sanitize_callback' => 'barista_coffee_shop_sanitize_select',
   ) );

   $wp_customize->add_control('barista_coffee_shop_products_per_row', array(
       'label' => __( 'Product per row', 'barista-coffee-shop' ),
       'section'  => 'barista_coffee_shop_general_settings',
       'type'     => 'select',
       'choices'  => array(
           '2' => '2',
           '3' => '3',
           '4' => '4',
       ),
   ) );

   $wp_customize->add_setting('barista_coffee_shop_product_per_page',array(
       'default'   => '9',
       'sanitize_callback' => 'barista_coffee_shop_sanitize_float'
   ));
   $wp_customize->add_control('barista_coffee_shop_product_per_page',array(
       'label' => __('Product per page','barista-coffee-shop'),
       'section'   => 'barista_coffee_shop_general_settings',
       'type'      => 'number'
   ));

    // Pro Version
    $wp_customize->add_setting( 'pro_version_general_setting', array(
        'sanitize_callback' => 'Barista_Boffee_Shop_sanitize_custom_control'
    ));
    $wp_customize->add_control( new Barista_Boffee_Shop_Customize_Pro_Version ( $wp_customize,'pro_version_general_setting', array(
        'section'     => 'barista_coffee_shop_general_settings',
        'type'        => 'pro_options',
        'label'       => esc_html__( 'Customizer Options', 'barista-coffee-shop' ),
        'description' => esc_url( BARISTA_COFFEE_SHOP_URL ),
        'priority'    => 100
    )));

    // Post Settings
     $wp_customize->add_section('barista_coffee_shop_post_settings',array(
        'title' => esc_html__('Post Settings','barista-coffee-shop'),
        'priority'   =>40,
    ));

     $wp_customize->add_setting('barista_coffee_shop_post_page_title',array(
        'sanitize_callback' => 'barista_coffee_shop_sanitize_checkbox',
        'default'           => 1,
    ));
    $wp_customize->add_control('barista_coffee_shop_post_page_title',array(
        'type'        => 'checkbox',
        'label'       => esc_html__('Enable Post Page Title', 'barista-coffee-shop'),
        'section'     => 'barista_coffee_shop_post_settings',
        'description' => esc_html__('Check this box to enable title on post page.', 'barista-coffee-shop'),
    ));

    $wp_customize->add_setting('barista_coffee_shop_post_page_thumbnail',array(
        'sanitize_callback' => 'barista_coffee_shop_sanitize_checkbox',
        'default'           => 1,
    ));
    $wp_customize->add_control('barista_coffee_shop_post_page_thumbnail',array(
        'type'        => 'checkbox',
        'label'       => esc_html__('Enable Post Page Thumbnail', 'barista-coffee-shop'),
        'section'     => 'barista_coffee_shop_post_settings',
        'description' => esc_html__('Check this box to enable thumbnail on post page.', 'barista-coffee-shop'),
    ));

    $wp_customize->add_setting('barista_coffee_shop_post_page_meta',array(
        'sanitize_callback' => 'barista_coffee_shop_sanitize_checkbox',
        'default'           => 1,
    ));
    $wp_customize->add_control('barista_coffee_shop_post_page_meta',array(
        'type'        => 'checkbox',
        'label'       => esc_html__('Enable Post Page Meta', 'barista-coffee-shop'),
        'section'     => 'barista_coffee_shop_post_settings',
        'description' => esc_html__('Check this box to enable meta on post page.', 'barista-coffee-shop'),
    ));

    $wp_customize->add_setting('barista_coffee_shop_post_page_btn',array(
        'sanitize_callback' => 'barista_coffee_shop_sanitize_checkbox',
        'default'           => 1,
    ));
    $wp_customize->add_control('barista_coffee_shop_post_page_btn',array(
        'type'        => 'checkbox',
        'label'       => esc_html__('Enable Post Page Button', 'barista-coffee-shop'),
        'section'     => 'barista_coffee_shop_post_settings',
        'description' => esc_html__('Check this box to enable button on post page.', 'barista-coffee-shop'),
    ));

    $wp_customize->add_setting('barista_coffee_shop_single_post_thumb',array(
        'sanitize_callback' => 'barista_coffee_shop_sanitize_checkbox',
        'default'           => 1,
    ));
    $wp_customize->add_control('barista_coffee_shop_single_post_thumb',array(
        'type'        => 'checkbox',
        'label'       => esc_html__('Enable Single Post Thumbnail', 'barista-coffee-shop'),
        'section'     => 'barista_coffee_shop_post_settings',
        'description' => esc_html__('Check this box to enable post thumbnail on single post.', 'barista-coffee-shop'),
    ));

    $wp_customize->add_setting('barista_coffee_shop_single_post_meta',array(
        'sanitize_callback' => 'barista_coffee_shop_sanitize_checkbox',
        'default'           => 1,
    ));
    $wp_customize->add_control('barista_coffee_shop_single_post_meta',array(
        'type'        => 'checkbox',
        'label'       => esc_html__('Enable Single Post Meta', 'barista-coffee-shop'),
        'section'     => 'barista_coffee_shop_post_settings',
        'description' => esc_html__('Check this box to enable single post meta such as post date, author, category, comment etc.', 'barista-coffee-shop'),
    ));

    $wp_customize->add_setting('barista_coffee_shop_single_post_title',array(
            'sanitize_callback' => 'barista_coffee_shop_sanitize_checkbox',
            'default'           => 1,
    ));
    $wp_customize->add_control('barista_coffee_shop_single_post_title',array(
        'type'        => 'checkbox',
        'label'       => esc_html__('Enable Single Post Title', 'barista-coffee-shop'),
        'section'     => 'barista_coffee_shop_post_settings',
        'description' => esc_html__('Check this box to enable title on single post.', 'barista-coffee-shop'),
    ));

    // Page Settings
    $wp_customize->add_section('barista_coffee_shop_page_settings',array(
        'title' => esc_html__('Page Settings','barista-coffee-shop'),
        'priority'   =>50,
    ));

    $wp_customize->add_setting('barista_coffee_shop_single_page_title',array(
            'sanitize_callback' => 'barista_coffee_shop_sanitize_checkbox',
            'default'           => 1,
    ));
    $wp_customize->add_control('barista_coffee_shop_single_page_title',array(
        'type'        => 'checkbox',
        'label'       => esc_html__('Enable Single Page Title', 'barista-coffee-shop'),
        'section'     => 'barista_coffee_shop_page_settings',
        'description' => esc_html__('Check this box to enable title on single page.', 'barista-coffee-shop'),
    ));

    $wp_customize->add_setting('barista_coffee_shop_single_page_thumb',array(
        'sanitize_callback' => 'barista_coffee_shop_sanitize_checkbox',
        'default'           => 1,
    ));
    $wp_customize->add_control('barista_coffee_shop_single_page_thumb',array(
        'type'        => 'checkbox',
        'label'       => esc_html__('Enable Single Page Thumbnail', 'barista-coffee-shop'),
        'section'     => 'barista_coffee_shop_page_settings',
        'description' => esc_html__('Check this box to enable page thumbnail on single page.', 'barista-coffee-shop'),
    ));


    // Top Header
    $wp_customize->add_section('barista_coffee_shop_top_header',array(
        'title' => esc_html__('Top Header','barista-coffee-shop'),
    ));

    $wp_customize->add_setting('barista_coffee_shop_phone_text',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('barista_coffee_shop_phone_text',array(
        'label' => esc_html__('Add Text','barista-coffee-shop'),
        'section' => 'barista_coffee_shop_top_header',
        'setting' => 'barista_coffee_shop_phone_text',
        'type'  => 'text'
    ));

    $wp_customize->add_setting('barista_coffee_shop_phone',array(
        'default' => '',
        'sanitize_callback' => 'barista_coffee_shop_sanitize_phone_number'
    ));
    $wp_customize->add_control('barista_coffee_shop_phone',array(
        'label' => esc_html__('Add Phone Number','barista-coffee-shop'),
        'section' => 'barista_coffee_shop_top_header',
        'setting' => 'barista_coffee_shop_phone',
        'type'  => 'text'
    ));

     // Pro Version
    $wp_customize->add_setting( 'pro_version_top_header_setting', array(
        'sanitize_callback' => 'Barista_Boffee_Shop_sanitize_custom_control'
    ));
    $wp_customize->add_control( new Barista_Boffee_Shop_Customize_Pro_Version ( $wp_customize,'pro_version_top_header_setting', array(
        'section'     => 'barista_coffee_shop_top_header',
        'type'        => 'pro_options',
        'label'       => esc_html__( 'Customizer Options', 'barista-coffee-shop' ),
        'description' => esc_url( BARISTA_COFFEE_SHOP_URL ),
        'priority'    => 100
    )));

    // Social Link
    $wp_customize->add_section('barista_coffee_shop_social_link',array(
        'title' => esc_html__('Social Links','barista-coffee-shop'),
    ));

    $wp_customize->add_setting('barista_coffee_shop_facebook_url',array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
    $wp_customize->add_control('barista_coffee_shop_facebook_url',array(
        'label' => esc_html__('Facebook Link','barista-coffee-shop'),
        'section' => 'barista_coffee_shop_social_link',
        'setting' => 'barista_coffee_shop_facebook_url',
        'type'  => 'url'
    ));

    $wp_customize->add_setting('barista_coffee_shop_twitter_url',array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
    $wp_customize->add_control('barista_coffee_shop_twitter_url',array(
        'label' => esc_html__('Twitter Link','barista-coffee-shop'),
        'section' => 'barista_coffee_shop_social_link',
        'setting' => 'barista_coffee_shop_twitter_url',
        'type'  => 'url'
    ));

    $wp_customize->add_setting('barista_coffee_shop_intagram_url',array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
    $wp_customize->add_control('barista_coffee_shop_intagram_url',array(
        'label' => esc_html__('Intagram Link','barista-coffee-shop'),
        'section' => 'barista_coffee_shop_social_link',
        'setting' => 'barista_coffee_shop_intagram_url',
        'type'  => 'url'
    ));

    $wp_customize->add_setting('barista_coffee_shop_linkedin_url',array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
    $wp_customize->add_control('barista_coffee_shop_linkedin_url',array(
        'label' => esc_html__('Linkedin Link','barista-coffee-shop'),
        'section' => 'barista_coffee_shop_social_link',
        'setting' => 'barista_coffee_shop_linkedin_url',
        'type'  => 'url'
    ));

    $wp_customize->add_setting('barista_coffee_shop_youtube_url',array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
    $wp_customize->add_control('barista_coffee_shop_youtube_url',array(
        'label' => esc_html__('YouTube Link','barista-coffee-shop'),
        'section' => 'barista_coffee_shop_social_link',
        'setting' => 'barista_coffee_shop_pintrest_url',
        'type'  => 'url'
    ));
    
     // Pro Version
    $wp_customize->add_setting( 'pro_version_social_setting', array(
        'sanitize_callback' => 'Barista_Boffee_Shop_sanitize_custom_control'
    ));
    $wp_customize->add_control( new Barista_Boffee_Shop_Customize_Pro_Version ( $wp_customize,'pro_version_social_setting', array(
        'section'     => 'barista_coffee_shop_social_link',
        'type'        => 'pro_options',
        'label'       => esc_html__( 'Customizer Options', 'barista-coffee-shop' ),
        'description' => esc_url( BARISTA_COFFEE_SHOP_URL ),
        'priority'    => 100
    )));

    //Slider
    $wp_customize->add_section('barista_coffee_shop_top_slider',array(
        'title' => esc_html__('Slider Option','barista-coffee-shop')
    ));

    $wp_customize->add_setting('barista_coffee_shop_slider_setting', array(
        'default' => false,
        'sanitize_callback' => 'barista_coffee_shop_sanitize_checkbox'
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize,'barista_coffee_shop_slider_setting',array(
        'label'          => __( 'Show Slider', 'barista-coffee-shop' ),
        'section'        => 'barista_coffee_shop_top_slider',
        'settings'       => 'barista_coffee_shop_slider_setting',
        'type'           => 'checkbox',
    )));

    for ( $barista_coffee_shop_count = 1; $barista_coffee_shop_count <= 3; $barista_coffee_shop_count++ ) {
        $wp_customize->add_setting( 'barista_coffee_shop_top_slider_page' . $barista_coffee_shop_count, array(
            'default'           => '',
            'sanitize_callback' => 'barista_coffee_shop_sanitize_dropdown_pages'
        ) );
        $wp_customize->add_control( 'barista_coffee_shop_top_slider_page' . $barista_coffee_shop_count, array(
            'label'    => __( 'Select Slide Page', 'barista-coffee-shop' ),
            'section'  => 'barista_coffee_shop_top_slider',
            'type'     => 'dropdown-pages'
        ) );
    }
    $wp_customize->add_setting('barista_coffee_shop_slider_loop', array(
        'default' => 1,
        'sanitize_callback' => 'barista_coffee_shop_sanitize_checkbox'
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize,'barista_coffee_shop_slider_loop',array(
        'label'          => __( 'Enable Disable Slider Loop', 'barista-coffee-shop' ),
        'section'        => 'barista_coffee_shop_top_slider',
        'settings'       => 'barista_coffee_shop_slider_loop',
        'type'           => 'checkbox',
    )));

     // Pro Version
    $wp_customize->add_setting( 'pro_version_slider_setting', array(
        'sanitize_callback' => 'Barista_Boffee_Shop_sanitize_custom_control'
    ));
    $wp_customize->add_control( new Barista_Boffee_Shop_Customize_Pro_Version ( $wp_customize,'pro_version_slider_setting', array(
        'section'     => 'barista_coffee_shop_top_slider',
        'type'        => 'pro_options',
        'label'       => esc_html__( 'Customizer Options', 'barista-coffee-shop' ),
        'description' => esc_url( BARISTA_COFFEE_SHOP_URL ),
        'priority'    => 100
    )));

    //Product
    $wp_customize->add_section('barista_coffee_shop_new_product',array(
        'title' => esc_html__('Featured Product','barista-coffee-shop'),
        'description' => esc_html__('Here you have to select product category which will display perticular new featured product in the home page.','barista-coffee-shop')
    ));

    $wp_customize->add_setting('barista_coffee_shop_product_setting', array(
        'default' => false,
        'sanitize_callback' => 'barista_coffee_shop_sanitize_checkbox'
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize,'barista_coffee_shop_product_setting',array(
        'label'          => __( 'Show Featured Product', 'barista-coffee-shop' ),
        'section'        => 'barista_coffee_shop_new_product',
        'settings'       => 'barista_coffee_shop_product_setting',
        'type'           => 'checkbox',
    )));

    $wp_customize->add_setting('barista_coffee_shop_new_product_title',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('barista_coffee_shop_new_product_title',array(
        'label' => esc_html__('Title','barista-coffee-shop'),
        'section' => 'barista_coffee_shop_new_product',
        'setting' => 'barista_coffee_shop_new_product_title',
        'type'  => 'text'
    ));

    $wp_customize->add_setting('barista_coffee_shop_new_product_text',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('barista_coffee_shop_new_product_text',array(
        'label' => esc_html__('Text','barista-coffee-shop'),
        'section' => 'barista_coffee_shop_new_product',
        'setting' => 'barista_coffee_shop_new_product_text',
        'type'  => 'text'
    ));

    $wp_customize->add_setting('barista_coffee_shop_new_product_number',array(
        'default' => '',
        'sanitize_callback' => 'absint'
    ));
    $wp_customize->add_control('barista_coffee_shop_new_product_number',array(
        'label' => esc_html__('No of Product','barista-coffee-shop'),
        'section' => 'barista_coffee_shop_new_product',
        'setting' => 'barista_coffee_shop_new_product_number',
        'type'  => 'number'
    ));

    $barista_coffee_shop_args = array(
       'type'                     => 'product',
        'child_of'                 => 0,
        'parent'                   => '',
        'orderby'                  => 'term_group',
        'order'                    => 'ASC',
        'hide_empty'               => false,
        'hierarchical'             => 1,
        'number'                   => '',
        'taxonomy'                 => 'product_cat',
        'pad_counts'               => false
    );
    $categories = get_categories( $barista_coffee_shop_args );
    $cats = array();
    $i = 0;
    foreach($categories as $category){
        if($i==0){
            $default = $category->slug;
            $i++;
        }
        $cats[$category->slug] = $category->name;
    }
    $wp_customize->add_setting('barista_coffee_shop_new_product_category',array(
        'sanitize_callback' => 'barista_coffee_shop_sanitize_select',
    ));
    $wp_customize->add_control('barista_coffee_shop_new_product_category',array(
        'type'    => 'select',
        'choices' => $cats,
        'label' => __('Select Product Category','barista-coffee-shop'),
        'section' => 'barista_coffee_shop_new_product',
    ));

     // Pro Version
    $wp_customize->add_setting( 'pro_version_product_setting', array(
        'sanitize_callback' => 'Barista_Boffee_Shop_sanitize_custom_control'
    ));
    $wp_customize->add_control( new Barista_Boffee_Shop_Customize_Pro_Version ( $wp_customize,'pro_version_product_setting', array(
        'section'     => 'barista_coffee_shop_new_product',
        'type'        => 'pro_options',
        'label'       => esc_html__( 'Customizer Options', 'barista-coffee-shop' ),
        'description' => esc_url( BARISTA_COFFEE_SHOP_URL ),
        'priority'    => 100
    )));

    // Footer
    $wp_customize->add_section('barista_coffee_shop_site_footer_section', array(
        'title' => esc_html__('Footer', 'barista-coffee-shop'),
    ));

    $wp_customize->add_setting('barista_coffee_shop_footer_text_setting', array(
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('barista_coffee_shop_footer_text_setting', array(
        'label' => __('Replace the footer text', 'barista-coffee-shop'),
        'section' => 'barista_coffee_shop_site_footer_section',
        'priority' => 1,
        'type' => 'text',
    ));

    $wp_customize->add_setting('barista_coffee_shop_show_hide_copyright',array(
        'default' => true,
        'sanitize_callback' => 'barista_coffee_shop_sanitize_checkbox'
    ));
    $wp_customize->add_control('barista_coffee_shop_show_hide_copyright',array(
        'type' => 'checkbox',
        'label' => __('Show / Hide Copyright','barista-coffee-shop'),
        'section' => 'barista_coffee_shop_site_footer_section',
    ));

     // Pro Version
    $wp_customize->add_setting( 'pro_version_footer_setting', array(
        'sanitize_callback' => 'Barista_Boffee_Shop_sanitize_custom_control'
    ));
    $wp_customize->add_control( new Barista_Boffee_Shop_Customize_Pro_Version ( $wp_customize,'pro_version_footer_setting', array(
        'section'     => 'barista_coffee_shop_site_footer_section',
        'type'        => 'pro_options',
        'label'       => esc_html__( 'Customizer Options', 'barista-coffee-shop' ),
        'description' => esc_url( BARISTA_COFFEE_SHOP_URL ),
        'priority'    => 100
    )));
}
add_action('customize_register', 'barista_coffee_shop_customize_register');

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function barista_coffee_shop_customize_partial_blogname(){
    bloginfo('name');
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function barista_coffee_shop_customize_partial_blogdescription(){
    bloginfo('description');
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function barista_coffee_shop_customize_preview_js(){
    wp_enqueue_script('barista-coffee-shop-customizer', esc_url(get_template_directory_uri()) . '/assets/js/customizer.js', array('customize-preview'), '20151215', true);
}
add_action('customize_preview_init', 'barista_coffee_shop_customize_preview_js');

/*
** Load dynamic logic for the customizer controls area.
*/
function barista_coffee_shop_panels_js() {
    wp_enqueue_style( 'barista-coffee-shop-customizer-layout-css', get_theme_file_uri( '/assets/css/customizer-layout.css' ) );
    wp_enqueue_script( 'barista-coffee-shop-customize-layout', get_theme_file_uri( '/assets/js/customize-layout.js' ), array(), '1.2', true );
}
add_action( 'customize_controls_enqueue_scripts', 'barista_coffee_shop_panels_js' );

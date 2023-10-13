<?php
/**
 * Coffee Bistro functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package coffee_bistro
 */

if ( ! defined( 'COFFEE_BISTRO_VERSION' ) ) {
	define( 'COFFEE_BISTRO_VERSION', '1.0.0' );
}
$coffee_bistro_theme_data = wp_get_theme();

if( ! defined( 'COFFEE_BISTRO_THEME_NAME' ) ) define( 'COFFEE_BISTRO_THEME_NAME', $coffee_bistro_theme_data->get( 'Name' ) );

if ( ! function_exists( 'coffee_bistro_setup' ) ) :
	
	function coffee_bistro_setup() {
		
		load_theme_textdomain( 'coffee-bistro', get_template_directory() . '/languages' );

		add_theme_support( 'automatic-feed-links' );
		
		add_theme_support( 'title-tag' );

		add_theme_support( 'post-thumbnails' );

		register_nav_menus(
			array(
				'primary' => esc_html__( 'Primary', 'coffee-bistro' ),
			)
		);

		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
				'woocommerce',
			)
		);

		add_theme_support(
			'custom-background',
			apply_filters(
				'coffee_bistro_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		add_theme_support( 'customize-selective-refresh-widgets' );

		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);

		add_theme_support( 'align-wide' );

		add_theme_support( 'responsive-embeds' );
	}
endif;
add_action( 'after_setup_theme', 'coffee_bistro_setup' );

function coffee_bistro_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'coffee_bistro_content_width', 640 );
}
add_action( 'after_setup_theme', 'coffee_bistro_content_width', 0 );

function coffee_bistro_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'coffee-bistro' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'coffee-bistro' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title"><span>',
			'after_title'   => '</span></h2>',
		)
	);

	// Regsiter 4 footer widgets.
	register_sidebars(
		4,
		array(
			/* translators: %d: Footer Widget count. */
			'name'          => esc_html__( 'Footer Widget %d', 'coffee-bistro' ),
			'id'            => 'footer-widget',
			'description'   => esc_html__( 'Add widgets here.', 'coffee-bistro' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h6 class="widget-title"><span>',
			'after_title'   => '</span></h6>',
		)
	);
}
add_action( 'widgets_init', 'coffee_bistro_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function coffee_bistro_scripts() {
	// Append .min if SCRIPT_DEBUG is false.
	$min = ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) ? '' : '.min';

	// Slick style.
	wp_enqueue_style( 'coffee-bistro-slick-style', get_template_directory_uri() . '/resource/css/slick' . $min . '.css', array(), '1.8.1' );

	// Fontawesome style.
	wp_enqueue_style( 'coffee-bistro-fontawesome-style', get_template_directory_uri() . '/resource/css/fontawesome' . $min . '.css', array(), '5.15.4' );

	// Main style.
	wp_enqueue_style( 'coffee-bistro-style', get_template_directory_uri() . '/style.css', array(), COFFEE_BISTRO_VERSION );

	// Navigation script.
	wp_enqueue_script( 'coffee-bistro-navigation-script', get_template_directory_uri() . '/resource/js/navigation' . $min . '.js', array(), COFFEE_BISTRO_VERSION, true );

	// Slick script.
	wp_enqueue_script( 'coffee-bistro-slick-script', get_template_directory_uri() . '/resource/js/slick' . $min . '.js', array( 'jquery' ), '1.8.1', true );

	// Custom script.
	wp_enqueue_script( 'coffee-bistro-custom-script', get_template_directory_uri() . '/resource/js/custom' . $min . '.js', array( 'jquery' ), COFFEE_BISTRO_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	// Include the file.
	require_once get_theme_file_path( 'theme-library/function-files/wptt-webfont-loader.php' );

	// Load the webfont.
	wp_enqueue_style(
		'alice',
		wptt_get_webfont_url( 'https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap' ),
		array(),
		'1.0'
	);

	// Load the webfont.
	wp_enqueue_style(
		'jost',
		wptt_get_webfont_url( 'https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap' ),
		array(),
		'1.0'
	);

}
add_action( 'wp_enqueue_scripts', 'coffee_bistro_scripts' );

//Redirecting function on getstart
function coffee_bistro_setup_options(){
    global $pagenow;
    if ( is_admin() && ('themes.php' == $pagenow) && isset( $_GET['activated'] ) ) {
   		wp_safe_redirect( admin_url("themes.php?page=coffee-bistro-getting-started") );
   	}
}
add_action('after_setup_theme', 'coffee_bistro_setup_options');


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/theme-library/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/theme-library/function-files/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/theme-library/function-files/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/theme-library/customizer.php';

/**
 * Breadcrumb
 */
require get_template_directory() . '/theme-library/function-files/class-breadcrumb-trail.php';

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/theme-library/function-files/woocommerce.php';
}

/**
 * Getting Started
*/
require get_template_directory() . '/theme-library/getting-started/getting-started.php';
<?php
/**
 * AcrossThat functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package AcrossThat
 */

	/**
	 * GLOBAL VARIABLES
	 *
	 */

	 global $section_count;

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'ax__setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function ax__setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on AcrossThat, use a find and replace
		 * to change 'ax_' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'ax_', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'ax_' ),
				'menu-topbar-social' => esc_html__( 'Social Links', 'ax_' ),
				'social-2' => esc_html__( 'Social 2', 'ax_' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
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
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'ax__custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'ax__setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function ax__content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'ax__content_width', 640 );
}
add_action( 'after_setup_theme', 'ax__content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ax__widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'ax_' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'ax_' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name' => esc_html__('Footer Column One', 'ax_'),
			'id' => 'footer-area-1',
			'description' => '',
			'before_widget' => '<aside id="%1$s" class="widget %2$s ">',
			'after_widget' => '</aside>',
			'before_title' => '<h4 class="widget-title">',
			'after_title' => '</h4>',
		)
	);
	register_sidebar(
		array(
			'name' => esc_html__('Footer Column Two', 'ax_'),
			'id' => 'footer-area-2',
			'description' => '',
			'before_widget' => '<aside id="%1$s" class="widget %2$s ">',
			'after_widget' => '</aside>',
			'before_title' => '<h4 class="widget-title">',
			'after_title' => '</h4>',
		)
	);
	register_sidebar(
		array(
			'name' => esc_html__('Footer Column Three', 'ax_'),
			'id' => 'footer-area-3',
			'description' => '',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h4 class="widget-title">',
			'after_title' => '</h4>',
		)
	);
}
add_action( 'widgets_init', 'ax__widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function ax__scripts() {

	//User Styles
	wp_enqueue_style( 'ax_-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'ax_-style', 'rtl', 'replace' );
	wp_enqueue_style( 'ax_-user-style', get_template_directory_uri() . '/dist/assets/css/style.css', array(), _S_VERSION );

	// Vendor Styles
	wp_enqueue_style( 'ax_-vendor-animatecss', get_template_directory_uri() . '/dist/assets/vendor/animate/animate.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'ax_-vendor-aos', get_template_directory_uri() . '/dist/assets/vendor/aos/aos.css', array(), _S_VERSION );
	wp_enqueue_style( 'ax_-vendor-bootstrap', get_template_directory_uri() . '/dist/assets/vendor/bootstrap/css/bootstrap.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'ax_-vendor-boxiconsanim', get_template_directory_uri() . '/dist/assets/vendor/boxicons/css/animations.css', array(), _S_VERSION );
	wp_enqueue_style( 'ax_-vendor-boxiconsall', get_template_directory_uri() . '/dist/assets/vendor/boxicons/css/boxicons.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'ax_-vendor-boxiconstrans', get_template_directory_uri() . '/dist/assets/vendor/boxicons/css/transformations.css', array(), _S_VERSION );
	wp_enqueue_style( 'ax_-vendor-icofont', get_template_directory_uri() . '/dist/assets/vendor/icofont/icofont.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'ax_-vendor-venobox', get_template_directory_uri() . '/dist/assets/vendor/venobox/venobox.min.css', array(), _S_VERSION );

	// Vendor scripts
	wp_enqueue_script( 'ax_-vendorjs-aos', get_template_directory_uri() . '/dist/assets/vendor/aos/aos.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'ax_-vendorjs-bootstrap', get_template_directory_uri() . '/dist/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'ax_-vendorjs-counterup', get_template_directory_uri() . '/dist/assets/vendor/counterup/counterup.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'ax_-vendorjs-isotope', get_template_directory_uri() . '/dist/assets/vendor/isotope-layout/isotope.pkgd.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'ax_-vendorjs-veno', get_template_directory_uri() . '/dist/assets/vendor/venobox/venobox.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'ax_-vendorjs-counterup', get_template_directory_uri() . '/dist/assets/vendor/aos/aos.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'ax_-vendorjs-waypoints', get_template_directory_uri() . '/dist/assets/vendor/waypoints/jquery.waypoints.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'ax_-vendorjs-jqsticky', get_template_directory_uri() . '/dist/assets/vendor/jquery-sticky/jquery.sticky.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'ax_-vendorjs-jqeasing', get_template_directory_uri() . '/dist/assets/vendor/jquery.easing/jquery.easing.min.js', array(), _S_VERSION, true );


	//User Scripts
	wp_enqueue_script( 'ax_-navigation', get_template_directory_uri() . '/dist/assets/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'ax_-userJS', get_template_directory_uri() . '/dist/assets/js/main.js', array('jquery'), _S_VERSION, true );

	// wp_enqueue_script( 'ax_-customizer', get_template_directory_uri() . '/dist/assets/js/customizer.js', array(), _S_VERSION, true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'ax__scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();	
}

//======================================================================
// Checking if ACF is Activated
//======================================================================
function acf_activated() {
	if (function_exists('get_field')) {
		return true;
	}
	return false;
}
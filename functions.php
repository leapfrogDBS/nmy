<?php
/**
 * nmy functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package nmy
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function nmy_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on nmy, use a find and replace
		* to change 'nmy' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'nmy', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'nmy' ),
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
			'nmy_custom_background_args',
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
add_action( 'after_setup_theme', 'nmy_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function nmy_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'nmy_content_width', 640 );
}
add_action( 'after_setup_theme', 'nmy_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function nmy_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'nmy' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'nmy' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'nmy_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function nmy_scripts() {
	wp_enqueue_style( 'nmy-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'nmy-style', 'rtl', 'replace' );

	wp_enqueue_script( 'nmy-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'nmy_scripts' );

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

function add_custom_scripts() {
	wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js');
	wp_enqueue_script('app-js', get_template_directory_uri() . '/js/app.js');
	wp_enqueue_style('tailwind-css', get_template_directory_uri() . '/css/tailwind.css');
	wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css');	
}
	
add_action( 'wp_enqueue_scripts', 'add_custom_scripts' );

if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
	function my_jquery_enqueue() {
  		wp_deregister_script('jquery');
   		wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js", false, null);
   		wp_enqueue_script('jquery');
}

function create_custom_post_types() {
	register_post_type('apartments',
	  array(
		'labels' => array(
		  'name' => __('Apartments'),
		  'singular_name' => __('Apartment')
		),
		'public' => true,
		'has_archive' => true,
		'menu_icon' => 'dashicons-admin-home',
		'supports' => array( 'title', 'editor', 'thumbnail' ),
	  )
	);
	
	register_post_type('amenities',
	  array(
		'labels' => array(
		  'name' => __('Amenities'),
		  'singular_name' => __('Amenity')
		),
		'public' => true,
		'has_archive' => true,
		'menu_icon' => 'dashicons-admin-generic',
		'supports' => array( 'title', 'thumbnail' ),
	  )
	);
	
	register_post_type('featured_amenities',
	  array(
		'labels' => array(
		  'name' => __('Featured Amenities'),
		  'singular_name' => __('Featured Amenity')
		),
		'public' => true,
		'has_archive' => true,
		'menu_icon' => 'dashicons-star-filled',
		'supports' => array( 'title', 'thumbnail' ),
	  )
	);
  }
  add_action('init', 'create_custom_post_types');
  

  


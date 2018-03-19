<?php
/**
 * StarfishTheme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package starfish_Theme
 */

if ( ! function_exists( 'starfish_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function starfish_setup() {
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html( 'Primary Menu' ),
	) );

	// Switch search form, comment form, and comments to output valid HTML5.
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

}
endif; // starfish_setup
add_action( 'after_setup_theme', 'starfish_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * @global int $content_width
 */
function starfish_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'starfish_content_width', 640 );
}
add_action( 'after_setup_theme', 'starfish_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function starfish_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html( 'Sidebar' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name' 			=> esc_html( 'Footer Sidebar' ),
		'id' 			=> 'footer-sidebar-1',
		'description' 	=> 'Appears in the footer area',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' 	=> '</aside>',
		'before_title' 	=> '<h3 class="widget-title">',
		'after_title' 	=> '</h3>',
	) );
}
add_action( 'widgets_init', 'starfish_widgets_init' );

/**
 * Filter the stylesheet_uri to output the minified CSS file.
 */
function starfish_minified_css( $stylesheet_uri, $stylesheet_dir_uri ) {
	if ( file_exists( get_template_directory() . '/build/css/style.min.css' ) ) {
		$stylesheet_uri = $stylesheet_dir_uri . '/build/css/style.min.css';
	}

	return $stylesheet_uri;
}
add_filter( 'stylesheet_uri', 'starfish_minified_css', 10, 2 );

/**
 * Enqueue scripts and styles.
 */
function starfish_scripts() {
	wp_enqueue_style( 'starfish-style', get_stylesheet_uri() );

	// This is the ENQUEUE scripts for opening menu javascript file
	wp_enqueue_script( 'open-side-menu', get_template_directory_uri() . '/build/js/open-side-menu.min.js', array(), '20130115', true);

	wp_enqueue_script('carousels', get_template_directory_uri() . '/build/js/carousels.min.js', array(), '20130115', true);

	wp_enqueue_script( 'font-awesome', 'https://use.fontawesome.com/releases/v5.0.7/js/all.js' );
	
	wp_enqueue_script( 'starfish-get-flickity-cdn', 'https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js', array(), true);

	wp_enqueue_script( 'starfish-skip-link-focus-fix', get_template_directory_uri() . '/build/js/skip-link-focus-fix.min.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'starfish_scripts' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';


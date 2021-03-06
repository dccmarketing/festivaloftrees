<?php
/**
 * Festival of Trees functions and definitions
 *
 * @package Festival of Trees
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'festival_of_trees_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function festival_of_trees_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on _s, use a find and replace
	 * to change 'festival-of-trees' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'festival-of-trees', get_template_directory() . '/languages' );

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
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'festival-of-trees' ),
		'social' => __( 'Social Links', 'festival-of-trees' ),
		'header' => __( 'Header Menu', 'festival-of-trees' ),
		'footer' => __( 'Footer Menu', 'festival-of-trees' )
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	/*add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );*/

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'festival_of_trees_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

} // festival_of_trees_setup()
endif; // festival_of_trees_setup
add_action( 'after_setup_theme', 'festival_of_trees_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function festival_of_trees_widgets_init() {

	register_sidebar( array(
		'name'          => __( 'Sidebar', 'festival-of-trees' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );

} // festival_of_trees_widgets_init()
add_action( 'widgets_init', 'festival_of_trees_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function festival_of_trees_scripts() {

	wp_enqueue_style( 'festivaloftrees-style', get_stylesheet_uri() );

	wp_enqueue_script( 'festivaloftrees-navigation', get_template_directory_uri() . '/js/navigation.min.js', array(), '20120206', true );
	wp_enqueue_script( 'festivaloftrees-classie', get_template_directory_uri() . '/js/classie.min.js', array(), '20150316', true );
	wp_enqueue_script( 'festivaloftrees-nav-header', get_template_directory_uri() . '/js/nav-header.min.js', array( 'festivaloftrees-classie' ), '20150316', true );

	wp_enqueue_script( 'festivaloftrees-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.min.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

} // festival_of_trees_scripts()
add_action( 'wp_enqueue_scripts', 'festival_of_trees_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load Slushman Themekit
 */
require get_template_directory() . '/inc/themekit.php';

/**
 * Load Attractions CPT
 */
//require get_template_directory() . '/inc/attractions.php';

/**
 * Returns a post object of the requested post type
 *
 * @param 	string 		$post 			The name of the post type
 * @param   array 		$params 		Optional parameters
 * @return 	object 		A post object
 */
function festival_of_trees_get_posts( $post, $params = array() ) {

	$return = '';
	$return = wp_cache_get( 'festival_of_trees_' . $post . '_posts', 'festival_of_trees_posts' );

	if ( false === $return ) {

		$args['post_type'] 				= $post;
		$args['post_status'] 			= 'publish';
		$args['order'] 					= 'DESC';
		$args['orderby'] 				= 'date';
		$args['posts_per_page'] 		= 50;
		$args['no_found_rows']			= true;
		$args['update_post_meta_cache'] = false;
		$args['update_post_term_cache'] = false;

		if ( ! empty( $params ) ) {

			foreach ( $params as $key => $value ) {

				$args[$key] = $value;

			}

		}

		$query = new WP_Query( $args );

		if ( ! is_wp_error( $query ) && $query->have_posts() ) {

			wp_cache_set( 'festival_of_trees_' . $post . '_posts', $query, 'festival_of_trees_posts', 5 * MINUTE_IN_SECONDS );

			$return = $query;

		}

	}

	return $return;

} // festival_of_trees_get_posts()

function festival_of_trees_get_events() {

	$args['posts_per_page'] = 200;
	$args['eventDisplay'] 	= 'list';
	$args['meta_key'] 		= '_EventStartDate';
	$args['meta_value'] 	= array( current_time( 'Y-m-d' ) . ' 00:00:00', current_time( 'Y-m-d' ) . ' 23:59:59' );
	$args['meta_compare'] 	= 'BETWEEN';

	return tribe_get_events( $args );

}





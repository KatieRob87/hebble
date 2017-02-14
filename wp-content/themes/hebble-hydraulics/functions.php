<?php
/**
 * Hebble Hydraulics functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Hebble_Hydraulics
 */

if ( ! function_exists( 'hebble_hydraulics_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function hebble_hydraulics_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Hebble Hydraulics, use a find and replace
	 * to change 'hebble-hydraulics' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'hebble-hydraulics', get_template_directory() . '/languages' );

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
	register_nav_menus( array(
		'primary_menu' => esc_html__( 'Primary', 'hebble-hydraulics' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'hebble_hydraulics_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'hebble_hydraulics_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function hebble_hydraulics_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'hebble_hydraulics_content_width', 640 );
}
add_action( 'after_setup_theme', 'hebble_hydraulics_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function hebble_hydraulics_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'hebble-hydraulics' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'hebble-hydraulics' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'hebble_hydraulics_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function hebble_hydraulics_scripts() {
	wp_enqueue_style( 'hebble-hydraulics-style', get_stylesheet_uri() );

	wp_enqueue_style( 'prewp.css', get_stylesheet_directory_uri() . '/assets/styles/prewp.css' );

	wp_enqueue_style( 'wp.css', get_stylesheet_directory_uri() . '/assets/styles/wp.css' );

	wp_enqueue_style( 'lightbox.css', 'https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.9.0/css/lightbox.css' );

	wp_enqueue_style( 'fontAwesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

	wp_enqueue_script( 'plugins.js', get_template_directory_uri() . '/assets/scripts/plugins.js', array( 'jquery' ), '1.0', true );

	wp_enqueue_script( 'lightbox.js', 'https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.9.0/js/lightbox-plus-jquery.js', array( 'jquery' ), '1.0', true );

	wp_enqueue_script( 'vendor.js', get_template_directory_uri() . '/assets/scripts/vendor.js', array( 'jquery' ), '1.0', true );


	wp_enqueue_script( 'main.js', get_template_directory_uri() . '/assets/scripts/main.js', array( 'jquery' ), '1.0', true );

}
add_action( 'wp_enqueue_scripts', 'hebble_hydraulics_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

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

// CPTs
/**
 * Add Testimonial CPT
 */
add_action( 'init', 'create_post_type_testimonial' );
function create_post_type_testimonial() {
    register_post_type( 'testimonial',
        array(
            'labels' => array(
                'name' => __( 'Testimonials' ),
                'singular_name' => __( 'Testimonial' )
            ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-editor-quote',
        'rewrite' => true,
        'capability_type' => 'post',
        'supports' => array('title', 'editor', 'thumbnail'),
        'taxonomies' => array('category', 'post_tag')
        )
    );
}

/**
 * Add Project CPT
 */
add_action( 'init', 'create_post_type_project' );
function create_post_type_project() {
    register_post_type( 'project',
        array(
            'labels' => array(
                'name' => __( 'Projects' ),
                'singular_name' => __( 'Project' )
            ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-admin-tools',
        'rewrite' => true,
        'capability_type' => 'post',
        'supports' => array('title', 'editor', 'thumbnail'),
        'taxonomies' => array('category', 'post_tag')
        )
    );
}

/**
 * Add theme options page
 */
if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Theme Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
		'parent_slug'	=> 'options-general.php'
	));

}

/**
 * Function to check if page is child of parent ID, returns bool
 */
function is_child($pageID) {
	global $post;
	if( is_page() && ($post->post_parent==$pageID) ) {
        return true;
	} else {
        return false;
	}
}

<?php
/**
 * Likeio Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Likeio_Theme
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'likeiotheme_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function likeiotheme_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Likeio Theme, use a find and replace
		 * to change 'likeiotheme' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'likeiotheme', get_template_directory() . '/languages' );

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
				'menu-primary' => esc_html__( 'Primary', 'likeiotheme' ),
				'menu-secondary' => esc_html__( 'Secondary', 'likeiotheme' ),
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


		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add theme support for wp block styles.
		 */
		add_theme_support( 'wp-block-styles' );
		
		/**
		 * Add theme support for custom color Palettes
		 */
		
		add_theme_support( 'editor-color-palette', array(
			array(
				'name' => __( 'Light Pink', 'likeiotheme' ),
				'slug' => 'light-pink',
				'color' => '#f8f2ec',
			),
			array(
				'name' => __( 'Light Grey', 'likeiotheme' ),
				'slug' => 'light-grey',
				'color' => '#eaeaea ',
			),
			array(
				'name' => __( 'Yellow Orange', 'likeiotheme' ),
				'slug' => 'yellow-orange',
				'color' => '#ffdcba',
			),
			
			array(
				'name' => __( 'Pink Orange', 'likeiotheme' ),
				'slug' => 'pink-orange',
				'color' => '#fbeada',
			),
			array(
				'name' => __( 'black', 'likeiotheme' ),
				'slug' => 'black',
				'color' => '#000',
			),
			array(
				'name' => __( 'white', 'likeiotheme' ),
				'slug' => 'white',
				'color' => '#FFF',
			)

		) );

		/**
		 * add theme support for custom font size choice 
		 */

		add_theme_support( 'editor-font-sizes', array(
			array(
				'name' => __( 'Small', 'likeiothemeLangDomain' ),
				'size' => 16,
				'slug' => 'small'
			),
			array(
				'name' => __( 'Regular', 'likeiothemeLangDomain' ),
				'size' => 22,
				'slug' => 'regular'
			),
			array(
				'name' => __( 'Large', 'likeiothemeLangDomain' ),
				'size' => 36,
				'slug' => 'large'
			),
			array(
				'name' => __( 'Huge', 'likeiothemeLangDomain' ),
				'size' => 50,
				'slug' => 'huge'
			)
		) );

		/**
		 * add theme support disable font size choice 
		 */

		add_theme_support('disable-custom-font-sizes');

		/**
		 * add theme support for disabling custom color choice 
		 */ 
		add_theme_support( 'disable-custom-colors' );
		

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
add_action( 'after_setup_theme', 'likeiotheme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function likeiotheme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'likeiotheme_content_width', 640 );
}
add_action( 'after_setup_theme', 'likeiotheme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function likeiotheme_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar - Archive', 'likeiotheme' ),
			'id'            => 'sidebar-archive',
			'description'   => esc_html__( 'Add widgets here.', 'likeiotheme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar - Single', 'likeiotheme' ),
			'id'            => 'sidebar-single-post',
			'description'   => esc_html__( 'Add widgets here.', 'likeiotheme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'likeiotheme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function likeiotheme_scripts() {
	wp_enqueue_style( 'likeiotheme-style', get_stylesheet_uri(), array(), _S_VERSION );

	// Enqueue foundation min style ********************************************

	wp_enqueue_style( 
		'likeiotheme-foundation', 
		get_template_directory_uri() .'/assets/css/vendor/foundation.min.css', 
		null, 
		'6.5.1' 
	);

	// Enqueue custom style ********************************************
	wp_enqueue_style(
		'custom-style',
		get_stylesheet_directory_uri() . '/assets/css/custom.css',
		array()
	);

	// Enqueue what input js
	wp_enqueue_script ( 'likeiotheme-what-input', get_template_directory_uri() .'/assets/js/vendor/what-input.js', array('jquery'), '6.5.1', true);

	// Enqueue foundation min js
	wp_enqueue_script ( 'likeiotheme-foundation', get_template_directory_uri() .'/assets/js/vendor/foundation.min.js', array('jquery','likeiotheme-what-input'), '6.5.1', true);
	
	// Enqueue fontawesome
	wp_enqueue_script ('FontAwesome', 'https://use.fontawesome.com/releases/v5.8.2/js/all.js', null, null, true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'likeiotheme_scripts' );


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
 * enqueue block editor assets
 */
function likeiotheme_enqueue_block_editor_assets(){
	wp_enqueue_script(
		'editor-script',
		get_template_directory_uri() . '/assets/js/editor.js',
		array( 'wp-blocks', 'wp-dom-ready', 'wp-edit-post' )
	);
}

add_action( 'enqueue_block_editor_assets', 'likeiotheme_enqueue_block_editor_assets' );

/**
 * enqueue block assets
 */

function likeiotheme_enqueue_block_assets(){
	wp_enqueue_style( 
		'block-style', 
		get_template_directory_uri() . '/assets/css/blocks.css'
	);
}

add_action( 'enqueue_block_assets', 'likeiotheme_enqueue_block_assets' );



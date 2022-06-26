<?php
/**
 * Theme Functions
 */

if ( ! defined( 'BRAVE_VERSION' ) ) {
    //theme version
	define( 'BRAVE_VERSION', '1.0.0' );
}

/**
 * 
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function brave_setup() {
	load_theme_textdomain( 'brave', get_template_directory() . '/languages' );

	// add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

    // manage document title
	add_theme_support( 'title-tag' );

	// support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'top_menu' => esc_html__( 'Header Top Menu', 'brave' ),
			'primary_menu' => esc_html__( 'Primary Menu', 'brave' ),
			'banner_menu' => esc_html__( 'Banner Menu', 'brave' ),
			'footer_menu_1' => esc_html__( 'Footer Menu 1', 'brave' ),
			'footer_menu_2' => esc_html__( 'Footer Menu 2', 'brave' ),
			'footer_menu_3' => esc_html__( 'Footer Menu 3', 'brave' ),
			'footer_menu_4' => esc_html__( 'Footer Menu 4', 'brave' ),
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
			'brave_custom_background_args',
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
			'height'      => 144,
			'width'       => 208,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'brave_setup' );

// footer widgets
function brave_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer About Company', 'brave' ),
			'id'            => 'footer-about',
			'description'   => esc_html__( 'Add widgets here.', 'brave' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Menu 1', 'brave' ),
			'id'            => 'footer-menu1',
			'description'   => esc_html__( 'Add widgets here.', 'brave' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Menu 2', 'brave' ),
			'id'            => 'footer-menu2',
			'description'   => esc_html__( 'Add widgets here.', 'brave' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Menu 3', 'brave' ),
			'id'            => 'footer-menu3',
			'description'   => esc_html__( 'Add widgets here.', 'brave' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'brave_widgets_init' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function brave_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'brave_content_width', 640 );
}
add_action( 'after_setup_theme', 'brave_content_width', 0 );

// theme scripts and styles
function brave_scripts_styles() {
	//Swiper CSS
	wp_enqueue_style( 'swiper-css', 'https://unpkg.com/swiper@8/swiper-bundle.min.css', array(), BRAVE_VERSION );	
    wp_enqueue_style( 'brave-style', get_stylesheet_uri(), array(), BRAVE_VERSION );	
	

	//Swiper JS
	wp_enqueue_script( 'swiper-js', 'https://unpkg.com/swiper@8/swiper-bundle.min.js', array(), BRAVE_VERSION, true );
	wp_enqueue_script( 'brave-slider', get_stylesheet_directory_uri(). '/assets/js/sliders.js', array('swiper-js'), BRAVE_VERSION, true );
    
}
add_action( 'wp_enqueue_scripts', 'brave_scripts_styles' );
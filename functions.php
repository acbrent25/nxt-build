<?php
/**
 * Champagne functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Champagne
 */

if ( ! function_exists( 'champagne_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function champagne_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Champagne, use a find and replace
		 * to change 'champagne' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'champagne', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'champagne' ),
		) );
		
		
		
		// register the main-nav
		function register_my_menu() {
		  register_nav_menu('mainnav',__( 'mainnav' ));
		}
		add_action( 'init', 'register_my_menu' );
		
		// let's add "*active*" as a class to the li
		
		add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
		function special_nav_class($classes, $item){
		     if( in_array('current-menu-item', $classes) ){
		             $classes[] = 'active ';
		     }
		     return $classes;
		}
		
		// let's add our custom class to the actual link tag    
		
		function atg_menu_classes($classes, $item, $args) {
		  if($args->theme_location == 'mainnav') {
		    $classes[] = 'nav-link';
		  }
		  return $classes;
		}
		add_filter('nav_menu_css_class', 'atg_menu_classes', 1, 3);
		
		function add_menuclass($ulclass) {
		   return preg_replace('/<a /', '<a class="nav-link"', $ulclass);
		}
		add_filter('wp_nav_menu','add_menuclass');
		
		
		
		

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
		add_theme_support( 'custom-background', apply_filters( 'champagne_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'champagne_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function champagne_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'champagne_content_width', 640 );
}
add_action( 'after_setup_theme', 'champagne_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function champagne_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'champagne' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'champagne' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'champagne_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function champagne_scripts() {
	
	// Enqueue Styles
	wp_enqueue_style( 'champagne-style', get_stylesheet_uri() );

    //  Vendor CSS -->
    wp_enqueue_style('champagne-bootstrap', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css', array(), false);
    wp_enqueue_style('champagne-font-awesome', get_template_directory_uri() . '/vendor/font-awesome/css/fontawesome-all.min.css', array(), false);
    wp_enqueue_style('champagne-animate', get_template_directory_uri() . '/vendor/animate/animate.min.css', array(), false);
    wp_enqueue_style('champagne-linear-icons', get_template_directory_uri() . '/vendor/linear-icons/css/linear-icons.min.css', array(), false);
    wp_enqueue_style('champagne-owl-carousel', get_template_directory_uri() . '/vendor/owl.carousel/assets/owl.carousel.min.css', array(), false);
    wp_enqueue_style('champagne-owl-theme', get_template_directory_uri() . '/vendor/owl.carousel/assets/owl.theme.default.min.css', array(), false);
    wp_enqueue_style('champagne-magnific-popup', get_template_directory_uri() . '/vendor/magnific-popup/magnific-popup.min.css', array(), false);
    //  Theme CSS -->
    wp_enqueue_style('champagne-theme-css', get_template_directory_uri() . '/css/theme.css', array(), false);
    wp_enqueue_style('champagne-theme-elements', get_template_directory_uri() . '/css/theme-elements.css', array(), false);
    
    // Current Page CSS -->
    wp_enqueue_style('champagne-settings-css', get_template_directory_uri() . '/vendor/rs-plugin/css/settings.css', array(), false);
    wp_enqueue_style('champagne-layers-css', get_template_directory_uri() . '/vendor/rs-plugin/css/layers.css', array(), false);
    wp_enqueue_style('champagne-navigation-css', get_template_directory_uri() . '/vendor/rs-plugin/css/navigation.css', array(), false);
    
    // Skin CSS -->
    wp_enqueue_style('champagne-skins-css', get_template_directory_uri() . '/css/skins/default.css', array(), false);

	// Theme Custom CSS -->
    wp_enqueue_style('champagne-custom-css', get_template_directory_uri() . '/css/custom.css', array(), false);

	
	
	
	wp_enqueue_script( 'champagne-navigation', get_template_directory_uri() . '/vendor/modernizr/modernizr.min.js', array(), false, true );
	wp_enqueue_script( 'champagne-navigation', get_template_directory_uri() . '/js/navigation.js', array(), false, true );

	wp_enqueue_script( 'champagne-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), false, true );
	
	wp_enqueue_script('jquery');
	

	
	// Vendor -->
	wp_enqueue_script( 'champagne-jquery-appear', get_template_directory_uri() . '/vendor/jquery.appear/jquery.appear.min.js', array(), false, true );
	wp_enqueue_script( 'champagne-jquery-easing', get_template_directory_uri() . '/vendor/jquery.easing/jquery.easing.min.js', array(), false, true );
	wp_enqueue_script( 'champagne-jquery-cookie', get_template_directory_uri() . '/vendor/jquery-cookie/jquery-cookie.min.js', array(), false, true );
	wp_enqueue_script( 'champagne-bootstrap', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.bundle.min.js', array(), false, true );
	wp_enqueue_script( 'champagne-common', get_template_directory_uri() . '/vendor/common/common.min.js', array(), false, true );
	wp_enqueue_script( 'champagne-jquery-validation', get_template_directory_uri() . '/vendor/jquery.validation/jquery.validation.min.js', array(), false, true );
	wp_enqueue_script( 'champagne-easy-pie-chart', get_template_directory_uri() . '/vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js', array(), false, true );
	wp_enqueue_script( 'champagne-gmap', get_template_directory_uri() . '/vendor/jquery.gmap/jquery.gmap.min.js', array(), false, true );
	wp_enqueue_script( 'champagne-lazyload', get_template_directory_uri() . '/vendor/jquery.lazyload/jquery.lazyload.min.js', array(), false, true );
	wp_enqueue_script( 'champagne-isotope', get_template_directory_uri() . '/vendor/isotope/jquery.isotope.min.js', array(), false, true );
	wp_enqueue_script( 'champagne-owl-carousel', get_template_directory_uri() . '/vendor/owl.carousel/owl.carousel.min.js', array(), false, true );
	wp_enqueue_script( 'champagne-magnific-popup', get_template_directory_uri() . '/vendor/magnific-popup/jquery.magnific-popup.min.js', array(), false, true );
	wp_enqueue_script( 'champagne-vide', get_template_directory_uri() . '/vendor/vide/vide.min.js', array(), false, true );
	wp_enqueue_script( 'champagne-vivus', get_template_directory_uri() . '/vendor/vivus/vivus.min.js', array(), false, true );
	
	// Theme Base, Components and Settings -->
	wp_enqueue_script( 'champagne-theme', get_template_directory_uri() . '/js/theme.js', array(), false, true );
	
	// Current Page Vendor and Views -->
	wp_enqueue_script( 'champagne-tools', get_template_directory_uri() . '/vendor/rs-plugin/js/jquery.themepunch.tools.min.js', array(), false, true );
	wp_enqueue_script( 'champagne-revolution', get_template_directory_uri() . 'vendor/rs-plugin/js/jquery.themepunch.revolution.min.js', array(), false, true );
	
	// Theme Custom -->
	wp_enqueue_script( 'champagne-custom', get_template_directory_uri() . '/js/custom.js', array(), false, true );
	
	// Theme Initialization Files -->
	wp_enqueue_script( 'champagne-init', get_template_directory_uri() . '/js/theme.init.js', array(), false, true );

	// Examples -->
	wp_enqueue_script( 'champagne-portfolio', get_template_directory_uri() . '/js/examples/examples.portfolio.js', array(), false, true );
	
	
	

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'champagne_scripts' );

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

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}

<?php
/**
 * mirador functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package mirador
 */

if ( ! function_exists( 'mirador_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function mirador_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on mirador, use a find and replace
		 * to change 'mirador' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'mirador', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'mirador' ),
			'main-menu'    => esc_html__('Main Menu'),
			'footer-menu'  => esc_html__('Footer Menu'),
			'footer-miradorlife'  => esc_html__('Footer Mirador Life'),
			'footer-accessories'  => esc_html__('Footer Accessories'),
			'footer-accessories-col2'  => esc_html__('Footer Accessories Col-2'),

		) );






	//defining the filter that will be used so we can select posts by 'author'
	//function add_tags_filter_to_posts_administration(){

    //execute only on the 'post' content type
    //global $post_type;
    //if($post_type == 'post'){

        //get a listing of all users that are 'author' or above
        // $user_args = array(
        //     'show_option_all'   => 'Tags',
        //     'orderby'           => 'display_name',
        //     'order'             => 'ASC',
        //     'name'              => 'tag_filter',
        //     'who'               => 'tag',
        //     'include_selected'  => true
        // );

        //determine if we have selected a user to be filtered by already
        //if(isset($_GET['tag_admin_filter'])){
            //set the selected value to the value of the author
            //$user_args['selected'] = (int)sanitize_text_field($_GET['tag_admin_filter']);
        //}

        //display the users as a drop down
        //wp_dropdown_pages($user_args);
    //}

	//}
	//add_action('restrict_manage_posts','add_tags_filter_to_posts_administration');




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
		add_theme_support( 'custom-background', apply_filters( 'mirador_custom_background_args', array(
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
add_action( 'after_setup_theme', 'mirador_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function mirador_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'mirador_content_width', 640 );
}
add_action( 'after_setup_theme', 'mirador_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function mirador_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'mirador' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'mirador' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'mirador_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function mirador_scripts() {
	wp_enqueue_style( 'mirador-style', get_stylesheet_uri().'?v=001');

	wp_enqueue_style( 'bootstrap-cdn-css', 'https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.4/css/mdb.min.css');

	wp_enqueue_style( 'FontAwesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
	wp_enqueue_style( 'googleFonts', 'https://fonts.googleapis.com/css?family=Lato|Playfair+Display:400,700,900' );

  wp_enqueue_style('owlCarousel', get_template_directory_uri() . '/css/owl.carousel.css');
  wp_enqueue_style('owlCarouselDefaultTheme', get_template_directory_uri() . '/css/owl.theme.default.min.css');


	wp_register_script( 'MDB-core-JavaScript', 'https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.4/js/mdb.min.js', null, null, true );
	wp_enqueue_script('MDB-core-JavaScript');

	// Plugin-JS

	wp_register_script('gsap-pluiginCDN', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/TweenMax.min.js', null, null, true);
	wp_enqueue_script('gsap-pluiginCDN');

	wp_register_script('scrollMagic-pluiginCDN', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js', null, null, true);
	wp_enqueue_script('scrollMagic-pluiginCDN');

	wp_register_script('animation-pluiginCDN', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.js', null, null, true);
	wp_enqueue_script('animation-pluiginCDN');

	wp_register_script('scrollMagic-debug-addIndicators', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js', null, null, true);
	wp_enqueue_script('scrollMagic-debug-addIndicators');


	wp_enqueue_script( 'mirador-owlCarousel', get_template_directory_uri() . '/js/owl.carousel.js', array(), '20151215', true );
	wp_enqueue_script( 'mirador-customeJS', get_template_directory_uri() . '/js/smain.js?v=001', array(), '20151215', true );

	wp_enqueue_script( 'mirador-navigation', get_template_directory_uri() . '/js/navigation.js?v=001', array(), '20151215', true );
	wp_enqueue_script( 'mirador-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'mirador_scripts' );

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

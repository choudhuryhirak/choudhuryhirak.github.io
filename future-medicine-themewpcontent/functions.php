<?php
/**
 * future-medicine-theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package future-medicine-theme
 */

if(!function_exists('future_medicine_theme_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function future_medicine_theme_setup() {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on future-medicine-theme, use a find and replace
         * to change 'future-medicine-theme' to the name of your theme in all the template files.
         */
        load_theme_textdomain('future-medicine-theme', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(array(
            'menu-1' => esc_html__('Primary', 'future-medicine-theme'),
        ));

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));

        // Set up the WordPress core custom background feature.
        add_theme_support('custom-background', apply_filters('future_medicine_theme_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        )));

        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support('custom-logo', array(
            'height'      => 250,
            'width'       => 250,
            'flex-width'  => true,
            'flex-height' => true,
        ));
    }
endif;
add_action('after_setup_theme', 'future_medicine_theme_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function future_medicine_theme_content_width() {
    // This variable is intended to be overruled from themes.
    // Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
    // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
    $GLOBALS['content_width'] = apply_filters('future_medicine_theme_content_width', 640);
}

add_action('after_setup_theme', 'future_medicine_theme_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function future_medicine_theme_widgets_init() {
    register_sidebar(array(
        'name'          => esc_html__('Sidebar', 'future-medicine-theme'),
        'id'            => 'sidebar-1',
        'description'   => esc_html__('Add widgets here.', 'future-medicine-theme'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
}

add_action('widgets_init', 'future_medicine_theme_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function future_medicine_theme_scripts() {
    wp_enqueue_style('future-medicine-theme-style', get_stylesheet_uri(). '?v=1.1');
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('bootstrap-theme', get_template_directory_uri() . '/css/bootstrap-theme.min.css');
    wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/css/owl.carousel.min.css');
    wp_enqueue_style('owl-carousel-theme', get_template_directory_uri() . '/css/owl.theme.default.min.css');
    wp_enqueue_style('theme-fonts', 'https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,400i,700');
    wp_enqueue_style('font-awesome', 'https://use.fontawesome.com/releases/v5.0.13/css/all.css');

    wp_enqueue_script('future-medicine-theme-navigation', get_template_directory_uri() . '/js/navigation.min.js', array(), '20151215', true);

    wp_enqueue_script('custome-updated', get_template_directory_uri() . '/js/custome-updated.js?v=1.1', array(), '20151215', true);

    wp_enqueue_script('future-medicine-theme-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.min.js', array(), '20151215', true);

    wp_enqueue_script('json2');
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/vendor/bootstrap.min.js', array('jquery'), '123', true);
    wp_enqueue_script('throttle-debounce', get_template_directory_uri() . '/js/vendor/jquery.ba-throttle-debounce.min.js', array(), '123', true);

    wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/js/vendor/owl.carousel.min.js', array(), '2.1', true);

    wp_enqueue_script('utilities-js', get_template_directory_uri() . '/js/common/utilities.min.js', array(), '1.0.6', true);
    wp_enqueue_script('navigation-script', get_template_directory_uri() . '/js/custom-navigation.min.js', array('jquery'), '1.0', true);
    //wp_enqueue_script('facebook-login', get_template_directory_uri() . '/js/facebook-login-script.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('main-script', get_template_directory_uri() . '/js/main.min.js', array('jquery'), '1.0', true);

    wp_enqueue_script('modernizer', get_template_directory_uri() . '/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js', array(), '142', false);

    if(is_singular() && comments_open() && get_option('thread_comments')){
        wp_enqueue_script('comment-reply');
    }
}

add_action('wp_enqueue_scripts', 'future_medicine_theme_scripts');

/**
 * main-css
 */

function main_css_load() {
    wp_enqueue_style('main-style', get_template_directory_uri() . '/css//main.min.css');
}

add_action('wp_enqueue_scripts', 'main_css_load', 99);

add_action('wp_head', 'AddIcons');
function AddIcons() {
    ?>
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" type="image/x-icon"/>
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-touch-icon.png"/>
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-touch-icon-57x57.png"/>
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-touch-icon-72x72.png"/>
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-touch-icon-76x76.png"/>
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-touch-icon-114x114.png"/>
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-touch-icon-120x120.png"/>
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-touch-icon-144x144.png"/>
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-touch-icon-152x152.png"/>

    <?php

}

/**
 * social include functionalities
 */
include_once 'inc/social-share.php';

/**
 *cutom posts
 */
include_once 'inc/custom-posts/custom-post-type-video.php';
include_once 'inc/custom-posts/custom-post-subscription-plan.php';
include_once 'inc/custom-posts/custom-post-accordion-post.php';
include_once 'inc/custom-posts/upcoming-events.php';
include_once 'inc/custom-posts/custom-post-magazine-cover.php';

/**
 * show/hide checkboxes in screenoptions admin screen
 */
class AgenzziaAdminCustomizeer {
    function __construct() {
        add_action('in_admin_header', array($this, 'in_admin_header'));
    }

    function in_admin_header() {
        global $wp_meta_boxes;
        unset($wp_meta_boxes[ get_current_screen()->id ]['normal']['core']['trackbacksdiv']);
        unset($wp_meta_boxes[ get_current_screen()->id ]['normal']['core']['postcustom']);
    }
}

new AgenzziaAdminCustomizeer();

/**
 * custom menus
 */
function RegisterMyMenus() {
    register_nav_menus(
        array(
            'main-menu'          => __('Main Menu'),
            'topics-menu'        => __('Topics Menu'),
            'blog-menu'          => __('Blog Menu'),
            'events-menu'        => __('Events Menu'),
            'footer-menu-left'   => __('Footer Menu Left'),
            'footer-menu-middle' => __('Footer Menu Middle'),
            'footer-menu-right'  => __('Footer Menu Right'),

        )
    );
}

add_action('init', 'RegisterMyMenus');

 



/**
 * Remove "JQMIGRATE: Migrate is installed, version 1.4.1" notice in console
 */
add_action('wp_default_scripts', function ($scripts) {
    if(!empty($scripts->registered['jquery'])){
        $scripts->registered['jquery']->deps = array_diff($scripts->registered['jquery']->deps, array('jquery-migrate'));
    }
});

/**
 * remove "Category:" before category title on archive pages
 */

function prefix_category_title($title) {
    if(is_category()){
        $title = single_cat_title('', false);
    }

    return $title;
}

function FutureMedicineGlobalVars() {
    //global $matisGlobalVariables;
    $futureMedicineGlobalVariables = array(
        'newsletter-email-recipient'    => 'kurocofuyu@topikt.com',
        'administrator-email-recipient' => 'kurocofuyu@topikt.com',
        'facebook-link'                 => 'https://www.facebook.com/futuremedicineindia/',
        'twitter-link'                  => 'https://twitter.com/FutureMedIndia',
        'linkedin-link'                 => 'https://www.linkedin.com/company/future-medicine-india'
        //'instagram-link'             => 'https://www.instagram.com/soundcraft_com/'
        //'pinterest-link'                => 'https://www.pinterest.com/namestajmatis/',
        //'google-plus-link'           => 'https://plus.google.com/+MatisRsnamestaj',
        //'youtube-link'               => 'https://www.youtube.com/channel/UCi20FwFWJaa8uyGmggQCdmg'
    );

    return $futureMedicineGlobalVariables;
}

add_action('parse_global_var', 'FutureMedicineGlobalVars');

add_filter('get_the_archive_title', 'prefix_category_title');

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
if(defined('JETPACK__VERSION')){
    require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Cannot modify header information fix for register page
 */

add_action('wp_loaded', 'RedirectRegisterForm');
function RedirectRegisterForm() {

    if(isset($_POST['registration-form'])):

        $errors = array();

        // Check username is present and not already in use
        $username = esc_sql($_REQUEST['userName']);
        if(strpos($username, ' ') !== false){
            $errors['username'] = "Sorry, no spaces allowed in usernames";
        }
        if(empty($username)){
            $errors['username'] = "Please enter a username";
        }
        elseif(username_exists($username)) {
            $errors['username'] = "Username already exists, please try another";
        }

        // Check email address is present and valid
        $email = esc_sql($_REQUEST['userEmail']);
        if(!is_email($email)){
            $errors['email'] = "Please enter a valid email";
        }
        elseif(email_exists($email)) {
            $errors['email'] = "This email address is already in use";
        }

        // Check password is valid
        if(0 === preg_match("/.{6,}/", $_POST['userPass'])){
            $errors['password'] = "Password must be at least six characters";
        }

        // Check password confirmation_matches
        if(0 !== strcmp($_POST['userPass'], $_POST['userPassConfirm'])){
            $errors['password_confirmation'] = "Passwords do not match";
        }

        // Check terms of service is agreed to
        if($_POST['terms'] != "Yes"){
            $errors['terms'] = "You must agree to Terms of Service";
        }

        if(0 === count($errors)){

            $password = $_POST['userPass'];

            $new_user_id = wp_create_user($username, $password, $email);
            $success     = 1;
            $path        = home_url() . '/register?action=register&success=1&user=' . $username;
            wp_redirect($path);
            exit;

            //header('Location:' . get_bloginfo('url') . '/register/?action=register&success=1&u=' . $username);
        }
    endif;
}

add_action('admin_post_simplemessage', 'futuremedicine_admin_simplemessage');
add_action('admin_post_nopriv_simplemessage', 'futuremedicine_admin_simplemessage');

function futuremedicine_admin_simplemessage() {
    // Handle request then generate response using echo or leaving PHP and using HTML
    if(isset($_POST)){
        $visitorName    = $_POST['name'];
        $visitorEmail   = $_POST['email'];
        $visitorMessage = $_POST['message'];
        $pageToGo       = get_permalink(get_page_by_path('success-page'));
        if(SendFutureMedicineEmail('simple-message', $visitorEmail, 'Future Medicine India - Site Visitor Contact', $visitorMessage, $visitorName, FutureMedicineGlobalVars()['administrator-email-recipient'])){
            wp_redirect($pageToGo . '?mode=simple-message');
        }
        else {
            wp_redirect(get_permalink(get_page_by_path('failure')));
        }
    }
}

add_action('admin_post_newslettermessage', 'futuremedicine_admin_newslettermessage');
add_action('admin_post_nopriv_newslettermessage', 'futuremedicine_admin_newslettermessage');

function futuremedicine_admin_newslettermessage() {
    // Handle request then generate response using echo or leaving PHP and using HTML
    if(isset($_POST)){
        $visitorName    = '';
        $visitorEmail   = $_POST['subscribe-email'];
        $visitorMessage = '';
        $pageToGo       = get_permalink(get_page_by_path('success-page'));
        if(SendFutureMedicineEmail('newsletter', $visitorEmail, 'Site Visitor Newsletter Subscription', $visitorMessage, $visitorName, FutureMedicineGlobalVars()['administrator-email-recipient'])){

            wp_redirect($pageToGo . '?mode=newsletter');
        }
        else {
            wp_redirect(get_permalink(get_page_by_path('failure')));
        }
    }
}

// Function to change sender name
function wpb_sender_name($original_email_from) {
    return 'Future Medicine India Blog Site';
}

add_filter('wp_mail_from_name', 'wpb_sender_name');





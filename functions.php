<?php
/**
 * Hala Lipowska functions and definitions.
 *
 * @link https://codex.wordpress.org/Functions_File_Explained
 *
 * @package Hala Lipowska
 */

if ( ! function_exists( 'hl_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function hl_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Hala Lipowska, use a find and replace
	 * to change 'hl' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'hl', get_template_directory() . '/languages' );

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
	add_image_size( 'post', 980, 600, true );
	// MENUS
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'hl' ),
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

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'hl_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // hl_setup
add_action( 'after_setup_theme', 'hl_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function hl_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'hl_content_width', 640 );
}
add_action( 'after_setup_theme', 'hl_content_width', 0 );

//** remove automating wrapping around img */

function img_unautop($pee) {
    $pee = preg_replace('/<p>\\s*?(<a .*?><img.*?><\\/a>|<img.*?>)?\\s*<\\/p>/s', '<div class="figure">$1</div>', $pee);
    return $pee;
}
add_filter( 'the_content', 'img_unautop', 30 );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function hl_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'hl' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
    register_sidebar( array(
		'name'          => 'Sidebar galeria',
		'id'            => 'sidebar-gallery',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name' => 'Stopka newsletter',
		'id' => 'hl-footer-sidebar-1',
		'description' => 'Appears in the footer area',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h4 class="footer-title">',
		'after_title' => '</h4>',
	) );
	register_sidebar( array(
		'name' => 'Stopka partnerzy',
		'id' => 'hl-footer-sidebar-2',
		'description' => 'Appears in the footer area',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h4 class="footer-title">',
		'after_title' => '</h4>',
	) );
	register_sidebar( array(
		'name' => 'Prognoza pogody',
		'id' => 'hl-forecast',
		'description' => 'Appears on the weather page',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="title">',
		'after_title' => '</h2>',
	) );
}
add_action( 'widgets_init', 'hl_widgets_init' );

/**
 * Register font.
 */

function wpb_add_google_fonts() {

wp_register_style('wpb-googleFonts', 'http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,400,700,300&subset=latin-ext');

wp_enqueue_style( 'wpb-googleFonts');

}

add_action('wp_print_styles', 'wpb_add_google_fonts');
/**
 * Enqueue scripts and styles.
 */

function hl_scripts() {
	wp_enqueue_style( 'hl-style', get_stylesheet_uri() );

	wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/modernizr.js', '', '', false );

	wp_enqueue_script( 'lettering', get_template_directory_uri() . '/js/jquery.lettering.js', array('jquery'), '', true );

	wp_enqueue_script( 'textillate', get_template_directory_uri() . '/js/jquery.textillate.js', array('jquery'), '', true );

	wp_enqueue_script( 'hl-main', get_template_directory_uri() . '/js/hl-main.js', array('jquery'), '', true );

	wp_enqueue_script( 'hl-slider', get_template_directory_uri() . '/js/hl-slider.js', array('jquery'), '', true );

	wp_enqueue_script( 'hl-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'hl_scripts' );


// Custom post type for galleries
function create_posttype() {

	register_post_type( 'galleries',
	// CPT Options
		array(
			'labels' => array(
				'name' => __( 'Galerie' ),
				'singular_name' => __( 'Galeria' )
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'galerie'),
			'supports'  => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
		)
	);
}
// Hooking up post type to theme setup
add_action( 'init', 'create_posttype' );

/*
   * Removes the jump to top functionality when a reader
   * clicks on a read more link from your posts excerpt feed.
   *
   * @since 1.0.4
   *
   */
function remove_more_jump_link($link) {
    $offset = strpos($link, '#more-');
    if ($offset) {
      $end = strpos($link, '"',$offset);
    }
    if ($end) {
      $link = substr_replace($link, '', $offset, $end-$offset);
    }
    return $link;
  }
  add_filter('the_content_more_link', 'remove_more_jump_link');

///**
// * Implement the Custom Header feature.
// */
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
 * Slider.
 */
require get_template_directory() . '/inc/lipowska-slider.php';

include_once('advanced-custom-fields/acf.php');

//define( 'ACF_LITE', true );

require get_template_directory() . '/inc/hl_tiles.php';

//require get_template_directory() . '/inc/hl_tiles.php';


require get_template_directory() . '/inc/hl_extras.php';

<?php
/**
 * laborda functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package laborda
 */

if ( ! function_exists( 'laborda_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function laborda_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on laborda, use a find and replace
		 * to change 'laborda' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'laborda', get_template_directory() . '/languages' );

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
			'menu-header' => esc_html__( 'Header', 'laborda' ),
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
		add_theme_support( 'custom-background', apply_filters( 'laborda_custom_background_args', array(
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
add_action( 'after_setup_theme', 'laborda_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function laborda_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'laborda_content_width', 640 );
}
add_action( 'after_setup_theme', 'laborda_content_width', 0 );

/**
 * Enqueue scripts and styles.
 */
function laborda_scripts() {
	wp_enqueue_style( 'fonts', 'https://fonts.googleapis.com/css?family=Material+Icons|Roboto|Roboto+Condensed' );
	wp_enqueue_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css' );
	wp_enqueue_style( 'font-awesome-brands', 'https://use.fontawesome.com/releases/v5.5.0/css/brands.css' );
	wp_enqueue_style( 'font-awesome', 'https://use.fontawesome.com/releases/v5.5.0/css/fontawesome.css' );
	wp_enqueue_style( 'laborda-style', get_stylesheet_uri() );

	wp_enqueue_script( 'laborda-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'laborda-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.3.1.slim.min.js' );
	wp_enqueue_script( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js' );
	wp_enqueue_script( 'shufflejs', 'https://unpkg.com/shufflejs@5.2.0/dist/shuffle.js' );
	wp_enqueue_script( 'laborda-scripts', get_template_directory_uri() . '/js/scripts.js', array(), '20181029', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'laborda_scripts' );

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
 * Custom theme settings.
 */
function footer_widget_area() {
	register_sidebar( array(
		'name'          => 'Footer Left',
		'id'            => 'footer_left',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
	) );
	register_sidebar( array(
		'name'          => 'Footer Right',
		'id'            => 'footer_right',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
	) );
	register_sidebar( array(
		'name'          => 'Extra Footer Bottom',
		'id'            => 'footer_extra_bottom',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
	) );
	register_sidebar( array(
		'name'          => 'Extra Footer Top',
		'id'            => 'footer_extra_top',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
	) );
}
add_action( 'widgets_init', 'footer_widget_area' );

/**
 * Custom post type: activity
 */
function create_activity_post_type() {
  register_post_type( 'activity',
    array(
      'labels' => array(
        'name' => __( 'Activities' ),
        'singular_name' => __( 'Activity' )
      ),
			'supports' => array( 'title', 'excerpt', 'editor' ),
      'public' => true,
      'has_archive' => true,
			'taxonomies' => array( 'category' ),
			'menu_position' => 4,
			'menu_icon' => 'dashicons-format-aside',
    )
  );
}
add_action( 'init', 'create_activity_post_type' );

/**
 * Move excerpt below activity title
 */
function remove_normal_excerpt() {
    remove_meta_box( 'postexcerpt' , 'activity' , 'normal' );
}
add_action( 'admin_menu' , 'remove_normal_excerpt' );

function add_excerpt_meta_box( $post_type ) {
    if ( in_array( $post_type, array( 'activity' ) ) ) {
        add_meta_box(
            'custom_postexcerpt',
            __( 'Excerpt', 'laborda' ),
            'post_excerpt_meta_box',
            $post_type,
            'after_editor',
            'high'
        );
    }
}
add_action( 'add_meta_boxes', 'add_excerpt_meta_box' );

function run_after_editor_meta_boxes() {
    global $post;
    do_meta_boxes( get_current_screen(), 'after_editor', $post );
}
add_action( 'edit_form_after_editor', 'run_after_editor_meta_boxes' );


/**
 * Custom taxonomies
 */
function phase_taxonomy() {
	$labels = array(
		'name'              => _x( 'Phases', 'taxonomy general name', 'laborda' ),
		'singular_name'     => _x( 'Phase', 'taxonomy singular name', 'laborda' ),
		'search_items'      => __( 'Search Phases', 'laborda' ),
		'all_items'         => __( 'All Phases', 'laborda' ),
		'parent_item'       => __( 'Parent Phase', 'laborda' ),
		'parent_item_colon' => __( 'Parent Phase:', 'laborda' ),
		'edit_item'         => __( 'Edit Phase', 'laborda' ),
		'update_item'       => __( 'Update Phase', 'laborda' ),
		'add_new_item'      => __( 'Add New Phase', 'laborda' ),
		'new_item_name'     => __( 'New Phase Name', 'laborda' ),
		'menu_name'         => __( 'Phase', 'laborda' ),
	);
	register_taxonomy(
		'phase',
		'activity',
		array(
			'hierarchical' => true,
			'labels' => $labels,
			'rewrite' => array( 'slug' => 'phase' ),
			'show_in_quick_edit' => true,
		)
	);
}
add_action( 'init', 'phase_taxonomy' );

/**
 * Bootstrap Button shortcode
 */
function register_button_shortcode( $shortcodes ) {
	// Add new shortcode
	$shortcodes['button'] = array(
		// Shortcode name
		'name' => __( 'Bootstrap button', 'laborda' ),
		// Shortcode type. Can be 'wrap' or 'single'
		// Example: [b]this is wrapped[/b], [this_is_single]
		'type' => 'wrap',
		// Shortcode group.
		// Can be 'content', 'box', 'media' or 'other'.
		// Groups can be mixed, for example 'content box'
		'group' => 'content',
		// List of shortcode params (attributes)
		'atts' => array(
			// Style attribute
			'url' => array(
				// Attribute type.
				// Can be 'select', 'color', 'bool' or 'text'
				'type' => 'text',
				// Default value
				'default' => '',
				// Attribute name
				'name' => __( 'URL', 'laborda' ),
				// Attribute description
				'desc' => __( 'Direcció URL', 'laborda' )
			)
		),
		// Default content for generator (for wrap-type shortcodes)
		'content' => __( 'Click me', 'laborda' ),
		// Shortcode description for cheatsheet and generator
		'desc' => __( 'A bootstrap button', 'laborda' ),
		// Custom icon (font-awesome)
		'icon' => 'link',
		// Name of custom shortcode function
		// IMPORTANT: this is the name of the next function
		'function' => 'button_shortcode',
	);
	// Return modified data
	return $shortcodes;
}
add_filter( 'su/data/shortcodes', 'register_button_shortcode' );

function button_shortcode( $atts, $content = null ) {
	$atts = shortcode_atts( array(
			'url' => '#',
		), $atts );

	return sprintf( '<a class="btn btn-primary" href="%s">%s</a>', esc_attr( $atts['url'] ), $content );
}

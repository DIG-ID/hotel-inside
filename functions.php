<?php
/**
 * Setup theme
 */
function hi_theme_setup() {

	register_nav_menus(
		array(
			'top'         => __( 'Top Menu', 'hotel-inside' ),
			'main'        => __( 'Main Menu', 'hotel-inside' ),
			'footer'      => __( 'Footer Menu', 'hotel-inside' ),
			'copy-footer' => __( 'Copyright Menu', 'hotel-inside' ),
		)
	);

	add_theme_support( 'menus' );

	add_theme_support( 'custom-logo' );

	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );

	add_theme_support( 'post-formats', array( 'gallery', 'video' ) );

	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );

	add_image_size( 'event-gallery-full', 1920, 900, array( 'center', 'center' ) );

}

add_action( 'after_setup_theme', 'hi_theme_setup' );

/**
 * Register our sidebars and widgetized areas.
 */
function hi_theme_footer_widgets_init() {

	register_sidebar(
		array(
			'name'          => 'Footer',
			'id'            => 'footer',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		),
	);

}
add_action( 'widgets_init', 'hi_theme_footer_widgets_init' );

/**
 * Enqueue styles and scripts
 */
function hi_theme_enqueue_styles() {

	//Get the theme data
	$the_theme     = wp_get_theme();
	$theme_version = $the_theme->get( 'Version' );

	// Register Theme main style.
	wp_register_style( 'hotel-inside-theme-styles', get_template_directory_uri() . '/dist/main.css', array(), $theme_version );

	// Enqueue theme stylesheet.
	wp_enqueue_style( 'hotel-inside-theme-styles' );

	wp_register_script(
		'hotel-inside-theme-scripts',
		get_template_directory_uri() . '/dist/main.js',
		array(),
		$theme_version,
		true
	);

	wp_enqueue_script( 'hotel-inside-theme-scripts' );

	wp_enqueue_script( 'jquery' );

}

add_action( 'wp_enqueue_scripts', 'hi_theme_enqueue_styles' );

if ( ! function_exists( 'hi_preload_webfonts' ) ) :

	function hi_preload_webfonts() {
		?>
		<link rel="preload" href="https://use.typekit.net/frp2sqi.css" as="font" crossorigin>
		<?php
	}

endif;

add_action( 'wp_head', 'hi_preload_webfonts' );

// Theme custom template tags.
require get_template_directory() . '/inc/theme-template-tags.php';

// Theme customizer options.
require get_template_directory() . '/inc/customizer.php';

// Theme custom nav walker.
require get_template_directory() . '/inc/custom-nav-walker.php';

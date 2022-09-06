<?php
/**
 * Setup theme
 */
function hi_theme_setup() {

	register_nav_menus(
		array(
			'top'           => __( 'Top Menu', 'hotel-inside' ),
			'top-secondary' => __( 'Top Secondary Menu', 'hotel-inside' ),
			'main'          => __( 'Main Menu', 'hotel-inside' ),
			'footer'        => __( 'Footer Menu', 'hotel-inside' ),
			'copy-footer'   => __( 'Copyright Menu', 'hotel-inside' ),
		)
	);

	add_theme_support( 'menus' );

	add_theme_support( 'custom-logo' );

	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );

	add_theme_support( 'post-formats', array( 'video' ) );

	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );

	add_image_size( 'card-club-event', 768, 390, array( 'center', 'center' ) );

	add_image_size( 'card-slider', 685, 469, array( 'center', 'center' ) );

	add_image_size( 'card-wide', 690, 369, array( 'center', 'center' ) );

	add_image_size( 'card-sidebar-xs', 150, 150, array( 'center', 'center' ) );

	add_image_size( 'card-related-posts', 290, 285, array( 'center', 'center' ) );

	add_image_size( 'card-archive-sm', 270, 179, array( 'center', 'center' ) );

	add_image_size( 'card-archive-md', 570, 417, array( 'center', 'center' ) );

	add_image_size( 'card-archive-xl', 580, 400, array( 'center', 'center' ) );

	add_image_size( 'card-archive-kommentar', 570, 273, array( 'center', 'center' ) );

	add_image_size( 'card-default', 570, 300, array( 'center', 'center' ) );

	add_image_size( 'kommentar-author-avatar', 370, 443, array( 'center', 'center' ) );

	add_image_size( 'hans-author-avatar', 470, 352, array( 'center', 'center' ) );

	add_image_size( 'author-avatar', 180, 180, array( 'center', 'center' ) );

	add_image_size( 'team-avatar', 270, 270, array( 'center', 'center' ) );

	add_image_size( 'team-avatar-sm', 233, 270, array( 'center', 'center' ) );

	add_image_size( 'markplatz-avatar', 150, 150, array( 'center', 'center' ) );

	add_image_size( 'hero-banner', 1920, 700, array( 'center', 'center' ) );

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

	// Add styles inline.
	wp_add_inline_style( 'hotel-inside-theme-styles', hi_get_font_face_styles() );

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

/**
 * Get font face styles.
 * Called by functions twentytwentytwo_styles() and twentytwentytwo_editor_styles() above.
 */
function hi_get_font_face_styles() {

	return "
	@font-face {
			font-family: 'acumin-pro';
			src: url('https://use.typekit.net/af/6d4bb2/00000000000000003b9acafc/27/l?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n7&v=3') format('woff2'),url('https://use.typekit.net/af/6d4bb2/00000000000000003b9acafc/27/d?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n7&v=3') format('woff'),url('https://use.typekit.net/af/6d4bb2/00000000000000003b9acafc/27/a?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n7&v=3') format('opentype');
			font-display: swap;
			font-style: normal;
			font-weight:700;
			font-stretch: normal;
		}
		
		@font-face {
			font-family: 'acumin-pro';
			src: url('https://use.typekit.net/af/6ce26b/00000000000000003b9acafd/27/l?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=i7&v=3') format('woff2'),url('https://use.typekit.net/af/6ce26b/00000000000000003b9acafd/27/d?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=i7&v=3') format('woff'),url('https://use.typekit.net/af/6ce26b/00000000000000003b9acafd/27/a?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=i7&v=3') format('opentype');
			font-display: swap;
			font-style: italic;
			font-weight: 700;
			font-stretch: normal;
		}
		
		@font-face {
			font-family:'acumin-pro';
			src: url('https://use.typekit.net/af/aa5b59/00000000000000003b9acaf7/27/l?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=i4&v=3') format('woff2'),url('https://use.typekit.net/af/aa5b59/00000000000000003b9acaf7/27/d?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=i4&v=3') format('woff'),url('https://use.typekit.net/af/aa5b59/00000000000000003b9acaf7/27/a?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=i4&v=3') format('opentype');
			font-display: swap;
			font-style: italic;
			font-weight: 400;
			font-stretch: normal;
		}
		
		@font-face {
			font-family:'acumin-pro';
			src: url('https://use.typekit.net/af/46da36/00000000000000003b9acaf6/27/l?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n4&v=3') format('woff2'),url('https://use.typekit.net/af/46da36/00000000000000003b9acaf6/27/d?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n4&v=3') format('woff'),url('https://use.typekit.net/af/46da36/00000000000000003b9acaf6/27/a?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n4&v=3') format('opentype');
			font-display: swap;
			font-style: normal;
			font-weight: 400;
			font-stretch: normal;
		}

		@font-face {
			font-family:'acumin-pro';
			src:url('https://use.typekit.net/af/a2c82e/00000000000000003b9acaf4/27/l?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n3&v=3') format('woff2'),url('https://use.typekit.net/af/a2c82e/00000000000000003b9acaf4/27/d?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n3&v=3') format('woff'),url('https://use.typekit.net/af/a2c82e/00000000000000003b9acaf4/27/a?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n3&v=3') format('opentype');
			font-display: auto;
			font-style: normal;
			font-weight: 300;
			font-stretch: normal;
		}
		
		@font-face {
			font-family: 'rajdhani';
			src: url('https://use.typekit.net/af/9ec815/00000000000000007735b876/30/l?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n4&v=3') format('woff2'),url('https://use.typekit.net/af/9ec815/00000000000000007735b876/30/d?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n4&v=3') format('woff'),url('https://use.typekit.net/af/9ec815/00000000000000007735b876/30/a?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n4&v=3') format('opentype');
			font-display: auto;
			font-style: normal;
			font-weight: 400;
			font-stretch: normal;
		}
		
		@font-face {
			font-family: 'rajdhani';
			src: url('https://use.typekit.net/af/fe9d1c/00000000000000007735b87f/30/l?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n7&v=3') format('woff2'),url('https://use.typekit.net/af/fe9d1c/00000000000000007735b87f/30/d?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n7&v=3') format('woff'),url('https://use.typekit.net/af/fe9d1c/00000000000000007735b87f/30/a?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n7&v=3') format('opentype');
			font-display: auto;
			font-style: normal;
			font-weight: 700;
			font-stretch: normal;
		}

		@font-face {
			font-family:'montserrat';
			src:url('https://use.typekit.net/af/2180b4/00000000000000007735a193/30/l?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n6&v=3') format('woff2'),url('https://use.typekit.net/af/2180b4/00000000000000007735a193/30/d?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n6&v=3') format('woff'),url('https://use.typekit.net/af/2180b4/00000000000000007735a193/30/a?primer=7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191&fvd=n6&v=3') format('opentype');
			font-display:auto;
			font-style:normal;
			font-weight:600;
			font-stretch:normal;
		}
	";

}

function hi_preload_webfonts() {
	?>
	<link rel="preload" href="https://p.typekit.net/p.css?s=1&k=frp2sqi&ht=tk&f=26053.26054.26056.26062.41022.41025&a=100534906&app=typekit&e=css" as="font" crossorigin>
	<?php
}

add_action( 'wp_head', 'hi_preload_webfonts' );

/**
 * Change the default WordPress titles
 */
function hi_custom_titles( $title ) {
	if ( is_category() ) :
		$title = single_cat_title( '', false );
	elseif ( is_tag() ) :
		$title = single_tag_title( '', false );
	elseif ( is_author() ) :
		$title = '<span class="vcard">' . get_the_author() . '</span>';
	elseif ( is_tax() ) : //for custom post types
		$title = sprintf( __( '%1$s' ), single_term_title( '', false ) );
	elseif ( is_post_type_archive() ) :
		$title = post_type_archive_title( '', false );
	endif;
	return $title;
}

add_filter( 'get_the_archive_title', 'hi_custom_titles' );

// Theme custom ajax loader
require get_template_directory() . '/inc/theme-user-settings.php';

// Theme custom ajax loader
require get_template_directory() . '/inc/theme-admin-settings.php';

// Theme custom template tags.
require get_template_directory() . '/inc/theme-template-tags.php';

// Theme customizer options.
require get_template_directory() . '/inc/customizer.php';

// Theme custom nav walker.
require get_template_directory() . '/inc/custom-nav-walker.php';

// Theme custom ajax loader
require get_template_directory() . '/inc/ajax-loader.php';


function console_log($output, $with_script_tags = true) {
	$js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) . 
');';
	if ($with_script_tags) {
			$js_code = '<script>' . $js_code . '</script>';
	}
	echo $js_code;
}
<?php
/**
 * Setup theme
 */

if ( ! function_exists( 'hi_add_user_editor_caps' ) ) :

	/**
	 * Add capabilities to the Editor user.
	 */
	function hi_add_user_editor_caps() {

		$theme = wp_get_theme();

		if ( 'Hotel Inside' === $theme->name || 'Hotel Inside' === $theme->parent_theme ) : // Test if theme is active
			// Theme is active
			// gets the editor role
			$role = get_role( 'editor' );

			// This only works, because it accesses the class instance.
			// would allow the author to edit others' posts for current theme only
			$role->add_cap( 'promote_users' );
			$role->add_cap( 'list_users' );
			$role->add_cap( 'edit_users' );
			$role->add_cap( 'create_users' );
			$role->add_cap( 'delete_users' );
			$role->add_cap( 'remove_users' );
		else :
			// Theme is deactivated
			// Remove the capacity when theme is deactivate
			$role->remove_cap( 'promote_users' );
			$role->remove_cap( 'list_users' );
			$role->remove_cap( 'edit_users' );
			$role->remove_cap( 'create_users' );
			$role->remove_cap( 'delete_users' );
			$role->remove_cap( 'remove_users' );
		endif;

	}

endif;

if ( ! function_exists( 'hi_theme_setup' ) ) :

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

		add_image_size( 'card-slider', 670, 454, array( 'center', 'center' ) );

		add_image_size( 'card-wide', 670, 675, array( 'center', 'center' ) );

		add_image_size( 'card-sidebar-xs', 100, 100, array( 'center', 'center' ) );

		add_image_size( 'card-related-posts', 270, 265, array( 'center', 'center' ) );

		add_image_size( 'card-archive-sm', 270, 179, array( 'center', 'center' ) );

		add_image_size( 'card-archive-md', 570, 417, array( 'center', 'center' ) );

		add_image_size( 'card-archive-kommentar', 570, 273, array( 'center', 'center' ) );

		add_image_size( 'card-default', 570, 300, array( 'center', 'center' ) );

		add_image_size( 'kommentar-author-avatar', 370, 443, array( 'center', 'center' ) );

		add_image_size( 'markplatz-avatar', 150, 150, array( 'center', 'center' ) );

		hi_add_user_editor_caps();

	}

endif;

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



if ( ! function_exists( 'hi_get_font_face_styles' ) ) :

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

endif;

if ( ! function_exists( 'hi_preload_webfonts' ) ) :

	function hi_preload_webfonts() {
		?>
		<link rel="preload" href="https://p.typekit.net/p.css?s=1&k=frp2sqi&ht=tk&f=26053.26054.26056.26062.41022.41025&a=100534906&app=typekit&e=css" as="font" crossorigin>
		<?php
	}

endif;

add_action( 'wp_head', 'hi_preload_webfonts' );

if ( ! function_exists( 'hi_custom_titles' ) ) :

	/**
	 * Change the default wordpress titles
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

endif;

add_filter( 'get_the_archive_title', 'hi_custom_titles' );


if ( ! function_exists( 'hi_allowed_block_types' ) ) :

	/**
	 * Limit the number of blocks available
	 */
	function hi_allowed_block_types( $allowed_blocks ) {
		$blocks = array(
			'core/image',
			'core/paragraph',
			'core/heading',
			'core/cover-image',
			'core/gallery',
			'core/quote',
			'core-embed/youtube',
			'core/list',
		);
		return $blocks;
	}

endif;

add_filter( 'allowed_block_types', 'hi_allowed_block_types' );


if ( ! function_exists( 'hi_my_dropdown_users_args' ) ) :

	/**
	 * Only show the author in the Author dropdown in a post
	 */
	function hi_my_dropdown_users_args( $query_args ) {
		$query_args['capability'] = [];
		$query_args['roles__in']  = [ 'Author' ];
		return $query_args;
	}

endif;

add_filter( 'wp_dropdown_users_args', 'hi_my_dropdown_users_args', 10, 1 );


if ( ! function_exists( 'hi_user_profile_update_errors' ) ) :

	/**
	 * This will suppress empty email errors when submitting the user form
	 */
	function hi_user_profile_update_errors( $errors, $update, $user ) {
		$errors->remove( 'empty_email' );
	}

endif;

add_action( 'user_profile_update_errors', 'hi_user_profile_update_errors', 10, 3 );

if ( ! function_exists( 'hi_user_new_form' ) ) :

	/**
	 * Work for new user , user profile and edit user forms
	 */
	function hi_user_new_form( $form_type ) {
		// This will remove javascript required validation for email input
		// It will remove the '(required)' textin the label
		?>
		<script type= "text/javascript">
			jQuery('#email').closest('tr').removeClass('form-required').find('.description').remove();
			// Uncheck send new user email option by default
			<?php if ( isset( $form_type ) && 'add-new-user' === $form_type ) : ?>
				jQuery ('#send_user_notification').removeAttr('checked');
			<?php endif; ?>
		</script>
		<?php
	}

endif;


if ( ! function_exists( 'hi_insert_new_user' ) ) :

	/**
	 * Calls the user actions on the admin panel
	 */
	function hi_insert_new_user() {
		add_action( 'user_new_form', 'hi_user_new_form', 10, 1 );
		add_action( 'show_user_profile', 'hi_user_new_form', 10, 1 );
		add_action( 'edit_user_profile', 'hi_user_new_form', 10, 1 );
	}


endif;

add_action( 'admin_init', 'hi_insert_new_user' );


// Hide users avatars.
add_filter( 'option_show_avatars', '__return_false' );

// Theme custom template tags.
require get_template_directory() . '/inc/theme-template-tags.php';

// Theme customizer options.
require get_template_directory() . '/inc/customizer.php';

// Theme custom nav walker.
require get_template_directory() . '/inc/custom-nav-walker.php';

// Theme custom ajax loader
require get_template_directory() . '/inc/ajax-loader/ajax-loader.php';

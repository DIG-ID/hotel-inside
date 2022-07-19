<?php
/**
 * Register theme customizer
 */

function hi_theme_customizer_register( $wp_customize ) {

	$wp_customize->add_panel(
		'hi_theme_panel',
		array(
			'priority'       => 10,
			'capability'     => 'edit_theme_options',
			'theme_supports' => '',
			'title'          => __( 'Hotel Inside Theme Options', 'hotel-inside' ),
			'description'    => __( 'Options for theHotel Inside Theme', 'hotel-inside' ),
		)
	);
	require get_parent_theme_file_path( '/inc/customizer/ads.php' );
	require get_parent_theme_file_path( '/inc/customizer/newsletter.php' );
	require get_parent_theme_file_path( '/inc/customizer/socials.php' );
	require get_parent_theme_file_path( '/inc/customizer/footer.php' );

}

add_action( 'customize_register', 'hi_theme_customizer_register' );

<?php
// Adds customizer section.
$wp_customize->add_section(
	'ads_section',
	array(
		'priority'       => 80,
		'capability'     => 'edit_theme_options',
		'theme_supports' => '',
		'title'          => __( 'Ads', 'hotel-inside' ),
		'description'    => __( 'Edit the ads content for the Hotel Inside', 'hotel-inside' ),
		'panel'          => 'hi_theme_panel',
	)
);

$wp_customize->add_setting(
	'ads_sidebar_image',
	array(
		'default'           => '',
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'transport'         => 'refresh',
		'sanitize_callback' => 'wp_kses_post',
	)
);
$wp_customize->add_control(
	new WP_Customize_Media_Control(
		$wp_customize,
		'ads_sidebar_image',
		array(
			'label'     => __( 'Ads Sidebar - Image', 'hotel-inside' ),
			'section'   => 'ads_section',
			'mime_type' => 'image',
		)
	)
);

$wp_customize->add_setting(
	'ads_sidebar_link',
	array(
		'default'           => '',
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'transport'         => 'refresh',
		'sanitize_callback' => 'esc_html',
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'ads_sidebar_link',
		array(
			'label'       => __( 'Ads Sidebar - URL', 'hotel-inside' ),
			'description' => '',
			'section'     => 'ads_section',
			'type'        => 'text',
		)
	)
);

$wp_customize->add_setting(
	'ads_footer_image',
	array(
		'default'           => '',
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'transport'         => 'refresh',
		'sanitize_callback' => 'wp_kses_post',
	)
);
$wp_customize->add_control(
	new WP_Customize_Media_Control(
		$wp_customize,
		'ads_footer_image',
		array(
			'label'     => __( 'Ads Footer - Image', 'hotel-inside' ),
			'section'   => 'ads_section',
			'mime_type' => 'image',
		)
	)
);

$wp_customize->add_setting(
	'ads_footer_link',
	array(
		'default'           => '',
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'transport'         => 'refresh',
		'sanitize_callback' => 'esc_html',
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'ads_footer_link',
		array(
			'label'       => __( 'Ads Footer - URL', 'hotel-inside' ),
			'description' => '',
			'section'     => 'ads_section',
			'type'        => 'text',
		)
	)
);

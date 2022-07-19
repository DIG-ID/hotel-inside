<?php
// Adds customizer section.
$wp_customize->add_section(
	'newsletter_cta_section',
	array(
		'priority'       => 90,
		'capability'     => 'edit_theme_options',
		'theme_supports' => '',
		'title'          => __( 'Newsletter', 'hotel-inside' ),
		'description'    => __( 'Edit the content for the newsletter', 'hotel-inside' ),
		'panel'          => 'hi_theme_panel',
	)
);

$wp_customize->add_setting(
	'newsletter_sc',
	array(
		'default'           => '',
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'transport'         => 'refresh',
		'sanitize_callback' => 'wp_kses_post',
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'newsletter_sc',
		array(
			'label'       => __( 'Shortcode', 'hotel-inside' ),
			'description' => '',
			'section'     => 'newsletter_cta_section',
			'type'        => 'text',
		)
	)
);

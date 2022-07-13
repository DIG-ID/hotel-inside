<?php
// Adds customizer section.
$wp_customize->add_section(
	'newsletter_cta_section',
	array(
		'priority'       => 90,
		'capability'     => 'edit_theme_options',
		'theme_supports' => '',
		'title'          => __( 'Newsletter - Call to action', 'hotel-inside' ),
		'description'    => __( 'Edit the content for the newsletter call to action', 'hotel-inside' ),
		'panel'          => 'hi_theme_panel',
	)
);

$wp_customize->add_setting(
	'newsletter_cta_title',
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
		'newsletter_cta_title',
		array(
			'label'       => __( 'Title', 'hotel-inside' ),
			'description' => '',
			'section'     => 'newsletter_cta_section',
			'type'        => 'text',
		)
	)
);

$wp_customize->add_setting(
	'newsletter_cta_description',
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
		'newsletter_cta_description',
		array(
			'label'       => __( 'Description', 'hotel-inside' ),
			'description' => '',
			'section'     => 'newsletter_cta_section',
			'type'        => 'text',
		)
	)
);

$wp_customize->add_setting(
	'newsletter_cta_sc',
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
		'newsletter_cta_sc',
		array(
			'label'       => __( 'Shortcode', 'hotel-inside' ),
			'description' => '',
			'section'     => 'newsletter_cta_section',
			'type'        => 'text',
		)
	)
);

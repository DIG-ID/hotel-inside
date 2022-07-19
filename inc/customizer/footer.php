<?php

// Adds customizer section.
$wp_customize->add_section(
	'footer_section',
	array(
		'priority'       => 110,
		'capability'     => 'edit_theme_options',
		'theme_supports' => '',
		'title'          => __( 'Footer', 'hotel-inside' ),
		'description'    => __( 'Edit the footer content', 'hotel-inside' ),
		'panel'          => 'hi_theme_panel',
	)
);

// Footer logo
$wp_customize->add_setting(
	'footer-logo',
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
		'footer-logo',
		array(
			'label'     => __( 'Footer Logo', 'hotel-inside' ),
			'section'   => 'footer_section',
			'mime_type' => 'image',
		)
	)
);

$wp_customize->add_setting(
	'footer_contacts_tel',
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
		'footer_contacts_tel',
		array(
			'label'   => __( 'Telephone', 'hotel-inside' ),
			'type'    => 'tel',
			'section' => 'footer_section',
		)
	)
);

$wp_customize->add_setting(
	'footer_contacts_email',
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
		'footer_contacts_email',
		array(
			'label'   => __( 'Email', 'hotel-inside' ),
			'type'    => 'email',
			'section' => 'footer_section',
		)
	)
);

<?php
/**
 * Template Name: Newsletter Page Template
 */
get_header();
do_action( 'before_main_content' );
	get_template_part( 'template-parts/modules/section', 'page-title' );
	get_template_part( 'template-parts/newsletter/content' );
do_action( 'after_main_content' );
get_footer();

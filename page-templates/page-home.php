<?php
/**
 * Template Name: Home Page Template
 */

get_header();
do_action( 'before_main_content' );
	get_template_part( 'template-parts/components/section', 'hero' );
do_action( 'after_main_content' );
get_footer();

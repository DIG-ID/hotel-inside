<?php
/**
 * Template Name: Contact Page Template
 */

get_header();
do_action( 'before_main_content' );
	get_template_part( 'template-parts/modules/section', 'breadcrumbs' );
	get_template_part( 'template-parts/contact/section', 'intro' );
do_action( 'after_main_content' );
get_footer();
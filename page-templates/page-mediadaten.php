<?php
/**
 * Template Name: Mediadaten Page Template
 */
get_header();
do_action( 'before_main_content' );
	get_template_part( 'template-parts/modules/section', 'page-title' );
	get_template_part( 'template-parts/mediadaten/section', 'content' );
	get_template_part( 'template-parts/mediadaten/section', 'iframe' );
do_action( 'after_main_content' );
get_footer();

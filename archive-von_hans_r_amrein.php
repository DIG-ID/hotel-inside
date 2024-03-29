<?php
/**
 * The template for displaying kommentar by hans archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */

get_header();
do_action( 'before_main_content' );
	get_template_part( 'template-parts/modules/section', 'page-title' );
	get_template_part( 'template-parts/archive/kommentar/archive', 'header' );
	get_template_part( 'template-parts/archive/kommentar/archive', 'content' );
do_action( 'after_main_content' );
get_footer();

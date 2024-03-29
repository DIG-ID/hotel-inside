<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */

get_header();
do_action( 'before_main_content' );
	get_template_part( 'template-parts/modules/section', 'page-title' );
	get_template_part( 'template-parts/archive/archive', 'header' );
	get_template_part( 'template-parts/archive/archive', 'content' );
do_action( 'after_main_content' );
get_footer();


<?php
/**
 * The template for displaying marktplatz posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */

get_header();
do_action( 'before_main_content' );
	get_template_part( 'template-parts/modules/section', 'page-title' );
	get_template_part( 'template-parts/archive/marktplatz/archive', 'intro' );
	get_template_part( 'template-parts/archive/marktplatz/archive', 'content' );
	get_template_part( 'template-parts/archive/marktplatz/archive', 'outro' );
do_action( 'after_main_content' );
get_footer();

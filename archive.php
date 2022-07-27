<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */

get_header();

if ( have_posts() ) :
	do_action( 'before_main_content' );
	get_template_part( 'template-parts/modules/section', 'breadcrumbs' );
	while ( have_posts() ) :
		the_post();
		get_template_part( 'template-parts/post/content' );
	endwhile;
	do_action( 'after_main_content' );
endif;
get_footer();


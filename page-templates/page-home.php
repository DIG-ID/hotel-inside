<?php
/**
 * Template Name: Home Page Template
 */

get_header();
do_action( 'before_main_content' );
	get_template_part( 'template-parts/home/section', 'hero' );
	get_template_part( 'template-parts/home/section', 'slider-w-sidebar' );
	get_template_part( 'template-parts/home/section', 'three-blocks' );
	get_template_part( 'template-parts/home/section', 'marktplatz' );
	//get_template_part( 'template-parts/home/section', 'club-events' );
	get_template_part( 'template-parts/home/section', 'latest-videos' );
	get_template_part( 'template-parts/modules/section', 'ads-footer' );
	get_template_part( 'template-parts/home/section', 'four-blocks' );
	
do_action( 'after_main_content' );
get_footer();

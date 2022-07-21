<?php
/**
 * Template Name: Home Page Template
 */

get_header();
do_action( 'before_main_content' );
	get_template_part( 'template-parts/modules/section', 'hero' );
	get_template_part( 'template-parts/modules/section', 'slider-w-sidebar' );
	get_template_part( 'template-parts/modules/section', 'three-blocks' );
	get_template_part( 'template-parts/modules/section', 'marktplatz' );
	get_template_part( 'template-parts/modules/section', 'club-events' );
	get_template_part( 'template-parts/modules/section', 'latest-videos' );
	get_template_part( 'template-parts/modules/section', 'four-blocks' );
	get_template_part( 'template-parts/modules/section', 'ads-footer' );
do_action( 'after_main_content' );
get_footer();

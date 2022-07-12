<?php
/**
 * Template Name: Home Page Template
 */

get_header();
do_action( 'before_main_content' );
	get_template_part( 'template-parts/modules/section', 'hero' );
	get_template_part( 'template-parts/modules/section', 'categorie-one-block-slider-w-sidebar' );
	get_template_part( 'template-parts/modules/section', 'categorie-three-blocks' );
	get_template_part( 'template-parts/modules/section', 'partners-slider' );
	get_template_part( 'template-parts/modules/section', 'club-events-slider' );
	get_template_part( 'template-parts/modules/section', 'latest-videos' );
	get_template_part( 'template-parts/modules/section', 'newsletter-cta' );
	get_template_part( 'template-parts/modules/section', 'categorie-four-blocks' );
do_action( 'after_main_content' );
get_footer();

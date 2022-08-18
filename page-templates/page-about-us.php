<?php
/**
 * Template Name: About Us Page Template
 */

get_header();
do_action( 'before_main_content' );
	get_template_part( 'template-parts/modules/section', 'breadcrumbs' );
	get_template_part( 'template-parts/about-us/section', 'intro' );
    get_template_part( 'template-parts/about-us/section', 'gesellschafter' );
    get_template_part( 'template-parts/about-us/section', 'team' );
do_action( 'after_main_content' );
get_footer();
<?php
/**
 * Template Name: Marktplatz Page Template
 */

get_header();
do_action( 'before_main_content' );
	get_template_part( 'template-parts/marktplatz/section', 'marktplatz' );
do_action( 'after_main_content' );
get_footer();
<?php
/**
 * Template Name: Marktplatz Page Template
 */

get_header();
do_action( 'before_main_content' );
	get_template_part( 'template-parts/modules/section', 'breadcrumbs' );
	get_template_part( 'template-parts/marktplatz/section', 'intro' );
	get_template_part( 'template-parts/marktplatz/section', 'marktplatz' );
	get_template_part( 'template-parts/marktplatz/section', 'outro' );
do_action( 'after_main_content' );
get_footer();
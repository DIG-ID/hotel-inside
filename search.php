<?php
get_header();
do_action( 'before_main_content' );
if ( have_posts() ) :
	get_template_part( 'template-parts/modules/section', 'page-title' );
	get_template_part( 'template-parts/search/has', 'results' );
else :
	get_template_part( 'template-parts/search/no', 'results' );
endif;
do_action( 'after_main_content' );
get_footer();

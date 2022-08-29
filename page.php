<?php
get_header();
	do_action( 'before_main_content' );
	while ( have_posts() ) :
		the_post();
		get_template_part( 'template-parts/modules/section', 'page-title' );
		get_template_part( 'template-parts/page/content' );
	endwhile;
	do_action( 'after_main_content' );
get_footer();

<?php
get_header();
while ( have_posts() ) :
	the_post();
	do_action( 'before_main_content' );
	get_template_part( 'template-parts/modules/section', 'page-title' );
	get_template_part( 'template-parts/marktplatz/content', 'standart' );
	do_action( 'after_main_content' );
endwhile;
get_footer();

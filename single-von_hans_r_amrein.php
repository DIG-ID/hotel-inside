<?php
get_header();
while ( have_posts() ) :
	the_post();
	$format = get_post_format() ? : 'standart';
	do_action( 'before_main_content' );
	get_template_part( 'template-parts/modules/section', 'page-title' );
	get_template_part( 'template-parts/kommentar-by-hans/content', $format );
	do_action( 'after_main_content' );
endwhile;
get_footer();

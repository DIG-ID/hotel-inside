<?php
get_header();
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		$format = get_post_format() ? : 'standart';
		get_template_part( 'template-parts/by-hans-amrein/content', $format );
	endwhile;
endif;
get_footer();

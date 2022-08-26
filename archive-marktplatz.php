<?php 
get_header();
do_action( 'before_main_content' );
	get_template_part( 'template-parts/modules/section', 'page-title' );
	get_template_part( 'template-parts/marktplatz/section', 'intro' );
	get_template_part( 'template-parts/marktplatz/section', 'marktplatz-ajax' );
	get_template_part( 'template-parts/marktplatz/section', 'outro' );
do_action( 'after_main_content' );
get_footer();
?>
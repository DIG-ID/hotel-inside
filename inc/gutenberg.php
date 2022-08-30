<?php

function hi_gutenberg_blocks() {

	wp_register_script( 'custom-intro-text-js', get_template_directory_uri() . '/assets/js/gutenberg-intro-block.js', array( 'wp-blocks' ) );

	register_block_type(
		'hotelinside/intro-text',
		array(
			'editor_script' => 'custom-intro-text-js'
		)
	);

}

add_action( 'init', 'hi_gutenberg_blocks' );

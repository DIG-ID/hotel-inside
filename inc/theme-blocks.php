<?php
/**
 * We use WordPress's init hook to make sure
 * our blocks are registered early in the loading
 * process.
 *
 * @link https://developer.wordpress.org/reference/hooks/init/
 */
function hi_register_acf_blocks() {
	/**
	 * We register our block's with WordPress's handy
	 * register_block_type();
	 *
	 * @link https://developer.wordpress.org/reference/functions/register_block_type/
	 */
	register_block_type( get_theme_file_path( 'template-parts/blocks/information-box/block.json' ) );
}
// Here we call our hi_register_acf_block() function on init.
add_action( 'init', 'hi_register_acf_blocks' );

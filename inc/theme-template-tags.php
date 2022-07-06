<?php
/**
 * The custom theme tags file.
 */

/**
 * This function open the main content.
 */
function hi_before_main_content() {
	?>
	<main id="main-content" class="main-content">
	<?php
}

add_action( 'before_main_content', 'hi_before_main_content' );

/**
 * This function closes the main content.
 */
function hi_after_main_content() {
	?>
	</main><!-- #main-content-->
	<?php
}

add_action( 'after_main_content', 'hi_after_main_content' );

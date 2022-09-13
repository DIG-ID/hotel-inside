<?php
/**
 * Add capabilities to the editor user.
 */
function hi_add_user_editor_caps() {

	$theme = wp_get_theme();

	if ( 'Hotel Inside' === $theme->name || 'Hotel Inside' === $theme->parent_theme ) : // Test if theme is active
		// Theme is active
		// gets the editor role
		$role = get_role( 'editor' );

		// This only works, because it accesses the class instance.
		// would allow the author to edit others' posts for current theme only
		$role->add_cap( 'create_users' );
		$role->add_cap( 'delete_users' );
		$role->add_cap( 'edit_users' );
		$role->add_cap( 'remove_users' );
		$role->add_cap( 'promote_users' );
		$role->add_cap( 'list_users' );
		$role->add_cap( 'edit_theme_options' );
		$role->add_cap( 'customize' );
	else :
		// Theme is deactivated
		// Remove the capacity when theme is deactivate
		$role->remove_cap( 'create_users' );
		$role->remove_cap( 'delete_users' );
		$role->remove_cap( 'edit_users' );
		$role->remove_cap( 'remove_users' );
		$role->remove_cap( 'promote_users' );
		$role->remove_cap( 'list_users' );
	endif;

}

add_action( 'init', 'hi_add_user_editor_caps' );

/**
 * Only show the author in the Author dropdown in a post
 */
function hi_custom_dropdown_users_args( $query_args ) {
	// Use this array to specify multiple roles to show in dropdown
	$query_args['role__in'] = array( 'author' );
	// Use this array to specify multiple roles to hide in dropdown
	$query_args['role__not_in'] = array( 'editor', 'administrator', 'contributor', 'subscriber' );
	return $query_args;
}

add_filter( 'wp_dropdown_users_args', 'hi_custom_dropdown_users_args', 10, 1 );

/**
 * This will suppress empty email errors when submitting the user form
 */
function hi_user_profile_update_errors( $errors, $update, $user ) {
	$errors->remove( 'empty_email' );
}

add_action( 'user_profile_update_errors', 'hi_user_profile_update_errors', 10, 3 );

/**
 * Work for new user, user profile and edit user forms
 */
function hi_user_new_form( $form_type ) {
	// This will remove javascript required validation for email input
	// It will remove the '(required)' textin the label
	?>
	<script type= "text/javascript">
		jQuery('#email').closest('tr').removeClass('form-required').find('.description').remove();
		// Uncheck send new user email option by default
		<?php if ( isset( $form_type ) && 'add-new-user' === $form_type ) : ?>
			jQuery ('#send_user_notification').removeAttr('checked');
		<?php endif; ?>
	</script>
	<?php
}

add_action( 'user_new_form', 'hi_user_new_form', 10, 1 );
add_action( 'show_user_profile', 'hi_user_new_form', 10, 1 );
add_action( 'edit_user_profile', 'hi_user_new_form', 10, 1 );

/**
 * Adds the editor and wpseo_editor roles to the view_site_health_checks capability.
 * 
 * @param array $roles The currently allowed roles.
 *
 * @return array The allowed roles.
 * 
 */

function hi_add_wpseo_manage_options_roles( $roles ) {
	return array_merge( $roles, [ 'editor', 'wpseo_editor' ] );
}

add_filter( 'wpseo_manage_options_roles', 'hi_add_wpseo_manage_options_roles' );

//add_filter( 'wpseo_edit_advanced_metadata_roles', 'hi_add_site_health_roles' );

// Hide users avatars.
add_filter( 'option_show_avatars', '__return_false' );

/**
 * Limit the number of blocks available
 */
function hi_allowed_block_types( $allowed_blocks ) {
	if ( is_user_logged_in() ) :
		$current_user  = wp_get_current_user();
		$allowed_roles = array( 'editor', 'author' );
		if ( array_intersect( $allowed_roles, $current_user->roles ) ) :
			$blocks = array(
				'core/image',
				'core/paragraph',
				'core/heading',
				'core/cover-image',
				'core/gallery',
				'core/quote',
				'core-embed/youtube',
				'core/list',
				'core/spacer',
				'core/group',
				'core/block',
				'core/video',
			);
			return $blocks;
		endif;
	endif;
}

add_filter( 'allowed_block_types', 'hi_allowed_block_types' );

/**
 * Remove all default Gutenberg block patterns
 */
function hi_disable_core_block_patterns() {
	remove_theme_support( 'core-block-patterns' );
}

add_action( 'after_setup_theme', 'hi_disable_core_block_patterns' );

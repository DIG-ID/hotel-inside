<?php
$profile_pic = get_sub_field( 'profile_picture' );
?>
<div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 about-gesell__col">
	<?php
	if ( $profile_pic ) :
		echo '<span data-fancybox="about-gesell-team-modal-' . $args['post_counter'] . '" data-src="#about-gesell-team-modal-' . $args['post_counter'] . '" class="about-gesell-modal--trigger">' . wp_get_attachment_image( $profile_pic, 'team-avatar' ) . '</span>';
	else :
		echo '<span data-fancybox="about-gesell-team-modal-' . $args['post_counter'] . '" data-src="#about-gesell-team-modal-' . $args['post_counter'] . '" class="about-gesell-modal--trigger"><img src="' . esc_url( get_template_directory_uri() . '/assets/images/team-avatar-sm.png' ) . '" alt="team member default avatar"></span>';
	endif;
	?>
	<div class="about-gesell__wrapper">
		<p class="about-gesell__name"><?php the_sub_field( 'profile_name' ); ?></p>
		<p class="about-gesell__role"><?php the_sub_field( 'profile_role' ); ?></p>
	</div>
</div>
<!-- Modal start -->
<div id="about-gesell-team-modal-<?php echo esc_attr( $args['post_counter'] ); ?>" class="about-gesell-team-modal" style="display:none;">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 col-md-4">
				<div class="row">
					<div class="col-12">
						<?php
						$profile_pic = get_sub_field( 'profile_picture' );
						if ( $profile_pic ) :
							echo wp_get_attachment_image( $profile_pic, 'team-avatar-sm' );
						else :
							echo '<figure class="profile-picture"><img  src="' . esc_url( get_template_directory_uri() . '/assets/images/team-avatar-default.png' ) . '" alt="team member default avatar"></figure>';
						endif;
						$profile_linkedin_url = get_sub_field( 'linkedin_url' );
						if ( $profile_linkedin_url ) :
							echo '<a href="' . esc_url( $profile_linkedin_url ) . '" target="_blank" class="about-gesell__profile-link profile-link--linkedin"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"/></svg></a>';
						endif;
						?>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-8">
				<div class="row">
					<div class="col-12">
						<p class="about-gesell__name"><?php the_sub_field( 'profile_name' ); ?></p>
						<p class="about-gesell__role"><?php the_sub_field( 'profile_role' ); ?></p>
						<span class="content__separator-line d-block"></span>
					</div>
					<div class="col-12">
						<div class="about-gesell__bio">
							<?php
							if ( ! empty( the_sub_field( 'profile_bio' ) ) ) :
								the_sub_field( 'profile_bio' );
							endif;
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div><!-- .about-gesell-modal -->

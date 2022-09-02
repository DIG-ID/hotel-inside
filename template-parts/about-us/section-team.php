<div id="section-about-team" class="section section-about-team">
	<div class="custom-container">
		<div class="row team-intro__row">
			<div class="col-12">
				<div class="content__separator-line"></div>
				<h2 class="about-intro__title"><?php esc_html_e( 'Team', 'hotel-inside' ); ?></h2>
			</div>
		</div>
		<div class="row">
			<?php
			if ( have_rows( 'team_list') ):
				while ( have_rows( 'team_list' ) ) :
					the_row();
					$profile_pic = get_sub_field( 'profile_picture' );
					?>
					<div class="col-3 about-gesell__col">
						<?php
						if ( $profile_pic ) :
							echo wp_get_attachment_image( $profile_pic, 'team-avatar-sm' );
						else :
							echo '<img src="' . esc_url( get_template_directory_uri() . '/assets/images/team-avatar-sm.png' ) . '" alt="team member default avatar">';
						endif;
						?>
						<div class="about-gesell__wrapper">
							<p class="about-gesell__name"><?php the_sub_field( 'profile_name' ); ?></p>
							<p class="about-gesell__role"><?php the_sub_field( 'profile_role' ); ?></p>
						</div>
					</div>
					<?php
				endwhile;
			endif;
			?>
		</div>
	</div>
</div>

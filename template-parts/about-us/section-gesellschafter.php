<div id="section-about-gesell" class="section section-about-gesell">
	<div class="custom-container">
		<div class="row gesell-intro__row">
			<div class="col-12">
				<div class="content__separator-line"></div>
				<h2 class="about-intro__title"><?php esc_html_e( 'Gesellschafter', 'hotel-inside' ); ?></h2>
			</div>
		</div>
		<div class="row">
			<?php
			if ( have_rows( 'gesellschafter_list' ) ) :
				while ( have_rows( 'gesellschafter_list' ) ) :
					the_row();
					$profile_pic = get_sub_field( 'profile_picture' );
					?>
					<div class="col-12 col-sm-12 col-md-4 col-lg-3 col-xl-3 about-gesell__col">
						<?php
						if ( $profile_pic ) :
							echo wp_get_attachment_image( $profile_pic, 'team-avatar-sm' );
						else :
							echo '<img src="' . esc_url( get_template_directory_uri() . '/assets/images/team-avatar-default.png' ) . '" alt="team member default avatar">';
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

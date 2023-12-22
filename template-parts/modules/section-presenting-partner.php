<?php
if ( have_rows( 'partners', 'presenting_partner' ) ) :
	?>
	<section id="presenting-partner" class="section section-presenting-partner">
		<div class="custom-container">
			<div class="row justify-content-center align-items-center">
				<div class="col-12 col-sm-8 col-md-6 col-lg-6 col-xl-6 text-center">
					<h2 class="section-title"><?php esc_html_e( 'Presenting Partner', 'hotel-inside' ); ?></h2>
				</div>
			</div>
			<div class="row justify-content-center align-items-center">
				<!-- <div class="swiper swiper-presenting-partner">
					<div class="swiper-wrapper row justify-content-center align-items-center">-->
						<?php
					while ( have_rows( 'partners', 'presenting_partner' ) ) :
						the_row();
						$partner_logo = get_sub_field( 'logo' );
						$partner_url  = get_sub_field( 'link_url' );
						echo '<div class=" col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3 text-center presenting-partner-card">';
						if ( $partner_logo && $partner_url ) :
							echo '<a href="' . esc_url( $partner_url ) . '" target="_blank" class="presenting-partner-link">' . wp_get_attachment_image( $partner_logo, 'markplatz-avatar', false, array( 'class' => 'presenting-partner-logo' ) ) . '</a>';
						else :
							echo '<p class="text-center">' . esc_html__( 'Partner logo or URL not set.', 'hotel-inside' ) . '</p>';
						endif;
						echo '</div>';
					endwhile;
					?>
					</div>
				</div>

			</div>
		</div>
	</section>
	<?php
endif;

<?php
$author    = get_user_by( 'email', 'h.amrein@hotelinside.ch' );
$author_id = $author->ID;
if ( $author_id ) :
	?>
	<section class="section section-archive-header">
		<div class="custom-container">
			<div class="row justify-content-between">
				<div class="col-12 col-lg-7 order-mobile">
					<p class="author__description"><?php wpautop( the_author_meta( 'user_description', $author_id ) ); ?></p>
					<h3 class="author__name"><?php esc_html_e( 'Hans R. Amrein', 'hotel-inside' ); ?></h3>
					<p class="author__position"><?php esc_html_e( 'Mitgründer und Chefredakteur von Hotel Inside', 'hotel-inside' ); ?></p>
					<hr>
				</div>
				<div class="col-12 col-lg-4">
					<div class="author__img-wrapper">
						<?php
						$author_avatar = get_field( 'profile_picture', 'user_'. $author_id );
						echo wp_get_attachment_image( $author_avatar, 'kommentar-author-avatar' );
						?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php
endif;

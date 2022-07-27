<?php
$ads_img  = get_theme_mod( 'ads_footer_image' );
$ads_link = get_theme_mod( 'ads_footer_link' );
if ( ! empty( $ads_img ) ) :
	?>
	<section class="section section-ads-footer">
		<div class="custom-container">
			<div class="row">
				<div class="col-12 text-center ads ads-footer">
					<a href="<?php echo esc_url( $ads_link ); ?>" target="_blank">
						<?php echo wp_get_attachment_image( $ads_img, 'full' ); ?>
					</a>
				</div>
			</div>
		</div>
	</section>
	<?php
endif;

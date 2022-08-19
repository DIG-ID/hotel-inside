<?php
$ads_img  = get_theme_mod( 'ads_sidebar_image' );
$ads_link = get_theme_mod( 'ads_sidebar_link' );
if ( ! empty( $ads_img ) ) :
	?>
	<div class="row">
		<div class="col-12 text-center ads ads-sidebar">
			<a href="<?php echo esc_url( $ads_link ); ?>" target="_blank">
				<?php echo wp_get_attachment_image( $ads_img, 'full' ); ?>
			</a>
		</div>
	</div>
	<?php
endif;

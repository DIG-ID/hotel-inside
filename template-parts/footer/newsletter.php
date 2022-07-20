<?php $newsletter_sc = get_theme_mod( 'newsletter_sc' ); ?>
<div class="col col-12 col-lg-3">
	<h3 class="footer-title"><?php esc_html_e( 'Newsletter', 'hotel-inside' ); ?></h3>
	<?php if ( $newsletter_sc ) : ?>
		<?php echo do_shortcode( $newsletter_sc ); ?>
	<?php endif; ?>
	<p class="socials-text"><?php esc_html_e( 'Folgen Sie uns', 'hotel-inside' ); ?></p>
	<?php do_action( 'socials' ); ?>
</div>

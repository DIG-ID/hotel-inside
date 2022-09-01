<?php $newsletter_sc = get_theme_mod( 'newsletter_sc' ); ?>
<div class="col-lg-4">
	<h3 class="mega-menu__title"><?php esc_html_e( 'Newsletter', 'hotel-inside' ); ?></h3>
	<p class="socials-text"><?php esc_html_e( 'Werden auch Sie ein Insider!', 'hotel-inside' ); ?></p>
	<?php if ( ! empty( $newsletter_sc ) ) : ?>
		<?php echo do_shortcode( $newsletter_sc ); ?>
	<?php endif; ?>
	<p class="socials-text"><?php esc_html_e( 'Folgen Sie uns', 'hotel-inside' ); ?></p>
	<?php do_action( 'socials' ); ?>
</div>

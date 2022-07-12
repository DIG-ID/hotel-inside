<?php
$footer_logo = get_theme_mod( 'footer-logo' );
$email       = get_theme_mod( 'footer_contacts_email' );
$phone       = get_theme_mod( 'footer_contacts_tel' );
?>
<div class="col">
	<div class="footer-branding">
		<?php if ( ! empty( $footer_logo ) ) : ?>
			<?php echo wp_get_attachment_image( $footer_logo, 'full' ); ?>
		<?php endif; ?>
		<p class="footer-title"><?php esc_html_e( 'Kontakt', 'hotel-inside' ); ?></p>
		<?php if ( ! empty( $email ) ) : ?>
			<p class="contact-link"><span>E: </span><a href="mailto:<?php echo esc_attr( $email ); ?>"><?php echo esc_html( $email ); ?></a></p>
		<?php endif; ?>
		<?php if ( ! empty( $phone ) ) : ?>
			<p class="contact-link"><span>T: </span><a href="tel:<?php echo esc_attr( $phone ); ?>"><?php echo esc_html( $phone ); ?></a></p>
		<?php endif; ?>
	</div><!-- .site-name -->
</div>

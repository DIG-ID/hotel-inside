<?php 
$newsletter_sc = get_theme_mod( 'newsletter_sc' );
$newsletter_sentence = get_theme_mod( 'footer_newsletter_sentence' );
?>
<div class="col col-12 col-lg-3">
	<h3 class="footer-title"><?php esc_html_e( 'Newsletter', 'hotel-inside' ); ?></h3>
	<p class="footer-newsletter-sentence"><?php echo esc_html( $newsletter_sentence ); ?></p>
	<div class="newsletter-section__header" style="margin-bottom: 30px;">
		<form action="/newsletteranmeldung/" method="get">
			<div class="newsletter-section__wrapper">
				<input type="email" name="email" placeholder="E-mail" required>
				<button type="submit"><?php esc_html_e('Abschicken', 'hotel-inside'); ?></button>
			</div>
		</form>
	</div>
	<p class="socials-text"><?php esc_html_e( 'Folgen Sie uns', 'hotel-inside' ); ?></p>
	<?php do_action( 'socials' ); ?>
</div>

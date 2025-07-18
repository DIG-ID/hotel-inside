<?php $newsletter_sc = get_theme_mod( 'newsletter_sc' ); ?>
<div class="col-lg-4 mega-menu__socials-col">
	<h3 class="mega-menu__title"><?php esc_html_e( 'Newsletter', 'hotel-inside' ); ?></h3>
	<p class="socials-text"><?php esc_html_e( 'Werden auch Sie ein Insider!', 'hotel-inside' ); ?></p>
	<div class="newsletter-section__header">
		<form action="/newsletteranmeldung/" method="get">
			<div class="newsletter-section__wrapper">
				<input type="email" name="email" placeholder="E-mail" required>
				<button type="submit"><?php esc_html_e('Anmelden', 'hotel-inside'); ?></button>
			</div>
		</form>
	</div>
	<p class="socials-text"><?php esc_html_e( 'Folgen Sie uns', 'hotel-inside' ); ?></p>
	<?php do_action( 'socials' ); ?>
</div>

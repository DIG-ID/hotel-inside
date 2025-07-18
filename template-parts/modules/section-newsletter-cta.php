<?php
$newsletter_sc = get_theme_mod( 'newsletter_sc' );
?>
<section id="newsletter-cta" class="section section-newsletter-cta">
	<div id="newsletter-section" class="custom-container">
		<div class="row justify-content-center align-items-center">
			<div class="col-12 col-sm-8 col-md-6 col-lg-6 col-xl-6 text-center">
				<h2 class="section-title"><?php esc_html_e( 'Newsletter', 'hotel-inside' ); ?></h2>
				<p class="section-description"><?php esc_html_e( 'Werden Sie auch ein Insider!', 'hotel-inside' ); ?></p>
			</div>
		</div>
		<div class="row justify-content-center align-items-center">
			<div class="col-12 col-sm-8 col-md-6 col-lg-6 col-xl-6 text-center">
				<div class="newsletter-section__header" style="margin-bottom: 30px;">
					<form action="/newsletteranmeldung/" method="get">
						<div class="newsletter-section__wrapper">
							<input type="email" name="email" placeholder="E-mail" required>
							<button type="submit"><?php esc_html_e('Abschicken', 'hotel-inside'); ?></button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>

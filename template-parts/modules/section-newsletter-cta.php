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
				<?php
				if ( $newsletter_sc ) :
					echo do_shortcode( $newsletter_sc );
				endif;
				?>
			</div>
		</div>
	</div>
</section>

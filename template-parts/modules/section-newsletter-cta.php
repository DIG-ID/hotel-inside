<?php
$newsletter_sc = get_theme_mod( 'newsletter_sc' );
?>
<section class="section section-newsletter-cta">
	<div class="container">
		<div class="row justify-content-center align-items-center">
			<div class="col-6 text-center">
				<h2 class="section-title"><?php esc_html_e( 'Newsletter', 'hotel-inside' ); ?></h2>
				<p class="section-description"><?php esc_html_e( 'Werden Sie auch ein Insider!', 'hotel-inside' ); ?></p>
			</div>
		</div>
		<div class="row justify-content-center align-items-center">
			<div class="col-6 text-center">
				<?php
				if ( $newsletter_sc ) :
					echo do_shortcode( $newsletter_sc );
				endif;
				?>
			</div>
		</div>
	</div>
</section>

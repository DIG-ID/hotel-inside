<?php
$newsletter_title       = get_theme_mod( 'newsletter_cta_title' );
$newsletter_description = get_theme_mod( 'newsletter_cta_description' );
$newsletter_shortcode   = get_theme_mod( 'newsletter_cta_sc' );
?>
<section class="section section-newsletter-cta">
	<div class="container">
		<div class="row">
			<div class="col-6 text-center">
				<h2 class="section-title"><?php echo esc_html( $newsletter_title ); ?></h2>
			</div>
		</div>
		<div class="row">
			<div class="col-6">
				<?php
				if ( $newsletter_shortcode ) :

				endif;
				?>
			</div>
		</div>
	</div>
</section>

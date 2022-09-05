<section class="section section-content">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
		<div class="custom-container">
			<div class="row">
				<div class="col-12">
					<h1 class="section-title"><?php esc_html_e( 'Nichts gefunden', 'hotel-inside' ); ?></h1>
				</div>
			</div>
			<div class="row">
				<div class="col-12 col-md-7 col-lg-7">
					<div class="page-content default-max-width">
						<?php if ( is_search() ) : ?>
							<p><?php esc_html_e( 'Entschuldigung, aber nichts entspricht Ihren Suchbegriffen. Bitte versuchen Sie es erneut mit anderen Keywords. Hier geht es zurück zur Startseite', 'hotel-inside' ); ?> <a href="<?php echo get_home_url(); ?>"><?php esc_html_e( 'zur Startseite','hotel-inside' ); ?></a></p>
							<?php get_search_form(); ?>
						<?php else : ?>
							<p><?php esc_html_e( 'Anscheinend können wir nicht finden, wonach Sie suchen. Vielleicht hilft die Suche.', 'hotel-inside' ); ?></p>
							<?php get_search_form(); ?>
						<?php endif; ?>
					</div><!-- .page-content -->
				</div>
			</div>
		</div>
	</article>
</section>

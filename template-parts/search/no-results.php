<section class="section section-content">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
		<div class="custom-container">
			<div class="row">
				<div class="col-12">
					<div class="page-content default-max-width">
						<?php if ( is_search() ) : ?>
							<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'hotel-inside' ); ?></p>
							<?php get_search_form(); ?>
						<?php else : ?>
							<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'hotel-inside' ); ?></p>
							<?php get_search_form(); ?>
						<?php endif; ?>
					</div><!-- .page-content -->
				</div>
			</div>
		</div>
	</article>
</section>

<section class="section section-content">
	<div class="custom-container">
		<div class="row">
			<div class="col-12">
				<div class="search-result-count default-max-width">
					<?php
					printf(
						esc_html(
							/* translators: %d: the number of search results. */
							_n(
								'Wir haben %d Resultate für Ihre Suche gefunden.',
								'Wir haben %d Resultate für Ihre Suche gefunden.',
								(int) $wp_query->found_posts,
								'hotel-inside'
							)
						),
						(int) $wp_query->found_posts
					);
					?>
				</div><!-- .search-result-count -->
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-lg-7">
				<div class="row">
				<?php
				// Start the Loop.
				while ( have_posts() ) :
					the_post();
					if ( get_post_type( get_the_ID() ) === 'marktplatz' ) :
						get_template_part( 'template-parts/components/card', 'marktplatz' );
					else :
						?><div class="col-12"><?php
						get_template_part( 'template-parts/components/card', 'horizontal-lg' );
						?></div><?php
					endif;
				endwhile;
				?>
				</div>
			</div>
		</div><!-- .row -->
	</div>
</section>

<div class="section section-page-title">
	<div class="custom-container">
		<div class="row">
			<div class="col-12">
				<?php
				if ( function_exists( 'yoast_breadcrumb' ) ) :
					yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
				endif;
				?>
			</div>
			<div class="col-12">
				<div class="page-title--line"></div>
				<?php if ( is_singular( 'marktplatz' ) ) : ?>
					<h2 class="page-title"><?php esc_html_e( 'Marktplatz', 'hotel-inside' ); ?></h2>
				<?php elseif ( is_singular( 'von_hans_r_amrein' ) ) : ?>
					<h2 class="page-title"><?php esc_html_e( 'Kommentar von Hans r. Amrein', 'hotel-inside' ); ?></h2>
				<?php elseif ( is_single() ) : ?>
					<h2 class="page-title"><?php echo get_the_category( $id )[0]->name; ?></h2>
				<?php elseif ( is_archive() ) : ?>
					<?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>
				<?php elseif ( is_search() ) : ?>
					<h1 class="page-title">
						<?php
						printf(
							/* translators: %s: search term. */
							esc_html__( 'Resultate für "%s"', 'hotel-inside' ),
							'<span class="page-description search-term">' . esc_html( get_search_query() ) . '</span>'
						);
						?>
					</h1>
				<?php else : ?>
					<h2 class="page-title"><?php the_title(); ?></h2>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>

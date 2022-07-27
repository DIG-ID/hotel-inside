<div class="section section-breadcrumbs">
	<div class="custom-container">
		<div class="row">
			<div class="col">
				<div class="breadcrumbs__separator-line"></div>
				<?php if ( is_singular( 'marktplatz' ) ) : ?>
					<h2 class="breadcrumbs__title"><?php esc_html_e( 'Marktplatz', 'hotel-inside' ); ?></h2>
				<?php elseif ( is_single() ) : ?>
					<h2 class="breadcrumbs__title"><?php echo get_the_category( $id )[0]->name; ?></h2>
				<?php elseif ( is_archive() ) : ?>
					<?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>
				<?php else : ?>
					<h1 class="breadcrumbs__title"><?php the_title(); ?></h1>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>

<div id="section-marktplatz" class="section section-marktplatz">
	<div class="custom-container">
		<div class="row marktplatz__row">
		<?php
		$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

		$markt_args = array(
			'post_type'        => 'marktplatz',
			'paged'            => $paged,
			'search_filter_id' => 1664,
		);
		global $the_query;
		$the_query = new WP_Query( $markt_args );
		if ( $the_query->have_posts() ) :
			while ( $the_query->have_posts() ) :
				$the_query->the_post();
				get_template_part( 'template-parts/components/card', 'marktplatz' );
			endwhile;
			wp_reset_postdata();
		endif;
		?>
		</div>
	</div>
</div>

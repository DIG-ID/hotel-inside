<div class="col-sm-12 col-md-6 col-lg-4 marktplatz__col">
	<h3 class="marktplatz__title"><?php the_title(); ?></h3>
	<p class="marktplatz__cat"><?php esc_html_e( 'position', 'hotel-inside' ); ?></p><br>
	<?php
	$marktplatz_terms = get_the_terms( $post->ID, 'categories_marktplatz' );
	if ( $marktplatz_terms ) :
		foreach ( $terms as $marktplatz_term ) :
			?>
			<p class="marktplatz__cat"><?php echo esc_html( $marktplatz_term->name ); ?></p>
			<?php
		endforeach;
	endif;
	?>
	<a href="<?php the_permalink(); ?>" class="marktplatz__read-more m-0"><?php esc_html_e( 'Mehr erfahren', 'hotel-inside' ); ?></a>
</div>

<div class="col-sm-12 col-md-6 col-lg-4">
	<article class="marktplatz__col">
		<header class="marktplatz__col--header">
			<h2 class="marktplatz__title active"><?php the_title(); ?> <br> <?php the_field( 'second_line_title' ); ?></h2>
			<div class="marktplatz__position"><?php the_excerpt(); ?></div>
			<?php
			$markt_id    = get_the_ID();
			$markt_terms = get_the_terms( $markt_id, 'categories_marktplatz' );
			$checkifpaid = get_field( 'single_page_access' );
			if ( $markt_terms ) :
				echo '<p class="marktplatz__cat--wrapper">';
				foreach ( array_slice($markt_terms, 0, 3) as $markt_term ) :
					echo '<span class="marktplatz__cat">' . $markt_term->name . '</span>';
				endforeach;
				echo '</p>';
			endif;
			?>
		</header>
		<?php
		if ( $checkifpaid ) :
			echo '<a href="' . get_permalink() . '" class="marktplatz__read-more m-0">Mehr erfahren<i class="icon-arrow"></i></a>';
		endif;
		?>
	</article>
</div>
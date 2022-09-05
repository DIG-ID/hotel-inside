<div class="container-fluid">
	<div class="row g-4">
		<div class="col-sm-12 col-md-6 col-lg-4">
			<div class="marktplatz__col">
				<h3 class="marktplatz__title active"> <?php the_title(); ?></h3>
				<p class="marktplatz__cat">position</p><br>
				<?php
				$markt_id    = get_the_ID();
				$markt_terms = get_the_terms( $markt_id, 'categories_marktplatz' );
				$checkifpaid = get_field( 'single_page_access', $markt_id );
				if ( $markt_terms ) :
					foreach ( $markt_terms as $markt_term ) :
						$msg .= '<p class="marktplatz__cat">' . $markt_term->name . '</p>';
					endforeach;
				endif;
				if ( $checkifpaid ) :
					echo '<a href="' . get_permalink() . '" class="marktplatz__read-more m-0">Mehr erfahren</a>';
				endif;
				?>
			</div>
	</div>
</div>

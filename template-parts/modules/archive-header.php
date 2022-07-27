<section class="section section-archive-header">
	<div class="custom-container">
		<div class="row">
			<?php
			$hi_cat    = get_query_var( 'cat' );
			$cat_args  = array(
				'posts_per_page' => 5,
				'cat'            => $hi_cat,
				'orderby'        => 'post_date',
				'order'          => 'ASC',
				'post_type'      => 'post',
				'post_status'    => 'publish',
			);
			$cat_query = new WP_Query( $cat_args );
			if ( $cat_query->have_posts() ) :
				$i = 0;
				while ( $cat_query->have_posts() ) :
					$cat_query->the_post();
					$i++;
					switch ( $i ) :
						case 1:
							echo '<div class="col-3">';
							get_template_part( 'template-parts/components/card' );
							break;
						case 2:
							get_template_part( 'template-parts/components/card' );
							echo '</div>';
							break;
						case 3:
							echo '<div class="col-6">';
							get_template_part( 'template-parts/components/card' );
							echo '</div>';
							break;
						case 4:
							echo '<div class="col-3">';
							get_template_part( 'template-parts/components/card' );
							break;
						case 5:
							get_template_part( 'template-parts/components/card' );
							echo '</div>';
							break;
					endswitch;
				endwhile;
			endif;
			wp_reset_postdata();
			?>
		</div>
		<div class="row">
			<div class="col-12">
				<hr>
			</div>
		</div>
	</div>
</section>

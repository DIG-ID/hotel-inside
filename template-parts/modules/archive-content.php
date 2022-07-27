<section class="section section-archive-content">
	<div class="custom-container">
		<div class="row">
			<div class="col-12 col-lg-9">
				<div class="row">
					<?php
					$hi_cat    = get_query_var( 'cat' );
					$cat_args  = array(
						'posts_per_page' => 3,
						'offset'         => 5,
						'cat'            => $hi_cat,
						'orderby'        => 'post_date',
						'order'          => 'ASC',
						'post_type'      => 'post',
						'post_status'    => 'publish',
					);
					$cat_query = new WP_Query( $cat_args );
					if ( $cat_query->have_posts() ) :
						while ( $cat_query->have_posts() ) :
							$cat_query->the_post();
							echo '<div class="col-12">';
								get_template_part( 'template-parts/components/card' );
							echo '</div>';
						endwhile;
					endif;
					wp_reset_postdata();
					?>
				</div>
			</div>
			<div class="col-12 col-lg-3">
				<?php get_template_part( 'template-parts/modules/archive', 'sidebar' ); ?>
			</div>
		</div>
	</div>
</section>

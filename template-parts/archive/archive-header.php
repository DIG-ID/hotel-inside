<section class="section section-archive-header">
	<div class="custom-container">
		<div class="row">
			<?php
			$hi_cat    = get_query_var( 'cat' );
			$cat_args  = array(
				'post_type'      => 'post',
				'post_status'    => 'publish',
				'post__in'       => get_option( 'sticky_posts' ),
				'posts_per_page' => 5,
				'cat'            => $hi_cat,
				'orderby'        => 'post_date',
				'order'          => 'DESC',
			);
			$cat_query = new WP_Query( $cat_args );
			if ( $cat_query->have_posts() ) :
				$i = 0;
				while ( $cat_query->have_posts() ) :
					$cat_query->the_post();
					$i++;
					switch ( $i ) :
						case 1:
							echo '<div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3">';
							get_template_part( 'template-parts/components/card', 'archive-sm' );
							break;
						case 2:
							get_template_part( 'template-parts/components/card', 'archive-sm' );
							echo '</div>';
							break;
						case 3:
							echo '<div class="col-12 col-sm-4 col-md-6 col-lg-6 col-xl-6">';
							get_template_part( 'template-parts/components/card', 'archive-md' );
							echo '</div>';
							break;
						case 4:
							echo '<div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3">';
							get_template_part( 'template-parts/components/card', 'archive-sm' );
							break;
						case 5:
							get_template_part( 'template-parts/components/card', 'archive-sm' );
							echo '</div>';
							break;
					endswitch;
				endwhile;
				wp_reset_postdata();
			endif;
			?>
		</div>
		<div class="row">
			<div class="col-12">
				<hr>
			</div>
		</div>
	</div>
</section>

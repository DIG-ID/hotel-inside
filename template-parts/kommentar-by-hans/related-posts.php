<section class="section section-related-posts">
	<div class="custom-container">
		<div class="row">
			<div class="col-md-12 col-lg-7">
				<p class="section-title"><?php esc_html_e( 'Letzte Beiträge', 'hotel-inside' ); ?></p>
				<div class="col-12">
					<?php
					global $post;
					$rel_args      = array(
						'post__not_in'   => array( $post->ID ),
						'posts_per_page' => 2,
						'orderby'        => 'post_date',
						'order'          => 'DESC',
						'post_type'      => 'post',
						'post_status'    => 'publish',
					);
					$related_query = new WP_Query( $rel_args );
					if ( $related_query->have_posts() ) :
						while ( $related_query->have_posts() ) :
							$related_query->the_post();
							get_template_part( 'template-parts/components/card', 'horizontal-lg' );
						endwhile;
					endif;
					wp_reset_postdata();
					?>
				</div><!-- .col -->
			</div>
		</div>
	</div>
</section>


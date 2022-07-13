<section class="section section-partners">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<h2 class="section-title"><?php _e( 'Marktplatz', 'hotel-inside' ); ?></h2>
			</div>
		</div>
		<?php
		$args = array(
			'post_type'      => 'superhero',
			'posts_per_page' => 6,
		);
		$the_query = new WP_Query( $args );
		if ( $the_query->have_posts() ) :
			?>
			<div class="row">
				<div class="col-12">
					<div class="swiper section-partners-swiper">
						<div class="swiper-wrapper">
							<?php
							while ( $the_query->have_posts() ) :
								$the_query->the_post();
								?>
								<div class="swiper-slide partner">
									<a href="<?php the_permalink(); ?>" target="_blank">
										<?php the_post_thumbnail( 'full' ); ?>
									</a>
								</div>
								<?php
							endwhile;
							?>
						</div>
					</div>
				</div>
			</div>
			<?php
		endif;
		wp_reset_postdata();
		?>
	</div>
</section>

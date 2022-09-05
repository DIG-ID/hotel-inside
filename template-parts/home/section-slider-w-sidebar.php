<section class="section section-slider-w-sidebar">
	<div class="custom-container">
		<div class="row">
			<?php
			$args      = array(
				'posts_per_page'      => 6,
				'orderby'             => 'post_date',
				'order'               => 'DESC',
				'post_type'           => 'von_hans_r_amrein',
				'post_status'         => 'publish',
				'ignore_sticky_posts' => 1,
				'post__not_in'        => get_option( 'sticky_posts' ),
			);
			$the_query = new WP_Query( $args );
			if ( $the_query->have_posts() ) :
				$cpt_name = get_post_type_object( 'von_hans_r_amrein' );
				?>
				<div class="col-12 col-lg-7 section-slider-w-sidebar-wrapper">
					<div class="row justify-content-center align-items-start title-w-slider">
						<div class="col-10">
							<h2 class="section-title"><?php echo esc_html( $cpt_name->labels->singular_name ); ?></h2>
						</div>
						<div class="col-2 position-relative d-flex justify-content-end align-items-center kommentar__nav">
							<div class="swiper-button-prev section-slider-w-sidebar-button-prev"></div>
							<div class="swiper-button-next section-slider-w-sidebar-button-next"></div>
						</div>
					</div>
					<div class="row kommentar__row">
						<div class="col-12">
							<div class="swiper section-slider-w-sidebar-swiper">
								<div class="swiper-wrapper">
									<?php
									while ( $the_query->have_posts() ) :
										$the_query->the_post();
										get_template_part( 'template-parts/components/card', 'kommentar-slider' );
									endwhile;
									?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php
				wp_reset_postdata();
			endif;
			?>
			<div class="col-12 col-lg-5">
				<div class="row">
					<div class="col-12">
						<h2 class="section-title"><?php the_field( 'home_page_sidebar_title' ); ?></h2>
					</div>
					<div class="col-12">
						<?php
						$args      = array(
							'posts_per_page'      => 3,
							'orderby'             => 'post_date',
							'order'               => 'DESC',
							'post_type'           => 'post',
							'post_status'         => 'publish',
							'ignore_sticky_posts' => 1,
							'post__not_in'        => get_option( 'sticky_posts' ),
						);
						$the_query = new WP_Query( $args );
						if ( $the_query->have_posts() ) :
							while ( $the_query->have_posts() ) :
								$the_query->the_post();
								get_template_part( 'template-parts/components/card', 'horizontal-xs' );
							endwhile;
							wp_reset_postdata();
						endif;
						?>
					</div><!-- .col -->
				</div><!-- .row -->
				<?php get_template_part( 'template-parts/modules/ads', 'sidebar' ); ?>
			</div><!-- .col -->
		</div><!-- .row -->
	</div><!-- .container -->
</section>

<section class="section section-slider-w-sidebar">
	<div class="container">
		<div class="row">
			<?php
			$args      = array(
				'posts_per_page'      => 6,
				'orderby'             => 'post_date',
				'order'               => 'ASC',
				'post_type'           => 'kommentar',
				'post_status'         => 'publish',
				'ignore_sticky_posts' => 1,
				'post__not_in'        => get_option( 'sticky_posts' ),
			);
			$the_query = new WP_Query( $args );
			if ( $the_query->have_posts() ) :
				$cpt_name = get_post_type_object( 'kommentar' );
				?>
				<div class="col-12 col-lg-7 section-slider-w-sidebar-wrapper">
					<div class="row justify-content-center align-items-center title-w-slider">
						<div class="col-10">
							<h2 class="section-title"><?php echo esc_html( $cpt_name->labels->singular_name ); ?></h2>
						</div>
						<div class="col-2 position-relative d-flex justify-content-between align-items-center">
							<div class="swiper-button-prev section-slider-w-sidebar-button-prev"></div>
							<div class="swiper-button-next section-slider-w-sidebar-button-next"></div>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="swiper section-slider-w-sidebar-swiper">
								<div class="swiper-wrapper">
									<?php
									while ( $the_query->have_posts() ) :
										$the_query->the_post();
										get_template_part( 'template-parts/components/card', 'slider' );
									endwhile;
									?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php
			endif;
			wp_reset_postdata();
			?>
			<div class="col-12 col-lg-5">
				<?php $myterm = get_field( 'home_page_sidebar_categorie' ); ?>
				<?php if ( $myterm ) : ?>
				<div class="row">
					<div class="col-12">
						<h2 class="section-title"><?php the_field( 'home_page_sidebar_title' ); ?></h2>
					</div>
					<div class="col-12">
						<?php
						$args      = array(
							'cat'                 => $myterm,
							'posts_per_page'      => 3,
							'orderby'             => 'post_date',
							'order'               => 'ASC',
							'post_type'           => 'post',
							'post_status'         => 'publish',
							'ignore_sticky_posts' => 1,
							'post__not_in'        => get_option( 'sticky_posts' ),
							/*'tax_query'           => array(
								array(
									'taxonomy' => 'post_format',
									'field'    => 'slug',
									'terms'    => array(
										'post-format-gallery',
										'post-format-video',
									),
									'operator' => 'NOT IN',
								),
							),*/
						);
						$the_query = new WP_Query( $args );
						if ( $the_query->have_posts() ) :
							while ( $the_query->have_posts() ) :
								$the_query->the_post();
								get_template_part( 'template-parts/components/card', 'sidebar' );
							endwhile;
						endif;
						wp_reset_postdata();
						?>
					</div><!-- .col -->
				</div><!-- .row -->
				<?php endif; ?>
				<?php
				$ads_img  = get_theme_mod( 'ads_sidebar_image' );
				$ads_link = get_theme_mod( 'ads_sidebar_link' );
				if ( ! empty( $ads_img ) ) :
					?>
					<div class="row">
						<div class="col-12 text-center ads ads-sidebar">
							<a href="<?php echo esc_url( $ads_link ); ?>" target="_blank">
								<?php echo wp_get_attachment_image( $ads_img, 'full' ); ?>
							</a>
						</div>
					</div>
					<?php
				endif;
				?>
			</div><!-- .col -->
		</div><!-- .row -->
	</div><!-- .container -->
</section>

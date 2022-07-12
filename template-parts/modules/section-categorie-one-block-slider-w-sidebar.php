<section class="section section-categorie-one-block-slider-w-sidebar">
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
				<div class="col-12 col-lg-7 categorie-one-block-slider-wrapper">
					<div class="row justify-content-center align-items-center section-title-w-slider">
						<div class="col-10">
							<h2 class="section-title"><?php echo esc_html( $cpt_name->labels->singular_name ); ?></h2>
						</div>
						<div class="col-2 position-relative d-flex justify-content-between align-items-center">
							<div class="swiper-button-prev categorie-one-block-slider-button-prev"></div>
							<div class="swiper-button-next categorie-one-block-slider-button-next"></div>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="swiper categorie-one-block-slider">
								<div class="swiper-wrapper">
									<?php
									while ( $the_query->have_posts() ) :
										$the_query->the_post();
										?>
										<article id="post-<?php the_ID(); ?>" class="swiper-slide card card-one-block-w-slider">
											<?php if ( has_post_thumbnail() ) : ?>
												<?php the_post_thumbnail( 'thumbnail' ); ?>
											<?php else : ?>
												<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/default-1-block-thumbnail.png' ); ?>" alt="default thumbnail">
											<?php endif; ?>
											<div class="card-content">
												<?php the_title( '<h3 class="card-title">', '</h3>' ); ?>
												<div class="card-date">
													<i class="fco-icon-clock"></i>
													<time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished"><?php echo get_the_date(); ?></time>
												</div>
												<hr>
												<div class="card-description"><?php the_excerpt(); ?></div>
											</div>
										</article>
										<?php
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
				
				<div class="row">
					<div class="col-12">
						<h2 class="section-title">Categorie Section Title</h2>
						loop with 3 blocks
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						ads
					</div>
				</div>
				
			</div>
		</div>
	</div>
</section>

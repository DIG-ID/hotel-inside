<section class="section section-hero">
	<?php
	$args = array(
		'posts_per_page' => 4,
		'post__in'       => get_option( 'sticky_posts' ),
	);
	$news_query = new WP_Query( $args );
	?>
	<?php if ( $news_query->have_posts() ) : ?>
		<div class="swiper hero-swiper">
			<div class="swiper-wrapper">
				<?php	while ( $news_query->have_posts() ) : $news_query->the_post(); ?>
					<div class="swiper-slide">
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<div class="hero-banner-wrapper">
								<?php if ( has_post_thumbnail() ) : ?>
									<?php the_post_thumbnail( 'hero-banner' ); ?>
								<?php else : ?>
									<!--<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/default-1-block-thumbnail.png' ); ?>" alt="default thumbnail">-->
									<img src="https://picsum.photos/1920/1080?random=4" alt="example thumbnail">
								<?php endif; ?>
							</div>
							<div class="custom-container">
								<div class="row">
									<div class="col-12 col-sm-12 col-md-12 col-lg-7">
										<a href="<?php get_the_permalink(); ?>">
											<?php the_title( '<h2>', '</h2>' ); ?>
										</a>
										<div class="post-date">
											<i class="icon-clock"></i>
											<time datetime="<?php echo get_the_date( 'c' ); ?>" itemprop="datePublished"><?php echo get_the_date(); ?></time>
										</div>
									</div>
								</div>
							</div>
						</article>
					</div>
				<?php endwhile; ?>
			</div>
		</div>
	<?php endif; ?>
	<?php rewind_posts(); ?>
	<?php if ( $news_query->have_posts() ) : ?>
		<div class="swiper hero-swiper-thumbs custom-container">
			<hr>
			<div class="swiper-wrapper row">
				<?php	while ( $news_query->have_posts() ) : $news_query->the_post(); ?>
					<div class="swiper-slide col-4">
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<?php the_title( '<p class="post-title">', '</p>' ); ?>
							<div class="post-date">
								<i class="icon-clock"></i>
								<time datetime="<?php echo get_the_date( 'c' ); ?>" itemprop="datePublished"><?php echo get_the_date(); ?></time>
							</div>
						</article>
					</div>
				<?php endwhile; ?>
			</div>
		</div>
	<?php endif; ?>
	<?php wp_reset_postdata(); ?>
</section>

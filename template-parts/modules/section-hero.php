<section id="section-hero" class="section section-hero">
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
								<?php the_post_thumbnail( 'hero-banner' ); ?>
							</div>
							<div class="container">
								<div class="row">
									<div class="col-12 col-sm-12 col-md-12 col-lg-7">
										<?php the_title( '<h2>', '</h2>' ); ?>
										<a href="<?php the_permalink(); ?>" class="btn-hero" ><?php esc_html_e( 'Weiterlesen', 'fc-oberwil' ); ?> <i class="fco-icon-chevron-right"></i></a>
									</div>
								</div>
							</div>
						</article>
					</div>
				<?php endwhile; ?>
			</div>
			<div class="swiper-button-prev"></div>
			<div class="swiper-button-next"></div>
		</div>
	<?php endif; ?>
	<?php rewind_posts(); ?>
	<?php if ( $news_query->have_posts() ) : ?>
		<div class="swiper hero-swiper-thumbs container">
			<div class="swiper-wrapper row">
				<?php	while ( $news_query->have_posts() ) : $news_query->the_post(); ?>
					<div class="swiper-slide col-4">
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<?php
							$post_tags = get_the_tags();
							if ( ( $post_tags ) ) :
								echo '<ul>';
								foreach( $post_tags as $post_tag ) :
									echo '<li>' . esc_html( $post_tag->name ) . '</li>';
								endforeach;
								echo '</ul>';
							endif;
							?>
							<?php the_title( '<p>', '</p>' ); ?>
							<div class="post-date">
								<i class="fco-icon-clock"></i>
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

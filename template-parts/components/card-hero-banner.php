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
					<a href="<?php the_permalink(); ?>">
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

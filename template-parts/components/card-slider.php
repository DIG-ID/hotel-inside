<article id="post-<?php the_ID(); ?>" class="swiper-slide card card-block-w-slider">
	<?php if ( has_post_thumbnail() ) : ?>
		<?php the_post_thumbnail( 'thumbnail' ); ?>
	<?php else : ?>
		<!--<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/default-1-block-thumbnail.png' ); ?>" alt="default thumbnail">-->
		<img src="https://picsum.photos/670/454" alt="example thumbnail">
	<?php endif; ?>
	<div class="card-content">
		<?php the_title( '<h3 class="card-title">', '</h3>' ); ?>
		<div class="card-date">
			<i class="icon-clock"></i>
			<time datetime="<?php echo get_the_date( 'c' ); ?>" itemprop="datePublished"><?php echo get_the_date(); ?></time>
		</div>
		<hr>
		<div class="card-description"><?php the_excerpt(); ?></div>
	</div>
</article>

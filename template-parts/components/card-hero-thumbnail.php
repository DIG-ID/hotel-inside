<div class="swiper-slide col-4">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php the_title( '<p class="post-title">', '</p>' ); ?>
		<div class="post-date">
			<i class="icon-clock"></i>
			<time datetime="<?php echo get_the_date( 'c' ); ?>" itemprop="datePublished"><?php echo get_the_date(); ?></time>
		</div>
	</article>
</div>

<div class="col-sm-12 col-md-12 col-lg-3 col-xl-3">
	<a href="<?php the_permalink(); ?>" class="card-link">
		<article id="post-<?php the_ID(); ?>" class="card card--hero-thumbnail">
			<?php the_title( '<p class="post-title">', '</p>' ); ?>
			<div class="post-date">
				<i class="icon-clock"></i>
				<time datetime="<?php echo get_the_date( 'c' ); ?>" itemprop="datePublished"><?php echo get_the_date(); ?></time>
			</div>
		</article>
	</a>
</div>

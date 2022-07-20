<article id="post-<?php the_ID(); ?>" class="card">
	<?php if ( has_post_thumbnail() ) : ?>
		<?php the_post_thumbnail( 'thumbnail' ); ?>
	<?php else : ?>
		<a href="<?php get_the_permalink(); ?>">
			<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/default-1-block-thumbnail.png' ); ?>" alt="default thumbnail">
		</a>
		<!--<img src="https://picsum.photos/670/454?random=4" alt="example thumbnail">-->
	<?php endif; ?>
	<div class="card-content">
		<a href="<?php get_the_permalink(); ?>">
			<?php the_title( '<h3 class="card-title">', '</h3>' ); ?>
		</a>
		<div class="card-date">
			<i class="icon-clock"></i>
			<time datetime="<?php echo get_the_date( 'c' ); ?>" itemprop="datePublished"><?php echo get_the_date(); ?></time>
		</div>
	</div>
</article>

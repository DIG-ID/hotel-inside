<a href="<?php the_permalink(); ?>" class="card-link">
	<article id="post-<?php the_ID(); ?>" class="card card--horizontal">
		<?php if ( has_post_thumbnail() ) : ?>
			<figure>
				<?php the_post_thumbnail( 'card-sidebar-xs' ); ?>
			</figure>
		<?php else : ?>
			<figure>
				<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/default-1-block-thumbnail.png' ); ?>" alt="default thumbnail">
				<!--<img src="https://picsum.photos/670/454?random=4" alt="example thumbnail">-->
			</figure>
		<?php endif; ?>
		<div class="card-content">
			<?php the_title( '<h3 class="card-title">', '</h3>' ); ?>
			<div class="card-date">
				<i class="icon-clock"></i>
				<time datetime="<?php echo get_the_date( 'c' ); ?>" itemprop="datePublished"><?php echo get_the_date(); ?></time>
			</div>
		</div>
	</article>
</a>

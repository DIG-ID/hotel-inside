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
			<svg xmlns="http://www.w3.org/2000/svg" width="16.706" height="16.706" viewBox="0 0 16.706 16.706"><defs><style>.a{fill:#9d9d9d;}</style></defs><path class="a" d="M8.353,0a8.353,8.353,0,1,0,8.353,8.353A8.363,8.363,0,0,0,8.353,0Zm0,15.662a7.309,7.309,0,1,1,7.309-7.309,7.317,7.317,0,0,1-7.309,7.309Z"/><path class="a" d="M208.838,83.118h-1.044v5.437l3.285,3.285.738-.738-2.979-2.979Z" transform="translate(-199.963 -79.986)"/></svg>
			<time datetime="<?php echo get_the_date( 'c' ); ?>" itemprop="datePublished"><?php echo get_the_date(); ?></time>
		</div>
		<hr>
		<div class="card-description"><?php the_excerpt(); ?></div>
	</div>
</article>

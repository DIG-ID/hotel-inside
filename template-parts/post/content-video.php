<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
	<div id="section-single-post" class="section section-single-post">
		<div class="custom-container">
			<div class="row content-row">
				<div class="col-md-12 col-lg-7 content">
					<?php if ( the_field( 'video_link' ) ) : ?>
						<?php the_field( 'video_link' ); ?>
					<?php endif; ?>
					<header class="header single-post__header">
						<div class="single-post__date"><i class="icon-clock"></i><?php echo get_the_date( 'd M, Y' ); ?></div>
						<?php the_title( '<h1 class="title">', '</h1>' ); ?>
					</header>
					<div class="single-post__content">
						<?php the_content(); ?>
						<?php do_action( 'back_button' ); ?>
						<div class="latest-posts__linesep"></div>
					</div>
				</div>
				<aside class="col-md-12 col-lg-5 sidebar">
					<?php get_template_part( 'template-parts/post/single-post', 'sidebar' ); ?>
				</aside>
			</div>
			<?php get_template_part( 'template-parts/post/related-posts' ); ?>
		</div>
	</div>
</article>

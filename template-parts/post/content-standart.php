<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >

<div id="section-single-post" class="section section-single-post">
	<div class="custom-container">
		<div class="row">
			<div class="col-md-12 col-lg-7 content">
				<?php if (has_post_thumbnail( $post->ID ) ): ?>
				<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
					<img src="<?php echo $image[0]; ?>" title="featured image" alt="featured image">
				<?php endif; ?>
				<header class="header single-post__header">
					<div class="single-post__date"><i class="icon-clock"></i><?php echo get_the_date( 'd M, Y' ); ?></div>
					<?php the_title( '<h1 class="title">', '</h1>' ); ?>
				</header>

				<div class="single-post__content">
					<?php the_content(); ?>
				</div>
			</div>
			<div class="col-md-12 col-lg-5 sidebar">
				<?php get_template_part( 'template-parts/post/single-post', 'sidebar' ); ?>
			</div>
		</div>
	</div>
</div>
</article>



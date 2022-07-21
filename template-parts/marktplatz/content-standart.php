<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
	<div id="section-company-content" class="section section-company-content">
		<div class="container">
			<div class="row">
				<div class="col-6">
				<?php the_title( '<h1 class="title">', '</h1>' ); ?>
				<?php if (has_post_thumbnail( $post->ID ) ): ?>
					<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
					<img src="<?php echo $image[0]; ?>" title="featured image" alt="featured image">
				<?php endif; ?>

				<div class="content">
					<?php the_content(); ?>
				</div>
				</div>
			</div>
		</div>
	</div>
</article>
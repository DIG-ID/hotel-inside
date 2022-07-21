<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
	<div id="section-company-content" class="section section-company-content">
		<div class="container">
			<div class="row">
				<div class="col-6">
				<?php the_title( '<h1 class="company-content__title">', '</h1>' ); ?>
				<img src="<?php the_field('company_banner_image'); ?>">
				<div class="row company-content_row">
					<div class="col-lg-3">
					<?php if (has_post_thumbnail( $post->ID ) ): ?>
					<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
						<img src="<?php echo $image[0]; ?>" title="featured image" alt="featured image">
					<?php endif; ?></div>
					<div class="col-lg-3"><?php the_field('company_contact_info'); ?></div>
					<div class="col-lg-6"></div>
				</div>
				<div class="content">
					<?php the_content(); ?>
				</div>
				</div>
			</div>
		</div>
	</div>
</article>
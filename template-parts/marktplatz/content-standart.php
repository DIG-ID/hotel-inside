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
					<div class="col-lg-6">
						<p class="socials-text"><?php esc_html_e( 'Folgen Sie uns', 'hotel-inside' ); ?></p>
						<div class="socials-wrapper">
							<?php if(the_field('facebook')): ?>
							<a href="<?php the_field('facebook'); ?>" target="_blank" class="social-link social-link__facebook">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"/></svg>
							</a>
							<?php endif; ?>
							<?php if(the_field('instagram')): ?>
							<a href="<?php the_field('instagram'); ?>" target="_blank" class="social-link social-link__facebook">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"/></svg>
							</a>
							<?php endif; ?>
							<?php if(the_field('linkedin')): ?>
							<a href="<?php the_field('linkedin'); ?>" target="_blank" class="social-link social-link__facebook">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"/></svg>
							</a>
							<?php endif; ?>
						</div>
					</div>
				</div>
				<div class="content">
					<?php the_content(); ?>
				</div>
				</div>
			</div>
		</div>
	</div>
</article>
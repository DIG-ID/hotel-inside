<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >

	<div id="section-kommentar-by-hans-post" class="section section-kommentar-by-hans-post">
		<div class="custom-container">
			<div class="row content-row">
				<div class="col-md-12 col-lg-7 content">
					<?php if (the_field('video_link') ): ?>
						<?php the_field('video_link'); ?>
					<?php endif; ?>
					<header class="header single-post__header">
						<div class="single-post__date"><i class="icon-clock"></i><?php echo get_the_date( 'd M, Y' ); ?></div>
						<?php the_title( '<h1 class="title">', '</h1>' ); ?>
					</header>
					<div class="single-post__content">
						<?php the_content(); ?>
						<?php $categories = get_the_category( $id )[0]->slug; ?>
						<a href="<?php echo home_url(); ?>/category/<?php echo $categories; ?>" class="latest-posts__backlink"><?php _e( 'zur Übersicht', 'hotel-inside' ); ?></a>
						<div class="latest-posts__linesep"></div>
					</div>
				</div>
				<div class="col-md-12 col-lg-5 sidebar-by-hans">
					<?php get_template_part( 'template-parts/kommentar-by-hans/kommentar-by-hans-post', 'sidebar' ); ?>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 col-lg-7">
					<div class="single-post__sidebar-separator-line"></div>
					<p class="latest-posts__title"><?php _e( 'Letzte Beiträge', 'hotel-inside' ); ?></p>
					<div class="col-12">
							<?php
							$args      = array(
								'posts_per_page'      => 2,
								'orderby'             => 'post_date',
								'order'               => 'ASC',
								'post_type'           => 'post',
								'post_status'         => 'publish',
							);
							$the_query = new WP_Query( $args );
							if ( $the_query->have_posts() ) :
								while ( $the_query->have_posts() ) :
									$the_query->the_post(); ?>
									
									<article id="post-<?php the_ID(); ?>" class="latest-posts__single">
										<div class="latest-posts__img-wrapper">
											<?php if ( has_post_thumbnail() ) : ?>
												<?php the_post_thumbnail( 'full' ); ?>
											<?php else : ?>
												<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/default-1-block-thumbnail.png' ); ?>" alt="default thumbnail">
											<?php endif; ?>
										</div>
										<div class="latest-posts__content">
											<a href="<?php the_permalink(); ?>" class="latest-posts__post-title"><?php the_title( '<h3>', '</h3>' ); ?></a>
											<div class="card-date">
												<i class="icon-clock"></i>
												<time datetime="<?php echo get_the_date( 'c' ); ?>" itemprop="datePublished"><?php echo get_the_date(); ?></time>
											</div>
											<div class="latest-posts__linesep"></div>
											<?php the_excerpt( '<p class="latest-posts__excerpt">', '</p>' ); ?>
										</div>
									</article>
								<?php
								endwhile;
							endif;
							wp_reset_postdata();
							?>
					</div><!-- .col -->
				</div>
			</div>
		</div>
	</div>
</article>





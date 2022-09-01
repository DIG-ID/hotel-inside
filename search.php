<?php

get_header();
do_action( 'before_main_content' );
if ( have_posts() ) :
	get_template_part( 'template-parts/modules/section', 'page-title' );
	?>
	<section class="section section-content">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
			<div class="custom-container">
				<div class="row">
					<div class="col-12">
						<div class="search-result-count default-max-width">
							<?php
							printf(
								esc_html(
									/* translators: %d: the number of search results. */
									_n(
										'We found %d result for your search.',
										'We found %d results for your search.',
										(int) $wp_query->found_posts,
										'hotel-inside'
									)
								),
								(int) $wp_query->found_posts
							);
							?>
						</div><!-- .search-result-count -->
					</div>
				</div>
				<div class="row">
					<div class="col-12 col-lg-7">
						<div class="row">
						<?php
						// Start the Loop.
						while ( have_posts() ) :
							the_post();
							?><div class="col-12"><?php
							get_template_part( 'template-parts/components/card', 'horizontal-lg' );
							?></div><?php
						endwhile;
						?>
						</div>
					</div>
				</div><!-- .row -->
			</div>
		</article>
	</section>
	<?php
	// If no content, include the "No posts found" template.
else :
	get_template_part( 'template-parts/content/content-none' );
endif;
do_action( 'after_main_content' );
get_footer();

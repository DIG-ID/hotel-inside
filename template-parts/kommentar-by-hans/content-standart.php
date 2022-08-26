<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
	<div id="section-kommentar-by-hans-post" class="section section-kommentar-by-hans-post">
		<div class="custom-container">
			<div class="row content-row">
				<div class="col-md-12 col-lg-7 content">
					<?php
					if ( has_post_thumbnail() ) :
						the_post_thumbnail( 'single-post-thumbnail' );
					endif;
					?>
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
				<aside class="col-md-12 col-lg-5 sidebar-by-hans">
					<?php //get_template_part( 'template-parts/kommentar-by-hans/content', 'sidebar' ); ?>
				</aside>
			</div><!-- .row -->
			<?php get_template_part( 'template-parts/kommentar-by-hans/related-posts' ); ?>
		</div>
	</div>
</article>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
	<div class="custom-container">
		<div class="row">
			<div class="col-md-12 col-lg-7 content">
				<?php
				if ( has_post_thumbnail() ) :
					the_post_thumbnail( 'card-archive-kommentar-single' );
				endif;
				?>
				<?php do_action( 'post_badges' ); ?>
				<header class="post-header">
					<div class="post-date"><i class="icon-clock"></i><?php echo get_the_date( 'd M, Y' ); ?></div>
					<?php the_title( '<h1 class="title">', '</h1>' ); ?>
				</header>
				<div class="post-content">
					<?php the_content(); ?>
					<?php do_action( 'back_button' ); ?>
					<hr>
				</div>
			</div>
			<aside class="col-md-12 col-lg-5 sidebar sidebar-by-hans">
				<?php get_template_part( 'template-parts/kommentar-by-hans/content', 'sidebar' ); ?>
			</aside>
		</div><!-- .row -->
	</div>
	<?php get_template_part( 'template-parts/kommentar-by-hans/related-posts' ); ?>
</article>

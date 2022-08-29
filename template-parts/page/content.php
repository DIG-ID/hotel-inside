<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
	<div class="content-wrapper">
		<div class="custom-container">
			<div class="row">
				<div class="col-12 col-lg-7">
					<?php the_title( '<h1 class="title">', '</h1>' ); ?>
					<?php the_content(); ?>
				</div>
			</div><!-- .row -->
		</div>
	</div>
</article>

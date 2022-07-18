<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >

	<header class="header">
		<?php the_title( '<h1 class="title">', '</h1>' ); ?>
	</header>

	<div class="content">
		<?php the_content(); ?>
	</div>

</article>
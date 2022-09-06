<section class="section section-content">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
		<div class="custom-container">
			<div class="row">
				<div class="col-12">
					<h1 class="section-title"><?php the_field( 'mediadaten_subtitle' ); ?></h1>
				</div>
			</div>
			<div class="row justify-between">
				<div class="col-12 col-lg-7">
					<div class="row">
						<div class="col-12">
							<p><?php the_field( 'mediadaten_description' ); ?></p>
						</div>
						<?php
						if ( get_field( 'advertising_content' ) ) :
							?>
							<div class="col-12 setup-content">
								<?php the_field( 'advertising_content' ); ?>
							</div>
							<?php
						endif;
						?>
					</div>
				</div>
				<aside class="col-12 col-lg-4 sidebar sidebar__page">
					<?php get_template_part( 'template-parts/mediadaten/section', 'sidebar' ); ?>
				</aside>
			</div>
		</div>
	</article>
</section>

<section class="section section-hero">
	<?php
	$args = array(
		'ignore_sticky_posts' => 1,
		'meta_query' => array(
			array(
				'key'   => 'show_on_the_hero_section',
				'value' => '1',
			),
		),
		'orderby'             => 'post_date',
		'order'               => 'ASC',
	);
	$news_query = new WP_Query( $args );
	?>
	<?php if ( $news_query->have_posts() ) : ?>
		<div class="swiper hero-swiper">
			<div class="swiper-wrapper">
				<?php	while ( $news_query->have_posts() ) : $news_query->the_post(); ?>
					<?php get_template_part( 'template-parts/components/card', 'hero-banner' ); ?>
				<?php endwhile; ?>
			</div>
		</div>
	<?php endif; ?>
	<?php rewind_posts(); ?>
	<?php if ( $news_query->have_posts() ) : ?>
		<div class="swiper hero-swiper-thumbs custom-container">
			<hr>
			<div class="swiper-wrapper row">
				<?php	while ( $news_query->have_posts() ) : $news_query->the_post(); ?>
					<?php get_template_part( 'template-parts/components/card', 'hero-thumbnail' ); ?>
				<?php endwhile; ?>
			</div>
		</div>
	<?php endif; ?>
	<?php wp_reset_postdata(); ?>
</section>

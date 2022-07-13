<section class="section section-latest-videos">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2 class="section-title"><?php _e( 'Video', 'hotel-inside' ); ?></h2>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-lg-9">
				big video block
			</div>
			<div class="col-12 col-lg-3">
				small video block
			</div>
		</div>
	</div>
</section>


<?php
$args      = array(
	'posts_per_page'      => 4,
	'orderby'             => 'post_date',
	'order'               => 'ASC',
	'post_type'           => 'post',
	'post_status'         => 'publish',
	'ignore_sticky_posts' => 1,
	'post__not_in'        => get_option( 'sticky_posts' ),
	'tax_query'           => array(
		array(
			'taxonomy' => 'post_format',
			'field'    => 'slug',
			'terms'    => array(
				'post-format-video',
			),
			'operator' => 'IN',
		),
	),
);
$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ) :
	$i = 0;
	while ( $the_query->have_posts() ) :
		$the_query->the_post();
		$i++;
		if ( 1 === $i ) :
			get_template_part( 'template-parts/components/card', 'video' );
		else :
			get_template_part( 'template-parts/components/card', 'video' );
		endif;
	endwhile;
endif;
wp_reset_postdata();
?>
<?php endif; ?>
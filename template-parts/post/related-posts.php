<?php
global $post;
$cats = get_the_category( $post->ID );
if ( $cats ) :
	$cat_ids = array();
	foreach ( $cats as $pcat ) :
		$cat_ids[] = $pcat->term_id;
	endforeach;
endif;
?>
<div class="row">
	<div class="col-md-12 col-lg-7">
		<div class="single-post__sidebar-separator-line"></div>
		<p class="latest-posts__title"><?php esc_html_e( 'Letzte Beiträge', 'hotel-inside' ); ?></p>
		<div class="col-12">
			<?php
			$rel_args      = array(
				'category__in'   => $cat_ids,
				'post__not_in'   => array( $post->ID ),
				'posts_per_page' => 2,
				'orderby'        => 'post_date',
				'order'          => 'ASC',
				'post_type'      => 'post',
				'post_status'    => 'publish',
			);
			$related_query = new WP_Query( $rel_args );
			if ( $related_query->have_posts() ) :
				while ( $related_query->have_posts() ) :
					$related_query->the_post();
					get_template_part( 'template-parts/components/card', 'horizontal-lg' );
				endwhile;
			endif;
			wp_reset_postdata();
			?>
		</div><!-- .col -->
	</div>
</div>

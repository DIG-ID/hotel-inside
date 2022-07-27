<aside class="sidebar">
	<div class="swiper mySwiper">
		<div class="swiper-pagination"></div>
			<div class="swiper-wrapper">
				<?php
				$cat_terms = get_field( 'sidebar_categories', get_queried_object() );
				$cat_name = array();
				if ( $cat_terms ) :
					foreach ( $cat_terms as $my_cat ) :
						$cat_name[] = $my_cat->name;
						$args      = array(
							'cat'                 => $my_cat->term_id,
							'posts_per_page'      => 4,
							'orderby'             => 'post_date',
							'order'               => 'ASC',
							'post_type'           => 'post',
							'post_status'         => 'publish',
							'ignore_sticky_posts' => 1,
							'post__not_in'        => get_option( 'sticky_posts' ),
						);
						$the_query = new WP_Query( $args );
						if ( $the_query->have_posts() ) :
							while ( $the_query->have_posts() ) :
								$the_query->the_post();
								get_template_part( 'template-parts/components/card' );
							endwhile;
						endif;
						wp_reset_postdata();
					endforeach;
				endif;
				?>
			</div>
		</div>
</aside>
<?php print_r($cat_name); ?>
<?php
function mycats_names($cat_name) {
	foreach ( $cat_name as $catname ) :
		$catname = $catname;
		echo $catname;
	endforeach;
}

?>
<script>
var swiper = new Swiper(".mySwiper", {
	pagination: {
		el: ".swiper-pagination",
		clickable: true,
		renderBullet: function (index, className) {
			return '<span class="' + className + ' swiper-pagination-bullet">' + (index + <?php mycats_names($cat_name); ?>) + "</span>";
		},
	},
});
</script>

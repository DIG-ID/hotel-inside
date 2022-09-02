<aside class="archive-sidebar">
	<div class="swiper sidebar-swiper">
		<div class="swiper-pagination"></div>
		<div class="swiper-wrapper">
			<?php
			$cat_terms = get_field( 'sidebar_categories', get_queried_object() );
			if ( $cat_terms ) :
				foreach ( $cat_terms as $my_cat ) :
					echo '<div class="swiper-slide" data-name="' , $my_cat->name , '"><ul>';
					$sidebar_slide_args = array(
						'cat'                 => $my_cat->term_id,
						'posts_per_page'      => 4,
						'orderby'             => 'post_date',
						'order'               => 'DESC',
						'post_type'           => 'post',
						'post_status'         => 'publish',
						'ignore_sticky_posts' => 1,
						'post__not_in'        => get_option( 'sticky_posts' ),
						//'ignore_custom_sort'  => true,
					);
					$sidebar_slide_query = new WP_Query( $sidebar_slide_args );
					if ( $sidebar_slide_query->have_posts() ) :
						//var_dump($sidebar_slide_query);
						while ( $sidebar_slide_query->have_posts() ) :
							$sidebar_slide_query->the_post();
							echo '<li>';
							get_template_part( 'template-parts/components/card', 'horizontal-xs' );
							echo '</li>';
						endwhile;
						wp_reset_postdata();
					endif;
					echo '</ul></div>';
				endforeach;
			endif;
			?>
		</div>
	</div>
	<?php get_template_part( 'template-parts/modules/ads', 'sidebar' ); ?>
</aside>

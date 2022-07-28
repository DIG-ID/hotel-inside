<aside class="archive-sidebar">
	<div class="swiper sidebar-swiper">
		<div class="swiper-pagination"></div>
		<div class="swiper-wrapper">
			<?php
			$cat_terms = get_field( 'sidebar_categories', get_queried_object() );
			if ( $cat_terms ) :
				foreach ( $cat_terms as $my_cat ) :
					echo '<div class="swiper-slide" data-name="' , $my_cat->name , '">';
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
							get_template_part( 'template-parts/components/card', 'xs' );
						endwhile;
					endif;
					wp_reset_postdata();
					echo '</div>';
				endforeach;
			endif;
			?>
		</div>
		</div>
</aside>

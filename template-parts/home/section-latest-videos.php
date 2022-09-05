<section class="section section-latest-videos">
	<div class="custom-container">
		<div class="row">
			<div class="col-7 col-sm-7 col-md-7 col-lg-8 col-xl-8">
				<h2 class="section-title"><?php _e( 'Video', 'hotel-inside' ); ?></h2>
			</div>
			<div class="col-5 col-sm-5 col-md-5 col-lg-4 col-xl-4 text-end">
				<a href="https://www.youtube.com/channel/UC09KtecogA-MJBpTnVc0NFw" target="_blank" class="btn-go-to-overview"><?php _e( 'Alle Videos', 'hotel-inside' ); ?> <i class="icon-arrow"></i></a>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-lg-9">
				<div class="row">
					<?php
					$args1      = array(
						'posts_per_page'      => 1,
						'orderby'             => 'post_date',
						'order'               => 'DESC',
						'post_type'           => 'videos',
						'post_status'         => 'publish',
						'ignore_sticky_posts' => 1,
						'post__not_in'        => get_option( 'sticky_posts' ),
					);
					$the_query1 = new WP_Query( $args1 );
					if ( $the_query1->have_posts() ) :
						while ( $the_query1->have_posts() ) :
							$the_query1->the_post();
							get_template_part( 'template-parts/components/card', 'youtube' );
						endwhile;
						wp_reset_postdata();
					endif;
					?>
				</div>
			</div>
			<div class="col-12 col-lg-3">
				<div class="row">
					<?php
					$args2      = array(
						'posts_per_page'      => 3,
						'offset'              => 1,
						'orderby'             => 'post_date',
						'order'               => 'ASC',
						'post_type'           => 'videos',
						'post_status'         => 'publish',
						'ignore_sticky_posts' => 1,
						'post__not_in'        => get_option( 'sticky_posts' ),
					);
					$the_query2 = new WP_Query( $args2 );
					if ( $the_query2->have_posts() ) :
						while ( $the_query2->have_posts() ) :
							$the_query2->the_post();
							get_template_part( 'template-parts/components/card', 'youtube-sm' );
						endwhile;
					endif;
					wp_reset_postdata();
					?>
				</div>
			</div>
		</div>
	</div>
</section>

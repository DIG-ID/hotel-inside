<section class="section section-club-events">
	<div class="custom-container">
		<div class="row justify-content-between align-items-center title-w-slider">
			<div class="col-5">
				<h2 class="section-title"><?php _e( 'Club', 'hotel-inside' ); ?></h2>
			</div>
			<div class="col-2 position-relative d-flex justify-content-end align-items-center">
				<div class="swiper-button-prev section-club-events-button-prev"></div>
				<div class="swiper-button-next section-club-events-button-next"></div>
			</div>
			<div class="col-5 text-end">
				<a href="<?php echo esc_url( get_post_type_archive_link( 'club_events' ) ); ?>" class="btn-go-to-overview"><?php _e( 'Zum Club', 'hotel-inside' ); ?> <i class="icon-arrow"></i></a>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="swiper swiper-club-events">
					<div class="swiper-wrapper">
						<?php
						$date_today = gmdate( 'Ymd' );

						$event_args = array(
							'post_type'      => 'club_events',
							'post_status'    => 'publish',
							'posts_per_page' => 6,
							'order'          => 'ASC',
							'meta_query'     => array(
								'relation' => 'OR',
								array(
									'key'     => 'club_event_start_date',
									'value'   => $date_today,
									'compare' => '>=',
									'type'    => 'DATE',
								),
								array(
									'key'     => 'club_event_end_date',
									'value'   => $date_today,
									'compare' => '<',
									'type'    => 'DATE',
								),
							),
							'orderby'        => 'club_event_start_date',
						);
						$event_query = new WP_Query( $event_args );
						if ( $event_query->have_posts() ) :
							while ( $event_query->have_posts() ) :
								$event_query->the_post();
								?>
								<div class="swiper-slide">
									<?php get_template_part( 'template-parts/components/card', 'club-event' ); ?>
								</div>
								<?php
							endwhile;
						endif;
						?>
						</div>
						<div class="swiper-pagination"></div>
					</div>
				</div>
		</div>
	</div><!-- .container -->
</section>

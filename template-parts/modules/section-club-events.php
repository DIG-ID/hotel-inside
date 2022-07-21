<section class="section section-club-events-slider">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2 class="section-title"><?php _e( 'Club', 'hotel-inside' ); ?></h2>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<p>slider loop trough the future club events</p>
			</div>
		</div>
	</div>
</section>
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
			'key'     => 'event_start_date',
			'value'   => $date_today,
			'compare' => '>=',
			'type'    => 'DATE',
		),
		array(
			'key'     => 'event_end_date',
			'value'   => $date_today,
			'compare' => '>=',
			'type'    => 'DATE',
		),
	),
	'orderby'        => 'event_start_date',
);
$event_query = new WP_Query( $event_args );
if ( $event_query->have_posts() ) :
	while ( $event_query->have_posts() ) :
		$event_query->the_post();
		$date_start = get_field( 'event_start_date' );
		$date_end   = get_field( 'event_end_date' );
		?>
		<div class="col-12 col-md-6">
		
		</div>
		<?php
	endwhile;
else :
?>
<a href="<?php get_the_permalink(); ?>" class="card-link">
	<article id="post-<?php the_ID(); ?>" class="card card-club-event">
		<?php if ( has_post_thumbnail() ) : ?>
			<figure>
				<?php the_post_thumbnail( 'card-club-event' ); ?>
			</figure>
		<?php else : ?>
			<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/default-1-block-thumbnail.png' ); ?>" alt="default thumbnail">
			<!--<img src="https://picsum.photos/670/454?random=4" alt="example thumbnail">-->
		<?php endif; ?>
		<div class="card-content">
			<?php the_title( '<h3 class="card-title">', '</h3>' ); ?>
			<div class="card-description"><?php the_excerpt(); ?></div>
			<div class="card-date">
				<?php
				$timestamp_today = strtotime( gmdate( 'Ymd' ) );
				$timestamp_start = strtotime( get_field( 'club_event_start_date' ) );
				$timestamp_end   = strtotime( get_field( 'club_event_end_date' ) );
				?>
				<i class="icon-clock"></i>
				<time datetime="<?php echo get_the_date( 'c' ); ?>" itemprop="datePublished"><?php echo date_i18n( 'j F Y', $timestamp_start ); ?></time>
			</div>
		</div>
	</article>
</a>

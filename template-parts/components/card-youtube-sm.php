<?php $video_id = get_field( 'video_id' ); ?>
<?php if ( $video_id ) : ?>
	<div class="col-12">
		<a data-fancybox data-small-btn="true" href="https://youtu.be/<?php echo esc_html( $video_id ); ?>" class="card-link">
			<article id="post-<?php the_ID(); ?>" class="card card--youtube card--youtube__sm">
				<figure>
					<img src="http://img.youtube.com/vi/<?php echo esc_html( $video_id ); ?>/mqdefault.jpg" />
					<span class="play-icon">
						<svg xmlns="http://www.w3.org/2000/svg" width="9" height="10" viewBox="0 0 9 10"><defs><style>.a{fill:#e12127;}</style></defs><path class="a" d="M5,0l5,9H0Z" transform="translate(9) rotate(90)"/></svg>
					</span>
				</figure>
				<div class="card-content">
					<h3 class="card-title"><?php echo esc_html( hi_get_youtube_title( $video_id ) ); ?></h3>
					<div class="card-date">
						<i class="icon-clock"></i>
						<time datetime="<?php echo get_the_date( 'c' ); ?>" itemprop="datePublished"><?php echo get_the_date(); ?></time>
					</div>
				</div>
			</article>
		</a>
	</div>
<?php endif; ?>

<?php $video_id = get_field( 'video_id' ); ?>
<?php if ( $video_id ) : ?>
	<div class="col-12">
		<a data-fancybox data-small-btn="true" href="https://youtu.be/<?php echo esc_html( $video_id ); ?>" class="card-link">
			<article id="post-<?php the_ID(); ?>" class="card card--youtube">
				<figure>
					<img src="https://img.youtube.com/vi/<?php echo esc_html( $video_id ); ?>/maxresdefault.jpg" />
					<span class="play-icon">
						<svg xmlns="http://www.w3.org/2000/svg" width="27.742" height="34.144" viewBox="0 0 27.742 34.144"><defs><style>.a{fill:#e12127;}</style></defs><path class="a" d="M17.072,0,34.144,27.742H0Z" transform="translate(27.742) rotate(90)"/></svg>
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

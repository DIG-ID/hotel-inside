<?php $video_id = get_field( 'video_id' ); ?>
<?php if ( $video_id ) : ?>
	<article id="post-<?php the_ID(); ?>" class="card card-youtube">
		<a data-fancybox data-small-btn="true" href="https://youtu.be/<?php echo esc_html( $video_id ); ?>">
			<img src="http://img.youtube.com/vi/<?php echo esc_html( $video_id ); ?>/maxresdefault.jpg" />
			<i class="fas fa-play"></i>
			<div class="card-content">
				<h3 class="card-title"><?php echo esc_html( hi_get_youtube_title( $video_id ) ); ?></h3>
				<div class="card-date">
					<i class="icon-clock"></i>
					<time datetime="<?php echo get_the_date( 'c' ); ?>" itemprop="datePublished"><?php echo get_the_date(); ?></time>
				</div>
			</div>
		</a>
	</article>
<?php endif; ?>

<div class="sidebar__inner">
	<?php 
	$author_id       = get_the_author_meta( 'ID' );
	$author_nickname = get_the_author_meta( 'nickname' );
	if ( 'editorial.team' !== $author_nickname ) :
		?>
		<div class="container p-0 sidebar__content">
			<div class="row">
				<div class="col-12">
					<div class="author__img-wrapper">
						<?php
						$author_badge = get_field( 'profile_picture', 'user_'. $author_id );
						echo wp_get_attachment_image( $author_badge, 'author-avatar' );
						?>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<span class="separator-line"></span>
					<p class="author__title"><?php esc_html_e( 'Über den Autor', 'hotel-inside' ); ?></p>
					<p class="author__username"><?php echo get_the_author_meta( 'display_name', $author_id ); ?></p>
					<?php
					$author_description = get_the_author_meta( 'user_description', $author_id );
					if ( ! empty( $author_description ) ) :
						echo '<p class="author__description">' . $author_description . '</p>
						<a id="showmore" class="author__showmore itsclosed">' . esc_html__( 'Weiterlesen...', 'hotel-inside' ) . '</a>';
					endif;
					?>
				</div>
			</div><!-- .row -->
			<?php
				$custom_badges = get_field( 'custom_badge_have_a_custom_badge' );
				if ( $custom_badges ) :
					$badge_text  = get_field( 'custom_badge_badge_text' );
					$badge_image = get_field( 'custom_badge_badge_logo' );

					echo '<div class="row"><div class="col-12"><span class="post-badge post-badge--custom-badge"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 122.32 121.58" preserveAspectRatio="xMidYMid meet" width="100%" height="100%"><path fill="#c26538" d="m120.22 60.76-2.16-2.56a8.908 8.908 0 0 1-1.16-9.72l1.5-3c2.32-4.64.2-10.27-4.61-12.23l-3.11-1.27a8.91 8.91 0 0 1-5.54-8.07l-.07-3.35c-.1-5.19-4.6-9.19-9.76-8.69l-3.34.32a8.925 8.925 0 0 1-8.66-4.57l-1.62-2.94c-2.5-4.54-8.34-6-12.69-3.16l-2.81 1.84a8.904 8.904 0 0 1-9.79-.02l-2.8-1.85C49.27-1.37 43.42.06 40.9 4.59l-1.63 2.93a8.899 8.899 0 0 1-8.68 4.53l-3.34-.34c-5.16-.52-9.68 3.46-9.8 8.65l-.08 3.35a8.915 8.915 0 0 1-5.58 8.05l-3.11 1.25c-4.81 1.94-6.96 7.56-4.66 12.21l1.48 3.01a8.93 8.93 0 0 1-1.2 9.72L2.13 60.5c-3.36 3.95-2.65 9.93 1.55 12.98l2.71 1.97a8.898 8.898 0 0 1 3.45 9.16l-.74 3.27c-1.14 5.06 2.27 10.02 7.4 10.78l3.32.49c3.52.52 6.39 3.08 7.32 6.51l.87 3.24c1.34 5.01 6.67 7.82 11.56 6.1l3.16-1.11a8.893 8.893 0 0 1 9.5 2.37l2.27 2.47c3.52 3.81 9.54 3.83 13.07.03l2.29-2.45a8.898 8.898 0 0 1 9.51-2.32l3.16 1.13c4.89 1.74 10.22-1.04 11.59-6.05l.88-3.24a8.917 8.917 0 0 1 7.34-6.48l3.32-.47c5.14-.73 8.57-5.67 7.45-10.74l-.72-3.28c-.77-3.47.61-7.07 3.49-9.15l2.72-1.96c4.21-3.03 4.95-9.01 1.61-12.97Zm-29.19-6.75L74.87 65.75c-.43.31-.61.86-.44 1.37l6.17 19c.37 1.13-.92 2.06-1.88 1.37L62.56 75.75c-.43-.31-1.01-.31-1.44 0L44.96 87.49c-.96.7-2.25-.24-1.88-1.37l6.17-19c.16-.5-.02-1.06-.44-1.37L32.65 54.01c-.96-.7-.47-2.21.72-2.21h19.98c.53 0 1-.34 1.16-.85l6.17-19c.37-1.13 1.96-1.13 2.33 0l6.17 19c.16.5.63.85 1.16.85h19.98c1.19 0 1.68 1.52.72 2.21Z"/><path fill="#f8fafb" d="M90.31 51.8H70.33c-.53 0-1-.34-1.16-.85l-6.17-19c-.37-1.13-1.96-1.13-2.33 0l-6.17 19c-.16.5-.63.85-1.16.85H33.36c-1.19 0-1.68 1.52-.72 2.21L48.8 65.75c.43.31.61.86.44 1.37l-6.17 19c-.37 1.13.92 2.06 1.88 1.37l16.16-11.74c.43-.31 1.01-.31 1.44 0l16.16 11.74c.96.7 2.25-.24 1.88-1.37l-6.17-19c-.16-.5.02-1.06.44-1.37l16.16-11.74c.96-.7.47-2.21-.72-2.21Z"/></svg> <div class="content">';
					if ( $badge_image ) :
						echo wp_get_attachment_image( $badge_image, 'badge-logo' );
					endif;
					echo '<p>' . $badge_text . '</p></div></span></div></div>';
				endif;
			?>
			<?php get_template_part( 'template-parts/modules/ads', 'sidebar' ); ?>

		</div><!-- .container -->
		<?php
	else :
		?>
		<div class="container p-0 sidebar__content no-author">
			<?php
				$custom_badges = get_field( 'custom_badge_have_a_custom_badge' );
				if ( $custom_badges ) :
					$badge_text  = get_field( 'custom_badge_badge_text' );
					$badge_image = get_field( 'custom_badge_badge_logo' );

					echo '<div class="row"><div class="col-12"><span class="post-badge post-badge--custom-badge"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 122.32 121.58" preserveAspectRatio="xMidYMid meet" width="100%" height="100%"><path fill="#c26538" d="m120.22 60.76-2.16-2.56a8.908 8.908 0 0 1-1.16-9.72l1.5-3c2.32-4.64.2-10.27-4.61-12.23l-3.11-1.27a8.91 8.91 0 0 1-5.54-8.07l-.07-3.35c-.1-5.19-4.6-9.19-9.76-8.69l-3.34.32a8.925 8.925 0 0 1-8.66-4.57l-1.62-2.94c-2.5-4.54-8.34-6-12.69-3.16l-2.81 1.84a8.904 8.904 0 0 1-9.79-.02l-2.8-1.85C49.27-1.37 43.42.06 40.9 4.59l-1.63 2.93a8.899 8.899 0 0 1-8.68 4.53l-3.34-.34c-5.16-.52-9.68 3.46-9.8 8.65l-.08 3.35a8.915 8.915 0 0 1-5.58 8.05l-3.11 1.25c-4.81 1.94-6.96 7.56-4.66 12.21l1.48 3.01a8.93 8.93 0 0 1-1.2 9.72L2.13 60.5c-3.36 3.95-2.65 9.93 1.55 12.98l2.71 1.97a8.898 8.898 0 0 1 3.45 9.16l-.74 3.27c-1.14 5.06 2.27 10.02 7.4 10.78l3.32.49c3.52.52 6.39 3.08 7.32 6.51l.87 3.24c1.34 5.01 6.67 7.82 11.56 6.1l3.16-1.11a8.893 8.893 0 0 1 9.5 2.37l2.27 2.47c3.52 3.81 9.54 3.83 13.07.03l2.29-2.45a8.898 8.898 0 0 1 9.51-2.32l3.16 1.13c4.89 1.74 10.22-1.04 11.59-6.05l.88-3.24a8.917 8.917 0 0 1 7.34-6.48l3.32-.47c5.14-.73 8.57-5.67 7.45-10.74l-.72-3.28c-.77-3.47.61-7.07 3.49-9.15l2.72-1.96c4.21-3.03 4.95-9.01 1.61-12.97Zm-29.19-6.75L74.87 65.75c-.43.31-.61.86-.44 1.37l6.17 19c.37 1.13-.92 2.06-1.88 1.37L62.56 75.75c-.43-.31-1.01-.31-1.44 0L44.96 87.49c-.96.7-2.25-.24-1.88-1.37l6.17-19c.16-.5-.02-1.06-.44-1.37L32.65 54.01c-.96-.7-.47-2.21.72-2.21h19.98c.53 0 1-.34 1.16-.85l6.17-19c.37-1.13 1.96-1.13 2.33 0l6.17 19c.16.5.63.85 1.16.85h19.98c1.19 0 1.68 1.52.72 2.21Z"/><path fill="#f8fafb" d="M90.31 51.8H70.33c-.53 0-1-.34-1.16-.85l-6.17-19c-.37-1.13-1.96-1.13-2.33 0l-6.17 19c-.16.5-.63.85-1.16.85H33.36c-1.19 0-1.68 1.52-.72 2.21L48.8 65.75c.43.31.61.86.44 1.37l-6.17 19c-.37 1.13.92 2.06 1.88 1.37l16.16-11.74c.43-.31 1.01-.31 1.44 0l16.16 11.74c.96.7 2.25-.24 1.88-1.37l-6.17-19c-.16-.5.02-1.06.44-1.37l16.16-11.74c.96-.7.47-2.21-.72-2.21Z"/></svg> <div class="content">';
					if ( $badge_image ) :
						echo wp_get_attachment_image( $badge_image, 'badge-logo' );
					endif;
					echo '<p>' . $badge_text . '</p></div></span></div></div>';
				endif;
			?>
			<?php get_template_part( 'template-parts/modules/ads', 'sidebar' ); ?>

		</div>
		<?php
	endif;
	?>
</div>

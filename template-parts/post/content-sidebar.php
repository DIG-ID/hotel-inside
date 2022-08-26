<div class="sidebar__inner">
	<?php 
	$author_id       = get_the_author_meta( 'ID' );
	$author_nickname = get_the_author_meta( 'nickname' );
	if ( 'editorial.team' !== $author_nickname ) :
		?>
		<div class="container p-0 sidebar__content">
			<div class="author__img-wrapper">
				<?php
				$author_badge = get_field( 'profile_picture', 'user_'. $author_id );
				$authorimg_size = 'full';
				echo wp_get_attachment_image( $author_badge, $authorimg_size );
				?>
			</div>
			<div class="row">
				<div class="single-post__sidebar-separator-line"></div>
				<p class="author__title"><?php esc_html_e( 'Über den Autor', 'hotel-inside' ); ?></p>
				<p class="author__username"><?php echo get_the_author_meta( 'display_name', $author_id ); ?></p>
				<p class="author__description"><?php echo get_the_author_meta( 'user_description', $author_id ); ?></p>
				<a id="showmore" class="author__showmore"><?php esc_html_e( 'Weiterlesen...', 'hotel-inside' ); ?></a>
			</div><!-- .row -->
			<?php get_template_part( 'template-parts/modules/ads', 'sidebar' ); ?>
		</div><!-- .container -->
		<?php
	endif;
	?>
</div>
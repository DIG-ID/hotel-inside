<div class="sidebar-by-hans__inner">
	<div class="container p-0">
		<div class="row">
			<div class="col-12">
				<div class="author__img-wrapper">
					<?php
					$author_id      = get_the_author_meta( 'ID' );
					$author_badge   = get_field( 'profile_picture', 'user_'. $author_id );
					$authorimg_size = 'full';
					echo wp_get_attachment_image( $author_badge, $authorimg_size );
					?>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<span class="separator-line"></span>
				<p class="author__title"><?php esc_html_e( 'Über den Autor', 'hotel-inside' ); ?></p>
				<p class="author__username"><?php echo get_the_author_meta( 'display_name', $author_id ); ?></p>
				<p class="author__description"><?php echo get_the_author_meta( 'user_description', $author_id ); ?></p>
				<a id="showmore" class="author__showmore"><?php esc_html_e( 'Weiterlesen...', 'hotel-inside' ); ?></a>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<p class="latest-posts-by-hans__title"><?php esc_html_e( 'Letzte Beiträge von Hans Amrein', 'hotel-inside' ); ?></p>
				<?php
				global $post;
				$args      = array(
					'post__not_in'   => array( $post->ID ),
					'posts_per_page' => 2,
					'orderby'        => 'post_date',
					'order'          => 'DESC',
					'post_type'      => 'kommentar_by_hans',
					'post_status'    => 'publish',
				);
				$the_query = new WP_Query( $args );
				if ( $the_query->have_posts() ) :
					while ( $the_query->have_posts() ) :
						$the_query->the_post();
						get_template_part( 'template-parts/components/card', 'horizontal' );
					endwhile;
				endif;
				wp_reset_postdata();
				?>
			</div><!-- .col -->
		</div><!-- .row -->
		<?php get_template_part( 'template-parts/modules/ads', 'sidebar' ); ?>
	</div><!-- .container -->
</div>

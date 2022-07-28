<section class="section section-categorie-three-blocks">
	<div class="custom-container">
		<div class="row">
			<?php
			$myterms = get_field( '2_columns_category' );
			if ( $myterms ) :
				foreach( $myterms as $myterm ) :
					?>
					<div class="col-12 col-lg-6">
						<div class="row">
							<div class="col-8">
								<h2 class="section-title"><?php echo esc_html( $myterm->name ); ?></h2>
							</div>
							<div class="col-4 text-end">
								<a href="<?php echo esc_url( get_term_link( $myterm ) ); ?>" class="btn-go-to-overview"><?php _e( 'Alle Beiträge', 'hotel-inside' ); ?> <i class="icon-arrow"></i></a>
							</div>
						</div><!-- .row -->
						<div class="row">
							<?php
							$args      = array(
								'cat'                 => $myterm->term_id,
								'posts_per_page'      => 3,
								'orderby'             => 'post_date',
								'order'               => 'ASC',
								'post_type'           => 'post',
								'post_status'         => 'publish',
								'ignore_sticky_posts' => 1,
								'post__not_in'        => get_option( 'sticky_posts' ),
							);
							$the_query = new WP_Query( $args );
							if ( $the_query->have_posts() ) :
								$i = 0;
								while ( $the_query->have_posts() ) :
									$the_query->the_post();
									$i++;
									if ( 1 === $i ) :
										?>
										<div class="col-12 col-md-12 col-lg-12">
											<?php get_template_part( 'template-parts/components/card' ); ?>
										</div>
										<?php
									else :
										?>
										<div class="col-12 col-md-6 col-lg-6">
											<?php get_template_part( 'template-parts/components/card' ); ?>
										</div>
										<?php
									endif;
								endwhile;
							endif;
							wp_reset_postdata();
							?>
						</div><!-- .row -->
					</div><!-- .col -->
					<?php
				endforeach;
			endif;
			?>
		</div><!-- .row -->
	</div><!-- .container -->
</section>

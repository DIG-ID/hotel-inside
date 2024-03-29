<?php
$myterms = get_field( 'categories' );
if ( $myterms ) :
	$i = 0;
	foreach ( $myterms as $mysingleterm ) :
		$i++;
		if ( 4 === $i ) :
			get_template_part( 'template-parts/modules/section', 'newsletter-cta' );
		endif;
		?>
		<section class="section section-four-blocks">
			<div class="custom-container">
				<div class="row">
					<div class="col-12 col-sm-7 col-md-7 col-lg-8 col-xl-8">
						<h2 class="section-title"><?php echo esc_html( $mysingleterm->name ); ?></h2>
					</div>
					<div class="col-12 col-sm-5 col-md-5 col-lg-4 col-xl-4 text-end">
						<a href="<?php echo esc_url( get_term_link( $mysingleterm ) ); ?>" class="btn-go-to-overview"><?php _e( 'Alle Beiträge', 'hotel-inside' ); ?> <i class="icon-arrow"></i></a>
					</div>
				</div><!-- .row -->
				<div class="row">
					<?php
					$args      = array(
						'cat'                 => $mysingleterm->term_id,
						'posts_per_page'      => 4,
						'orderby'             => 'post_date',
						'order'               => 'DESC',
						'post_type'           => 'post',
						'post_status'         => 'publish',
						'ignore_sticky_posts' => 1,
						'post__not_in'        => get_option( 'sticky_posts' ),
					);
					$the_query = new WP_Query( $args );
					if ( $the_query->have_posts() ) :
						while ( $the_query->have_posts() ) :
							$the_query->the_post();
							?><div class="col-12 col-md-6 col-lg-3"><?php
								get_template_part( 'template-parts/components/card', 'sm' );
							?></div><?php
						endwhile;
					endif;
					wp_reset_postdata();
					?>
				</div><!-- .row -->
			</div><!-- .container-->
		</section>
		<?php
	endforeach;
endif;
?>

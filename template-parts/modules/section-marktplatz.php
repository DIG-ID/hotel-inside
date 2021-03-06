<section class="section section-featured-marktplatz">
	<div class="custom-container">
		<div class="row">
			<div class="col-12 text-center">
				<h2 class="section-title"><?php _e( 'Marktplatz', 'hotel-inside' ); ?></h2>
			</div>
		</div>
		<?php
		$featured_marktplatz = get_field( 'marktplatz' );
		if ( $featured_marktplatz ) :
			?>
			<div class="row">
				<div class="swiper swiper-marktplatz">
					<div class="swiper-wrapper"> 
						<?php
						foreach ( $featured_marktplatz as $post ) :
							setup_postdata( $post );
							?>
							<div class="swiper-slide marktplatz-company">
								<a href="<?php echo esc_url( get_post_type_archive_link( get_post_type() ) ); ?>">
									<?php
									if ( has_post_thumbnail() ) :
										the_post_thumbnail( 'full' );
									endif;
									?>
								</a>
							</div>
							<?php
						endforeach;
						?>
					</div>
					<?php wp_reset_postdata(); ?>
					</div>
				</div>
			</div><!-- .row -->
		<?php
		endif;
		?>
	</div><!-- .container -->
</section>

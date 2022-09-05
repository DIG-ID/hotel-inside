<footer class="main-footer">
	<div class="footer-content">
		<div class="custom-container">
			<div class="row justify-content-between">
				<?php get_template_part( 'template-parts/footer/branding' ); ?>
				<?php get_template_part( 'template-parts/footer/navigation' ); ?>
				<?php get_template_part( 'template-parts/footer/newsletter' ); ?>
			</div><!-- .row -->
		</div><!-- .container -->
	</div><!-- .footer-content -->
	<div class="footer-copyright">
		<div class="custom-container">
			<div class="row">
				<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 footer-copyright__topCol">
					<div class="powered-by">
						<p>
							<?php
							$y = date( 'Y' );
							printf(
								/* translators: %s: WordPress. */
								esc_html__( '%d &copy; All rights reserved by %s.', 'hotel-inside' ),
								esc_html( $y ),
								'<a href="' . esc_url( __( 'https://dig.id/', 'hotel-inside' ) ) . '">dig.id</a>'
							);
							?>
						</p>
					</div><!-- .powered-by -->
				</div>
				<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
					<?php if ( has_nav_menu( 'copy-footer' ) ) : ?>
						<nav aria-label="<?php esc_attr_e( 'Footer copyright menu', 'hotel-inside' ); ?>" class="footer-copyright-navigation">
							<ul class="footer-copyright-navigation-wrapper">
								<?php
								wp_nav_menu(
									array(
										'theme_location' => 'copy-footer',
										'items_wrap'     => '%3$s',
										'container'      => false,
										'depth'          => 1,
										'link_before'    => '<span>',
										'link_after'     => '</span>',
										'fallback_cb'    => false,
									)
								);
								?>
							</ul><!-- .footer-navigation-wrapper -->
						</nav><!-- .footer-navigation -->
					<?php endif; ?>
				</div>
			</div><!-- .row -->
		</div><!-- .container -->
	</div><!-- .footer-bar -->
</footer><!-- #colophon -->

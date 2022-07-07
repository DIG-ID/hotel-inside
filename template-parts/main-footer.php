
<footer class="main-footer">
	<div class="footer-content">
		<div class="container">
			<div class="row">
				<?php get_template_part( 'template-parts/footer/branding' ); ?>
				<?php get_template_part( 'template-parts/footer/navigation' ); ?>
				<?php get_template_part( 'template-parts/footer/newsletter' ); ?>
			</div><!-- .row -->
		</div><!-- .container -->
	</div><!-- .footer-content -->
	<div class="footer-copyright">
		<div class="container">
			<div class="row">
				<div class="col-6">
					<div class="powered-by">
						<?php
						printf(
							/* translators: %s: WordPress. */
							esc_html__( 'Proudly powered by %s.', 'hotel-inside' ),
							'<a href="' . esc_url( __( 'https://dig.id/', 'hotel-inside' ) ) . '">dig.id</a>'
						);
						?>
					</div><!-- .powered-by -->
				</div>
				<div class="col-6">
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

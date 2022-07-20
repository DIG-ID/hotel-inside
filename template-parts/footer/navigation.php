<div class="col col-12 col-lg-4">
	<h3 class="footer-title"><?php esc_html_e( 'Themen', 'hotel-inside' ); ?></h3>
	<?php if ( has_nav_menu( 'footer' ) ) : ?>
		<nav aria-label="<?php esc_attr_e( 'Footer menu', 'hotel-inside' ); ?>" class="footer-navigation">
			<ul class="footer-navigation-wrapper">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'footer',
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

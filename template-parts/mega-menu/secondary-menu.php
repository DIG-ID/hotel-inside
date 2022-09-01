<div class="col-lg-3">
	<h3 class="mega-menu__title"><?php esc_html_e( 'Mehr', 'hotel-inside' ); ?></h3>
	<?php
		wp_nav_menu(
			array(
				'theme_location'  => 'top-secondary',
				'container_class' => 'justify-content-xl-end',
				'container_id'    => 'navbarSupportedContent',
				'menu_class'      => 'navbar-nav',
				'fallback_cb'     => '',
				'menu_id'         => 'top-sec-nav',
				'walker'          => new Custom_Walker_Nav_Menu(),
			)
		);
	?>
</div>

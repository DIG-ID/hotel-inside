<div class="col-lg-5">
	<h3 class="mega-menu__title"><?php esc_html_e( 'Themen', 'hotel-inside' ); ?></h3>
	<?php
		wp_nav_menu(
			array(
				'theme_location'  => 'top',
				'container_class' => 'justify-content-xl-end navbar-cols-2',
				'container_id'    => 'navbarSupportedContent',
				'menu_class'      => 'navbar-nav',
				'fallback_cb'     => '',
				'menu_id'         => 'top-nav',
				'walker'          => new Custom_Walker_Nav_Menu(),
			)
		);
	?>
</div>

<div class="col-lg-12">
	<ul class="mega-menu__copyright-navigation-wrapper">
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
	</ul>
</div>

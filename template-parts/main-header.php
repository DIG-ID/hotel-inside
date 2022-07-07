<header id="main-header" class="main-header fixed-top" itemscope itemtype="http://schema.org/WebSite">
	<div class="top-header">
		<div class="container">
			<div class="row align-items-center">
				<div class="col">
					<?php if ( is_front_page() && is_home() ) : ?>
						<a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url" class="navbar-brand custom-logo-link ">
							<h1 class="screen-reader-text"><?php bloginfo( 'name' ); ?></h1>
							<?php the_custom_logo(); ?>
						</a>
					<?php else : ?>
						<a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url" class="navbar-brand custom-logo-link">
							<p class="screen-reader-text"><?php bloginfo( 'name' ); ?></p>
							<?php the_custom_logo(); ?>
						</a>
					<?php endif; ?>
				</div>
				<div class="col">
					<p>think thank</p>
				</div>
				<div class="col d-flex justify-content-between align-items-center">
					<?php get_search_form(); ?>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
						<span></span>
						<span></span>
						<span></span>
					</button>
					<?php
					wp_nav_menu(
						array(
							'theme_location'  => 'top',
							'container_class' => 'collapse navbar-collapse justify-content-xl-end',
							'container_id'    => 'navbarSupportedContent',
							'menu_class'      => 'navbar-nav align-items-xl-center',
							'fallback_cb'     => '',
							'menu_id'         => 'top-nav',
							'walker'          => new Custom_Walker_Nav_Menu(),
						)
					);
					?>
				</div>
			</div>
		</div>
	</div>
	<nav class="navbar navbar-expand-lg bg-light" role="navigation">
		<div class="container">
			<?php
			wp_nav_menu(
				array(
					'theme_location'  => 'main',
					'container_class' => 'collapse navbar-collapse',
					'container_id'    => 'navbarNav',
					'menu_class'      => 'navbar-nav',
					'fallback_cb'     => '',
					'menu_id'         => 'main-nav',
					'walker'          => new Custom_Walker_Nav_Menu(),
				)
			);
			?>
		</div>
	</nav>
</header>

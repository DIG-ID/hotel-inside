<header id="main-header" class="main-header fixed-top" itemscope itemtype="http://schema.org/WebSite">
	<div class="top-header">
		<div class="custom-container">
			<div class="row align-items-center">
				<div class="col">
					<?php if ( is_front_page() ) : ?>
						<a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url" class="navbar-brand custom-logo-link ">
							<h1 class="screen-reader-text">Hotel Inside - Hospitality-Fachportal für den deutschsprachigen Raum</h1>
							<?php the_custom_logo(); ?>
						</a>
					<?php else : ?>
						<a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url" class="navbar-brand custom-logo-link">
							<p class="screen-reader-text">Hotel Inside - Hospitality-Fachportal für den deutschsprachigen Raum</p>
							<?php the_custom_logo(); ?>
						</a>
					<?php endif; ?>
				</div>
				<div class="col text-center">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/hotel-inside-tag.svg' ); ?>" class="navbar__subtitle" alt="hotel inside tag">
				</div>
				<div class="col d-flex align-items-center justify-content-end">
					<?php get_search_form(); ?>
					<a href="#" class="search__mobile-btn">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/search_m.svg" alt="" title="">
					</a>
					<button id="nav-icon2" class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#mega-menu">
					<span></span>
					<span></span>
					<span></span>
					<span></span>
					<span></span>
					<span></span>
					</button>
					<div id="mega-menu" class="mega-menu collapse">
						<div class="container">
							<div class="row mega-menu__row">
								<?php get_template_part( 'template-parts/mega-menu/socials' ); ?>
								<?php get_template_part( 'template-parts/mega-menu/main-menu' ); ?>
								<?php get_template_part( 'template-parts/mega-menu/secondary-menu' ); ?>
							</div>
						</div>
						<div class="container-fluid p-0">
							<div class="row mega-menu__row mega-menu__bottom-row">
								<?php get_template_part( 'template-parts/mega-menu/copyright-menu' ); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="search__bar" class="search__bar invisible n-margin-top-1">
		<div class="search__bar-wrapper">
			<?php get_search_form(); ?>	
		</div>			
	</div>
	<nav class="navbar navbar-expand-lg bg-light" role="navigation">
		<div class="custom-container">
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
<div id="section-contact-intro" class="section section-contact-intro">
	<div class="custom-container">
		<div class="row contact-intro__row">
			<div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 contact-intro__col">
				<div class="content__separator-line"></div>
				<h2 class="contact-intro__title"><?php the_field('title'); ?></h2>
				<div class="row">
					<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
						<?php if( have_rows('contact_info_left_list') ):
						while( have_rows('contact_info_left_list') ) : the_row(); ?>
							<h2 class="contact-intro__contact-title"><?php the_sub_field('contact_info_title'); ?></h2>
							<p class="contact-intro__text"><?php the_sub_field('contact_info_text'); ?></p>
						<?php
						endwhile;
						endif;?>
					</div>
					<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
						<?php if( have_rows('contact_info_right_list') ):
						while( have_rows('contact_info_right_list') ) : the_row(); ?>
							<h2 class="contact-intro__contact-title"><?php the_sub_field('contact_info_title'); ?></h2>
							<p class="contact-intro__text"><?php the_sub_field('contact_info_text'); ?></p>
						<?php
						endwhile;
						endif;?>
					</div>
				</div>
			</div>
			<div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 contact-intro__col">
				<div class="content__separator-line"></div>
				<h2 class="contact-intro__title"><?php the_field( 'form_title' ); ?></h2>
				<?php $kontakt_form = get_field( 'contact_form_shortcode' );?>
				<?php echo do_shortcode( $kontakt_form ); ?>
			</div>
		</div>
	</div>
</div>

<section class="section section-intro d-none d-lg-block">
	<div class="custom-container">
		<div class="row">
			<div class="col-12">
				<div class="page-title--line"></div>
				<h2 class="page-title"><?php the_title(); ?></h2>
			</div>
		</div>
	</div>
</section>

<section class="section section-newsletter">
    <div class="custom-container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8">
                <p class="newsletter-info__title"><?php echo get_field( 'newsletter_title' ); ?></p>
                <p class="newsletter-info__text"><?php echo get_field( 'newsletter_text' ); ?></p>
                <ul class="newsletter-info__list">
                    <?php
                    if( have_rows('newsletter_list') ):
                        while( have_rows('newsletter_list') ) : the_row();
                        ?>
                            <li><?php echo get_sub_field('item'); ?></li>
                        <?php 
                        endwhile;
                    endif;
                    ?>
                </ul>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4" style="padding-top: 5px;">
                <?php $kontakt_form = get_field( 'newsletter_form_shortcode' );?>
				<?php echo do_shortcode( $kontakt_form ); ?>
            </div>
        </div>
    </div>
</section>

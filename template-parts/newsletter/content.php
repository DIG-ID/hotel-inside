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
            <!-- Content Column (8/12 width) -->
            <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8">
                <p class="newsletter-info__title">Werden Sie ein Insider!</p>
                <p class="newsletter-info__text">
                    Abonnieren Sie unseren Newsletter und erhalten Sie die neuesten Insights sowie wöchentliche Schwerpunkt-Themen von Hans R. Amrein.
                </p>

                <ul class="newsletter-info__list">
                    <li>Immer die neuesten Insights</li>
                    <li>Exklusive Hintergrundberichte</li>
                    <li>Studien zu aktuellen Themen</li>
                    <li>Zugang zu zahlreichen Experten</li>
                    <li>Werden Sie Teil einer exklusiven Community</li>
                </ul>
            </div>

            <!-- Empty Column (4/12 width) -->
            <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4" style="padding-top: 5px;">
                <?php $kontakt_form = get_field( 'newsletter_form_shortcode' );?>
				<?php echo do_shortcode( $kontakt_form ); ?>
            </div>
        </div>
    </div>
</section>

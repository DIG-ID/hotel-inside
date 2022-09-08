<div id="section-about-gesell" class="section section-about-gesell">
	<div class="custom-container">
		<div class="row gesell-intro__row">
			<div class="col-12">
				<div class="content__separator-line"></div>
				<h2 class="about-intro__title"><?php esc_html_e( 'Gesellschafter', 'hotel-inside' ); ?></h2>
			</div>
		</div>
		<div class="row">
			<?php
			if ( have_rows( 'gesellschafter_list' ) ) :
				while ( have_rows( 'gesellschafter_list' ) ) :
					the_row();
					get_template_part( 'template-parts/components/card', 'gesellschafter' );
				endwhile;
			endif;
			?>
		</div>
	</div>
</div>

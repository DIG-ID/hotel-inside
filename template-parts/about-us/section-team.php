<div id="section-about-team" class="section section-about-team">
	<div class="custom-container">
		<div class="row team-intro__row">
			<div class="col-12">
				<div class="content__separator-line"></div>
				<h2 class="about-intro__title"><?php esc_html_e( 'Team', 'hotel-inside' ); ?></h2>
			</div>
		</div>
		<div class="row">
			<?php
			if ( have_rows( 'team_list') ):
				$i = 0;
				while ( have_rows( 'team_list' ) ) :
					the_row();
					$i++;
					get_template_part( 'template-parts/components/card', 'team', array( 'post_counter' => $i ) );
				endwhile;
			endif;
			?>
		</div>
	</div>
</div>

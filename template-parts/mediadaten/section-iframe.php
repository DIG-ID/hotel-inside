<?php
$iframe = get_field( 'mediadaten_iframe' );
if ( ! empty( $iframe ) ) :
	?>
	<section class="section section-iframe">
		<div class="custom-container">
			<div class="row">
				<div class="col-12">
					<?php echo $iframe; ?>
				</div>
			</div>
		</div>
	</section>
	<?php
endif;

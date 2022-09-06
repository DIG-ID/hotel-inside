<?php
if ( get_field( 'sidebar_box_box_title' ) ) :
	?>
	<div class="row">
		<div class="col-12">
			<div class="sidebar__box">
				<h3><?php the_field( 'sidebar_box_box_title' ); ?></h3>
				<p><?php the_field( 'sidebar_box_description' ); ?></p>
			</div>
		</div>
	</div>
	<?php
endif;

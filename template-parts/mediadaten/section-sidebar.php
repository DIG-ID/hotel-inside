<?php
if ( get_field( 'sidebar_box_box_title' ) || get_field( 'mediadaten_image' ) ) :
	?>
	<div class="row">
		<div class="col-12">
			<div class="sidebar__box">
				<?php 
				$image = get_field('mediadaten_image');
				$size = 'full';
				if( $image ) {
					echo wp_get_attachment_image( $image, $size );
				}	
				?>
				<h3><?php the_field( 'sidebar_box_box_title' ); ?></h3>
				<p><?php the_field( 'sidebar_box_description' ); ?></p>
			</div>
		</div>
	</div>
	<?php
endif;

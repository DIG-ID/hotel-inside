<section class="section section-archive-content">
	<div class="custom-container">
		<div class="row">
			<div class="col-12 col-lg-7">
				<div class="row">
					<?php
					$current_cat_id    = get_query_var( 'cat' );
					session_start();
					$_SESSION['current_cat_ID'] = $current_cat_id;
					$cat_args  = array(
						'posts_per_page' => 3,
						'offset'         => 5,
						'cat'            => $current_cat_id,
						'orderby'        => 'post_date',
						'order'          => 'ASC',
						'post_type'      => 'post',
						'post_status'    => 'publish',
					);
					$cat_query = new WP_Query( $cat_args );
					if ( $cat_query->have_posts() ) :
						while ( $cat_query->have_posts() ) :
							$cat_query->the_post();
							echo '<div class="col-12">';
								get_template_part( 'template-parts/components/card', 'wide' );
							echo '</div>';
						endwhile;
					endif;
					wp_reset_postdata();
					?>
				</div>
			</div>
			<div class="col-12 col-lg-5">
				<?php get_template_part( 'template-parts/archive/archive', 'sidebar' ); ?>
			</div>
		</div>
	</div>
	<div class="custom-container">
		<div class="row">
			<div class="col-12 content">
				<script type="text/javascript">
					jQuery(document).ready(function($) {
						// This is required for AJAX to work on our page
						var ajaxurl = '<?php echo esc_url( admin_url( 'admin-ajax.php' ) ); ?>';
						function cvf_load_all_archive_posts(page){
							// Start the transition
							$(".cvf_pag_loading").fadeIn().css('background','#ccc');
							// Data to receive from our server
							// the value in 'action' is the key that will be identified by the 'wp_ajax_' hook
							var data = {
								page: page,
								action: "hi_archive_pagination_load_posts"
							};
							// Send the data
							$.post(ajaxurl, data, function(response) {
								// If successful Append the data into our html container
								$(".cvf_universal_container").html(response);
								// End the transition
								$(".cvf_pag_loading").css({'background':'none', 'transition':'all 1s ease-out'});
							});
						}
						// Load page 1 as the default
						cvf_load_all_archive_posts(1);
						// Handle the clicks
						$(document).on( 'click', '.cvf-universal-pagination ul li', function(){
							var page = $(this).attr('p');
							cvf_load_all_archive_posts(page);
						});
					});
				</script>
				<div class = "cvf_pag_loading">
					<div class = "cvf_universal_container">
						<div class="cvf-universal-content"></div>
					</div>
				</div>
			</div><!-- .col -->
		</div><!-- .row -->
	</div>
</section>

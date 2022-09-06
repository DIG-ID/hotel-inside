<section id="section-archive-content" class="section section-archive-content">
	<div class="custom-container">
		<div class="row">
			<div class="col-12 col-lg-7">
				<div class="row">
					<?php $current_cat_id = get_query_var( 'cat' ); ?>
					<div class="col-12 content">
						<script type="text/javascript">
							jQuery(document).ready(function($) {
								// This is required for AJAX to work on our page
								var ajaxurl = '<?php echo esc_url( admin_url( 'admin-ajax.php' ) ); ?>';
								function cvf_load_all_archive_posts(page, curr_cat){
									// Start the transition
									$(".cvf_pag_loading").fadeIn(1000).css('opacity','0');
									// Data to receive from our server
									// the value in 'action' is the key that will be identified by the 'wp_ajax_' hook
									var data = {
										curr_cat: curr_cat,
										page: page,
										action: "hi_archive_pagination_load_posts",
									};
									// Send the data
									$.post(ajaxurl, data, function(response) {
										// If successful Append the data into our html container
										$(".cvf_universal_container").html(response);
										// End the transition
										$(".cvf_pag_loading").css({'opacity':'1', 'transition':'all 1s ease-in-out'});
									});
								}
								// Load page 1 as the default
								cvf_load_all_archive_posts(1, <?php echo $current_cat_id; ?>);
								// Handle the clicks
								$(document).on( 'click', '.cvf_universal_container .cvf-universal-pagination li.active', function(e){
									var page = $(this).attr('p');
									cvf_load_all_archive_posts(page, <?php echo $current_cat_id; ?>);
								});
							});
						</script>
						<div class="cvf_pag_loading">
							<div class="cvf_universal_container">
								<div class="cvf-universal-content"></div>
							</div>
						</div>
				</div><!-- .col -->
				</div>
			</div>
			<div class="col-12 col-lg-5">
				<?php get_template_part( 'template-parts/archive/archive', 'sidebar' ); ?>
			</div>
		</div>
	</div>
</section>

<div id="section-marktplatz" class="section section-marktplatz">
	<div class="custom-container">
		<div class="row">
			<div class="col-12">
				<form class="post-list">
					<input type="hidden" value="" class="markt-hidden-form"/>
					<div class="navbar-form navbar-left markt-search-form">
						<div class="form-group">
							<?php
							$makrt_terms = get_terms(
								array(
									'taxonomy' => 'categories_marktplatz',
									'orderby'  => 'name',
								),
							);
							if ( ! empty( $makrt_terms ) ) :
								echo '<select id="markt-cat-filter" name="cat-filter"><option value="">Alle</option>';
								foreach ( $makrt_terms as $makrt_term ) :
									echo '<option value="' . $makrt_term->term_id . '">' . $makrt_term->name . '</option>'; // ID of the category as the value of an option
								endforeach;
								echo '</select>';
							endif;
							?>
						</div>
						<div class="form-group">
							<input type="text" id="markt-search" class="form-control post_search_text" placeholder="Suchen">
						</div>
						<input type="submit" value="Search" class = "btn btn-success post_search_submit" />
					</div>
				</form>
				<br class="clear" />
				<script type="text/javascript">
					jQuery(document).ready(function($) {
						var ajaxurl = '<?php echo esc_url( admin_url( 'admin-ajax.php' ) ); ?>';
						var markt_cat = $("#markt-cat-filter option:selected").val();
						//console.log(markt_cat);
						function cvf_load_all_posts(page, markt_cat){
							$(".spinner").fadeIn(800);
							var post_data = {
								page: page,
								search: $('#markt-search').val(),
								markt_cat: markt_cat,
							};

							$('form.post-list input.markt-hidden-form').val(JSON.stringify(post_data));

							var data = {
								action: "demo_load_my_posts",
								data: JSON.parse($('form.post-list input.markt-hidden-form').val()),
							};

							$.post(ajaxurl, data, function(response) {
								$(".cvf_universal_container").html(response);
								$(".spinner").fadeOut(800);
							});
						}

						// Initialize default item to sort and it's sort order
						// Check if our hidden form input is not empty, meaning it's not the first time viewing the page.
						if($('form.post-list input.markt-hidden-form').val()){
							// Submi number
							data = JSON.parse($('form.post-list input.markt-hidden-form').val());
							cvf_load_all_posts(data.page, data.markt_cat);
						} else {
							// Load first page
							cvf_load_all_posts(1, markt_cat);
						}

						// Dropdown functions
						$('#markt-cat-filter').on('change', function(e) {
							var optionSelected = $("option:selected", this);
							markt_cat = this.value;
							cvf_load_all_posts(1, markt_cat);
						});

						// Search submit
						$('body').on('click', '.post_search_submit', function(e){
							e.preventDefault();
							cvf_load_all_posts(1, markt_cat);
						});

						// Search input
						$('body').on('input', '.post_search_text', function(e){
							cvf_load_all_posts(1, markt_cat);
						});

						// Search when Enter Key is triggered
						$(".post_search_text").keyup(function(e) {
							if (e.keyCode == 13) {
								cvf_load_all_posts(1, markt_cat);
							}
						});

						// Pagination Clicks
						$('body').on('click', '.cvf_universal_container .cvf-universal-pagination li.active', function(e) {
							var page = $(this).attr('p');
							cvf_load_all_posts(page, markt_cat);
						});

					});
				</script>
			</div>
		</div><!-- .row -->
		<div class="row marktplatz__row">
			<div class="col-12">
				<div class="cvf_pag_loading p-0">
					<div class="cvf_universal_container">
						<div class="cvf-universal-content"></div>
					</div>
				</div>
			</div>
		</div><!-- .row -->
	</div><!-- .custom-container -->
</div><!-- .section -->

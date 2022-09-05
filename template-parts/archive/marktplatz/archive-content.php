<div id="section-marktplatz" class="section section-marktplatz">
	<div class="custom-container p-0">
		<div class="row">
			<div class="col-12">
				<form class="post-list">
					<input type="hidden" value="" />
				</form>
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
							echo '<select name="categoryfilter"><option value="">KATEGORIE</option>';
							foreach ( $makrt_terms as $makrt_term ) :
								echo '<option value="' . $makrt_term->term_id . '">' . $makrt_term->name . '</option>'; // ID of the category as the value of an option
							endforeach;
							echo '</select>';
						endif;
						?>
					</div>
					<input type="hidden" name="action" value="myfilter">
					<div class="form-group">
						<input type="text" class="form-control post_search_text" placeholder="Suchen">
					</div>
					<input type="submit" value="Search" class="btn btn-success post_search_submit" />
				</div>
				<br class="clear" />
				<script type="text/javascript">
					jQuery(document).ready(function($) {
						var ajaxurl = '<?php echo esc_url( admin_url( 'admin-ajax.php' ) ); ?>';

						function cvf_load_all_posts(page, th_name, th_sort){
							var post_data = {
								page: page,
								search: $('.post_search_text').val(),
								th_name: th_name,
								th_sort: th_sort
							};

							$('form.post-list input').val(JSON.stringify(post_data));

							var data = {
								action: "demo_load_my_posts",
								data: JSON.parse($('form.post-list input').val())
							};

							$.post(ajaxurl, data, function(response) {
								if($(".cvf_universal_container").html(response)){
								}
							});
						}
						// Initialize default item to sort and it's sort order
						// Check if our hidden form input is not empty, meaning it's not the first time viewing the page.
						if($('form.post-list input').val()){
							// Submit hidden form input value to load previous page number
							data = JSON.parse($('form.post-list input').val());
							cvf_load_all_posts(data.page, data.th_name, data.th_sort);
						} else {
							// Load first page
							cvf_load_all_posts(1, 'post_title', 'ASC');
						}

						var th_active = $('.table-post-list th.active');
						var th_name = $(th_active).attr('id');
						var th_sort = $(th_active).hasClass('DESC') ? 'ASC': 'DESC';

						// Search
						$('body').on('click', '.post_search_submit', function(){
							cvf_load_all_posts(1, th_name, th_sort);
						});
						// Search when Enter Key is triggered
						$(".post_search_text").keyup(function (e) {
							if (e.keyCode == 13) {
								cvf_load_all_posts(1, th_name, th_sort);
							}
						});

						// Pagination Clicks
						$('body').on('click', '.cvf_universal_container .cvf-universal-pagination li.active', function(e) {
							var page = $(this).attr('p');
							var current_sort = $(th_active).hasClass('DESC') ? 'DESC': 'ASC';
							cvf_load_all_posts(page, th_name, current_sort);
						});

						// Sorting Clicks
						$('body').on('click', '.table-post-list th', function(e) {
							e.preventDefault();
							var th_name = $(this).attr('id');
							if(th_name){
								// Remove all TH tags with an "active" class
								if($('.table-post-list th').removeClass('active')) {
									// Set "active" class to the clicked TH tag
									$(this).addClass('active');
								}
								if(!$(this).hasClass('DESC')){
									cvf_load_all_posts(1, th_name, 'DESC');
									$(this).addClass('DESC');
								} else {
									cvf_load_all_posts(1, th_name, 'ASC');
									$(this).removeClass('DESC');
								}
							}
						})
					});
				</script>
			</div>
		</div><!-- .row -->
		<div class="row">
			<div class="col-12">
				<table class="table table-striped table-post-list no-margin" style="display:none;">
					<tr>
						<th width="25%" class="active" id="post_title"><u><a href="#">Post Name</a></u></th>
						<th width="15%" id="post_date"><u><a href="#">Post Date</a></u></th>
					</tr>
				</table>
			</div>
		</div><!-- .row -->
		<div class="row marktplatz__row">
			<div class="cvf_pag_loading p-0">
				<div class="cvf_universal_container">
					<div class="cvf-universal-content"></div>
				</div>
			</div>
		</div><!-- .row -->
	</div><!-- .custom-container -->
</div><!-- .section -->

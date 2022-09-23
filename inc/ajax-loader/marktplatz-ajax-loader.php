<?php

add_action( 'wp_ajax_demo_load_my_posts', 'demo_load_my_posts' );
add_action( 'wp_ajax_nopriv_demo_load_my_posts', 'demo_load_my_posts' );

function demo_load_my_posts() {

	$msg           = '';
	$pag_container = '';

	if ( isset( $_POST['data']['page'] ) ) :
		$page         = sanitize_text_field( $_POST['data']['page'] ); // The page we are currently at
		$markt_cat    = sanitize_text_field( $_POST['data']['markt_cat'] );
		$cur_page     = $page;
		$page        -= 1;
		$per_page     = 9; // Number of items to display per page
		$previous_btn = true;
		$next_btn     = true;
		$first_btn    = true;
		$last_btn     = true;
		$start        = $page * $per_page;

		// all posts query
		if ( ! empty( $_POST['data']['search']) && ! empty( $markt_cat ) ) :
			// check if search input and categorie filter aren't empty
			$search_text    = sanitize_text_field( $_POST['data']['search'] );
			$all_blog_posts = new WP_Query(
				array(
					'post_type'      => 'marktplatz',
					'post_status'    => 'publish',
					'posts_per_page' => $per_page,
					'offset'         => $start,
					's'              => $search_text,
					'meta_key'       => 'single_page_access',
					'orderby'        => array( 'meta_value_num' => 'DESC', 'title' => 'ASC' ),
					'order'          => 'ASC',
					'tax_query' => array(
						array(
							'taxonomy' => 'categories_marktplatz',
							'field'    => 'id',
							'terms'    => $markt_cat,
						),
					),
				),
			);
		elseif ( ! empty( $_POST['data']['search']) ) :
			// check if search input aren't empty
			$search_text    = sanitize_text_field( $_POST['data']['search'] );
			$all_blog_posts = new WP_Query(
				array(
					'post_type'      => 'marktplatz',
					'post_status'    => 'publish',
					'posts_per_page' => $per_page,
					'offset'         => $start,
					'meta_key'       => 'single_page_access',
					'orderby'        => array( 'meta_value_num' => 'DESC', 'title' => 'ASC' ),
					'order'          => 'ASC',
					's'              => $search_text,
				),
			);
		elseif ( ! empty( $markt_cat ) ) :
			// check if categorie filter aren't empty
			$all_blog_posts = new WP_Query(
				array(
					'post_type'      => 'marktplatz',
					'post_status'    => 'publish',
					'posts_per_page' => $per_page,
					'offset'         => $start,
					'meta_key'       => 'single_page_access',
					'orderby'        => array( 'meta_value_num' => 'DESC', 'title' => 'ASC' ),
					'order'          => 'ASC',
					'tax_query' => array(
						array(
							'taxonomy' => 'categories_marktplatz',
							'field'    => 'id',
							'terms'    => $markt_cat,
						),
					),
				),
			);
		else :
			$all_blog_posts = new WP_Query(
				array(
					'post_type'      => 'marktplatz',
					'post_status'    => 'publish',
					'posts_per_page' => $per_page,
					'offset'         => $start,
					'meta_key'       => 'single_page_access',
					'orderby'        => array( 'meta_value_num' => 'DESC', 'title' => 'ASC' ),
					'order'          => 'ASC',
				),
			);
		endif;

		// count query
		if ( ! empty( $_POST['data']['search']) && ! empty( $markt_cat ) ) :
			// check if search input and categorie filter aren't empty
			$search_text = sanitize_text_field( $_POST['data']['search'] );
			$count       = new WP_Query(
				array(
					'post_type'      => 'marktplatz',
					'post_status '   => 'publish',
					'posts_per_page' => -1,
					's'              => $search_text,
					'tax_query' => array(
						array(
							'taxonomy' => 'categories_marktplatz',
							'field'    => 'id',
							'terms'    => $markt_cat,
						),
					),
				)
			);
		elseif ( ! empty( $_POST['data']['search']) ) :
			// check if search input aren't empty
			$search_text = sanitize_text_field( $_POST['data']['search'] );
			$count       = new WP_Query(
				array(
					'post_type'      => 'marktplatz',
					'post_status '   => 'publish',
					'posts_per_page' => -1,
					's'              => $search_text,
				)
			);
		elseif ( ! empty( $markt_cat ) ) :
			// check if categorie filter s aren't empty
			$count = new WP_Query(
				array(
					'post_type'      => 'marktplatz',
					'post_status '   => 'publish',
					'posts_per_page' => -1,
					'tax_query' => array(
						array(
							'taxonomy' => 'categories_marktplatz',
							'field'    => 'id',
							'terms'    => $markt_cat,
						),
					),
				)
			);
		else :
			$count = new WP_Query(
				array(
					'post_type'      => 'marktplatz',
					'post_status '   => 'publish',
					'posts_per_page' => -1,
				)
			);
		endif;

		// Loop into all the posts to cout them
		if ( $count->have_posts() ) :
			$count = $count->post_count;
			wp_reset_postdata();
		else : 
			$count = 0;
		endif;

		// Loop into all the posts
		if ( $all_blog_posts->have_posts() ) :
			echo '<div class="row g-4">';
			while ( $all_blog_posts->have_posts() ) :
				$all_blog_posts->the_post();
				$msg .= get_template_part( 'template-parts/components/card', 'marktplatz' );
			endwhile;
			echo '</div>';
			wp_reset_postdata();
		else :
			$msg .= '<p class = "bg-danger">Es wurde kein Unternehmen gefunden, das Ihren Suchkriterien entspricht.</p>';
		endif;

		$msg = "<div class='cvf-universal-content'>" . $msg . "</div><br class = 'clear' />";

		$no_of_paginations = ceil( $count / $per_page );

		if ( $cur_page >= 7 ) :
			$start_loop = $cur_page - 3;
			if ( $no_of_paginations > $cur_page + 3 ) :
				$end_loop = $cur_page + 3;
			elseif ( $cur_page <= $no_of_paginations && $cur_page > $no_of_paginations - 6 ) :
				$start_loop = $no_of_paginations - 6;
				$end_loop   = $no_of_paginations;
			else :
				$end_loop = $no_of_paginations;
			endif;
		else :
			$start_loop = 1;
			if ( $no_of_paginations > 7 ) :
				$end_loop = 7;
			else :
				$end_loop = $no_of_paginations;
			endif;
		endif;

		$pag_container .= "
		<div class='cvf-universal-pagination'>
			<ul>";

		if ( $previous_btn && $cur_page > 1 ) :
			$pre = $cur_page - 1;
			$pag_container .= "<li p='$pre' class='active'> < </li>";
		elseif ( $previous_btn ) :
			$pag_container .= "<li class='inactive'> < </li>";
		endif;
		for ( $i = $start_loop; $i <= $end_loop; $i++ ) :
			if ( $cur_page == $i ) :
				$pag_container .= "<li p='$i' class = 'selected' >{$i}</li>";
			else :
				$pag_container .= "<li p='$i' class='active'>{$i}</li>";
			endif;
		endfor;

		if ( $next_btn && $cur_page < $no_of_paginations ) :
			$nex = $cur_page + 1;
			$pag_container .= "<li p='$nex' class='active'> > </li>";
		elseif ( $next_btn ) :
			$pag_container .= "<li class='inactive'> > </li>";
		endif;

		$pag_container = $pag_container . "
			</ul>
		</div>";

		echo
		'<div class = "cvf-pagination-content">' . $msg . '</div>' .
		'<div class = "cvf-pagination-nav">' . $pag_container . '</div><span class="spinner"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M105.1 202.6c7.7-21.8 20.2-42.3 37.8-59.8c62.5-62.5 163.8-62.5 226.3 0L386.3 160H336c-17.7 0-32 14.3-32 32s14.3 32 32 32H463.5c0 0 0 0 0 0h.4c17.7 0 32-14.3 32-32V64c0-17.7-14.3-32-32-32s-32 14.3-32 32v51.2L414.4 97.6c-87.5-87.5-229.3-87.5-316.8 0C73.2 122 55.6 150.7 44.8 181.4c-5.9 16.7 2.9 34.9 19.5 40.8s34.9-2.9 40.8-19.5zM39 289.3c-5 1.5-9.8 4.2-13.7 8.2c-4 4-6.7 8.8-8.1 14c-.3 1.2-.6 2.5-.8 3.8c-.3 1.7-.4 3.4-.4 5.1V448c0 17.7 14.3 32 32 32s32-14.3 32-32V396.9l17.6 17.5 0 0c87.5 87.4 229.3 87.4 316.7 0c24.4-24.4 42.1-53.1 52.9-83.7c5.9-16.7-2.9-34.9-19.5-40.8s-34.9 2.9-40.8 19.5c-7.7 21.8-20.2 42.3-37.8 59.8c-62.5 62.5-163.8 62.5-226.3 0l-.1-.1L125.6 352H176c17.7 0 32-14.3 32-32s-14.3-32-32-32H48.4c-1.6 0-3.2 .1-4.8 .3s-3.1 .5-4.6 1z"/></svg></span>';

	endif;

	exit();

}

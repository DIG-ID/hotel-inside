<?php

/* Receive the Request post that came from AJAX */
add_action( 'wp_ajax_hi_kommentar_pagination_load_posts', 'hi_kommentar_pagination_load_posts' );
// We allow non-logged in users to access our pagination
add_action( 'wp_ajax_nopriv_hi_kommentar_pagination_load_posts', 'hi_kommentar_pagination_load_posts' );

function hi_kommentar_pagination_load_posts() {


	$msg           = '';
	$pag_container = '';

	if ( isset( $_POST['page'] ) ) :
		// Sanitize the received page  
		$page     = sanitize_text_field( $_POST['page'] );
		$cur_page = $page;
		$page    -= 1;
		// Set the number of results to display
		$per_page     = 5;
		$previous_btn = true;
		$next_btn     = true;
		$first_btn    = false;
		$last_btn     = false;
		$start        = $page * $per_page;

			$all_blog_posts = new WP_Query(
				array(
					'post_type'      => 'kommentar_by_hans',
					'post_status'    => 'publish',
					'posts_per_page' => $per_page,
					'offset'         => $start,
					'orderby'        => 'post_date',
					'order'          => 'DESC',
				)
			);
			$count = new WP_Query(
				array(
					'post_type'      => 'kommentar_by_hans',
					'post_status '   => 'publish',
					'posts_per_page' => -1,
				)
			);
		// Loop into all the posts
		if ( $count->have_posts() ) :
			$count = $count->post_count;
			wp_reset_postdata();
		endif;
		// Loop into all the posts
		if ( $all_blog_posts->have_posts() ) :
			while ( $all_blog_posts->have_posts() ) :
				$all_blog_posts->the_post();
				$msg .= get_template_part( 'template-parts/components/card', 'archive-kommentar' );
			endwhile;
			wp_reset_postdata();
		endif;
		
		// Optional, wrap the output into a container
		$msg = "<div class='cvf-universal-content'>" . $msg . "</div>";

		// This is where the magic happens
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

		// Pagination Buttons logic    
		$pag_container  = "";
		$pag_container .= "
		<div class='cvf-universal-pagination'>
				<ul>";

		if ( $first_btn && $cur_page > 1 ) :
			$pag_container .= "<li p='1' class='active'>First</li>";
		elseif ( $first_btn ) :
			$pag_container .= "<li p='1' class='inactive'>First</li>";
		endif;

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

		if ( $last_btn && $cur_page < $no_of_paginations ) :
				$pag_container .= "<li p='$no_of_paginations' class='active'>Last</li>";
		elseif ( $last_btn ) :
			$pag_container .= "<li p='$no_of_paginations' class='inactive'>Last</li>";
		endif;

		$pag_container = $pag_container . "
				</ul>
		</div>";

		// We echo the final output
		echo '<div class = "cvf-pagination-content">' . $msg . '</div>' . '<div class = "cvf-pagination-nav">' . $pag_container . '</div>';

	endif;
	// Always exit to avoid further execution
	exit();
}

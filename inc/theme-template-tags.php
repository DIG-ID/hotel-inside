<?php
/**
 * The custom theme tags file.
 */

/**
 * This function open the main content.
 */
function hi_before_main_content() {
	?>
	<main id="main-content" class="main-content">
	<?php
}

add_action( 'before_main_content', 'hi_before_main_content' );

/**
 * This function closes the main content.
 */
function hi_after_main_content() {
	?>
	</main><!-- #main-content-->
	<?php
}

add_action( 'after_main_content', 'hi_after_main_content' );

/**
 * Get our socials from the theme customizer and display them.
 */
function hi_theme_socials() {
	echo '<div class="socials-wrapper">';
	$facebook_url  = get_theme_mod( 'facebook_url' );
	$linkedin_url  = get_theme_mod( 'linkedin_url' );
	$twitter_url   = get_theme_mod( 'twitter_url' );
	$youtube_url   = get_theme_mod( 'youtube_url' );
	$instagram_url = get_theme_mod( 'instagram_url' );
	if ( ! empty( $facebook_url ) ) :
		echo '<a href="' , esc_url( $facebook_url ) , '" target="_blank" class="social-link social-link__facebook"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"/></svg></a>';
	endif;
	if ( ! empty( $instagram_url ) ) :
		echo '<a href="' , esc_url( $instagram_url ) , '" target="_blank" class="social-link social-link__instagram"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg></a>';
	endif;
	if ( ! empty( $linkedin_url ) ) :
		echo '<a href="' , esc_url( $linkedin_url ) , '" target="_blank" class="social-link social-link__linkedin"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"/></svg></a>';
	endif;
	if ( ! empty( $youtube_url ) ) :
		echo '<a href="' , esc_url( $youtube_url ) , '" target="_blank" class="social-link social-link__youtube"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"/></svg></a>';
	endif;
	if ( ! empty( $twitter_url ) ) :
		echo '<a href="' , esc_url( $twitter_url ) , '" target="_blank" class="social-link social-link__twitter"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"/></svg></a>';
	endif;
	echo '</div>';
}

add_action( 'socials', 'hi_theme_socials' );


/**
 * Get youtube video title
 */
function hi_get_youtube_title( $video_id ) {
	$api_key     = 'AIzaSyACB4vCwaS_Z3yr3zO3P1vHPYcZgVw9weo';
	$video_title = file_get_contents( "https://youtube.googleapis.com/youtube/v3/videos?part=snippet%2CcontentDetails%2Cstatistics&id={$video_id}&key={$api_key}" );
	if ( $video_title ) {
		$json = json_decode( $video_title, true );
		return $json['items'][0]['snippet']['title'];
	} else {
		return false;
	}
}

/**
 * This function add a badge to the post card if exists.
 */

if ( ! function_exists( 'hi_post_badges' ) ) :

	function hi_post_badges() {
		$badges = get_field( 'post_badges' );

		if ( is_single() ) :
			if ( $badges ) :
				echo '<div class="card-badge__wrapper card-badge__wrapper--single">';
				if ( $badges && in_array( 'sponsoredcontent', $badges ) ) :
					echo '<span class="card-badge card-badge--sponsoredcontent">' . esc_html__( 'Paid Post', 'hotel-inside' ) . '</span>';
				endif;
				if ( $badges && in_array( 'kommentar', $badges ) ) :
					echo '<span class="card-badge card-badge--kommentar">' . esc_html__( 'Kommentar', 'hotel-inside' ) . '</span>';
				endif;
				echo '</div>';
			endif;
		else :
			if ( $badges ) :
				echo '<div class="card-badge__wrapper">';
				if ( $badges && in_array( 'sponsoredcontent', $badges ) ) :
					echo '<span class="card-badge card-badge--sponsoredcontent">' . esc_html__( 'Paid Post', 'hotel-inside' ) . '</span>';
				endif;
				if ( $badges && in_array( 'kommentar', $badges ) ) :
					echo '<span class="card-badge card-badge--kommentar">' . esc_html__( 'Kommentar', 'hotel-inside' ) . '</span>';
				endif;
				echo '</div>';
			endif;
			$custom_badges = get_field( 'custom_badge_have_a_custom_badge' );
			if ( $custom_badges ) :
				$badge_text = get_field( 'custom_badge_badge_text' );
				echo '<span class="card-badge card-badge--custom-badge"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 122.32 121.58" preserveAspectRatio="xMidYMid meet" width="100%" height="100%"><path fill="#c26538" d="m120.22 60.76-2.16-2.56a8.908 8.908 0 0 1-1.16-9.72l1.5-3c2.32-4.64.2-10.27-4.61-12.23l-3.11-1.27a8.91 8.91 0 0 1-5.54-8.07l-.07-3.35c-.1-5.19-4.6-9.19-9.76-8.69l-3.34.32a8.925 8.925 0 0 1-8.66-4.57l-1.62-2.94c-2.5-4.54-8.34-6-12.69-3.16l-2.81 1.84a8.904 8.904 0 0 1-9.79-.02l-2.8-1.85C49.27-1.37 43.42.06 40.9 4.59l-1.63 2.93a8.899 8.899 0 0 1-8.68 4.53l-3.34-.34c-5.16-.52-9.68 3.46-9.8 8.65l-.08 3.35a8.915 8.915 0 0 1-5.58 8.05l-3.11 1.25c-4.81 1.94-6.96 7.56-4.66 12.21l1.48 3.01a8.93 8.93 0 0 1-1.2 9.72L2.13 60.5c-3.36 3.95-2.65 9.93 1.55 12.98l2.71 1.97a8.898 8.898 0 0 1 3.45 9.16l-.74 3.27c-1.14 5.06 2.27 10.02 7.4 10.78l3.32.49c3.52.52 6.39 3.08 7.32 6.51l.87 3.24c1.34 5.01 6.67 7.82 11.56 6.1l3.16-1.11a8.893 8.893 0 0 1 9.5 2.37l2.27 2.47c3.52 3.81 9.54 3.83 13.07.03l2.29-2.45a8.898 8.898 0 0 1 9.51-2.32l3.16 1.13c4.89 1.74 10.22-1.04 11.59-6.05l.88-3.24a8.917 8.917 0 0 1 7.34-6.48l3.32-.47c5.14-.73 8.57-5.67 7.45-10.74l-.72-3.28c-.77-3.47.61-7.07 3.49-9.15l2.72-1.96c4.21-3.03 4.95-9.01 1.61-12.97Zm-29.19-6.75L74.87 65.75c-.43.31-.61.86-.44 1.37l6.17 19c.37 1.13-.92 2.06-1.88 1.37L62.56 75.75c-.43-.31-1.01-.31-1.44 0L44.96 87.49c-.96.7-2.25-.24-1.88-1.37l6.17-19c.16-.5-.02-1.06-.44-1.37L32.65 54.01c-.96-.7-.47-2.21.72-2.21h19.98c.53 0 1-.34 1.16-.85l6.17-19c.37-1.13 1.96-1.13 2.33 0l6.17 19c.16.5.63.85 1.16.85h19.98c1.19 0 1.68 1.52.72 2.21Z"/><path fill="#f8fafb" d="M90.31 51.8H70.33c-.53 0-1-.34-1.16-.85l-6.17-19c-.37-1.13-1.96-1.13-2.33 0l-6.17 19c-.16.5-.63.85-1.16.85H33.36c-1.19 0-1.68 1.52-.72 2.21L48.8 65.75c.43.31.61.86.44 1.37l-6.17 19c-.37 1.13.92 2.06 1.88 1.37l16.16-11.74c.43-.31 1.01-.31 1.44 0l16.16 11.74c.96.7 2.25-.24 1.88-1.37l-6.17-19c-.16-.5.02-1.06.44-1.37l16.16-11.74c.96-.7.47-2.21-.72-2.21Z"/></svg> <div class="content"><p>' . $badge_text . '</p></div></span>';
			endif;
		endif;

	}

	add_action( 'post_badges', 'hi_post_badges' );

endif;


/**
 * This function add the button back to overiew to an post.
 */

if ( ! function_exists( 'hi_back_to_overview' ) ) :

	function hi_back_to_overview() {
		$post_type = get_post_type( get_the_ID() );
		if ( 'post' === $post_type && is_single() && has_category() ) :
			$cat = get_the_category();
			if ( ! empty( $cat ) ) :
				echo '<a href="' . esc_url( get_category_link( $cat[0]->term_id ) ) . '" class="back-to-overview"><svg xmlns="http://www.w3.org/2000/svg" width="37.305" height="13.055" viewBox="0 0 37.305 13.055"><defs><style>.a,.b{fill:none;stroke:#9c98ae;stroke-width:2px;}.b{stroke-linecap:square;}</style></defs><g transform="translate(521.915 4663.047) rotate(180)"><line class="a" x2="35.634" transform="translate(484.61 4656.426)"/><line class="b" x2="7.259" transform="translate(515.368 4661.632) rotate(-45)"/><line class="b" x2="7.259" transform="translate(515.368 4651.405) rotate(45)"/></g></svg>' . esc_html__( ' zur Übersicht', 'hotel-inside' ) . '</a>';
			endif;
		elseif ( 'von_hans_r_amrein' === $post_type && is_single() ) :
			echo '<a href="' . esc_url( get_post_type_archive_link( 'von_hans_r_amrein' ) ) . '" class="back-to-overview"><svg xmlns="http://www.w3.org/2000/svg" width="37.305" height="13.055" viewBox="0 0 37.305 13.055"><defs><style>.a,.b{fill:none;stroke:#9c98ae;stroke-width:2px;}.b{stroke-linecap:square;}</style></defs><g transform="translate(521.915 4663.047) rotate(180)"><line class="a" x2="35.634" transform="translate(484.61 4656.426)"/><line class="b" x2="7.259" transform="translate(515.368 4661.632) rotate(-45)"/><line class="b" x2="7.259" transform="translate(515.368 4651.405) rotate(45)"/></g></svg>' . esc_html__( 'zur Übersicht', 'hotel-inside' ) . '</a>';
		endif;
	}

	add_action( 'back_button', 'hi_back_to_overview' );

endif;

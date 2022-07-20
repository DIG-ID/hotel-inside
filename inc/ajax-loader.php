<?php
add_action( 'wp_ajax_demo_load_my_posts', 'demo_load_my_posts' );
add_action( 'wp_ajax_nopriv_demo_load_my_posts', 'demo_load_my_posts' );
function demo_load_my_posts() {
       
    global $wpdb;
   
    $msg = '';
   
    if( isset( $_POST['data']['page'] ) ){
        // Always sanitize the posted fields to avoid SQL injections
        $page = sanitize_text_field($_POST['data']['page']); // The page we are currently at
        $name = sanitize_text_field($_POST['data']['th_name']); // The name of the column name we want to sort
        $sort = sanitize_text_field($_POST['data']['th_sort']); // The order of our sort (DESC or ASC)
        $cur_page = $page;
        $page -= 1;
        $per_page = 9; // Number of items to display per page
        $previous_btn = true;
        $next_btn = true;
        $first_btn = true;
        $last_btn = true;
        $start = $page * $per_page;
       
        // The table we are querying from  
        $posts = $wpdb->prefix . "posts";
       
        $where_search = '';
       
        // Check if there is a string inputted on the search box
        if( ! empty( $_POST['data']['search']) ){
            // If a string is inputted, include an additional query logic to our main query to filter the results
            $where_search = ' AND (post_title LIKE "%%' . $_POST['data']['search'] . '%%" OR post_content LIKE "%%' . $_POST['data']['search'] . '%%") ';
        }
       
        // Retrieve all the posts
        $all_posts = $wpdb->get_results($wpdb->prepare("
            SELECT * FROM $posts WHERE post_type = 'marktplatz' AND post_status = 'publish' $where_search
            ORDER BY $name $sort LIMIT %d, %d", $start, $per_page ) );
       
        $count = $wpdb->get_var($wpdb->prepare("
            SELECT COUNT(ID) FROM " . $posts . " WHERE post_type = 'marktplatz' AND post_status = 'publish' $where_search", array() ) );
       
        // Check if our query returns anything.
        if( $all_posts ):
            
            $msg .= '<div class="container-fluid"><div class="row g-4">';
            
           
            // Iterate thru each item
            foreach( $all_posts as $key => $post ):
                $msg .= '<div class="col-sm-12 col-md-6 col-lg-4"><div class="marktplatz__col">';
                $msg .= '
                <h3 class="marktplatz__title active">' . $post->post_title . '</h3>
                <p class="marktplatz__cat">position</p><br>';
                $terms = get_the_terms( $post->ID, 'categories_marktplatz' );
                if ($terms) {
                    foreach($terms as $term) {
                    $msg .= '<p class="marktplatz__cat">' . $term->name . '</p>';
                    } 
                } 
                $msg .= '<a href="' . get_permalink( $post->ID ) . '" class="marktplatz__read-more m-0">Mehr erfahren</a>';   
                $msg .= '</div></div>';     
            endforeach;
           
            $msg .= '</div></div>';   
       
        // If the query returns nothing, we throw an error message
        else:
            $msg .= '<p class = "bg-danger">No posts matching your search criteria were found.</p>';
           
        endif;

        $msg = "<div class='cvf-universal-content'>" . $msg . "</div><br class = 'clear' />";
       
        $no_of_paginations = ceil($count / $per_page);

        if ($cur_page >= 7) {
            $start_loop = $cur_page - 3;
            if ($no_of_paginations > $cur_page + 3)
                $end_loop = $cur_page + 3;
            else if ($cur_page <= $no_of_paginations && $cur_page > $no_of_paginations - 6) {
                $start_loop = $no_of_paginations - 6;
                $end_loop = $no_of_paginations;
            } else {
                $end_loop = $no_of_paginations;
            }
        } else {
            $start_loop = 1;
            if ($no_of_paginations > 7)
                $end_loop = 7;
            else
                $end_loop = $no_of_paginations;
        }
         
        $pag_container .= "
        <div class='cvf-universal-pagination'>
            <ul>";

        if ($previous_btn && $cur_page > 1) {
            $pre = $cur_page - 1;
            $pag_container .= "<li p='$pre' class='active'> < </li>";
        } else if ($previous_btn) {
            $pag_container .= "<li class='inactive'> < </li>";
        }
        for ($i = $start_loop; $i <= $end_loop; $i++) {

            if ($cur_page == $i)
                $pag_container .= "<li p='$i' class = 'selected' >{$i}</li>";
            else
                $pag_container .= "<li p='$i' class='active'>{$i}</li>";
        }
       
        if ($next_btn && $cur_page < $no_of_paginations) {
            $nex = $cur_page + 1;
            $pag_container .= "<li p='$nex' class='active'> > </li>";
        } else if ($next_btn) {
            $pag_container .= "<li class='inactive'> > </li>";
        }

        $pag_container = $pag_container . "
            </ul>
        </div>";
       
        echo
        '<div class = "cvf-pagination-content">' . $msg . '</div>' .
        '<div class = "cvf-pagination-nav">' . $pag_container . '</div>';
       
    }
   
    exit();
   
}
?>
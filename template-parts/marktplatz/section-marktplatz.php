<div id="section-marktplatz" class="section section-marktplatz">
    <div class="custom-container">
        <div class="row marktplatz__row">
        <?php
        $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
        // loop arguments
        $args = array( 
        'post_type' => 'marktplatz', 
        'paged' => $paged,
        'search_filter_id' => 1664
        ); 
        global $the_query;
        $the_query = new WP_Query( $args );
        if ( $the_query->have_posts() ) :
        while ( $the_query->have_posts() ) :
        $the_query->the_post();
        ?>
        <div class="col-sm-12 col-md-6 col-lg-4 marktplatz__col">
            <h3 class="marktplatz__title"><?php the_title(); ?></h3>
            <p class="marktplatz__cat"><?php _e( 'position', 'hotel-inside' ); ?></p><br>
            <?php $terms = get_the_terms( $post->ID, 'categories_marktplatz' );
            if ($terms) {
                foreach($terms as $term) { ?>
                <p class="marktplatz__cat"><?php echo $term->name; ?></p>
                <?php } 
            } ?>
            <a href="<?php the_permalink(); ?>" class="marktplatz__read-more m-0"><?php _e( 'Mehr erfahren', 'hotel-inside' ); ?></a>
        </div>
        <?php
        endwhile;
        endif;
        wp_reset_postdata();
        ?>
        </div>
    </div>
</div>
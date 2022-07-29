<div class="sidebar__inner">
    <div class="container p-0">
        <div class="author__img-wrapper">
        <?php
        $author_id = get_the_author_meta('ID');
        $author_badge = get_field('profile_picture', 'user_'. $author_id ); $authorimg_size = 'full'; 
        echo wp_get_attachment_image( $author_badge, $authorimg_size ); 
        ?>
        </div>
    <div class="row">
        <div class="single-post__sidebar-separator-line"></div>
        <p class="author__title"><?php _e( 'Über den Autor', 'hotel-inside' ); ?></p>
        <p class="author__username"><?php echo get_the_author_meta('display_name', $author_id); ?></p>
        <p class="author__description"><?php echo get_the_author_meta('user_description', $author_id); ?></p>
        <a id="showmore" class="author__showmore"><?php _e( 'Weiterlesen...', 'hotel-inside' ); ?></a>
    </div>
    <div class="row">
        <div class="single-kommentar-by-hans__sidebar-separator-line"></div>
        <p class="latest-posts-by-hans__title"><?php _e( 'Letzte Beiträge von Hans Amrein', 'hotel-inside' ); ?></p>
        <div class="col-12">
                <?php
                $args      = array(
                    'posts_per_page'      => 2,
                    'orderby'             => 'post_date',
                    'order'               => 'ASC',
                    'post_type'           => 'kommentar_by_hans',
                    'post_status'         => 'publish',
                );
                $the_query = new WP_Query( $args );
                if ( $the_query->have_posts() ) :
                    while ( $the_query->have_posts() ) :
                        $the_query->the_post(); ?>
                        
                        <article id="post-<?php the_ID(); ?>" class="latest-posts__single">
                            <div class="latest-posts-by-hans__img-wrapper">
                                <?php if ( has_post_thumbnail() ) : ?>
                                    <?php the_post_thumbnail( 'full' ); ?>
                                <?php else : ?>
                                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/default-1-block-thumbnail.png' ); ?>" alt="default thumbnail">
                                <?php endif; ?>
                            </div>
                            <div class="latest-posts-by-hans__content">
                                <a href="<?php the_permalink(); ?>" class="latest-posts-by-hans__post-title"><?php the_title( '<h3>', '</h3>' ); ?></a>
                                <div class="card-date">
                                    <i class="icon-clock"></i>
                                    <time datetime="<?php echo get_the_date( 'c' ); ?>" itemprop="datePublished"><?php echo get_the_date(); ?></time>
                                </div>
                            </div>
                        </article>
                    <?php
                    endwhile;
                endif;
                wp_reset_postdata();
                ?>
        </div><!-- .col -->
    </div><!-- .row -->
    </div><!-- .content -->
        <?php
        $ads_img  = get_theme_mod( 'ads_sidebar_image' );
        $ads_link = get_theme_mod( 'ads_sidebar_link' );
        if ( ! empty( $ads_img ) ) :
            ?>
            <div class="row">
                <div class="col-12 text-center ads ads-sidebar">
                    <a href="<?php echo esc_url( $ads_link ); ?>" target="_blank">
                        <?php echo wp_get_attachment_image( $ads_img, 'full' ); ?>
                    </a>
                </div>
            </div>
            <?php
        endif;
        ?>
    </div>
    <script type="text/javascript">

    </script>
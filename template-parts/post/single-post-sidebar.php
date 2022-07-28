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
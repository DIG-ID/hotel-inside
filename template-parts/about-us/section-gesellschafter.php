<div id="section-about-gesell" class="section section-about-gesell">
    <div class="custom-container">
        <div class="row gesell-intro__row">
            <div class="col-12">
                <div class="content__separator-line"></div>
                <h2 class="about-intro__title"><?php _e( 'Gesellschafter', 'hotel-inside' ); ?></h2>
            </div>
        </div>
        <div class="row">
            <?php if( have_rows('gesellschafter_list') ):
            while( have_rows('gesellschafter_list') ) : the_row();
            $profilePic = get_sub_field('profile_picture');
            $profilePicSize = 'full'; ?>
            <div class="col-4 about-gesell__col">
                <?php if( $profilePic ) {
                    echo wp_get_attachment_image( $profilePic, $profilePicSize );
                } ?>
                <div class="about-gesell__wrapper">
                    <p class="about-gesell__name"><?php the_sub_field('profile_name'); ?></p>
                    <p class="about-gesell__role"><?php the_sub_field('profile_role'); ?></p>
                </div>
            </div>
            <?php
            endwhile;
            endif;?>
        </div>
    </div>
</div>
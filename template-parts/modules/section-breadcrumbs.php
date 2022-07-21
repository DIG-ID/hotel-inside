<div id="section-breadcrumbs" class="section section-breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="breadcrumbs__separator-line"></div>
                <?php if ( is_singular( 'marktplatz' ) ) { ?>
                    <h2 class="breadcrumbs__title">Marktplatz</h2>
                <?php } else { ?>
                    <h1 class="breadcrumbs__title"><?php the_title(); ?></h1>
                <?php } ?>
                
            </div>
        </div>
    </div>
</div>
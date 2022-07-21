<div id="section-marktplatz" class="section section-marktplatz">
    <div class="container p-0">
        <div class="row">
            <form class = "post-list">
                <input type = "hidden" value = "" />
            </form>
            <article class="navbar-form navbar-left markt-search-form">
                <div class="form-group">
                <?php
                    if( $terms = get_terms( array( 'taxonomy' => 'categories_marktplatz', 'orderby' => 'name' ) ) ) : 
                        echo '<select name="categoryfilter"><option value="">KATEGORIE</option>';
                        foreach ( $terms as $term ) :
                            echo '<option value="' . $term->term_id . '">' . $term->name . '</option>'; // ID of the category as the value of an option
                        endforeach;
                        echo '</select>';
                    endif;
                ?>
                </div>
                <input type="hidden" name="action" value="myfilter">

                <div class="form-group">
                    <input type="text" class="form-control post_search_text" placeholder="SEARCH">
                </div>
                <input type = "submit" value = "Search" class = "btn btn-success post_search_submit" />
            </article>
            <br class = "clear" />
            <?php get_template_part( 'template-parts/marktplatz/marktplatz', 'ajax-loader' ); ?>
        </div>
        
        <table class="table table-striped table-post-list no-margin" style="display:none;">
            <tr>
                <th width = "25%" class = "active" id = "post_title"><u><a href = "#">Post Name</a></u></th>
                <th width = "15%" id = "post_date"><u><a href = "#">Post Date</a></u></th>
            </tr>
        </table>
        <div class="row marktplatz__row">
            <div class = "cvf_pag_loading p-0">
                <div class = "cvf_universal_container">
                    <div class="cvf-universal-content"></div>
                </div>
            </div>
        </div>
    </div>
</div>
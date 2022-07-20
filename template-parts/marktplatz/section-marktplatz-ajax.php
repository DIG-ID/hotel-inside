<div id="section-marktplatz" class="section section-marktplatz">
<div class="container p-0">
    <div class="row">
        <form class = "post-list">
            <input type = "hidden" value = "" />
        </form>

        <article class="navbar-form navbar-left markt-search-form">
            <div class="form-group">
                <input type="text" class="form-control post_search_text" placeholder="Search">
            </div>
            <input type = "submit" value = "Search" class = "btn btn-success post_search_submit" />
        </article>

        <br class = "clear" />

        <script type="text/javascript">
        jQuery(document).ready(function($) {    
        var ajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>';

        function cvf_load_all_posts(page, th_name, th_sort){
            
            var post_data = {
                page: page,
                search: $('.post_search_text').val(),
                th_name: th_name,
                th_sort: th_sort
            };
            
            $('form.post-list input').val(JSON.stringify(post_data));
            
            var data = {
                action: "demo_load_my_posts",
                data: JSON.parse($('form.post-list input').val())
            };
            
            $.post(ajaxurl, data, function(response) {
                if($(".cvf_universal_container").html(response)){
                    $('.table-post-list th').each(function() {
                        // Append the button indicator
                        $(this).find('span.glyphicon').remove();   
                        if($(this).hasClass('active')){
                            if(JSON.parse($('form.post-list input').val()).th_sort == 'DESC'){
                                $(this).append(' <span class="glyphicon glyphicon-chevron-down"></span>');
                            } else {
                                $(this).append(' <span class="glyphicon glyphicon-chevron-up"></span>');
                            }
                        }
                    });
                }
            });
        }

            // Initialize default item to sort and it's sort order
            
            // Check if our hidden form input is not empty, meaning it's not the first time viewing the page.
            if($('form.post-list input').val()){
                // Submit hidden form input value to load previous page number
                data = JSON.parse($('form.post-list input').val());
                cvf_load_all_posts(data.page, data.th_name, data.th_sort);
            } else {
                // Load first page
                cvf_load_all_posts(1, 'post_title', 'ASC');
            }
            
            var th_active = $('.table-post-list th.active');
            var th_name = $(th_active).attr('id');
            var th_sort = $(th_active).hasClass('DESC') ? 'ASC': 'DESC';
                        
            // Search
            $('body').on('click', '.post_search_submit', function(){
                cvf_load_all_posts(1, th_name, th_sort);
            });
            // Search when Enter Key is triggered
            $(".post_search_text").keyup(function (e) {
                if (e.keyCode == 13) {
                    cvf_load_all_posts(1, th_name, th_sort);
                }
            });
            
            // Pagination Clicks                   
            $('.cvf_universal_container .cvf-universal-pagination li.active').on('click',function(){
                var page = $(this).attr('p');
                var current_sort = $(th_active).hasClass('DESC') ? 'DESC': 'ASC';
                cvf_load_all_posts(page, th_name, current_sort);               
            });

            // Sorting Clicks
            $('body').on('click', '.table-post-list th', function(e) {
                e.preventDefault();                            
                var th_name = $(this).attr('id');
                                                    
                if(th_name){
                    // Remove all TH tags with an "active" class
                    if($('.table-post-list th').removeClass('active')) {
                        // Set "active" class to the clicked TH tag
                        $(this).addClass('active');
                    }
                    if(!$(this).hasClass('DESC')){
                        cvf_load_all_posts(1, th_name, 'DESC');
                        $(this).addClass('DESC');
                    } else {
                        cvf_load_all_posts(1, th_name, 'ASC');
                        $(this).removeClass('DESC');
                    }
                }
            })
        });
        </script>
    </div>
    <div class="row marktplatz__row">
        <div class = "cvf_pag_loading p-0">
            <div class = "cvf_universal_container">
                <div class="cvf-universal-content"></div>
            </div>
        </div>
    </div>
</div>
</div>
jQuery(document).ready(function($) {   
    if( $('body.single').length ){
    var h = $('.author__description')[0].scrollHeight;
    $('#showmore').click(function(e) {
        e.stopPropagation();
        $('.author__description').animate({
            'height': h
        })
    });
    $(document).click(function() {
        $('.author__description').animate({
            'height': '70px'
        })
    });
}
});
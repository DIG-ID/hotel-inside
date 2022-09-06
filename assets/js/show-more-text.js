jQuery(document).ready(function($) {   
    if( $('body.single').length ){
    var h = $('.author__description')[0].scrollHeight;
    $('#showmore').click(function(e) {
        e.stopPropagation();
        $('.author__description').animate({
            'height': h
        });
        $("#showmore").html($("#showmore").html().replace('Weiterlesen...','---'));
        $("#showmore").addClass('itsopen');
    });
    $(document).click(function() {
        $('.author__description').animate({
            'height': '70px'
        });
        $("#showmore").html($("#showmore").html().replace('---','Weiterlesen...'));
    });
}
});
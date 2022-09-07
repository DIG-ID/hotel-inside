jQuery(document).ready(function($) {   
    if( $('body.single').length ){
    var h = $('.author__description')[0].scrollHeight;
    $('#showmore').on('click', function(e) {
        e.stopPropagation();
        if( $('.itsclosed').length ){
            $('.author__description').animate({
                'height': h
            });
            $("#showmore").html($("#showmore").html().replace('Weiterlesen...','Einklappen'));
            $("#showmore").removeClass('itsclosed');
            $("#showmore").addClass('itsopen');
        }
        else if( $('.itsopen').length ){
            $('.author__description').animate({
                'height': '70px'
            });
            $("#showmore").html($("#showmore").html().replace('Einklappen','Weiterlesen...'));
            $("#showmore").removeClass('itsopen');
            $("#showmore").addClass('itsclosed');
        }
    });
    $(document).on('click', function() {
        $('.author__description').animate({
            'height': '70px'
        });
        $("#showmore").html($("#showmore").html().replace('Einklappen','Weiterlesen...'));
        $("#showmore").removeClass('itsopen');
        $("#showmore").addClass('itsclosed');
    });
}
});
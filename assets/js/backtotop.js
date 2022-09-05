$(function() {

  if( $( 'body' ).hasClass( 'archive post-type-archive' ) || $( 'body' ).hasClass( 'archive category' ) ) {
    $( document ).on( 'click', '.cvf_universal_container .cvf-universal-pagination li.active', function(e) {
      var offset = 250;
      $('html, body').animate({
        scrollTop: $( '#section-archive-content' ).offset().top-offset
      }, 400);
    } );
  }
  //Back to top button
  var btnBtt = $('#button-btt');
  $(window).on( 'scroll', function() {
    if ($(window).scrollTop() > 600) {
      btnBtt.addClass('show');
    } else {
      btnBtt.removeClass('show');
    }
  });
  btnBtt.on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({scrollTop:0}, '400');
  });

});
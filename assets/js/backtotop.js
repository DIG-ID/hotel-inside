//Back to top button
var btnBtt = $('#button-btt');
$(window).on( 'scroll', function() {
  if ($(window).scrollTop() > 400) {
    btnBtt.addClass('show');
  } else {
    btnBtt.removeClass('show');
  }
});
btnBtt.on('click', function(e) {
  e.preventDefault();
  $('html, body').animate({scrollTop:0}, '400');
});
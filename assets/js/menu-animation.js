jQuery(document).ready(function($) {   
	$('.search__mobile-btn').click(function(){
		/*if ('#search__bar.invisible') {
			$('#search__bar').removeClass('invisible');
			$('#search__bar').addClass('visible');
		}*/
		$('#search__bar').toggleClass('invisible');
		$('#search__bar').toggleClass('n-margin-top-1');
	});
    $('#nav-icon2').click(function(){
		$(this).toggleClass('open');
	});

});
$(document).ready(function() {
	$.fn.slideFadeToggle = function(speed, easing, callback) {
		return this.animate({opacity: 'toggle', height: 'toggle'}, speed, easing, callback);
	};

	$('.sidebar ul ul').hide();

	$('.sidebar ul ul').each(function() {
		$(this).parent('li').addClass('close');
	});

	$('.sidebar li a').click(function(){
		if ($(this).parent('li').hasClass('open')) {
			$(this).parent('li').removeClass('open').addClass('close');
		} else {
			$(this).parent('li').removeClass('close').addClass('open');
		}
		$(this).next('ul').slideFadeToggle('slow').show();
		return false;
	});
});
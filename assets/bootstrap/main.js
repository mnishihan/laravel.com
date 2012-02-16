$(document).ready(function() {
	$('.sidebar ul ul').hide();
	$('.sidebar ul ul').each(function() {
		$(this).parent('li').addClass('close');
		$(this).prev('a').bind('click', function() {
			$(this).parent('li').toggleClass('open').toggleClass('close');
			$(this).next('ul').animate({opacity: 'toggle', height: 'toggle'}, "slow");
			return false;
		});
	});
	$().UItoTop({ easingType: 'easeOutQuart' });
});
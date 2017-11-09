(function($) {

$(function() {
	$('.btn').click(function(e){
		$(this).hide();
		$('#lottery').addClass('lets-do-it');
		e.preventDefault();
		addClass();
		lottery = setInterval(addClass, 4000);
		setTimeout(showWinner, 10000);
	});
});

function showWinner() {
	$('body').addClass('lottery-done');
	clearInterval(lottery);
}

function addClass() {
	var allSpan = $('#lottery span');
	allSpan.removeAttr('class');
	allSpan.each(function(i) {
		var span = $(this);
		setTimeout(function() {
			allSpan.removeAttr('class');
			span.addClass('show');
		}, i*75);
	});
}

} )(jQuery);

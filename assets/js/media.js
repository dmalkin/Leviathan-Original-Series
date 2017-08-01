
$(function(){

	$('#media-inner > img').click(function(){
		alert ('hello');
		$("#main").hide();
		$("#main").attr('src', $(this).attr('src'));
		$("#main").fadeIn();

		$("#caption").html($(this).attr('title'));
	});

});
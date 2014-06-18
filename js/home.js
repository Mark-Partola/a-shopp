$(document).ready(function(){

	/*Limit status length*/
	var statusText = $('#status').val();
	if(statusText.length > 35){
		statusText = statusText.substr(0, 33) + '...';
		$('#status').val(statusText);
	}

	/*Display span.count*/
	$(".count").each(function(){
		if($(this).text().length == 0){
			$(this).css('display', 'none');
		} else {
			$(this).css('display', 'inline');
		}
	});

	/*comments toggle*/

	$(".comment").click(function(){
		$(".add_comment").toggle();
	});

	$('.add_comment textarea').focus(function(){
		$(this).next('input[type=submit]').animate({
			'height' : '30px',
			'opacity' : '1'
		});
	});

	$(document).click(function(event){
		if($(event.target).closest('.add_comment').length){
			return;
		}
		$('.add_comment input[type=submit]').animate({
			'opacity' : '0',
		});
		event.stopPropagation();
	});
	/**********************сделать функцию*********************/


	$('#new_post textarea').focus(function(){
		$(this).next('input[type=submit]').animate({
			'height' : '30px',
			'opacity' : '1'
		});
		$('#new_post').animate({
			'min-height' : '100px',
		});
	});

	$(document).click(function(event){
		if($(event.target).closest('#new_post').length){
			return;
		}
		$('#new_post input[type=submit]').animate({
			'opacity' : '0',
		});
		$('#new_post').animate({
			'min-height' : '60px',
		});
		event.stopPropagation();
	});

	/* toggle visible comments*/

	//if comments exists
	$('.comments h5').each(function(){
		if(!$(this).nextAll().length){
			$(this).css('display', 'none');
		} else {
			$(this).text('Комментарии ' + $(this).nextAll().length + ' (показать)');
		}
	});

	//onclick
	$('.comments h5').on('click', function(){
		$(this).nextAll().fadeToggle();
	});

	$('.comments h5').click(function(){
		if($(this).next().css('opacity') == '0'){
			$(this).text('Комментарии (скрыть)');
		}else{
			$(this).text('Комментарии ' + $(this).nextAll().length + ' (показать)');
		}
	});

	});
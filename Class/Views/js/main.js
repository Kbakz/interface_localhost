$(function(){
	var form = $('.novo-projeto form');
	$('.novo-projeto .btn-new').click(function(){
		form.fadeIn();
	})

	$('.novo-projeto .close span').click(function(){
		form.fadeOut();
	})

	if($('.alerta').is(':visible')){
		setTimeout(function(){
			$('.alerta').fadeOut()
		},5000);
	}
})
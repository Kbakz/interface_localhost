$(function(){
	var form = $('.novo-projeto form');
	$('.novo-projeto .btn').click(function(){
		form.fadeToggle();
	})

	$('.novo-projeto .close span').click(function(){
		form.fadeToggle();
	})

	if($('.alerta').is(':visible')){
		setTimeout(function(){
			$('.alerta').fadeOut()
		},5000);
	}
})
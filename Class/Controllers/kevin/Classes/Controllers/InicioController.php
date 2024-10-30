<?php
	namespace Classes\Controllers;
	class InicioController{
		function index(){
			
			\Classes\Views\MainView::render('inicio');
		}
	}
?>
<?php
	session_start();
	date_default_timezone_set('America/Sao_Paulo');

	//local
	define('INCLUDE_PATH', 'http://localhost/'); # <-- Adicionar URL
	define('INCLUDE_PATH_STATIC', INCLUDE_PATH.'Classes/Views/');
	define('INCLUDE_PATH_PAINEL', INCLUDE_PATH.'painel/');

	define('HOST', 'localhost');
	define('DATABASE', '');  # <-- Adicionar Base de Dados
	define('USUARIO', 'root');
	define('SENHA', '');

	define('BASE_DIR_PAINEL',__DIR__.'/Classes/Views/');
?>
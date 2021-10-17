<?php 
include('Systema/index.php');
\Class\Controllers\CriarNovoController::criarProjeto();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta property="og:image" content="http://localhost/bg.jpg">
	<title>Teste</title>

	<style>
	*{
		padding: 0;
		margin: 0;
		box-sizing: border-box;
	}
		html,body{
			height: 100%;
			background: #5a5a5a;
			font-family: sans-serif;
			background-image: url(systema/Class/Views/bg.jpg);
			background-size: cover;
		}

		.alerta{
			position: fixed;
			right: 30px;
			top: 30px;
			font-size: 20px;
			color: white;
			padding: 20px;
			border-radius: 20px;
		}

		.alerta.sucesso{
			background: green;
		}

		.alerta.erro{
			background: #c51b1b;
		}

		.container{
			max-width: 500px;
			width: 100%;
			background: rgba(1, 63, 100, 0.5);
			border-radius: 10px;
			position: relative;
			top: 50%;
			left: 50%;
			transform: translate(-50% , -50%);
			padding: 30px 0;
			backdrop-filter: blur(10px);
			box-shadow: 10px 10px 18px -3px rgba(41,41,41,0.75);
			position: relative;
		}

		h1{
			text-align: center;
			font-size: 30px;
			font-weight: bold;
			margin-bottom: 50px;
			color: #ff5050;
		}

		li{list-style-type: none;}

		a{
			font-weight: lighter;
			display: block;
			text-decoration: none;
			padding: 10px 0;
			color: #ffff;
			transition: 0.3s;
			padding-left: 20px;
			background: #0a4c73;
			border-bottom: 1px solid;

		}

		a:hover{
			background: #ff5b28;
			color: white;
			border-radius: 10px;
		}

		.novo-projeto{
			text-align: right;
			margin-top: 30px;
			color: white;
			
		}

		.btn-new{
			padding: 10px 30px;
			cursor: pointer;
			display: inline-block;
			transition: 0.3s;
		}

		.btn-new:hover span{
			color: #ff5b28;
		}

		.novo-projeto form{
			display: none;
			position: absolute;
			width: 100%;
			left: 50%;
			top: 50%;
			transform: translate(-50% , -50%);
			background: rgba(0, 0, 0, 0.8);
			backdrop-filter: blur(50px);
			text-align: left;
			padding: 20px 10px;
			border-radius: 10px;
			z-index: 1;
		}

		.novo-projeto .close{
			text-align: right;
		}

		.novo-projeto .close span{
			cursor: pointer;
			padding: 5px;
		}

		.novo-projeto label{
			margin-bottom: 5px;
			display: block;
		}

		.novo-projeto input[type=text]{
			background: transparent;
			width: 100%;
			padding-left: 5px;
			border: 0;
			border-bottom: 1px solid white;
			margin-bottom: 10px;
			outline: none;
			color: white;
			font-size: 20px;
			font-weight: lighter;
		}

		.novo-projeto select{outline: none; 
			width: 100%;
			padding-left: 5px;
			border: 0;
			border-bottom: 1px solid white;
			margin-bottom: 10px;
			outline: none;
			font-size: 20px;
			font-weight: lighter;;}

		.novo-projeto p{margin: 20px 0; border-bottom: 1px dotted;}

		.novo-projeto input[type=submit]{
			display: inline-block;
			border: none;
			background: transparent;
			color: #ff5b28;
			font-size: 20px;
			margin-top: 15px;
			cursor: pointer;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="lista-pastas">
			<h1>Abrir projeto</h1>
			<?php  \Class\Controllers\ListarFoldersController::listarPastas(); ?>
		</div><!--lista-pastas-->
		<div class="novo-projeto">
			<div class="btn-new">
				<span>Criar novo projeto</span>
			</div><!--btn-new-->
			<form method="post">
				<div class="close"><span>X</span></div>
					<label for="nome">Nome do projeto</label>
					<input type="text" id="nome" name="nome">

					<label for="tipo">Tipo</label>
					<select id="tipo" name="tipo">
						<option disabled selected>Selecione o tipo do projeto</option>
						<option value=".php">PHP</option>
						<option value=".html">HTML</option>
					</select>
					<p>Arquivos adicionais</p>
					
					<input type="checkbox" id="css" name="css">
					<label style="display: inline-block; cursor: pointer;" for="css">Css</label>
					<br>
					<input type="checkbox" id="js" name="js">
					<label style="display: inline-block; cursor: pointer;" for="js">JavaScript</label>

					<br>
					<input type="submit" name="acao" value="Criar!">
				</form>
		</div><!--novo-projeto-->
	</div><!--container-->
	
<script src="System/jquery.js"></script>
<script>
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
</script>
</body>
</html>
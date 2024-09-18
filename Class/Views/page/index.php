<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta property="og:image" content="http://localhost/bg.jpg">
	<title>Projetos</title>
	<link rel="icon" href="ico.png" type="image/icon type">
	<link rel="stylesheet" type="text/css" href="interface_localhost/Class/Views/page/css/style.css">
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

					<input type="checkbox" id="jquery" name="jquery">
					<label style="display: inline-block; cursor: pointer;" for="jquery">JQuery</label>

					<br>
					<input type="submit" name="acao" value="Criar!">
				</form>
		</div><!--novo-projeto-->
	</div><!--container-->
	
<script src="interface_localhost/Class/Views/page/js/jquery.js"></script>
<script src="interface_localhost/Class/Views/page/js/main.js"></script>
</body>
</html>
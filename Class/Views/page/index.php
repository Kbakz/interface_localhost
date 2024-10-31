<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Projetos</title>
	<link rel="icon" href="<?php echo INCLUDE_PATH?>Class/Views/favicon.ico" type="image/icon type">
	<link rel="stylesheet" type="text/css" href="interface_localhost/Class/Views/css/style.css">
</head>
<body>
	<div class="container">
		<div class="lista-pastas">
			<h1>Abrir projeto</h1>
			<?php  \Class\Controllers\ListarFoldersController::listarPastas(); ?>
		</div><!--lista-pastas-->
		<div class="novo-projeto">
			<div class="btn">
				<span>Criar novo projeto</span>
			</div><!--btn-new-->
			<form method="post">
				
				<div class="form-content">
					<div class="close"><span>X</span></div>
					<h2>Criar novo projeto</h2>
					<div class="form-single">
						<label for="nome-projeto">Nome do projeto</label>
						<input type="text" id="nome-projeto" name="nome-projeto">
					</div>
					
					<div class="form-single">
						<label for="php">PHP</label>
						<input type="radio" name="tipo" id="php" value="php">
						<label for="html">HTML</label>
						<input type="radio" name="tipo" id="html" value="html">
					</div>

					<div class="form-single">
						<input type="submit" class="btn" name="criar-projeto" value="Criar!">
					</div>
					
				</div>
				
			</form>
		</div><!--novo-projeto-->
	</div><!--container-->
	
<script src="interface_localhost/Class/Views/js/jquery.js"></script>
<script src="interface_localhost/Class/Views/js/main.js"></script>
</body>
</html>
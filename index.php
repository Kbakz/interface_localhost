<?php 
require('vendor/autoload.php');
include('config.php');
\Class\Controllers\CriarProjetoController::criarProjeto();
\Class\Views\RenderView::exibir();
?>
<?php 
include('Systema/index.php');
define("INCLUDE_PATH", __DIR__);
define("INCLUDE_PATH_STATIC",INCLUDE_PATH.'Systema/Class/Views');
\Class\Controllers\CriarNovoController::criarProjeto();
\Class\Views\RenderView::exibir();
?>


<?php
namespace Class\Controllers;
class CriarNovoController{
public static function criarProjeto(){
	if(isset($_POST['acao'])){
		//Criando novo projeto.
		$newFolder = ucfirst($_POST['nome']);
		$extArquivo = (isset($_POST['tipo']) ? $_POST['tipo'] : '');
		$addCss = (isset($_POST['css']) ? $_POST['css'] : '');
		$addJs = (isset($_POST['js']) ? $_POST['js'] : '');

		if($newFolder != ''){
			if(!file_exists($newFolder)){
				if($extArquivo != ''){
					mkdir($newFolder);
					\Class\Views\AutoPreencherView::identificarArquivos($newFolder,$extArquivo,$addCss,$addJs);
					\Class\Models\AlertsModel::Alerta('sucesso','Arquivo criado com sucesso');
				}else{
					\Class\Models\AlertsModel::Alerta('erro','Selecione o tipo de projeto');
				}
				
			}else{
				\Class\Models\AlertsModel::Alerta('erro','Já existe um projeto com esse nome');
			}
			
		}else{
			\Class\Models\AlertsModel::Alerta('erro','Insira o nome do projeto');
		}
		
	}
}
}
?>
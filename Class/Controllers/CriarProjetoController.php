<?php
namespace Class\Controllers;
class CriarProjetoController{
	public static function criarProjeto(){
		
		if(isset($_POST['criar-projeto'])){
			//Criando novo projeto.
			$nomeProjeto = $_POST['nome-projeto'];
			$tipo = $_POST['tipo'];

			
			if(!empty($nomeProjeto)){
				if(!file_exists($nomeProjeto)){
					if(!empty($tipo)){
						if($tipo == 'php')
							$origem = DIR.'/Class/Views/modelo_PHP';
						else
							$origem = DIR.'/Class/Views/modelo_HTML';
						mkdir($nomeProjeto);
						$destino = 'C:\xampp\htdocs/'.$nomeProjeto;
						
						\Class\Models\CopydirModel::copiar_diretorio($origem, $destino);
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
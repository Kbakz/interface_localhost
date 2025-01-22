<?php
    namespace Classes\Models;

    class UtilsModel{
        public static function alerta($tipo,$mensagem){
			if($tipo == 'sucesso'){
				echo '<div class="box-alert sucesso"><i class="fas fa-check-circle"></i> '.$mensagem.'</div>';
			}else if($tipo == 'erro'){
				echo '<div class="box-alert erro"><i class="fas fa-times-circle"></i> '.$mensagem.'</div>';
			}
		}

		public static function redirecionar($url){
			echo '<script>window.location.href="'.$url.'"</script>';
			die();
		}

		public static function inserir($tabela,$array){
			$campos = '';
			for($i = 0; $i < count($array); $i++){
				$campos .= '?';
				if($i != count($array) - 1){
					$campos .= ',';
				}
			}

			$sql = \Classes\MySql::conectar()->prepare("INSERT INTO `$tabela` VALUES(null,".$campos.")");
            $sql->execute($array);
		}

		public static function selecionar($tabela,$campo = '1',$valor = '1'){
			$sql = \Classes\MySql::conectar()->prepare("SELECT * FROM `$tabela` WHERE $campo = ?");
			$sql->execute([$valor]);
			return $sql->fetch();
		}

		public static function selecionarTudo($tabela,$campo = '1',$valor = '1',$coluna = 'id',$ordem = 'ASC'){
			$sql = \Classes\MySql::conectar()->prepare("SELECT * FROM `$tabela` WHERE $campo = ? ORDER BY $coluna $ordem");
			$sql->execute([$valor]);
			return $sql->fetchAll();
		}

		public static function deletar($tabela,$id){
			$sql = \Classes\MySql::conectar()->prepare("DELETE FROM `$tabela` WHERE id = ?");
			$sql->execute([$id]);
		}
    }
?>
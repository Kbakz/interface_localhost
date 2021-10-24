<?php
namespace Class\Models;
class AlertsModel{
	public static function Alerta($tipo,$mensagem){
		if($tipo == 'sucesso')
			echo '<div class="alerta sucesso"><span>'.$mensagem.'</span></div>';
		else if($tipo == 'erro')
			echo '<div class="alerta erro"><span>'.$mensagem.'</span></div>';
		
	}
}
?>
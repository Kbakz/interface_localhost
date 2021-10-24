<?php
namespace Class\Controllers;
class ListarFoldersController{
	//Listando diretorios
	public static function ListarPastas(){
		$d = dir(".");
		echo "<ul>";
		while (false !== ($entry = $d->read()))
		{
		    if (is_dir($entry) && ($entry != '.') && ($entry != '..') && ($entry != 'Systema'))
		        echo "<li><a href='{$entry}'>{$entry}</a></li>";
		}
		echo "</ul>";
		$d->close();
	}
}
?>

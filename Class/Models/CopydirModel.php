<?php
namespace Class\Models;
class CopydirModel{
	public static function copiar_diretorio($origem, $destino) {
        // Verifica se o diretório de origem existe
        if (!is_dir($origem)) {
            echo "O diretório de origem não existe.";
            return false;
        }
    
        // Cria o diretório de destino, se não existir
        if (!is_dir($destino)) {
            mkdir($destino, 0755, true);
        }
    
        // Abre o diretório de origem
        $diretorio = scandir($origem);
        foreach ($diretorio as $item) {
            // Ignora os itens "." e ".."
            if ($item == '.' || $item == '..') {
                continue;
            }
    
            $origemItem = $origem . DIRECTORY_SEPARATOR . $item;
            $destinoItem = $destino . DIRECTORY_SEPARATOR . $item;
    
            // Se for um diretório, chama a função recursivamente
            if (is_dir($origemItem)) {
                \Class\Models\CopydirModel::copiar_diretorio($origemItem, $destinoItem);
            } else {
                // Se for um arquivo, copia para o diretório de destino
                copy($origemItem, $destinoItem);
            }
        }
    
        return true;
    }
}
?>
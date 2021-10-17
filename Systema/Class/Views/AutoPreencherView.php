<?php 
	namespace Class\Views;
	class AutoPreencherView{
		public static function identificarArquivos($newFolder,$tipo,$css,$js){
			if ($css == ''){
				$cssContent = '';
				$urlCss = '';
			}else{
				include(__DIR__.'/constants/css.php');
				mkdir($newFolder.'/css');
				file_put_contents('./'.$newFolder."/css/style.css", $cssContent);
			}
				
			if ($js == ''){
				$jsContent = '';
				$urlJs = '';
			}else{
				include(__DIR__.'/constants/js.php');
				mkdir($newFolder.'/js');
				file_put_contents('./'.$newFolder."/js/main.js", $jsContent);
			}

			if($tipo == '.html'){
				include(__DIR__.'/constants/html.php');
				file_put_contents('./'.$newFolder.'/index.html', $htmlContent);
			}else{
				include(__DIR__.'/constants/composerContent.php');
				include(__DIR__.'/constants/php.php');
				mkdir($newFolder.'/Classes');
				mkdir($newFolder.'/Classes/Controllers');
				mkdir($newFolder.'/Classes/Models');
				mkdir($newFolder.'/Classes/Views');
				file_put_contents('./'.$newFolder.'/composer.json', $composerContent);
				file_put_contents('./'.$newFolder.'/index.php', $phpContent);
			}
			
		}
		

	}


?>
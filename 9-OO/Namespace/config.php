<?php 
/*
	Definir os locais das classes
*/

spl_autoload_register( function($nameClass) {

	var_dump($nameClass);
	echo '<br><br>';

	$dirClass = "class";
	$filename =  $dirClass.DIRECTORY_SEPARATOR.$nameClass.'.php';

	var_dump($filename);
	echo '<br>-------------------------------------------------------<br><br>';

	// Verificar se o arquivo existe
	if ( file_exists($filename) ) {
		require_once( $filename );
	}
});

?>
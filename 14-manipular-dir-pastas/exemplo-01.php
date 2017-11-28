<?php 
/*
	Criação  e remoção de diretórios
*/

	$name = "images";

	if ( !( is_dir($name) ) ) {

		mkdir( $name );
		echo 'Pasta '.$name.' criado com sucesso!';
		echo '<br><br>';

	} else {

		//rmdir( $name );
		echo 'Pasta '.$name.' excluido com sucesso!';
		echo '<br><br>';
	}

?>
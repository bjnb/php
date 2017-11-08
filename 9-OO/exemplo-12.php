<?php

	/*
		SPL Autoload com funções de inclusão do arquivo
	*/
	/*
	function incluirClasses( $nomeClasse ) {

		if ( file_exists( $nomeClasse.'.php' ) ) {

			require_once("$nomeClasse.php");
		}

	}
	*/

	// Registrar várias funções de autoload
	// Standard PHP Library
	//spl_autoload_register( "incluirClasses" );

	spl_autoload_register( function( $nomeClasse ) {

		if ( file_exists( "Abstratas". DIRECTORY_SEPARATOR . $nomeClasse . '.php' ) ) {

			require_once( $nomeClasse . '.php' );
		}

	});
	

	$carro = new DelRey();

	$carro->trocarMarcha('1');

	$carro->acelerar('50');

	$carro->getVelocidade();

	$carro->frenar('20');

?>
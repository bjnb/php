<?php

	/*
		Autoload
	*/
	
	function __autoload( $nomeClasse ){

		require_once("$nomeClasse.php");
	}

	$carro = new DelRey();

	$carro->trocarMarcha('1');

	$carro->acelerar('50');

	$carro->getVelocidade();

	$carro->frenar('20');

?>
<?php 
/*
	Tratemento de erro que não queira ser mostrado na tela
*/

	error_reporting(E_ALL & ~E_NOTICE);

	$nome = $_GET['nome'];

	echo $nome;

 ?>
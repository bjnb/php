<?php 

	// Inclusão do arquivo de configuração
	require_once("config.php");

	// usando o namespace
	/*
		Namespace definido dentro da pasta Cliente
	*/
	use Cliente\Cadastro;


	$cad = new Cadastro();

	$cad->setNome('Bruno Batista');
	$cad->setEmail('bjnb@cin.ufpe.br');
	$cad->setSenha('123456');

	$cad->registrarVenda();
 ?>
<?php 

	/*
		Inserir
	*/

	$conn = new PDO(
		"mysql:dbname=dbphp7;host=localhost",
		"root",
		""
	);

	$query = $conn->prepare("INSERT INTO `tb_usuarios` (`login`, `senha`) VALUES (:LOGIN, :PASSWORD)");

	$login = "jose";
	$password = "123";

	$query->bindParam(":LOGIN", $login);
	$query->bindParam(":PASSWORD", $password);


	$query->execute();


 ?>
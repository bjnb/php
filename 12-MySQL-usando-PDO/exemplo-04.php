<?php 

	/*
		Update
	*/

	$conn = new PDO(
		"mysql:dbname=dbphp7;host=localhost",
		"root",
		""
	);

	$query = $conn->prepare("UPDATE tb_usuarios SET login = :LOGIN, senha = :PASSWORD WHERE id = :ID");

	$id = 5;
	$login = "joao";
	$password = "123456";

	$query->bindParam(":LOGIN", $login);
	$query->bindParam(":PASSWORD", $password);
	$query->bindParam(":ID", $id);


	$query->execute();


 ?>
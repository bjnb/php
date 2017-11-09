<?php 

	/*
		Excluir
	*/

	$conn = new PDO(
		"mysql:dbname=dbphp7;host=localhost",
		"root",
		""
	);

	$query = $conn->prepare("DELETE FROM `tb_usuarios` WHERE `id` = :ID");

	$id = 5;
	$login = "joao";
	$password = "123456";

	$query->bindParam(":ID", $id);


	$query->execute();


 ?>
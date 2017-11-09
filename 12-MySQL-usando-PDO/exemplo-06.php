<?php 

	/*
		Transação
	*/

	$conn = new PDO(
		"mysql:dbname=dbphp7;host=localhost",
		"root",
		""
	);

	// Abri uma transação
	$conn->beginTransaction();

	$query = $conn->prepare("DELETE FROM `tb_usuarios` WHERE `id` = :ID");

	$id = 4;

	$query->bindParam(":ID", $id);

	// Cancelar a transação
	$conn->rollback();


	$query->execute();


 ?>
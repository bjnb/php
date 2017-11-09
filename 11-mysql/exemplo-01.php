<?php 
	/*
		Inserção
	*/

	$conn = new mysqli(
		"localhost",
		"root",
		"",
		"dbphp7"
	);

	if ( $conn->connect_error ) {
		echo 'Error: ' . $conn->connect_error;
	}


	$sql = $conn->prepare("INSERT INTO `tb_usuarios` ( `login`, `senha` ) VALUES ( ?, ? )");

	$sql->bind_param("ss", $login, $senha);

	$login = "bjnb1";
	$senha = "123";

	$sql->execute();
	
	$login = "bjnb2";
	$senha = "123";

	$sql->execute();

	var_dump( $conn->insert_id );
?>
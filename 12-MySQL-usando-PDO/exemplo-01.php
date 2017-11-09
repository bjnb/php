<?php 

	$conn = new PDO(
		"mysql:dbname=dbphp7;host=localhost",
		"root",
		""
	);

	$query = $conn->prepare("SELECT * FROM `tb_usuarios` ORDER BY `login`");

	$query->execute();

	$result = $query->fetchAll( PDO::FETCH_ASSOC );

	echo json_encode($result);

	//var_dump($result);

 ?>
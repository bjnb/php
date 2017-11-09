<?php 

	/*
		Select
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

	$sql = "SELECT * FROM `tb_usuarios` ORDER BY `login`";

	$result = $conn->query($sql);

	$data = array();

	while ( $row = $result->fetch_assoc() ) {

		array_push($data, $row);
    }
	
	echo json_encode($data);

?>
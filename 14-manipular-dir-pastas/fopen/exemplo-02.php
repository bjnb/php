<?php 

	/*
		Convertendo para um arquivo CSV
	*/

	require_once("config.php");

	
	$users = Usuario::getAll('ORDER BY id');

	$headers = array();

	foreach ($users[0] as $key => $value) {
		array_push($headers, ucfirst($key));


	}

	$file = fopen("usuarios.csv", "w+");

	fwrite( $file, implode(",", $headers)."\r\n");

	echo implode(",", $headers);

	foreach ($users as $row) {

		$data = array();

		foreach ($row as $key => $value) {
			
			array_push($data, $value);

		}

		fwrite($file, implode(",", $data)."\r\n");
	}

	fclose($file);

	echo dirname(__DIR__);
	

	/*
	$sql = new Sql('testes');

	$cars = $sql->select("SELECT * FROM tb_pessoas ORDER BY id");

	// Preparando o cabeçalho
	$headers = array();

	foreach ($cars[0] as $key => $value) {
		array_push($headers, ucfirst($key));


	}

	$file = fopen("pessoas.csv", "w+");

	fwrite( $file, implode(",", $headers)."\r\n");

	echo implode(",", $headers);

	foreach ($cars as $row) {

		$data = array();

		foreach ($row as $key => $value) {
			
			array_push($data, $value);

		}

		fwrite($file, implode(",", $data)."\r\n");
	}

	fclose($file);
	*/
?>
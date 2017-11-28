<?php 
/*
	Tratemento de erro que não queira ser mostrado na tela
*/

	// Função que tratará o erro
	function error_handler($code, $msg, $file, $line) {

		echo json_encode(array(
			'message' => $code,
			'line' => $line,
			'file' => $file,
			'code' => $code
		));

	}


	set_error_handler("error_handler");

	// Geração do erro
	echo 100/0;

 ?>
<?php 
/*
	Criando um cookie
*/

	$data = array(
		'empresa' => 'Hcode Treinamentos'
	);

	setcookie("Nome_do_cookie", json_encode($data), time() + 3600);

	echo "ok";

	
 ?>
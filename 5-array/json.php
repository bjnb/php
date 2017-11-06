<?php 
/*

	Um formato de arquivo que facilita a intercomunicação de sistemas
	Exemplo: Dois sistemas escritos um em JS e outro em PHP, e o protocolo
	de comunicação dos dois arquivos é no formato Json

*/

	$pessoas = array();

	array_push($pessoas, array(
		'nome' => 'João',
		'idade' => 20
	));

	array_push($pessoas, array(
		'nome' => 'Claucio',
		'idade' => 25
	));

	echo json_encode($pessoas, JSON_UNESCAPED_UNICODE);

	echo 	'<br><br>';

	$dataReceived = '[{"nome":"João","idade":20},{"nome":"Claucio","idade":25}]';

	$pessoas = json_decode($dataReceived, true);

	var_dump( $pessoas );

 ?>
<?php 

$nome = "Hcode";

echo 	var_dump($nome).'<br>-------------<br>';

echo 	var_export($nome).'<br>-------------<br>';

echo 	print_r($nome);

echo 	'<br><hr><br>';


echo 	'função: unsset';
echo 	'<br><br>';

echo 	'unset é o mesmo que atribuir null a variavel'.'<br>';

$nome = NULL;

// unset($nome);

	if ( isset($nome) ) {
		echo $nome;
	} else {
		echo 'não foi inicializada!';
	}

echo 	'<br><hr><br>';

 ?>
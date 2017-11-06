<?php 

echo 	'Comparação de valores: '.'<br>';

$a = 1;
$b = '1';
$c = 1.0;

	if ( $a == $b ) {
		echo 	var_dump($a);
		echo 	' valores iguais ';
		echo 	var_dump($b).'<br>';
	}

	if ( $a !== $b ) {
		echo 	var_dump($a);
		echo 	' valores iguais e tipos diferentes ';
		echo 	var_dump($b).'<br>';
	}

	if ( $a == $c ) {
		echo 	var_dump($a);
		echo 	' valores iguais ';
		echo 	var_dump($b).'<br>';
	}

	if ( $a !== $c ) {
		echo 	var_dump($a);
		echo 	' valores iguais e tipos diferentes ';
		echo 	var_dump($b).'<br>';
	}

	echo 	'<br><br>';


	echo 	'<hr>';

	echo 	'Operacao <=>';
	echo 	'<br><br>';

	$a = 50;
	$b = 35;

	echo 	'a = ' . $a . '<br>';
	echo 	'b = ' . $b . '<br>';
	echo 	'resultado: ';
	echo 	var_dump($a <=> $b);
	echo 	'<br><br>';

	$a = 35;
	$b = 50;

	echo 	'a = ' . $a . '<br>';
	echo 	'b = ' . $b . '<br>';
	echo 	'resultado: ';
	echo 	var_dump($a <=> $b);
	echo 	'<br><br>';

	$a = 50;
	$b = 50;

	echo 	'a = ' . $a . '<br>';
	echo 	'b = ' . $b . '<br>';
	echo 	'resultado: ';
	echo 	var_dump($a <=> $b);
	echo 	'<br><br>';


	echo 	'<hr>';

	echo 	'Operacao ??';
	echo 	'<br><br>';

	$a = NULL;
	$b = 5;
	$c = 10;

	/*
		Se uma variavel for definida então imprima, se não vá a próxima
		se alguma variável for definida na sequencia este será impresso 
		e as demais ignoradas;
	*/
	echo 	$a ?? $b ?? $c;

 ?>
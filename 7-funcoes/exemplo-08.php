<?php 

/*
	Este tipo de declaração permiti passar 'n' argumentos do mesmo
	tipo para a função e receber um tipo específico de retorno;

*/

function soma( int ...$valores ):string {

	return array_sum($valores);

}

echo var_dump(soma(2, 3));
echo "<br><br>";

echo var_dump(soma(25, 33));
echo "<br><br>";

echo var_dump(soma(1.5, 3.2));
echo "<br><br>";

 ?>
<?php 

/*
	Este tipo de declaração permiti passar 'n' argumentos do mesmo
	tipo para a função;

*/

function soma( int ...$valores ) {
	return array_sum($valores);
}

echo soma(2, 3);
echo "<br><br>";

echo soma(25, 33);
echo "<br><br>";

echo soma(1.5, 3.2);
echo "<br><br>";

 ?>
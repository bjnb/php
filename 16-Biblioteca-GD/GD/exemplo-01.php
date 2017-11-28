<?php 

/*
	Criando uma imagem do zero
*/
	
header("Content-Type: image/png");

$image = imagecreate(256, 256);

// A primeira cor criada vira automaticamente a cor de tela de
// fundo

$black = imagecolorallocate($image, 0, 0, 0);

$red = imagecolorallocate($image, 255, 0, 0);

imagestring($image, 5, 60, 120, "Curso de PHP 7", $red);

imagepng($image);

imagedestroy($image);

 ?>
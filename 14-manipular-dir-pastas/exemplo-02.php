<?php 
/*
	Pegando informações sobre os arquivos

*/
	// o diretório inicial é onde está contido este arquivo php

	// Escanear diretório
	$images = scandir("images");

	//var_dump( $images );

	$data = array();

	foreach ($images as $img) {
		if ( !in_array($img, array('.', '..')) ) {

			$filename = "images".DIRECTORY_SEPARATOR.$img;

			$info = pathinfo($filename);

			// Pegando o tamanho do arquivo
			$info['size'] = filesize( $filename );

			// Pegando a data de modificação
			$info['modified'] = date("d/m/Y H:i:s", filemtime($filename));

			// Acesando arquivo via URL
			$info['url'] = 'http://localhost:8090/3-curso-completo-php-7/codigo/14-manipular-dir-pastas/'.str_replace( '\\', '/', $filename);


			//var_dump( $info );

			array_push($data, $info);

		}
	}

	echo json_encode( $data );

?>
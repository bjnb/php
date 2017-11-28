<?php 
/*
	Recuperando um cookie
*/

	// Array superglobal
	//var_dump($_COOKIE);
	if( isset($_COOKIE['Nome_do_cookie']) ) {

		$obj = json_decode($_COOKIE['Nome_do_cookie'], true);

		var_dump($obj);
	}

 ?>
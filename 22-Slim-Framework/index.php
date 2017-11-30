<?php 

define("DS", DIRECTORY_SEPARATOR);

require_once("vendor".DS."autoload.php");

use Slim\Slim;

$app = new Slim();

$app->get('/', function(){
	echo "Home Page";
	/*
		Pode ser colocado aqui o os templates 
		do RainTPL
	*/
});

$app->get('/hello/:name', function ($name) {
    echo "Hello, " . $name;
});

$app->run();


 ?>
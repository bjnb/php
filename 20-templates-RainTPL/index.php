<?php 

define("DS", DIRECTORY_SEPARATOR);

require_once("vendor".DS."autoload.php");

// namespace
use Rain\Tpl;

// config
$config = array(
    "tpl_dir"       => "tpl/",
    "cache_dir"     => "cache/"
    //"debug"         => true, // set to false to improve the speed
);

Tpl::configure( $config );

// create the Tpl object
$tpl = new Tpl();

// assign a variable
$tpl->assign( "name", "Hcode" );

$tpl->assign( "version", PHP_VERSION );

// assign an array
//$tpl->assign( "week", array( "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday" ) );

// draw the template
$tpl->draw( "index" );

?>
<?php 

	// Recuperando o ID
	//echo session_id('di54cb56c24ol1v1unnoola1tg');

	require_once("session.php");

	session_regenerate_id( TRUE );

	echo session_id().'<br>';

	var_dump($_SESSION);

	/*
		di54cb56c24ol1v1unnoola1tg
		hkdo2ifblccvha3dtdoigvnou5
		tmkko642m1h4gc1qat9af884ca


		b2pl1qlqc6kriedmg4m8t4306s
		rb1ciqdbufu7mqvp7mubhla11f
		m3hep22togsh8ha3nnbn9vftb7
		rp0jak7br0vf2u6137dthmbdtu
	*/

 ?>
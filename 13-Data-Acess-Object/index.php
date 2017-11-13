<?php 

	require_once('config.php');
	
	/*
	$sql = new Sql();

	$usuarios = $sql->select("SELECT * FROM `tb_usuarios`");

	echo $sql->update(
		"UPDATE tb_usuarios SET login = :LOGIN, senha = :PASSWORD WHERE login = :LOGIN",
		array(
			':LOGIN'=> 'bjnb',
			':PASSWORD'=> '123'
	));
	echo '<br><br>';
	*/

	
	$user = new Usuario();

	
	$user->login( 'bjnb6', '1234' );
	echo $user;
	echo '<br><br>';
	

	//echo $user->recuperarSenha( 'bjnb' );

	/*
	echo ( $user->searchById( '5' ) ) ? $user : 'Usuario não encontrado';

	echo '<br><br>';
	*/

	
	/*
	echo ( $user->login( 'bjnb2', '123456' ) ) ? $user : 'Usuario não encontrado';

	echo '<br><br>';
	*/

	/*
	echo Usuario::getAll();

	echo '<br><br>';
	*/

	/*
	echo Usuario::search( 'login', 'bjnb' );

	echo '<br><br>';
	*/
?>
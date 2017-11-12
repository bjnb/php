<?php 

	require_once('config.php');
	
	/*
	$sql = new Sql();

	$usuarios = $sql->select("SELECT * FROM `tb_usuarios`");

	if ( $usuarios ) {
		var_dump( $usuarios );
		echo '<br><br>';
	} else {
		echo "Não há dados!".'<br><br>';
	}
	*/
	
	
	$user = new Usuario();

	
	echo ( $user->searchById( '5' ) ) ? $user : 'Usuario não encontrado';

	echo '<br><br>';
	

	
	/*
	echo ( $user->login( 'bjnb2', '123456' ) ) ? $user : 'Usuario não encontrado';

	echo '<br><br>';
	*/

	/*
	echo Usuario::getAll();

	echo '<br><br>';
	*/

	echo Usuario::search( 'login', 'b' );

	echo '<br><br>';
?>
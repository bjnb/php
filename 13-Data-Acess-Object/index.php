<?php 

	require_once('config.php');
	
	$sql = new Sql();

	$usuarios = $sql->select("SELECT * FROM `tb_usuarios`");

	if ( $usuarios ) {
		var_dump( $usuarios );
		echo '<br><br>';
	} else {
		echo "Não há dados!".'<br><br>';
	}
	
	/*
	$user = new Usuario();


	echo ( $user->searchById( 5 ) ) ? $user : 'Usuario nao encontrado';

	echo '<br><br>';	

	echo ( $user->searchByLogin( 'bjnb' ) ) ? $user : 'Usuario nao encontrado';

	echo '<br><br>';

	echo ( $user->searchByUser( 'bjnb', '123' ) ) ? $user : 'Usuario nao encontrado';

	echo '<br><br>';
	*/

	
?>
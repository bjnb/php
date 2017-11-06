<?php 

	require_once("session.php");

	// Verificar se a variável está setada
	echo (isset($_SESSION['nome']) ? $_SESSION['nome'] : "Isso nonecziste!");
?>
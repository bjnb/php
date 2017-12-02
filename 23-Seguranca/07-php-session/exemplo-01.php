<?php 

/*
	Session PHP

	Cada vez que o navegador é fechado uma nova sessão do usuário é criado


*/

	session_start();

	// Depois de verificar login e senha, reiniciei o id da sessão

	session_regenerate_id(true);

	echo session_id();



 ?>
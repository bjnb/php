<?php 

	// Função anonima

	function teste( $callback ) {

		echo 'Processo lento...'.'<br><br><br>';

		$callback();

	}

	teste( function () {
		echo "Terminou!";
	});

?>
<?php

	/*
		Métodos Mágicos
	*/

	class Endereco {
		
		private $logradouro;
		private $numero;
		private $cidade;

		public function __construct( $a, $b, $c ) {
			
			$this->logradouro = $a;
			$this->numero = $b;
			$this->cidade = $c;
			
		}

		public function __destruct() {

			var_dump("Destruct chamado!");

		}

		public function __toString() {
			return 	$this->logradouro . ", ".
					$this->numero . " - " .
					$this->cidade;
		}

	}


	$e1 = new Endereco("Avenida Doutor José Rufino", "514", "Recife");

	var_dump($e1);

	echo '<br><br>';

	echo $e1.'<br><br>';

	unset($e1);

?>
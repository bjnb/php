<?php

	/*
		Encapsulamento
	*/
	class Pessoa {

		public $nome = "Rasmus Lerdof";
		protected $idade = 48;
		private $senha = "123456";
		
		public function verDados() {

			echo $this->nome . '<br>';
			echo $this->idade . '<br>';
			echo $this->senha . '<br>';

		}
	}
	
	$p1 = new Pessoa();

	// echo $p1->senha . '<br>';

	$p1->verDados();

?>
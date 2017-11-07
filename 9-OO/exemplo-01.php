<?php

	/*
		Declaração de classe
	*/

	class Pessoa {

		public $nome;


		public function falar() {

			return "O meu nome é " . $this->nome;

		}

	}

	$p1 = new Pessoa();
	$p1->nome = "Glaucio";
	echo $p1->falar();

	

?>
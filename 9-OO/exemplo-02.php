<?php

	/*
		Declaração de classe
	*/

	class Carro {

		private $modelo;
		private $motor;
		private $ano;


		public function getModelo() {
			return $this->modelo;
		}

		public function setModelo( $modelo ) {
			$this->modelo = $modelo;
		}

		public function getMotor():float {
			return $this->motor;
		}

		public function setMotor( $motor ) {
			$this->motor = $motor;
		}

		public function getAno():int {
			return $this->ano;
		}

		public function setAno( $ano ) {
			$this->ano = $ano;
		}

		public function exibir() {
			return array(
				'modelo'	=> $this->getModelo(),
				'motor'		=> $this->getMotor(),
				'ano'		=> $this->getAno()
			);
		}

	}


	$c1 = new Carro();
	$c1->setModelo("Gol GT");
	$c1->setMotor("1.6");
	$c1->setAno("2017");

	var_dump($c1->exibir());

?>
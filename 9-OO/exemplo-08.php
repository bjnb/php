<?php

	/*
		Interface
	*/
	interface Veiculo {

		// Métodos abstratos
		public function acelerar( $velocidade );
		public function frenar( $velocidade );
		public function trocarMarcha( $marcha );

	}

	// Implementação da Interface
	class Civic implements Veiculo {

		private $vel;

		public function setVelocidade( $velocidade ) {
			$this->vel = $velocidade;
		}

		public function getVelocidade() {
			echo "A velocidade atual do carro ".$this->vel." km/h".'<br><br>';
		}

		public function acelerar( $vel ) {

			$this->setVelocidade( $vel );
			echo "O veiculo acelerou até ".$vel." km/h".'<br><br>';
		}

		public function frenar( $vel ) {

			echo "O veiculo frenou até ".$vel." km/h".'<br><br>';
		}

		public function trocarMarcha( $m ) {

			echo "O veiculo trocou de marcha para marcha " . $m . '<br><br>';
		}

	}
	
	$carro = new Civic();

	$carro->trocarMarcha('1');

	$carro->acelerar('50');

	$carro->getVelocidade();

	$carro->frenar('20');

?>
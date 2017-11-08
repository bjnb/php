<?php

	/*
		Classe abstrata
	*/
	interface Veiculo {

		// Métodos abstratos
		public function acelerar( $velocidade );
		public function frenar( $velocidade );
		public function trocarMarcha( $marcha );

	}

	// Implementação da Interface
	abstract class Automovel implements Veiculo {

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

	class DelRey extends Automovel {

		public function empurrar() {

			echo "Empurrado!". '<br><br>';
		}

	}


	$carro = new DelRey();


	$carro->acelerar('60');

	$carro->empurrar();

	$carro->getVelocidade();

?>
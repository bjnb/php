<?php

	/*
		Polimorfismo
	*/
	

	abstract class Animal {

		public function falar() {

			return "Som emitido!".'<br><br>';
		}

		public function mover() {

			return "Andou!".'<br><br>';
		}

	}

	class Cachorro extends Animal {

		// Método que mudou o comportamento após herdar
		public function falar() {

			return "Latiu!".'<br><br>';
		}
		
	}

	class Gato extends Animal {

		public function falar() {

			return "Miou!".'<br><br>';
		}


	}

	class Passaro extends Animal {

		public function falar() {

			return "Canta!".'<br><br>';
		}

		public function mover() {

			return "Vuou e ". parent::mover() .'<br><br>';
		}


	}

	$pluto = new Cachorro();

	echo $pluto->falar();

	echo $pluto->mover();

	echo "--------------------------------------------".'<br><br>';

	$garfield = new Gato();

	echo $garfield->falar();

	echo $garfield->mover();

	echo "--------------------------------------------".'<br><br>';

	$ave = new Passaro();

	echo $ave->falar();

	echo $ave->mover();

?>
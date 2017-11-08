<?php 
// Cadastro do cliente

	namespace Cliente;

	/*
		\Cadastro = voltar para a pasta raiz e paga o cadastro
	*/
	class Cadastro extends \Cadastro {

		public function registrarVenda() {

			echo "Foi registrada uma venda para ".$this->getNome();
		}

	}

 ?>
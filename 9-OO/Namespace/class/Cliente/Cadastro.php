<?php 
// Cadastro do cliente

	// Nome da pasta onde está Cadastro.php
	namespace Cliente;

	use Cadastro as C1;

	/*
		\Cadastro = voltar para a pasta raiz e paga o cadastro
		Diretório padrão no auload: class
	*/
	class Cadastro extends C1 {

		public function __construct() {
			echo 'Construtor class\Cliente\Cadastro.php chamado!'.'<br><br>';
		}

		public function registrarVenda() {

			echo "Foi registrada uma venda para ".$this->getNome();
		}

	}

 ?>
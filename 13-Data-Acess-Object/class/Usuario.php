<?php 

	class Usuario {

		private $users;

		// --------------------------------------------------------
		//	SETs e GETs

		public function getID():int {
			return current($this->users)['id'];
		}

		public function getLogin():string {
			return current($this->users)['login'];
		}

		public function getSenha():string {
			return current($this->users)['senha'];
		}

		public function getDataCadastro():string {
			return current($this->users)['data_cadastro'];
		}

		public function getUsuario():array {
			return current($this->users);
		}

		public function getUsuarios():array {
			return $this->users;
		}

		// --------------------------------------------------------

		
		// --------------------------------------------------------
		// 	Funções públicas

		public function searchById( $ID ):bool {
			$sql = new Sql();

			$this->users =  $sql->select( "SELECT * FROM tb_usuarios WHERE id = :ID", array( 
				":ID" => $ID
			));
		
			return (count($this->users) == 1) ? true : false;
		}

		
		public function searchByLogin( $login ):bool {
			$sql = new Sql();

			$this->users =  $sql->select( "SELECT * FROM tb_usuarios WHERE login = :LOGIN", array( 
				":LOGIN" => $login
			));

			return (count($this->users) == 1) ? true : false;
		}

		
		public function searchByUser( $login, $senha ):bool {
			if ( $this->searchByLogin( $login ) ) {
				return ( $this->getSenha() == $senha ) ? true : false;
			} else {
				return false;
			}
		}
		

		// --------------------------------------------------------
		

		// --------------------------------------------------------
		// 	Métodos mágicos
		
		public function __toString() {
			return json_encode( $this->getUsuarios() );
		}
		
		// --------------------------------------------------------
		
	}


 ?>
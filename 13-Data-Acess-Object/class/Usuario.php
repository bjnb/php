<?php 

	class Usuario {

		private $ID;
		private $login;
		private $senha;
		private $data_cadastro;

		// --------------------------------------------------------
		//	SETs e GETs

		public function getID():int {
			return $this->ID;
		}

		private function setID( $ID ) {
			$this->ID = $ID;
		}

		public function getLogin():string {
			return $this->login;
		}

		private function setLogin( $login ) {
			$this->login = $login;
		}

		public function getSenha():string {
			return $this->senha;
		}

		private function setSenha( $senha ) {
			$this->senha = $senha;
		}

		public function getDataCadastro() {
			return $this->data_cadastro;
		}

		private function setDataCadastro( $data_cadastro ) {
			$this->data_cadastro =  new DateTime( $data_cadastro );
		}

		public function getUsuario() {
			return array(
				'id' 	=> $this->getID(),
				'login' => $this->getLogin(),
				'senha' => $this->getSenha(),
				'data_cadastro' => $this->getDataCadastro()->format("d/m/Y H:i:s")
			);
		}

		private function getRow( $result ) {
			$this->setID( $result[0]['id'] );
			$this->setLogin( $result[0]['login'] );
			$this->setSenha( $result[0]['senha'] );
			$this->setDataCadastro( $result[0]['data_cadastro'] );
		}

		// --------------------------------------------------------

		
		// --------------------------------------------------------
		// 	Funções públicas

		public function searchById( $ID ):bool {

			$sql = new Sql();

			$result =  $sql->select( "SELECT * FROM tb_usuarios WHERE id = :ID", array( 
				":ID" => $ID
			));
		
			if ( $result ) {
				$this->getRow( $result );
				return true;		
			} else {
				return false;
			}

		}


		public function searchByLogin( $login ):bool {
			$sql = new Sql();

			$result =  $sql->select( "SELECT * FROM tb_usuarios WHERE login = :LOGIN", array( 
				":LOGIN" => $login
			));

			if ( $result ) {
				$this->getRow( $result );
				return true;		
			} else {
				return false;
			}
		}
		
		public function searchByUser( $login, $senha ):bool {

			if ( $this->searchByLogin( $login ) ) {
				$user = $this->getUsuario();

				if ( $user['senha'] == $senha ) {
					return true;
				} else {
					return false;
				}
			} else {
				return false;
			}

		}
		
		

		// --------------------------------------------------------
		

		// --------------------------------------------------------
		// 	Métodos mágicos
		
		public function __toString() {
			return json_encode( $this->getUsuario() );
		}
		
		// --------------------------------------------------------
		
	}


 ?>
<?php 

	/*
		
	*/

	class Usuario {

		private $user;

		/////////////////////////////////////////////////////////////////////
		////	SETs e GETs

		public function getID():int {
			return $this->user['id'];
		}

		public function getLogin():string {
			return $this->user['login'];
		}

		public function getSenha():string {
			return $this->user['senha'];
		}

		public function getDataCadastro():string {
			return $this->user['data_cadastro'];
		}

		public function getUsuario():array {
			return $this->user;
		}

		private function setLogin( $login ) {
			$this->user['login'] = $login;
		}

		private function setSenha( $password ) {
			$this->user['senha'] = $password;
		}
		

		/////////////////////////////////////////////////////////////////////

		
		/////////////////////////////////////////////////////////////////////
		////	Funções públicas

		public function __construct() {
			$this->user = array();
		}

		// ------------------------------------------------------

		public function login( $login, $password ) {

			$rows =  $this->searchByLogin( $login );

			if ( count( $rows ) == 1 ) {
				
				if ( $rows[0]['senha'] == $password ) {
					$this->user['id'] = $rows[0]['id'];
					$this->user['login'] = $rows[0]['login'];
					$this->user['password'] = $rows[0]['senha'];
					$this->user['data_cadastro'] = $rows[0]['data_cadastro'];
				} else {
					throw new Exception("Password incorrect", 2);
				}

			} else if ( count($rows) == 0 ) {
				throw new Exception("Login incorrect", 1);
			}
		}

		// ------------------------------------------------------

		public function signup( $login, $password ) {
			
			$rows = $this->searchByLogin( $login );

			if ( count($rows) == 0 ) {

				$ID = (new Sql('dbphp7'))->insert( 
					"INSERT INTO `tb_usuarios` (`login`, `senha`) VALUES (:LOGIN, :PASSWORD)", 
					array( 
						":LOGIN" => $login,
						":PASSWORD" => $password
					)
				);

				$this->login( $login, $password );

			} else if ( count($rows) == 1 ) {
				throw new Exception("Login is already registered", 3);
			}
		}

		// ------------------------------------------------------
		// Função só pode ser acessada somente após o login

		public function updateSenha( $senha ) {

			if ( isset($this->user['id']) ) {

				if ( ((new Sql('dbphp7'))->update(
					"UPDATE tb_usuarios SET senha = :PASSWORD WHERE id = :ID",
					array(
						':ID'=> $this->getID(),
						':PASSWORD'=> $senha
				))) != 1 ) {
					throw new Exception("Password update error", 4);
				}

			} else {
				throw new Exception("Login required ", 5);
			}
		}
		
		// ------------------------------------------------------
		// Função acessada para recuperar senha conhecendo o login

		public function recuperarSenha( $login ):string {

			$rows = $this->searchByLogin( $login );

			if ( count( $rows ) == 1 ) {
				return $rows[0]['senha'];
			} else {
				throw new Exception("Login incorrect", 1);
			}
		}

		// ------------------------------------------------------
		// Função só pode ser acessada somente após o login

		public function deletarUsuario() {

			if ( isset($this->user['id']) ) {

				if ( ((new Sql('dbphp7'))->delete(
					"DELETE FROM `tb_usuarios` WHERE `id` = :ID",
					array(
						':ID' => $this->getID()
					)
				)) == 1 ) {
					unset($this->user['id']);
					unset($this->user['login']);
					unset($this->user['senha']);
					unset($this->user['data_cadastro']);
				} else {
					throw new Exception("Delete error", 6);
				}

			} else {
				throw new Exception("Login required ", 5);
			}

		}

		// ------------------------------------------------------

		public static function getAll( $where = "" ) {
			return (new Sql('dbphp7'))->select( "SELECT * FROM tb_usuarios ".$where );
		}

		// ------------------------------------------------------
		// Não recomendado buscar por ID pois é a chave primaria
		// ao invés disso use searchById()

		public static function search( $column, $search ) {
			return json_encode( 
				(new Sql('dbphp7'))->select( 
					"SELECT * FROM tb_usuarios WHERE ".$column." LIKE :SEARCH ORDER BY ".$column, 
					array(
						':SEARCH' => "%".$search."%"
					)
				)
			);
		}

		// ------------------------------------------------------

		public function searchByLogin( $login ):array {
			return (new Sql('dbphp7'))->select(
				"SELECT * FROM tb_usuarios WHERE login = :LOGIN", 
				array(
					":LOGIN" => $login
				)
			);
		}

		/////////////////////////////////////////////////////////////////////
		

		/////////////////////////////////////////////////////////////////////
		//// 	Métodos mágicos
		
		public function __toString() {
			return json_encode( $this->getUsuario() );
		}
		
		/////////////////////////////////////////////////////////////////////
		
	}


 ?>
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

		/*
		public function getUsuario():array {
			return current($this->users);
		}
		*/

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
		
		public function login( $login, $password ):bool {

			$this->users =  (new Sql())->select( 
				"SELECT * FROM tb_usuarios WHERE login = :LOGIN AND senha = :PASSWORD", 
				array( 
					":LOGIN" => $login,
					":PASSWORD" => $password
				)
			);

			return (count($this->users) == 1) ? true : false;
		}

		public static function getAll() {
			return json_encode( (new Sql())->select( "SELECT * FROM tb_usuarios" ) );
		}

		// Não recomendado buscar por ID pois é a chave primaria
		// ao invés disso use searchById()
		public static function search( $column, $search ) {
			return json_encode( (new Sql())->select( 
				"SELECT * FROM tb_usuarios WHERE ".$column." LIKE :SEARCH ORDER BY ".$column, 
				array(
					':SEARCH' => "%".$search."%"
				)
			));
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
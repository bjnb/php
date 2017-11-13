<?php 

	interface BD {

		// Métodos abstratos
		public function select( $rowQuery, $params ):array;

	};

	class Sql extends PDO implements BD {
		
		private $conn;
		private $statement;

		// ========================================================
		// 	Funções públicas
		
		public function __construct() {

			$this->conn = new PDO(
				"mysql:dbname=dbphp7;host=localhost",
				"root",
				""
			);

		}

		public function select( $rowQuery, $params = array() ):array {
			$this->setQuery( $rowQuery, $params );

			return $this->statement->fetchAll( PDO::FETCH_ASSOC );
		}

		
		public function insert( $rowQuery, $params = array() ):int {
			$this->setQuery( $rowQuery, $params );

			return ( $this->statement->rowCount() == 1 ) ? 
				$this->conn->lastInsertId() :  -1;
		}

		public function update( $rowQuery, $params = array() ):int {
			$this->setQuery( $rowQuery, $params );

			return $this->statement->rowCount();
		}
		
		public function delete( $rowQuery, $params = array() ):int {
			$this->setQuery( $rowQuery, $params );

			return $this->statement->rowCount();
		}
		

		// ========================================================


		// ========================================================
		//	Funções privadas para funcionamento interno

		private function setQuery( $rowQuery, $params = array() ) {

			$this->setStatment( $rowQuery );

			$this->setParams( $params );

			$this->statement->execute();
		}

		private function setParams( $parameters = array() ) {
			foreach ( $parameters as $key => $value ) {
				$this->setParam( $key, $value );
			}
		}

		private function setParam( $key, $value ) {
			$this->statement->bindParam( $key, $value );
		}

		private function setStatment( $rowQuery ) {
			$this->statement = $this->conn->prepare( $rowQuery );
		}

		// ========================================================

		// ========================================================
		//	Funções mágicas

	}

?>
<?php 

	interface BD {

		// Métodos abstratos
		//private function setParam( $statement, $key, $value );
		//private function setParams( $statement, $parameters );
		public function query( $rowQuery, $params );
		public function select( $rowQuery, $params );	

	};

	class Sql extends PDO implements BD {
		
		private $conn;

		// --------------------------------------------------------
		// 	Funções públicas
		
		public function __construct() {

			$this->conn = new PDO(
				"mysql:dbname=dbphp7;host=localhost",
				"root",
				""
			);

		}

		public function query( $rowQuery, $params = array() ){
			$statement = $this->conn->prepare($rowQuery);

			$this->setParams($statement, $params);

			$statement->execute();

			return $statement;
		}

		public function select( $rowQuery, $params = array() ) {
			$statement = $this->query( $rowQuery, $params );

			return json_encode($statement->fetchAll( PDO::FETCH_ASSOC ));
		}
		// --------------------------------------------------------


		// --------------------------------------------------------
		//	Funções privadas para funcionamento interno

		private function setParam( $statement, $key, $value ) {
			$statement->bindParam($key, $value);
		}

		private function setParams( $statement, $parameters = array() ) {
			foreach ($parameters as $key => $value) {
				$this->setParam($key, $value);
			}
		}
		// --------------------------------------------------------

	}

?>
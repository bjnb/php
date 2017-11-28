<?php 

	function trataNome($nome){
		if(!$nome) {
			throw new Exception("Nenhum nome foi informado.", 1);
			
		}

		echo ucfirst($nome).'<br>';
	}

	try {
		
		trataNome('Joao');
		trataNome('');
		

	} catch (Exception $e) {
		
		echo json_encode(array(
			'message' => $e->getMessage(),
			'line' => $e->getLine(),
			'file' => $e->getFile(),
			'code' => $e->getCode()
		));

	} finally {

		// Pode ser usado pra enviar um email de aviso do problema
		echo "Executou o bloco try";

	}

 ?>
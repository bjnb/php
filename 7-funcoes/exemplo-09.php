<?php 
	//  FUNÇÕES RECURSIVAS

	$hierarquia = array(
		array(

			'nome_cargo' 	=> 'CEO',
			'subordinados'	=> array(

				// Diretor Comercial
				array(
					'nome_cargo' 	=> 'Diretor Comercial',
					'subordinados'	=> array(
						// Gerente de vendas
						array(
							'nome_cargo'	=> 'Gerente de vendas'
						)
					)
				),

				// Diretor financeiro
				array(
					'nome_cargo'	=> 'Diretor financeiro',
					'subordinados'	=> array(
						// Gerente de contas
						array(
							'nome_cargo'	=> 'Gerente de contas',
							'subordinados'	=> array(
								// Supervisor de pagamentos
								array(
									'nome_cargo'	=> 'Supervisor de pagamentos'
								)
							)
						),

						// Gerente de compras
						array(
							'nome_cargo'	=> 'Gerente de compras',
							'subordinados'	=> array(
								// Supervisor de suprimentos
								array(
									'nome_cargo'	=> 'Supervisor de suprimentos'
								)
							)
						)
					)
				)
			)
		)
	);


	function exibe ($cargos) {

		$html = '<ul>';

		foreach ($cargos as $key => $cargo) {
			
			$html .= '<li>';

			$html .= $cargo['nome_cargo'];

			if ( isset( $cargo['subordinados'] ) && count($cargo['subordinados']) > 0 ) {

				$html .= exibe( $cargo['subordinados'] );

			}

			$html .= '</li>';

		}


		$html .= '</ul>';

		return $html;
	}

	echo exibe($hierarquia);

	echo '<br><br>';

	print_r($hierarquia);

 ?>
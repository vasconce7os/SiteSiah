
<?php

//pr($lContatos[0]);

?>

<table class="tGenerica">

<?php 
echo $this-> Html-> tableHeaders(array('Código', 'Assunto', 'Cliente', 'Status', 'Enviado em'));
?>

<?php
foreach ($lContatos as $key => $contato)
{
	$created = DateTime::createFromFormat('Y-m-d H:i:s', $contato['Contato']['created']);
	switch($contato['Contato']['status'])
	{
		case 'a_ler':
			$labelStatus = "A ler";
			break;
		case 'lido';
			$labelStatus = "Lido";
			break;
		case 'respondido';
			$labelStatus = "Respondido";
			break;
		default:
			$labelStatus = $this-> request-> data['Contato']['status'];
	}
	echo $this-> Html-> tableCells(
		array
			(
				$this-> Html-> link(
						$contato['Contato']['id'],
						array('controller'=>  $this-> request-> params['controller'], 'action'=> "ver", $contato['Contato']['id'])			
					),
				$this-> Html-> link(
						$contato['Contato']['assunto'],
						array('controller'=>  $this-> request-> params['controller'], 'action'=> "ver", $contato['Contato']['id'])			
					),
				$this-> Html-> link(
						$contato['Contato']['nome'],
						array('controller'=>  $this-> request-> params['controller'], 'action'=> "ver", $contato['Contato']['id'])			
					),
				$this-> Html-> link(
						$labelStatus,
						array('controller'=>  $this-> request-> params['controller'], 'action'=> "ver", $contato['Contato']['id'])			
					),

				$this-> Html-> link(
						$created->format('Y/m/d'),
						array('controller'=>  $this-> request-> params['controller'], 'action'=> "ver", $contato['Contato']['id'])			
					),
			)
	);
}

?>

</table>

<?php 
echo $this-> Paginator-> numbers(array('modulus'=> 2, 'first' => 'Primeira página ', 'last' => ' Última página ', 'separator'=> ' '));
?>



<h1>
	<?php
	echo($title_for_layout);
	?>
</h1>

<?php

//pr($lChamados[0]);

if($lChamados)
{
?>

	<table class="tGenerica">

	<?php 
	echo $this-> Html-> tableHeaders(array('Código', 'Fantasia', 'CNPJ', 'Email'));
	?>

	<?php
	foreach ($lChamados as $key => $cliente)
	{
		$created = DateTime::createFromFormat('Y-m-d H:i:s', $cliente['Chamado']['created']);
		echo $this-> Html-> tableCells(
			array
				(
					$this-> Html-> link(
							$cliente['Chamado']['id'],
							array('controller'=>  $this-> request-> params['controller'], 'action'=> "ver", $cliente['Chamado']['id'])			
						),
					$this-> Html-> link(
							$cliente['Chamado']['fantasia'],
							array('controller'=>  $this-> request-> params['controller'], 'action'=> "ver", $cliente['Chamado']['id'])			
						),
					$this-> Html-> link(
							$cliente['Chamado']['cnpj'],
							array('controller'=>  $this-> request-> params['controller'], 'action'=> "ver", $cliente['Chamado']['id'])			
						),
					$this-> Html-> link(
							$cliente['Chamado']['email'],
							array('controller'=>  $this-> request-> params['controller'], 'action'=> "ver", $cliente['Chamado']['id'])			
						),
				)
		);
	}

	?>

	</table>

<?php
}
?>

<?php 
echo $this-> Paginator-> numbers(array('modulus'=> 2, 'first' => 'Primeira página ', 'last' => ' Última página ', 'separator'=> ' '));
?>

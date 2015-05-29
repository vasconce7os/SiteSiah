
<h1>
	Clientes
</h1>

<?php

//pr($lClientes[0]);

if($lClientes)
{
?>

	<table class="tGenerica">

	<?php 
	echo $this-> Html-> tableHeaders(array('Código', 'Fantasia', 'CNPJ', 'Email'));
	?>

	<?php
	foreach ($lClientes as $key => $cliente)
	{
		$created = DateTime::createFromFormat('Y-m-d H:i:s', $cliente['Cliente']['created']);
		echo $this-> Html-> tableCells(
			array
				(
					$this-> Html-> link(
							$cliente['Cliente']['id'],
							array('controller'=>  $this-> request-> params['controller'], 'action'=> "ver", $cliente['Cliente']['id'])			
						),
					$this-> Html-> link(
							$cliente['Cliente']['fantasia'],
							array('controller'=>  $this-> request-> params['controller'], 'action'=> "ver", $cliente['Cliente']['id'])			
						),
					$this-> Html-> link(
							$cliente['Cliente']['cnpj'],
							array('controller'=>  $this-> request-> params['controller'], 'action'=> "ver", $cliente['Cliente']['id'])			
						),
					$this-> Html-> link(
							$cliente['Cliente']['email'],
							array('controller'=>  $this-> request-> params['controller'], 'action'=> "ver", $cliente['Cliente']['id'])			
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

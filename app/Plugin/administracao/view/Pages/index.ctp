
<?php 
///pr($lPages);
?>


<table class="tGenerica">

<?php 
echo $this-> Html-> tableHeaders(array('Código', 'Título', 'URi', "Modificado", "Responsável", "Ações"));
?>


<?php 
foreach ($lPages as $key => $page)
{
	$modified = DateTime::createFromFormat('Y-m-d H:i:s', $page['Page']['modified']);
	echo $this-> Html-> tableCells(
		array
			(
				$this-> Html-> link(
						$page['Page']['id'],
						array('controller'=>  $this-> request-> params['controller'], 'action'=> "ver", $page['Page']['id'])			
					),
				$this-> Html-> link(
						$page['Page']['title'],
						array('controller'=>  $this-> request-> params['controller'], 'action'=> "ver", $page['Page']['id'])			
					),
				$this-> Html-> link(
						$page['Page']['url'],
						array('controller'=>  $this-> request-> params['controller'], 'action'=> "ver", $page['Page']['id'])			
					),
				$this-> Html-> link(
						$modified-> format('d/m/y'),
						array('controller'=>  $this-> request-> params['controller'], 'action'=> "ver", $page['Page']['id'])			
					),
				$this-> Html-> link(
						$page['Admin']['login'],
						array('controller'=>  $this-> request-> params['controller'], 'action'=> "ver", $page['Page']['id'])			
					),
				$this->Html->link
				(
						$this->Html->image
						(
								'/administracao/img/icn/editar.svg',
								array("alt" => "Editar")
						) . "Editar",
						array
						(
								'controller'=>  $this-> request-> params['controller'],
								'action'=> "editar",
								$page['Page']['id']
						),
						array
						(
								'escape' => false,
								'class'=> 'botao'
						)
				)
					
			)
	);
}
?>


</table>

<?php 
echo $this-> Paginator-> numbers(array('modulus'=> 2, 'first' => 'Primeira página ', 'last' => ' Última página ', 'separator'=> ' '));
?>


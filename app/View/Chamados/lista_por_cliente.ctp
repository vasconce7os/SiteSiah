
<div class="container">
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

		<table class="tGenerica"  border=1>

		<?php 
		echo $this-> Html-> tableHeaders(array('C�digo', 'Assunto', 'Status', 'Enviado em'));
		?>


			<?php
			foreach ($lChamados as $key => $chamado)
			{
				$created = DateTime::createFromFormat('Y-m-d H:i:s', $chamado['Chamado']['created']);
				echo $this-> Html-> tableCells(
					array
						(
							$this-> Html-> link(
									$chamado['Chamado']['id'],
									array('controller'=>  $this-> request-> params['controller'], 'action'=> "ver", $chamado['Chamado']['id'])			
								),
							$this-> Html-> link(
									$chamado['Chamado']['titulo'],
									array('controller'=>  $this-> request-> params['controller'], 'action'=> "ver", $chamado['Chamado']['id'])			
								),
							$this-> Html-> link(
									$chamado['Chamado']['status'],
									array('controller'=>  $this-> request-> params['controller'], 'action'=> "ver", $chamado['Chamado']['id'])			
								),

							$this-> Html-> link(
									$created-> format('Y/m/d \a\s H:i'),
									array('controller'=>  $this-> request-> params['controller'], 'action'=> "ver", $chamado['Chamado']['id'])			
								),
						)
				);
			}
			?>

		</table>

		<?php
		//var_dump($created);
	} else
	{
		?>

		N�o h� chamados!

		<?php
	}
	?>


	<p>
		deseja 
		<a href="<?php echo($this-> request-> base); ?>/suporte/chamados/criar.html">
			criar novo chamado
		</a>
		?
	</p>

</div>
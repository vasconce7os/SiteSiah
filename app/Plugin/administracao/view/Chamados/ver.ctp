
<div class="">

	<style type="text/css">

	</style>
	<h1>
		<?php
		echo($title_for_layout);
		?>
	</h1>
	<p>
		Status: 
		<?php
		echo(utf8_encode($chamado['Chamado']['status']));
		?>
	</p>
	<?php
	//pr($chamado);
	if(isset($chamado['Chamadomsg']))
	{
		foreach ($chamado['Chamadomsg'] as $key => $chamadomsg)
		{		
			
            if($chamadomsg[0]['tipoUsuario'] != 'Cliente')
            {
            	$classDirecao = "setaDireita";
            } else
            {
            	$classDirecao = "setaEsquerda";
            }
			?>

			<div class="chamadomsg <?php echo($classDirecao); ?>"> <!-- chamadomsg -->
				<div class="talktext">
				<p>
	  				<span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
					<?php
					echo($chamadomsg['Chamadomsg']['msg']);
					?>
				</p>
				<p>
					<time>
					<?php
					$created = DateTime::createFromFormat('Y-m-d H:i:s', $chamadomsg['Chamadomsg']['created']);
					echo($created-> format('Y/m/d \a\s H:i'));
					?>
					</time>
				</p>
			</div>
			</div>

			<?php
		}
	}
	if(utf8_encode($chamado['Chamado']['status']) != "fechado")
	{
		?>

		

		<p id="botaoBostarMsg">
			<a href="<?php echo($this-> request-> base); ?>/administracao/chamados/responder/<?php echo($chamado['Chamado']['id']); ?>.html" class="botao">
				<img src="<?php echo($this-> request-> base); ?>/administracao/img/icn/editar.svg" alt="Editar">
				postar mensagem

			</a>
		</p>

		<?php
	}
	?>
	
</div>


<div class="">
	<h1>
		<?php
		echo($title_for_layout);
		?>

	</h1>
	<div class="text">
		<label>
			Status:
		</label> 
		<span>
			<?php
			echo(utf8_encode($chamado['Chamado']['status']));
			?>

		</span>
	</div>
	<div class="text">
		<label>
			Iniciado em: 
		</label>
		<span>
			<time>
			<?php
			$chamadoCreated = DateTime::createFromFormat('Y-m-d H:i:s', $chamado['Chamado']['created']);
			echo($chamadoCreated-> format('Y/m/d \a\s H:i:s'));
			?>

			</time>
		</span>
	</div>
	<div class="text">
		<label>
			Cliente: 
		</label>
		<span>
			<?php
			echo($chamado['Cliente']['fantasia']);
			?>

		</span>
	</div>
	<div class="text">
		<label>
			Última alteração: 
		</label>
		<span>
			<?php
			$modified = DateTime::createFromFormat('Y-m-d H:i:s', $chamado['Chamado']['modified']);
			echo($modified-> format('Y/m/d \a\s H:i:s'));
			?>

		</span>
	</div>
	<?php
	if($chamado['Chamado']['status'] == 'fechado')
	{
	?>
		<div class="text">
			<label>
				Nota do cliente:
			</label>
			<span>
				<?php
				echo($chamado['Chamado']['nota']);
				?>

			</span>
		</div>
		<div class="text">
			<label>
				Satisfação do cliente:
			</label>
			<span>
				<?php
				echo($chamado['Chamado']['satisfacao']);
				?>

			</span>
		</div>

	<?php
	}
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
						&#8195;
						<span class="detalheBalao">
							<?php
							$admLogged = $this-> Session-> read('Admin');
							if($admLogged[0]['User']['id'] != $chamadomsg['User']['id'])
							{
							?>

								De: 
								<?php

								echo($chamadomsg['User']['username'] . ' (' .$chamadomsg[0]['tipoUsuario'] . ')');
								?>
							<?php
							} else
							{
							?>

							Por Você
							<?php
							}
							?>

						</span>
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

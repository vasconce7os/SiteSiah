
<div class="container">
	<h1>
		<?php
		echo($title_for_layout);
		?>
	</h1>
	<p>
		<?php
		echo($chamado['Chamado']['status']);
		?>
	</p>
	<?php
	//pr($lChamados[0]);
	?>

	<p>
		ver todos os seus  
		<a href="<?php echo($this-> request-> base); ?>/suporte/chamados/lista_por_cliente.html">
			chamados
		</a>
	</p>
</div>

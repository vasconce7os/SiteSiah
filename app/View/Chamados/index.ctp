
<div class="container">
	<h1>
		<?php
		echo($title_for_layout);
		?>
	</h1>

	<?php

	//pr($lChamados[0]);
	?>

	<p>
		Entenda como funciona um 
		<a href="<?php echo($this-> request-> base); ?>/suporte/chamados" class="btn btn-primary">
			chamado
		</a>, se voc~e já sabe então
		<a href="<?php echo($this-> request-> base); ?>/suporte/chamados/criar" class="btn btn-primary">
			Abra um chamado
		</a>
	</p>
</div>

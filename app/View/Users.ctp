
<div class="container">
	<h1>
		<?php
		echo($title_for_layout);
		?>
	</h1>

	<?php

	//pr($lChamados[0]);
	?>

	<form action="<?php echo($this-> request-> base); ?>/chamados/abrir" method="post">
		
        <button type="submit" class="btn btn-primary">
        	Abrir chamado
        </button>
	</form>

</div>

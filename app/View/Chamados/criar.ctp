
<div class="container">
	<h1>
		<?php
		echo($title_for_layout);
		?>
	</h1>

	<?php
	//pr($lChamados[0]);

	echo $this-> Form-> create('Chamado', array());	
	?>

		<?php
		echo $this-> Form-> hidden('id');
		?>

		<?php
		echo $this-> Form-> input('titulo', array('label'=> "Título"));
		?>

		<?php
		//echo $this-> Form-> input('status', array('label'=> "Status"));
		?>

		<?php
		echo $this-> Form-> input('Chamado.0.chamadomsg.msg', array());
		?>

        <button type="submit" class="btn btn-primary">
        	Abrir chamado
        </button>

	<?php

	echo $this->Form->end();
	?>

	<form action="<?php echo($this-> request-> base); ?>/chamados/criar" method="post">
		
	</form>

</div>


<div class="container">
	<script>
	$(document).ready(function(){
	        $("#atendimento").addClass("active");
	});
	</script>
	<h1>
		<?php
		echo($title_for_layout);
		?>
	</h1>

<script type="text/javascript">
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>



	<?php
	echo $this-> Form-> create('Chamado', array());	
	?>

		<?php
		echo $this-> Form-> hidden('id');
		?>

		<?php
		echo $this-> Form-> input('titulo', 
			array
			(
				'label'=> "Título", 
				'class'=> "form-control", 
				'data-toggle'=> "tooltip", 
				'data-placement'=> "bottom", 
				'title'=> "Uma pequena descrição da dificuldade que você está tendo"
			)
		);
		?>

		<?php
		//echo $this-> Form-> input('status', array('label'=> "Status"));
		?>

		<?php
		echo $this-> Form-> input('Chamadomsg.0.msg', 
			array
			(
				'type'=> "password", 
				'class'=> "form-control", 
				'rows'=> "8", 
				'label'=> "Mensagem:" ,
				'data-toggle'=> "tooltip", 
				'data-placement'=> "bottom", 
				'title'=> "Escreva uma mensagem relatando o erro com todos os detalhes que você julga ser relevante para a resolução do mesmo"
			)
		);
		?>
		<hr />
        <button type="submit" class="btn btn-primary">
        	Abrir chamado
        </button>

	<?php

	echo $this->Form->end();
	?>

	<hr />
	<p>
		Saiba mais sobre 
		<a href="<?php echo($this-> request-> base); ?>/suporte/chamados/">
			chamados
		</a>
		ou confira 
		<a href="<?php echo($this-> request-> base); ?>/suporte/chamados/lista_por_cliente.html">
			seus chamados
		</a>
	</p>

</div>

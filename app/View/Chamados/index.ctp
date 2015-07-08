
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

	<?php
	//pr($lChamados[0]);
	if (!$this->Session->check('Auth.User'))
	{
	?>

		<p>
			Um chamamdo é um pedido de ajuda via internet do cliente para a SIAH, 
			para iniciar um chamado à equipe de suporte da SIAH 
			é necesário o cliente efetuar 
			<a href="<?php echo($this-> request-> base); ?>/users/login.html">
				login no sistema 
			</a>
			sistema.
		</p>

	<?php
	} else
	{
	?>

		<p>
			Veja 
			<a href="<?php echo($this-> request-> base); ?>/suporte/chamados/lista_por_cliente.html">
				seus chamados
			</a>
			
		</p>

	<?php
	}
	?>

	<p>
		O procedimento é simples qualquer pessoa com conhecimentos básicos em informática pode iniciar um chamado.
	</p>
	<p class="trocarTexto">
		Colocar imagem do fluxo!
	</p>
	<p>
		Você está com  problemas no A7?
		<a href="<?php echo($this-> request-> base); ?>/suporte/chamados/criar.html" class="btn btn-primary">
			Inicie um chamado agora!
		</a>
	</p>
</div>

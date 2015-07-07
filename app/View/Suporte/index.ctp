
<div class="container">
	<h1>
		<?php
		echo($title_for_layout);
		?>
	</h1>
	<?php
	//pr($);
	?>

	<p>
		O nosso suporte via internet da SIAH está em fase Beta,
		seja bem vindo e fique a vontade para 
		<a href="<?php echo($this-> request-> base); ?>/suporte/chamados/criar">
			criar um chamado
		</a>
		ou acompanhar
		<a href="<?php echo($this-> request-> base); ?>/suporte/chamados/lista_por_cliente">
			seus chamados
		</a>
		caso tenha um problema 
		com um de nossos produtos
	</p>

</div>

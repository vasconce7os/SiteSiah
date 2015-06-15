
<?php
?>


<script>
$(document).ready(function(){
        $("#produtos").addClass("active");
});
</script>

<article class="container">
	<header class="entry-header">
		<h1 class="entry-title">
			Produtos SIAH
		</h1>
	</header>
	<!-- .entry-header -->
	<div class="entry-content">

		<h2 >
			A7 – Sistema de Gestão Empresarial
		</h2>
		<p>
			O <strong><em>A7</em></strong> é um software desenvolvido na
			<a href="http://pt.wikipedia.org/wiki/Embarcadero_Delphi" target="_new">
				plataforma <em>Delphi</em>
			</a>
			, com tecnologia de gerenciamento de dados <em>SQL</em>, destinado a
			suprir todas as necessidades de controle de empresas comerciais. Sua
			simplicidade e facilidade de uso o fazem um poderoso
			sistema de <em>automação comercial</em> direcionado para empresas que necessitem de velocidade e
			precisão para atender as necessidades de seus clientes.
		</p>
		<span id="a7Modulos">
			Módulos
		</span>
		<h3>
			A7 Gestão
		</h3>
		<p class="trocarTexto">
			Descrição do módulo gestão
		</p>
		<h3>
			A7 Fiscal
		</h3>
		<p class="trocarTexto">
			Descrição do módulo fiscal
		</p>

		<h3>
			A7 Mobile
		</h3>
		<p class="trocarTexto">
			Descrição do módulo mobile
		</p>
		<p>
			Confira mais detalhes sobre o 
			<strong>
				<a href="<?php echo($this-> request-> base); ?>/produtos/a7.html" title="A7 automação comercial">
					A7
				</a>
			</strong>
		</p>
	
	</div>
	<!-- .entry-content -->
</article>


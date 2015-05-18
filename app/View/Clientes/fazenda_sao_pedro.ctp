
<?php
?>


<script>
$(document).ready(function(){
        $("#clientes").addClass("active");
});
</script>

<article>
	<header class="entry-header">

		<h1 >
			Ovos São Pedro/Fazenda São Pedro
		</h1>
	</header>
	<div class="entry-content">
		<p>
			A Fazenda São Pedro está localizada na BR-174 e fornece ovos regionais e selecionados, atende pequenos e grandes comerciantes
		</p>
		<p>
			<a href="mailto:fazendasaopedro@argo.com.br">
				fazendasaopedro@argo.com.br
			</a>
		</p>
	</div>
	<div class="entry-footer">
		<p>
			<a href="<?php echo($this-> request-> base); ?>/clientes" title="portfolio SIAH">
				<span class="fa fa-fw fa-arrow-left"></span>
				Veja também outros clientes da SIAH
			</a>
		</p>
	</div>
</article>


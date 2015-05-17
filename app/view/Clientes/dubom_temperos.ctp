
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
			Dubom temperos
		</h1>
	</header>
	<div class="entry-content">
		<p>
			Dubom temperos
		</p>
		<p>
			Visite á página do
			<a href="http://www.dubomtempero.com.br" target="_new">
				Dubom temperos
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


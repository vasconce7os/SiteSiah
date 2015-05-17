
<?php

//pr($lContatos[0]);

?>

<form action="" method="post">
	<div class="input textarea">
		<label for="ContatoResposta">
			Resposta:
		</label>
		<textarea  id="ContatoResposta" name="data[Contato][resposta]"></textarea>
	</div>
	<input type="submit" value="OK"/>
</form>

<script type="text/javascript">
	window.onload = function ()
	{
		CKEDITOR.replace('ContatoResposta');
	}
</script>

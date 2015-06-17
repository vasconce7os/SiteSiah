
<?php
//pr($this-> request['data']);
?>
<h1>
	<?php echo($this-> request['data']['Chamado']['titulo']); ?>
</h1>
<form action="" method="post">
	<div class="input textarea">
		<label for="ChamadoResposta">
			Sua mensagem:
		</label>
		<textarea  id="ChamadoResposta" name="data[Chamadomsg][0][msg]"></textarea>
	</div>
	<input type="submit" value="OK"/>
</form>

<script type="text/javascript">
	window.onload = function ()
	{
		CKEDITOR.replace('ChamadoResposta');
	}
</script>

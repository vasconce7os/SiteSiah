

<style>
/*
classe vem no input quando ele está errado
*/
.form-error
{
	border-style: solid;
	border-width: medium;
	border-color: #FF9C00;
}



/*
classe vem no input quando ele está errado
*/
.error-message 
{
	background-color: #FF9C00;
	color: #D62738;
}
</style>


<?php

echo $this->Form->create('Page');
?>

<?php
echo $this->Form->input('Page.url', array('required'=> false));
?>

<?php
echo $this->Form->input('Page.title', array('label'=> 'title', 'required'=> false));
?>

<?php
echo $this->Form->input('Page.abstract', array('label'=> 'Abstract', 'required'=> false));
?>

<?php
echo $this->Form->input('Page.description', array('label'=> 'Descrição (Description)', 'required'=> false));
?>

<?php
echo $this->Form->input('Page.keywords', array('label'=> 'Palavras chave (Keywords)', 'required'=> false));
?>

<?php
echo $this->Form->input('Page.conteudo', array('label'=> 'Conteúdo', 'required'=> false));
?>

<?php
//echo $this->Form->input('Page.abstract', array('label'=> 'Abstract', 'required'=> false));
?>

<?php
echo $this->Form->submit('Inserir');
?>

<?php 
echo $this->Form->end();



/*
?>

<div class="pages form">
	<form action="<?php echo($this-> request-> base); ?>/administracao/pages/inserir" id="PageAddForm" method="post" >
		<div style="display: none;">
			<input type="hidden" name="_method" value="POST" />
			<!-- 
			<input type="hidden" name="data[Page][id]" id="PageId" />
			-->
		</div>
		<fieldset>
			<legend>Nova Pagina</legend>
			<div class="input text">
				<label for="PageUrl">Url</label>
				<input name="data[Page][url]" value="<?php echo(@$page['Page']['url']); ?>" maxlength="500" type="text" id="PageUrl" />
			</div>
			<div class="input text">
				<label for="PageTitle">
					Título
				</label><input name="data[Page][title]" value="<?php echo(@$page['Page']['title']); ?>"
					maxlength="90" type="text" id="PageTitle" />
			</div>
			<div class="input text">
				<label for="PageAbstract">Abstract</label><input  value="<?php echo(@$page['Page']['']); ?>"
					name="data[Page][abstract]" maxlength="160" type="text"
					id="PageAbstract" />
			</div>
			<div class="input text">
				<label for="PageDescription">Descrição (Description)</label><input
					name="data[Page][description]" maxlength="250" type="text" value="<?php echo(@$page['Page']['description']); ?>"
					id="PageDescription" />
			</div>
			<div class="input text">
				<label for="PageKeywords">Palavras chave (Keywords)</label><input value="<?php echo(@$page['Page']['']); ?>"
					name="data[Page][keywords]" maxlength="200" type="text"
					id="PageKeywords" />
			</div>
			<div class="input text">
				<label for="PageImgsocial">Url da imagem social</label>
				<input name="data[Page][imgsocial]" maxlength="500" type="text" value="<?php echo(@$page['Page']['imgsocial']); ?>"
					id="PageImgsocial" />
			</div>
			<!--
			<div class="input text">
				<label for="PageLayoutdesktop">Layoutdesktop</label><input
					name="data[Page][layoutdesktop]" maxlength="45" type="text"
					id="PageLayoutdesktop" />
			</div>
			-->
			<div class="input textarea">
				<label for="PageConteudo">Conteudo</label>
				<textarea name="data[Page][conteudo]" cols="30" rows="6"
					id="PageConteudo"><?php echo(@$page['Page']['conteudo']); ?></textarea>
			</div>
			<div class="input textarea">
				<label for="PageComentario">Comentário (não será exibido)</label>
				<textarea name="data[Page][comentario]" cols="30" rows="6"
					id="PageComentario"><?php echo(@$page['Page']['comentario']); ?></textarea>
			</div>
			<!--
			<div class="input number">
				<label for="PageStatus">Status</label><input
					name="data[Page][status]" type="number" id="PageStatus" />
			</div>
			
			
			<div class="input text">
				<label for="PagePathconteudo">Pathconteudo</label><input
					name="data[Page][pathconteudo]" maxlength="225" type="text"
					id="PagePathconteudo" />
			</div>
			-->
		</fieldset>
		<div class="submit">
			<input type="submit" value="OK" />
		</div>
	</form>
</div>

<?php 
/* */
?>

<!-- 
<div class="actions">
	<h3>Ações</h3>
	<ul>
		<li><a href="/orcamento/administracao/pages">List Pages</a></li>
	</ul>
</div>
-->


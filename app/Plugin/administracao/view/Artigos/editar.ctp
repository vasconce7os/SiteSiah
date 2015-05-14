
<!-- 
inicio APP/Plugin/Administracao/View/Artigos/editar.ctp
-->
<?php 
//<script src="<?php echo($this-> request-> base); ?.>/administracao/ckeditor/ckeditor.js"></script>
?>


<?php
echo $this-> Html-> tag('h1', $title_for_layout);
?>


<?php
echo $this-> Form->create('Artigo', array('type'=> "file"));
?>

<?php
echo $this-> Form-> input('Artigo.id', array());
?>

<?php
echo $this-> Form-> input('Artigo.titulo', array('label'=> "Título", 'type'=> "text"));
?>

<?php
echo $this-> Form-> input('Artigo.descricao', array('label'=> "Descricao"));
?>
Tamanho da descrição
<span id="caracteres"><?php echo(mb_strlen($this-> data['Artigo']['descricao'], 'utf8')); ?></span>
, caracteres restantes 
<span id="caractersRestantsArtigoDescricao"><?php echo(225 - (mb_strlen($this-> data['Artigo']['descricao'], 'utf8'))); ?></span>
				
<?php
echo $this-> Form-> input('Artigo.abstract', array('label'=> "Abstract (descricao curta)"));
?>
Tamanho da abstract
<span id="quantideCaractersArtigoAbstract">
	<?php echo(mb_strlen(@$this-> data['Artigo']['abstract'], 'utf8')); ?>
</span>
, caracteres restantes
<span id="caractersRestantesArtigoAbstract">
	<?php echo(160 - (mb_strlen(@$this-> data['Artigo']['abstract'], 'utf8'))); ?>
</span>
				
<?php
echo $this-> Form-> input('Artigo.keywords', array('label'=> "Keywords"));
?>
Quantidade de palavras
<span id="keywordsQuantidePalavras">
</span>
quantidade de caracteres
<span id="quantideCaractersArtigoKeywords">
	<?php echo(mb_strlen(@$this-> data['Artigo']['keywords'], 'utf8')); ?>
</span>
, caracteres restantes
<span id="caractersRestantesArtigoKeywords">
	<?php echo(225 - (mb_strlen(@$this-> data['Artigo']['keywords'], 'utf8'))); ?>
</span>


<?php
echo $this-> Form-> input('Artigo.imggrande', array('type' => 'file', 'label'=> "Imagem grande"));
?>

<?php
echo $this-> Form-> input('Artigo.conteudo', array('label'=> "Conteúdo"));
?>

<?php 
echo $this->Form-> submit('OK', array('type' => 'submit', 'class'=> "botao"));
?>

<?php
echo $this-> Form-> end();
?>

	<script>
	window.onload = function ()
	{
		CKEDITOR.replace('ArtigoConteudo');
		countKeywords('<?php echo $this-> data['Artigo']['keywords'] ?>');
	}
	</script>
	
<!-- 
fim APP/Plugin/Administracao/View/Artigos/editar.ctp
-->

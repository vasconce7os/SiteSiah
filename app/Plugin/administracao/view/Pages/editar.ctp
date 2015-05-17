

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
echo $this-> Html-> tag('h1', $title_for_layout);
?>

<?php
echo $this->Form->create('Page');
?>

<?php
echo $this->Form->input('Page.id');
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
echo $this->Form->input('Page.pathconteudo', array('label'=> 'Arquivo .ctp', 'required'=> false));
?>

<?php
echo $this->Form->submit('Editar');
?>

<?php 
echo $this->Form->end();




?>


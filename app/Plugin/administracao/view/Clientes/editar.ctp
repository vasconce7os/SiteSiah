
<!-- 
inicio APP/Plugin/Administracao/View/Clientes/editar.ctp
-->

<?php
echo $this-> Html-> tag('h1', $title_for_layout);
?>



<?php
echo $this-> Form->create('Cliente', array('type'=> "file"));
?>

<?php
echo $this-> Form-> input('Cliente.cnpj', array('label'=> "Título", 'type'=> "text"));
?>

<?php
echo $this-> Form-> input('Cliente.fantasia', array('label'=> "Descricao"));
?>
				
<?php
echo $this-> Form-> input('Cliente.naoativado', array('label'=> "Abstract (descricao curta)"));
?>
				
<?php
echo $this-> Form-> input('Cliente.keywords', array('label'=> "Keywords"));
?>

<?php
echo $this-> Form-> input('Cliente.imggrande', array('type' => 'file', 'label'=> "Imagem grande"));
?>

<?php
echo $this-> Form-> input('Cliente.conteudo', array('label'=> "Conteúdo"));
?>

<?php 
echo $this->Form-> submit('OK', array('type' => 'submit', 'class'=> "botao"));
?>


<!-- 
fim APP/Plugin/Administracao/View/Clientes/editar.ctp
-->

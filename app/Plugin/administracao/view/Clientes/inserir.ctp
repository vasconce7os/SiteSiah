

<!-- 
inicio APP/Plugin/Administracao/View/Clientes/inserir.ctp
-->

<?php
echo $this-> Html-> tag('h1', $title_for_layout);
?>


<?php
echo $this-> Form->create('Cliente', array('type'=> "file"));
?>

<?php
echo $this-> Form-> input('Cliente.cnpj', array('label'=> "CNPJ", 'type'=> "text"));
?>

<?php
echo $this-> Form-> input('Cliente.naoativado', array('label'=> "Código de ativação"));
?>
			
<?php
echo $this-> Form-> input('Cliente.fantasia', array('label'=> "Nome fantasia"));
?>

<?php
echo $this-> Form-> input('Cliente.email', array('label'=> "Email"));
?>
			
<?php
echo $this-> Form-> input('Cliente.link', array('label'=> "Site"));
?>


<?php
echo $this-> Form-> input('Cliente.url_logo', array('type' => 'file', 'label'=> "Logo"));
?>

<?php 
echo $this->Form-> submit('OK', array('type' => 'submit', 'class'=> "botao"));
?>

<?php
echo $this-> Form-> end();
?>	


<!-- 
fim APP/Plugin/Administracao/View/Clientes/inserir.ctp
-->

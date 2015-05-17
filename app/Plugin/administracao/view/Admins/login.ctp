
<h1>
	Login de administrador
</h1>

<?php

echo $this-> Form->create('Admin', array('class'=> ""));
?>

<fieldset>
<legend>
	Login
</legend>


<?php
echo $this-> Form-> input('Admin.login', array('type'=> "text"));
?>


<?php
echo $this-> Form-> input('Admin.password', array('label'=> "Senha"));
?>

<?php 
echo $this->Form-> submit('Login', array('type' => 'submit', 'class'=> "btn btn-primary"));
?>

</fieldset>

<?php
echo $this-> Form-> end();
?>

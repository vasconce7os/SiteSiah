

<div id="panelLogin" class="panel panel-primary container">
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
		//echo $this-> Form-> input('Admin.login', array('type'=> "text"));
	?>
	<?php 
        echo $this->Form->input('Admin.login', array('label'=> "Login", 'class'=> "form-control", 'div'=> "input-group-lg"));
    ?>

	<?php
	//echo $this-> Form-> input('Admin.password', array('label'=> "Senha"));
	?>

	<?php 
        echo $this->Form->input('Admin.password', array('label'=> "Senha", 'class'=> "form-control", 'div'=> "input-group-lg"));
    ?>

	<?php 
	//echo $this->Form-> submit('Login', array('type' => 'submit', 'class'=> "btn btn-primary"));
	?>

	<hr />
	
<?php 
//echo $this->Form->end(__('Login'), array('class'=> "btn btn-primary"));
echo $this-> Form-> button('Login', 
	array
	(
		'class'=> "btn btn-primary btn-lg",
		'type'=> "submit"
	)
);
?>
</fieldset>

<?php
echo $this-> Form-> end();
?>

</div>


<!-- app/View/Users/login.ctp -->

<div id="panelLogin" class="panel panel-primary container">
    
<?php 
//echo $this->Session->flash('auth'); 
?>

<?php echo $this->Form->create('User');?>
    <fieldset>
        <legend><?php echo __('Entre com usuário e senha'); ?></legend>
        <?php 
        echo $this->Form->input('username', array('label'=> "Usuário", 'class'=> "form-control", 'div'=> "input-group-lg"));
        echo $this->Form->input('password', array('label'=> "Senha", 'class'=> "form-control", 'div'=> "input-group-lg"));
        ?>
    </fieldset>

    <?php
    echo $this-> Form-> button('Login', 
    	array
    	(
    		'class'=> "btn btn-primary btn-lg",
    		'type'=> "submit"
    	)
    );
    ?>

</div>

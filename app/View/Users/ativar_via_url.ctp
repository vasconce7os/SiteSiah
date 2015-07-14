
<!-- inicio app/View/Users/ativar_via_url.ctp -->

<div id="panelLogin" class="panel panel-primary container">
    
<?php 
//echo $this->Session->flash('auth'); 
?>

<?php echo $this->Form->create('User');?>
    <div>
        <legend><?php echo __('Entre com senha e confirme a senha'); ?></legend>
        <?php 
        echo $this->Form->input('password', array('label'=> "Senha", 'class'=> "form-control", 'div'=> "input-group-lg"));
        ?>
        <hr />

        <?php
        echo $this->Form->input('password2', array('label'=> "Senha novamente", 'class'=> "form-control", 'div'=> "input-group-lg", 'required'));
        ?>

        <hr />
        <div class="input-group-lg has-warning has-feedback">
            <label for="UserSeuUsername">
                Seu nome de usuário
            </label>
            <div class="input-group  input-group-lg">
                <span class="input-group-addon hidden-phone">
                    Será utizado para fazer login
                </span>
                <span class="form-control" id="UserSeuUsername">
                    <?php
                    echo($user['User']['username']);
                    ?>
                </span>
            </div>
            <span class="glyphicon glyphicon-warning-sign form-control-feedback" aria-hidden="true"></span>
            <span id="inputGroupSuccess1Status" class="sr-only">(warning)</span>
        </div>
        <hr />
        <?php
        echo $this->Form->input('User.username', array('label'=> "Confirme seu nome de usuário", 'class'=> "form-control", 'div'=> "input-group-lg", 'required'));
        ?>

    </div>

    <hr />

    <?php
    echo $this-> Form-> button('Confirmar', 
    	array
    	(
    		'class'=> "btn btn-primary btn-lg",
    		'type'=> "submit"
    	)
    );
    ?>

</div>

<!-- fim app/View/Users/ativar_via_url.ctp 

-->

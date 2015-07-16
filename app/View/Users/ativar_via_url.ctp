
<!-- inicio app/View/Users/ativar_via_url.ctp -->

<div id="panelLogin" class="panel panel-primary container">

<?php echo $this->Form->create('User', array('url'=> array($this-> request-> params['pass'][0])));?>

    <div>
        <legend><?php echo __('Entre com senha e confirme a senha'); ?></legend>
        <?php 
        echo $this->Form->input('password', array('label'=> "Senha", 'class'=> "form-control", 'div'=> "input-group-lg"));
        ?>

        <hr />

        <?php
        echo $this->Form->input('password2', array('label'=> "Senha novamente", 'class'=> "form-control", 'div'=> "input-group-lg", 'required', 'type'=> "password"));
        ?>

        <hr />

        <?php
        echo $this->Form->input('User.username2', array('label'=> "Este é seu nome de usuário", 'class'=> "form-control", 'div'=> "input-group-lg", 'value'=> $user['User']['username'], 'readonly'));
        ?>

        <hr />

        <?php
        echo $this->Form->input('User.username', array('label'=> "Confirme seu nome de usuário", 'class'=> "form-control", 'div'=> "input-group-lg", 'required', 'onpaste'=> " return uponTryPaste()", 'required'));
        ?>

        <script>
        function uponTryPaste() {
            alert('Não tente colar! \nVocê deve preencher este campo apenas digitando os caracteres.');
            return false;
        }
        </script>
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

<!-- fim app/View/Users/ativar_via_url.ctp -->

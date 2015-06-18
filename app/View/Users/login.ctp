
<!-- app/View/Users/login.ctp -->

<div class="users form container">
<?php 
//echo $this->Session->flash('auth'); 
?>

<?php echo $this->Form->create('User');?>
    <fieldset>
        <legend><?php echo __('Entre com usuário e senha'); ?></legend>
        <?php echo $this->Form->input('username');
        echo $this->Form->input('password');
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Login'));?>
</div>

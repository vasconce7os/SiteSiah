
<!-- 
inicio APP/Plugin/Administracao/View/Clientes/editar.ctp
-->

<script>
$(function(){
	$('#editarImagem').click(function(e){
		e.preventDefault();
		$('#showEditar').slideUp();
		$(".bannerUrl").slideDown();
		$('#ClienteAlterarImg').val(1);
	});
	$('#naoEditarImagem').click(function(e){
		e.preventDefault();
		$('#ClienteAlterarImg').val(0);
		$('.bannerUrl').slideUp();
		$('#showEditar').slideDown();
	});
});
</script>

<style>
    .bannerUrl{
        display: none;
    }
</style>

<?php
echo $this-> Html-> tag('h1', $title_for_layout);
?>

<?php
echo $this-> Form->create('Cliente', array('type'=> "file"));
echo $this-> Form-> input('Cliente.id', array('type'=> "hidden"));
echo $this-> Form-> input('Cliente.alterarImg', array('type'=> "hidden", 'value'=> 0));
?>

<?php
echo $this-> Form-> input('Cliente.fantasia', array('label'=> "Fantasia", 'type'=> "text"));
?>

<?php
echo $this-> Form-> input('Cliente.cnpj', array('label'=> "CNPJ", 'type'=> "text"));
?>

<?php
echo $this-> Form-> input('Cliente.email', array('label'=> "Email", 'type'=> "email"));
?>

<div class="input text">
	<label for="ClienteNaoativado">
		Cliente Inativo
	</label>			
	<?php
	echo $this-> Form-> input('Cliente.naoativado', 
		array
		(
			'label'=> false, 
			'title'=> "Define se o cliente pode fazer login",
			'type'=> "checkbox",
			'div'=> false
		)
	);
	?>
</div>

<?php
//echo $this-> Form-> input('Cliente.url_logo', array('type' => 'file', 'label'=> "Imagem logo"));
?>

    <fieldset>
        <legend>
        	Deseja alterar a imagem da logo?
        	<?php 
        	//echo($this-> request-> base['Cliente']['alt'])."\n"; 
        	?>
        </legend>
        <p id="showEditar" class="centrar">
            <a href="#" class="botao" id="editarImagem">
                <img src="<?php echo($this->request->base); ?>/administracao/img/icn/image.svg" alt="imagem"> 
                Sim alterar imagem
            </a>
        </p>
        <p class="bannerUrl">
            <label for="bannerURL">
            	Selecione uma imagem:
            </label>
            <input id="bannerURL" type="file" name="data[Cliente][url_logo]">
        </p>
        <p class="bannerUrl centrar">
            <a href="#" class="botao" id="naoEditarImagem">
                <img src="<?php echo($this->request->base); ?>/administracao/img/icn/close.svg" alt="cancelar"> 
                Cancelar
            </a>
        </p>
    </fieldset>


<?php 
echo $this->Form-> submit('OK', array('type' => 'submit', 'class'=> "botao"));
?>

<!-- 
fim APP/Plugin/Administracao/View/Clientes/editar.ctp
-->

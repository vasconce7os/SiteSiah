
<?php

//pr($contato);

?>

<?php
echo ($this-> Html-> tag('h1', $title_for_layout, array('class'=> "centrar")));
?>

<?php
echo $this-> Form-> input('Contato.assunto', array('label' => 'Assunto', 'disabled'=> 'disabled', 'div' => array('title' => 'Assunto')));
?>

<?php
echo $this-> Form-> input('Contato.nome', array('label' => 'Remetente', 'disabled'=> 'disabled', 'div' => array('title' => 'Cliente que envio a mensagem')));
?>

<?php
echo $this-> Form-> input('Contato.created', array('label' => 'Enviado', 'type'=> "text", 'value'=> $this->Time->format($this-> request-> data['Contato']['created'], '%d/%M/%Y as %H:%M'), 'disabled'=> 'disabled'));
?>

<?php
echo $this-> Form-> input('Contato.telefone', array('label' => 'Telefone','disabled'=> 'disabled'));
?>

<?php
echo $this-> Form-> input('Contato.msg', array('label' => 'Mensagem', 'disabled'=> 'disabled'));
?>

<?php
//pr($this-> request-> data['Contato']['status']);
switch($this-> request-> data['Contato']['status'])
{
	case 'a_ler':
		$labelStatus = "A ler";
		break;
	case 'lido';
		$labelStatus = "Lido";
		break;
	case 'respondido';
		$labelStatus = "Respondido";
		break;
	default:
		$labelStatus = $this-> request-> data['Contato']['status'];
}


?>

	<?php
	if($this-> request-> data['Contato']['status'] == 'lido' || $this-> request-> data['Contato']['status'] == 'a_ler')
	{
		?>

		<div class="text" title="Cliente que envio a mensagem">
			<label for="ContatoStatus">Status:</label>
			<span id="ContatoStatus">
				<?php echo($labelStatus); ?>

			</span>
			<a href="<?php echo($this-> request-> base .'/' . 'administracao/contatos/responder/' . $contato['Contato']['id']); ?>" class="botao">
				<img src="<?php echo($this-> request-> base); ?>/administracao/img/icn/reply_arrow_left.svg" alt="Responder">
				Responder
			</a>
		</div>


		<?php

	} else if($this-> request-> data['Contato']['status'] == 'respondido')
	{
		?>

		<div class="text" title="Cliente que envio a mensagem">
			<label for="ContatoStatus">Status:</label>
			<span id="ContatoStatus">
				<?php echo($labelStatus); ?>
			</span>
		</div>


		<?php

	} else
	{
		?>

		<div class="text">
			<label for="ContatoStatus">Status:</label>
			<span id="ContatoStatus">
				<?php echo($labelStatus); ?>
			</span>
		</div>


		<?php
	}

?>
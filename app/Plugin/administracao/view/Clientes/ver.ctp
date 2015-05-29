
<!-- 
inicio APP/Plugin/Administracao/View/Clientes/ver.ctp
-->

<?php
echo $this-> Html-> tag('h1', $title_for_layout);
?>

<?php
//pr($cliente);
if($cliente)
{
?>

	<img src="<?php echo($this-> request-> base .'/' . $this-> request-> data['Cliente']['url_logo']); ?>" alt="<?php echo($this-> request-> data['Cliente']['fantasia']); ?>" title="<?php echo('Logo: ' . $this-> request-> data['Cliente']['fantasia']); ?>" />
	<div class="text">
		<label>Fantasia:</label>
		<span>
			<?php echo($this-> request-> data['Cliente']['fantasia']); ?>
		</span>
	</div>
	<div class="text">
		<label>CNPJ:</label>
		<span>
			<?php echo($this-> request-> data['Cliente']['cnpj']); ?>
		</span>
	</div>
	<div class="text">
		<label>Email:</label>
		<span>
			<a href="mailto:<?php echo($this-> request-> data['Cliente']['link']); ?>" >
				<?php echo($this-> request-> data['Cliente']['email']); ?>
			</a>
		</span>
	</div>
	<div class="text">
		<label>Cadastrada em:</label>
		<span>
			<?php 
			$created = DateTime::createFromFormat('Y-m-d H:i:s', $cliente['Cliente']['created']);
			echo($created->format('Y/m/d')); 
			?>
		</span>
	</div>

	<?php
	if($this-> request-> data['Cliente']['link']):
	?>

		<div class="text">
			<label>
				Site do cliente
			</label>
			<span>
				<a href="<?php echo($this-> request-> data['Cliente']['link']); ?>" target="_new">
					<?php echo($this-> request-> data['Cliente']['link']); ?>
				</a>
			</span>
		</div>

	<?php
	endif;
	?>

	<div class="text">
		<label>
		</label>
		<a href="<?php echo($this-> request-> base . '/administracao/clientes/editar/' . $this-> request-> data['Cliente']['id']); ?>" class="botao">
			<img src="<?php echo($this-> request-> base); ?>/administracao/img/icn/editar.svg" alt="Editar">
			Editar
		</a>
	</div>
<?php
}
?>


<!-- 
fim APP/Plugin/Administracao/View/Clientes/ver.ctp
-->

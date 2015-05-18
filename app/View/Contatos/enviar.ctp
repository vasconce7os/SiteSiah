
<!-- inicio Contatos/enviar.ctp -->

	<?php
	?>


<h1>
	Novo Cotato
</h1>
<?php 
//pr($contato);
?>
<table BORDER=1>
    <tr>
    	<td align="justify" colspan="2">
    		O formulário de contato do site da SIAH recebeu um contato
    	</td>
	<tr>
		<td>
			Remetente
		</td>
		<td>
			<?php echo($contato['Contato']['nome']) ?>
		</td>
	</tr>
	<tr>
		<td>
			Email
		</td>
		<td>
			<a href="mailto:<?php echo($contato['Contato']['email']) ?>">
				<?php echo($contato['Contato']['email']) ?>
			</a>
			<br />
			Não há nenhuma verificação quanto a autenticidade deste email
		</td>
	</tr>
	<tr>
    	<td>
    		Assunto
    	</td>
    	<td>
    		<?php echo($contato['Contato']['assunto']) ?>
    	</td>
  	</tr>
  	<tr>
    	<td align="center" colspan="2">
    		<hr />
    	</td>
    </tr>
    <tr>
    	<td colspan="2">
    		Mensagem
    	</td>
  	</tr>
    <tr>
    	<td align="justify" colspan="2">
    		<strong>
    			<?php echo($contato['Contato']['msg']. "\n") ?>
    		</strong>
    	</td>
  	</tr>
  	<tr>
    	<td align="center" colspan="2">
    		<hr />
    	</td>
    </tr>
  	<tr>
    	<td align="center" colspan="2">
    		Desenvolvido com tecnologia SIAH
    	</td>
    </tr>
</table>


<!-- fim Contatos/enviar.ctp -->

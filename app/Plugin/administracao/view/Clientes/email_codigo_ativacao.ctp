

<!-- 
inicio APP/Plugin/Administracao/View/Clientes/email_codigo_ativacao.ctp
-->

<?php 
		$pageURL = 'http';
		if (@$_SERVER["HTTPS"] == "on")
		{
			$pageURL .= "s";
		}
		$pageURL .= "://";
		if ($_SERVER["SERVER_PORT"] != "80")
		{
			$pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"];
		} else
		{
			$pageURL .= $_SERVER["SERVER_NAME"];
		}

	
?>

		<table style="background-color:rgb(204, 230, 228); margin: auto;" align="center" cellpadding="0" cellspacing="0" width="600">
			<tbody>
				<tr>
					<td>
						<table border="0" cellpadding="0" cellspacing="0" height="80px" width="220px">
							<tbody>
								<tr>
									<td style="color:rgb(74, 66, 60);font-family:arial, helvetica, sans-serif;font-size:16px;">
										<a target="_blank" href="<?php echo($pageURL  . $this-> request-> base); ?>" title="SIAH">
											<img src="http://www.siahonline.com.br/img/logo_siah_220x80.png" alt="SIAH" style="margin:10px;min-height:auto; !important;max-width:100% !important;">
										</a>
									</td>
								</tr>
							</tbody>
						</table>
						<table style="border-top-color:rgb(199, 199, 199);border-top-style:solid;border-top-width:1px;" border="0" cellpadding="0" cellspacing="0" width="100%">
							<tbody>
								<tr>
									<td style="color:rgb(74, 66, 60);font-family:arial, helvetica, sans-serif;font-size:16px;padding-left:0px;padding-right:0px;">
										<h1 style="text-align:center; color: #2F58A4;">
											Validação de cadastro no site da SIAH para suporte via internet
										</h1>
									</td>
								</tr>
							</tbody>
						</table>
						<table border="0" cellpadding="0" cellspacing="0" width="100%">
							<tbody >
								<tr>
									<td style="padding: 10px;">
										
										<?php
										//echo($contatoInBrowser['Contato']['resposta']);
										?>

										<p>
											Prezados senhores,
										</p>
										<p>
											Estamos implantando uma nova plataforma de suporte técnico aos nossos
											clientes, é via internet e pode ser usado com qualquer dispositivo
											com um browser (navegador web) moderno.
											A empresa
											<?php echo($dadosParaDb['Cliente']['fantasia']); ?> foi uma das 
											selecionadas em nossa lista de clientes para iniciar os atendimentos.

										</p>
										<p>
											Para usurfruir deste recursos um representante da 
											<strong><?php echo($dadosParaDb['Cliente']['fantasia']); ?></strong>
											deve validar o cadastro existente em nosso sistema, 
											para isto basta seguir as instruções:
										</p>
										<ol>
											<li>
												Clicar no link com código de ativação
											</li>
											<li>
												Digitar uma senha, confirmar a senha
											</li>
											<li>
												Anotar o nome de usuário que será informado
											</li>
										</ol>
										<p>
											Feito isto a empresa <?php echo($dadosParaDb['Cliente']['fantasia']); ?>
											já pode solicitar atendimento via internet
										</p>
										<p>
											OBSERVAÇÃO:
											<em>
											É importante saber que a senha criada e o nome de usuário
											correspondentes a <?php echo($dadosParaDb['Cliente']['fantasia']); ?>
											formam a identidade da empresa em nosso sistema, logo, qualquer
											tarefa executada com os poderes dados a esta conta será
											responsabilidade da <?php echo($dadosParaDb['Cliente']['fantasia']); ?>.
											</em>
										</p>

									</td>
								</tr>
							</tbody>
						</table>
						<style type="text/css">
							#imgRight
							{
								  -webkit-filter: grayscale(100%);
											   -moz-filter: grayscale(100%);
											    -ms-filter: grayscale(100%);
											     -o-filter: grayscale(100%);
											filter: grayscale(100%);
							}
							#imgRight:hover
							{
								  -webkit-filter: grayscale(0%);
											   -moz-filter: grayscale(0%);
											    -ms-filter: grayscale(0%);
											     -o-filter: grayscale(0%);
											filter: grayscale(0%);
							}
						</style>
						<table style="border-top-color:rgb(199, 199, 199);border-top-style:solid;border-top-width:1px;" border="0" cellpadding="0" cellspacing="0" width="100%">
							<tbody>
								<tr>
									<td style="padding:20px 25px;color:rgb(74, 66, 60);font-family:arial, helvetica, sans-serif;font-size:16px;" width="80%">
										Copyright 
										<?php
										echo date('Y');
										?>
										<br>
										Todos os direitos reservados.
									</td>
									<td style="padding:20px 25px;color:rgb(74, 66, 60); red; font-family:arial, helvetica, sans-serif;font-size:16px;" align="right" >
										<a target="_blank" href="<?php echo($pageURL  . $this-> request-> base); ?>" title="SIAH">
										<img id="imgRight" src="http://www.siahonline.com.br/img/logo_siah_simples_transp.png" alt="SIAH" 
											style="border:0px none;min-height:auto !important;max-width:100% !important;
											" 
											height="30" width="80"
										/>
									</td>
								</tr>
							</tbody>
						</table>
					</td>
				</tr>
			</tbody>
		</table>

<!-- 
fim APP/Plugin/Administracao/View/Clientes/email_codigo_ativacao.ctp
-->

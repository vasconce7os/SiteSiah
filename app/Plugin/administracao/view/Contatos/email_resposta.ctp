
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
													<?php echo($contatoInDB['Contato']['assunto']); ?>
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
										//pr($contatoInDB);
										echo($contatoInBrowser['Contato']['resposta']);
										?>

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
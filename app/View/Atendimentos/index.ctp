
		<?php
		?>

		<script>
		$(document).ready(function(){
		        $("#atendimento").addClass("active");
		});
		</script>

		<style type="text/css">

		</style>

	<style>
	    .google-maps {
	        position: relative;
	        padding-bottom: 75%; // This is the aspect ratio
	        height: 0;
	        overflow: hidden;
	    }
	    .google-maps iframe {
	        position: absolute;
	        top: 0;
	        left: 0;
	        width: 100% !important;
	        height: 100% !important;
	    }
	</style>

	<div class="container">
		<div class="tabbable"> <!-- Only required for left/right tabs -->
			<ul class="nav nav-tabs">
				<li>
					<a href="#tab1 " data-toggle="tab" class="span3">
						Suporte Técnico
					</a>
				</li>
				<li class="active">
					<a href="#tab2" data-toggle="tab" class="span3">
						Contato
					</a>
				</li>
				<li>
					<a href="#tab3" data-toggle="tab" class="span3">
						2ª via de boleto
					</a>
				</li>
			</ul>
			<div class="tab-content">

				<div class="tab-pane" id="tab1">
					<h3>
						Suporte
					</h3>

					<p>
						Entenda como funciona um 
						<a href="<?php echo($this-> request-> base); ?>/suporte/chamados">
							chamado
						</a>, se você já sabe então
						<a href="<?php echo($this-> request-> base); ?>/suporte/chamados/criar" class="btn btn-primary">
							Abra um chamado
						</a>
					</p>
				</div>
				<div class="tab-pane active" id="tab2">
					<!--
					<h3>
						Localização
					</h3>
					-->







				<div class="col-md-6 active">
					<div class="panel panel-primary">
					    <div class="panel-body text-center">
				            <div class="col-md-12">
				                <h4>Localização</h4>	               
				            </div>
				            <div class="col-md-12">
				                <!-- Embedded Google Map -->
				                <div class="google-maps">
				                	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.9458121282964!2d-59.966658!3d-3.1090390000000014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x926c04cfbf8d79d9%3A0xe53857e78365c63e!2sSiah!5e0!3m2!1spt-BR!2sbr!4v1431005408700" width="400" height="300" frameborder="0" style="border:0"></iframe>
				            	</div>
				            </div>
					    </div>
					</div>
					<div class="panel panel-primary">
					    <div class="panel-body text-center">
				            <div class="col-md-12">
				                <h4>Endereço físico</h4>	               
				            </div>
				            <div class="col-md-12">
				                





	                <p>
	                

						Av. Buriti, S/N, Eliza Miranda Mall, Bloco C, Sala 107, Distrito Industrial I, Manaus – Amazonas
	                </p>
	                <p><i class="fa fa-phone"></i> 
	                    <abbr title="Telefone">T</abbr>: (92) 3345-7707 / 99394-6101 / 98182-6512</p>
	                <p><i class="fa fa-envelope-o"></i> 
	                    <abbr title="Email">E</abbr>: 
	                    <a href="mailto:contato@siahonline.com.br">
	                    	contato@siahonline.com.br
	                    </a>
	                </p>
	                <p>
	                	<i class="fa fa-clock-o"></i> 
	                    <abbr title="Horário">H</abbr>: Segunda - Sexta: 7:30 AM as 17:00 PM
	                </p>






				            </div>
					    </div>
					</div>



					<div class="panel panel-primary">
					    <div class="panel-body text-center">
				            <div class="col-md-12">
				                <h4>Redes sociais</h4>	               
				            </div>
				            <div class="col-md-12">
				           		
	                <ul class="list-unstyled list-inline list-social-icons">
	                    <li>
	                        <a href="https://www.facebook.com/siahonline" title="Página da SIAH no Facebook" target="_new"><i class="fa fa-facebook-square fa-2x"></i></a>
	                    </li>
	                    <li>
	                        <a href="https://www.linkedin.com/company/siah" title="Página da SIAH no LinkedIn+" target="_new"><i class="fa fa-linkedin-square fa-2x"></i></a>
	                    </li>
	                    <li>
	                        <a href="https://www.google.com/+SiahonlineBrManaus" title="Página da SIAH no google+" target="_new"><i class="fa fa-google-plus-square fa-2x"></i></a>
	                    </li>
	                </ul>
				            </div>
					    </div>
					</div>



				</div>
				<div class="col-md-6">
					<div class="panel panel-primary">
						<div class="panel-body text-center">
				    		<div class="col-md-12">
				    			<span>
				    				Envie-nos uma mensagem através do
				    			</span>
				        		<h3>
				        			Formulário de contato SIAH
				        		</h3>
				    		</div>
				    		<div class="col-md-12"> <!-- antes class="col-md-8" -->








					                <form action="<?php echo($this-> request-> base); ?>/contatos/enviar" method="post" name="sentMessage" id="contactForm" novalidate>
					                    <div class="control-group form-group">
					                        <div class="controls">
					                            <label>Nome:</label>
					                            <input name="data[Contato][nome]" placeholder="Digite o seu nome" type="text" class="form-control" id="name" required data-validation-required-message="Digite seu nome por favor.">
					                            <p class="help-block"></p>
					                        </div>
					                    </div>
					                    <div class="control-group form-group">
					                        <div class="controls">
					                            <label for="assunto">
					                            	Assunto:
					                            </label>
					                            <input id="assunto" name="data[Contato][assunto]" placeholder="Digite seu assunto" type="text" class="form-control input-xlarge" required data-validation-required-message="Digite seu o assunto da mensagem por favor.">
					                        </div>
					                    </div>
					                    <div class="control-group form-group">
					                        <div class="controls">
					                            <label for="tipo">
					                            	Está mensagem se trata de:
					                            </label>
					                            <select id="tipo" class="form-control" name="data[Contato][tipo]"  required data-validation-required-message="Escolha uma opção por favor.">
													<option disabled="disabled" selected="selected">
												  		 Selecione
												  	</option>
													<option value="vendas">
												  		 Vendas
												  	</option>
													<option value="critica">
												  		 Crítica
												  	</option>
													<option value="elogio">
												  		 Elogio
												  	</option>
													<option value="sugestao">
												  		 Sugestão
												  	</option>
													<option value="outros">
												  		 Outro
												  	</option>
												</select>
					                        </div>
					                    </div>
					                    <div class="control-group form-group">
					                        <div class="controls">
					                            <label>Telefone:</label>
					                            <input name="data[Contato][telefone]" placeholder="Digite seu número de telefone" type="tel" class="form-control" id="phone" required data-validation-required-message="Digite seu número de telefone por favor.">
					                        </div>
					                    </div>
					                    <div class="control-group form-group">
					                        <div class="controls">
					                            <label>E-mail:</label>
					                            <input name="data[Contato][email]"  placeholder="Digite seu E-mail" type="email" class="form-control" id="email" required data-validation-required-message="Digie seu email por favor.">
					                        </div>
					                    </div>
					                    <div class="control-group form-group">
					                        <div class="controls">
					                            <label>Menssagem:</label>
					                            <textarea name="data[Contato][msg]" rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Digite sua mensagem por favor" placeholder="Digite sua mensagem" maxlength="1999" style="resize:none"></textarea>
					                        </div>
					                    </div>
					                    <div id="success"></div>
					                    <!-- For success/fail messages -->
					                    <button type="submit" class="btn btn-primary">
					                    	Enviar mensagem
					                    </button>
					                </form>








				    		</div>
						</div>
					</div>
				</div>







				</div>
				<div class="tab-pane" id="tab3">
					<h3>
						Gerar 2ª via de boleto
					</h3>
					<p class="trocarTexto">
						O mecanismo de geração de boleto ainda não está disponível!
					</p>
					<p class="trocarTexto">
						Em breve estaremos implementando, faça verificações futuras.
					</p>
				</div>

			</div>
		</div>
		<!--
		<span class="fa fa-fw fa-coffee"></span>
		-->
	</div>






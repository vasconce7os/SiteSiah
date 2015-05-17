
	<?php
	?>

	<script>
	$(document).ready(function(){
	        $("#atendimento").addClass("active");
	});
	</script>
			<div class="col-md-6">
				<div class="panel panel-primary">
					<div class="panel-body text-center">
			    		<div class="col-md-8">
			    			<span>
			    				Envie-nos uma mensagem através do 
			    			</span>
			        		<h3>
			        			Formulário de contato SIAH
			        		</h3>
			    		</div>
			    		<div class="col-md-8">








				                <form action="<?php echo($this-> request-> base); ?>/contatos/enviar" method="post" name="sentMessage" id="contactForm" novalidate>
				                    <div class="control-group form-group">
				                        <div class="controls">
				                            <label>Nome:</label>
				                            <input name="data[Contato][nome]" placeholder="Digite o nome" type="text" class="form-control" id="name" required data-validation-required-message="Digite seu nome por favor.">
				                            <p class="help-block"></p>
				                        </div>
				                    </div>
				                    <div class="control-group form-group">
				                        <div class="controls">
				                            <label for="assunto">
				                            	Assunto:
				                            </label>
				                            <input id="assunto" name="data[Contato][assunto]" placeholder="Digite seu assunto" type="text" class="form-control" required data-validation-required-message="Digite seu o assunto da mensagem por favor.">
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
				                            <label>Email:</label>
				                            <input name="data[Contato][email]"  placeholder="Digite seu E-mail" type="email" class="form-control" id="email" required data-validation-required-message="Digie seu email por favor.">
				                        </div>
				                    </div>
				                    <div class="control-group form-group">
				                        <div class="controls">
				                            <label>Menssagem:</label>
				                            <textarea name="data[Contato][msg]" rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Digite sua mensagem por favor" placeholder="Digite seu Mensagem" maxlength="999" style="resize:none"></textarea>
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

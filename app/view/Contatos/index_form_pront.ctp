
<?php
?>

<script>
$(document).ready(function(){
        $("#contato").addClass("active");
});
</script>


                <h2 class="page-header">
                	onde estamos
                </h2>
	            <div class="col-md-6">
	                <div class="panel panel-primary">
	                    <div class="panel-body text-center">
	                        <h3 class="panel-title">
	                        	<span class="price">
	                        	Mapa
	                        	</span>
	                        </h3>













            <div class="col-md-8">
                <h3>Encontre-nos</h3>
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
                <ul class="list-unstyled list-inline list-social-icons">
                    <li>
                        <a href="https://pt-br.facebook.com/"><i class="fa fa-facebook-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/company/"><i class="fa fa-linkedin-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="https://plus.google.com/"><i class="fa fa-google-plus-square fa-2x"></i></a>
                    </li>
                </ul>
            </div>





            <div class="col-md-8">
                <!-- Embedded Google Map -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3258.4208126399208!2d-59.96674151542608!3d-3.109223195776773!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0xe53857e78365c63e!2sSiah!5e1!3m2!1spt-BR!2sbr!4v1430222079743" width="400" height="300" frameborder="0" style="border:0"></iframe>
            </div>















	                    </div>
	                    

	                </div>
	            </div>
	            <div class="col-md-6">
	                <div class="panel panel-primary">
	                    <div class="panel-body text-center">
	                        <h3 class="panel-title">
	                        	<span class="price">
	                        	Form de contato
	                        	</span>
	                        </h3>













				            <div class="col-md-8">
				                <h3>Envie-nos uma mensagem</h3>
				                <form action="/svinstitucional/contatos/enviar" method="post" name="sentMessage" id="contactForm" novalidate>
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
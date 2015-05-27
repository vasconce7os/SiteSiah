
<?php
?>

<script>
$(document).ready(function(){
        $("#home").addClass("active");
        $('a').tooltip();
});
</script>
<div class="">
	<div class="clearfix"></div>
	<div id="owlBanner" class="owl-carousel owl-theme">

		<div class="item">
			<img src="<?php echo($this-> request-> base); ?>/img/banners/banner_siah_1.jpg" alt="Banner SIAH 1">
		</div>
		<div class="item">
			<img src="<?php echo($this-> request-> base); ?>/img/banners/banner_siah_2.jpg" alt="Banner SIAH 2">
		</div>
	</div>
	<script type="text/javascript">

		$(document).ready(function() {

		$("#owlBanner").owlCarousel({
		pagination: false,
		navigation : true, // Show next and prev buttons
		slideSpeed : 300,
	    autoPlay: 4500,
		paginationSpeed : 400,
		singleItem:true,
		navigationText: [
		" ",
		" "
      ],//["Anterior","Próximo"],

		// "singleItem:true" is a shortcut for:
		// items : 1, 
		// itemsDesktop : false,
		// itemsDesktopSmall : false,
		// itemsTablet: false,
		// itemsMobile : false
		//transitionStyle: 'fade',
		});

		});
	</script>
	<style type="text/css">
		#owlBanner .item img 
		{
			display: block;
			width: 100%;
			height: auto;
		}
		.labelCliente
		{
			color: #289DCC;
		}
	</style>
	<div id="primary" class="container">
		<div id="content" role="main" class="home">
			<div class="span4 caixa1Terco">
				<div class="destaque-servicos">
					<img src="<?php echo($this-> request-> base); ?>/img/ico_tecnologia.png" class="iconOfLine" alt="tecnologia SIAH" />
					<h3>Tecnologia</h3>
				</div>
				<div class="texto-servicos">
					A SIAH Soluções inteligentes é uma
					empresa especializada em criar e desenvolver soluções que
					encaminhem a sua empresa as melhores posições do mercado...
				</div>
			</div>
			<div class="span4 caixa1Terco">
				<div class="destaque-servicos">
					<img src="<?php echo($this-> request-> base); ?>/img/ico_produtos.png" class="iconOfLine" alt="produtos SIAH" />
					<h3>Produtos</h3>
				</div>
				<div class="texto-servicos">O A7 é um software desenvolvido na
					plataforma Delphi, com tecnologia SQL, destinado a suprir todas as
					necessidades de controle de empresas comerciais...
				</div>
			</div>
			<div class="span4 caixa1Terco">
				<div class="destaque-servicos">
					<img src="<?php echo($this-> request-> base); ?>/img/ico_suporte.png" class="iconOfLine" alt="suporte SIAH" />
					<h3>Suporte</h3>
				</div>
				<div class="texto-servicos">Queremos ajudá-lo da melhor forma
					possível, tirando dúvidas e fornecendo informações necessárias para
					o melhor funcionamento de nossos produtos...
				</div>
			</div>
			<div class="clearfix margin-25"></div>
			<h3 id="nossosClientes">
				<a href="<?php echo($this-> request-> base); ?>/clientes">
					Nossos clientes
				</a>
			</h3>
	    	<div id="demo" class="container">
		        <div id="owl-demo" class="owl-carousel">
			        <div class="item">
			        	<a href="<?php echo($this-> request-> base); ?>/clientes/amazonas_eletro.html" title="Amazonas Eletromecânica" data-toggle="tooltip">
		         			<img src="<?php echo($this-> request-> base); ?>/img/clientes/amazonas_eletro.jpg" alt="Amazonas Eletromecânica" />
							<label class="labelCliente hidden-desktop">
			         			Amazonas Eletromecânica
			         		</label>
			         	</a>
		         	</div>
			        <div class="item">
			        	<a href="<?php echo($this-> request-> base); ?>/clientes/lojas_baiano.html" title="Lojas Baiano" data-toggle="tooltip">
		         			<img src="<?php echo($this-> request-> base); ?>/img/clientes/baiano.jpg" alt="Lojas Baiano" />
							<label class="labelCliente hidden-desktop">
			         			Lojas Baiano
			         		</label>
		         		</a>
			        </div>
			        <div class="item">
			        	<a href="<?php echo($this-> request-> base); ?>/clientes/importadora_luanjo.html" title="Importadora Luanjo" data-toggle="tooltip">
		         			<img src="<?php echo($this-> request-> base); ?>/img/clientes/luanjo.jpg" alt="Luanjo Manaus" />
							<label class="labelCliente hidden-desktop">
			         			Luanjo
			         		</label>
			         	</a>
			        </div>
			        <div class="item">
			        	<a href="<?php echo($this-> request-> base); ?>/clientes/nitron_gases.html" title="Nitron Gases" data-toggle="tooltip">
		         			<img src="<?php echo($this-> request-> base); ?>/img/clientes/nitron_gases.jpg" alt="Nitron Gases" />
							<label class="labelCliente hidden-desktop">
			         			Nitron Gases
			         		</label>
			         	</a>
			        </div>
			        <div class="item">
		         		<a href="<?php echo($this-> request-> base); ?>/clientes/fazenda_sao_pedro.html" title="Ovos São Pedro" data-toggle="tooltip">
		         			<img src="<?php echo($this-> request-> base); ?>/img/clientes/ovos_sao_pedro.jpg" alt="Ovos São Pedro" />
							<label class="labelCliente hidden-desktop">
			         			Ovos São Pedro
			         		</label>
			         	</a>
			        </div>
			        <div class="item">
		         		<a href="<?php echo($this-> request-> base); ?>/clientes/pool_manaus.html" title="Pool Elétrica Manaus" data-toggle="tooltip">
		         			<img src="<?php echo($this-> request-> base); ?>/img/clientes/pool.jpg" alt="Pool Elétrica Manaus" />
							<label class="labelCliente hidden-desktop">
			         			Pool Elétrica Manaus
			         		</label>
			         	</a>
			        </div>
			        <div class="item">
		         		<a href="<?php echo($this-> request-> base); ?>/clientes/queiroz_descartaveis.html" title="Queiroz Descartáveis" data-toggle="tooltip">
		         			<img src="<?php echo($this-> request-> base); ?>/img/clientes/queiroz.jpg" alt="Queiroz Descartáveis" />
							<label class="labelCliente hidden-desktop">
			         			Queiroz Descartáveis
			         		</label>
			         	</a>
			        </div>
			        <div class="item">
		         		<a href="<?php echo($this-> request-> base); ?>/clientes/rei_das_mangueiras.html" title="Rei das Mangueiras" data-toggle="tooltip">
		         			<img src="<?php echo($this-> request-> base); ?>/img/clientes/rei_das_mangueiras.jpg" alt="Rei das Mangueiras" />
							<label class="labelCliente hidden-desktop">
			         			Rei das Mangueiras
			         		</label>
			         	</a>
			        </div>
			        <div class="item">
		         		<a href="<?php echo($this-> request-> base); ?>/clientes/svi_instalacoes.html" title="SV Instalações" data-toggle="tooltip">
		         			<img src="<?php echo($this-> request-> base); ?>/img/clientes/sv.jpg" alt="SV Instalações" />
							<label class="labelCliente hidden-desktop">
			         			SV Instalações
			         		</label>
			         	</a>
			        </div>
			        <div class="item">
		         		<a href="<?php echo($this-> request-> base); ?>/clientes/lojas_cla.html" title="Lojas CLA" data-toggle="tooltip">
		         			<img src="<?php echo($this-> request-> base); ?>/img/clientes/cla.jpg" alt="Lojas CLA" />
							<label class="labelCliente hidden-desktop">
			         			Lojas CLA
			         		</label>
			         	</a>
			        </div>
			        <div class="item">
		         		<a href="<?php echo($this-> request-> base); ?>/clientes/casa_da_borracha.html" title="Casa da Borracha" data-toggle="tooltip">
		         			<img src="<?php echo($this-> request-> base); ?>/img/clientes/casa_da_borracha.jpg" alt="Casa da Borracha" />
							<label class="labelCliente hidden-desktop">
			         			Casa da Borracha
			         		</label>
			         	</a>
			        </div>
			        <div class="item">
		         		<a href="<?php echo($this-> request-> base); ?>/clientes/dubom_temperos.html" title="Dubom Temperos" data-toggle="tooltip">
		         			<img src="<?php echo($this-> request-> base); ?>/img/clientes/dubom_temperos.jpg" alt="Dubom Temperos" />
							<label class="labelCliente hidden-desktop">
			         			Dubom Temperos
			         		</label>
			         	</a>
			        </div>
			        <div class="item">
		         		<a href="<?php echo($this-> request-> base); ?>/clientes/o_seu_estoque.html" title="O Seu Estoque" data-toggle="tooltip">
		         			<img src="<?php echo($this-> request-> base); ?>/img/clientes/o_seu_estoque.jpg" alt="O Seu Estoque" />
							<label class="labelCliente hidden-desktop">
			         			O Seu Estoque
			         		</label>
			         	</a>
			        </div>
			        <div class="item">
		         		<a href="<?php echo($this-> request-> base); ?>/clientes/forca_construtiva.html" title="Força Construtiva" data-toggle="tooltip">
		         			<img src="<?php echo($this-> request-> base); ?>/img/clientes/forca_construtiva.jpg" alt="Força Construtiva" />
							<label class="labelCliente hidden-desktop">
			         			Força Construtiva
			         		</label>
			         	</a>
			        </div>
			        <div class="item">
		         		<a href="<?php echo($this-> request-> base); ?>/clientes/inox_pro.html" title="Inox Pró" data-toggle="tooltip">
		         			<img src="<?php echo($this-> request-> base); ?>/img/clientes/inox_pro.jpg" alt="Inox Pró" />
							<label class="labelCliente hidden-desktop">
			         			Inox Pró
			         		</label>
			         	</a>
			        </div>
			        <div class="item">
		         		<a href="<?php echo($this-> request-> base); ?>/clientes/jcl_moveis.html" title="JCL Móveis" data-toggle="tooltip">
		         			<img src="<?php echo($this-> request-> base); ?>/img/clientes/jcl_moveis.jpg" alt="JCL Móveis" />
							<label class="labelCliente hidden-desktop">
			         			JCL Móveis
			         		</label>
			         	</a>
			        </div>
			        <div class="item">
		         		<a href="<?php echo($this-> request-> base); ?>/clientes/marina_taua.html" title="Marina Tauá" data-toggle="tooltip">
		         			<img src="<?php echo($this-> request-> base); ?>/img/clientes/marina_taua.jpg" alt="Marina Tauá" />
							<label class="labelCliente hidden-desktop">
			         			Marina Tauá
			         		</label>
			         	</a>
			        </div>
		        </div>
		    </div>


			<!-- Demo clientes -->
			<script>
			$(document).ready(function() {

			var owl = $("#owl-demo");

				/*
				owl.owlCarousel({

				// Define custom and unlimited items depending from the width
				// If this option is set, itemsDeskop, itemsDesktopSmall, itemsTablet, itemsMobile etc. are disabled
				// For better preview, order the arrays by screen size, but it's not mandatory
				// Don't forget to include the lowest available screen size, otherwise it will take the default one for screens lower than lowest available.
				// In the example there is dimension with 0 with which cover screens between 0 and 450px

				itemsCustom : [
				[0, 2],
				[450, 4],
				[600, 7],
				[700, 9],
				[1000, 10],
				[1200, 12],
				[1400, 13],
				[1600, 15]
				],
				navigation : true

				});
				*/

				 $("#owl-demo").owlCarousel({
	 
			      autoPlay: 6000,
			 
			      items : 4,
			      itemsDesktop : [1199,3],
			      itemsDesktopSmall : [979,3],

			      //Vasconcelos
			      pagination: false
			 
			  });


			});
			</script>
		</div>
		<!-- #content -->
	</div>
	<!-- #primary -->
</div>
<!-- #container -->


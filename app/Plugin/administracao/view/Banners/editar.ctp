			<script>
            $(function(){
				$('#editarImagem').click(function(e){
					e.preventDefault();
					$('#showEditar').slideUp();
					$(".bannerUrl").slideDown();
					$('#alterarImg').val(1);
				});
				$('#naoEditarImagem').click(function(e){
					e.preventDefault();
					$('#alterarImg').val(0);
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
            //pr($Banner);
            //pr(count($lBanners));
            if(isset($Banner['Banner'])):
            ?>
            <h1>Banners</h1>
            <form action="<?php echo $this-> request-> base;?>/administracao/banners/editar/<?php echo($Banner['Banner']['id']); ?>" method="post" enctype="multipart/form-data" id="editarBanner">
                <input type="hidden" name="_method" value="POST" />
                <input type="hidden" name="data[Banner][id]" value="<?php echo($Banner['Banner']['id']); ?>" />
                <input type="hidden" id="alterarImg" name="data[Banner][alterarImg]" value="0" />
                <fieldset>
                    <legend>
                    	Editar <?php echo($Banner['Banner']['alt'])."\n"; ?>
                    </legend>
                    <p id="showEditar" class="centrar">
                        <a href="#" class="botao" id="editarImagem">
                            <img src="<?php echo($this->request->base); ?>/administracao/img/icn/image.svg" alt="imagem"> alterar imagem
                        </a>
                    </p>
                    <p class="bannerUrl">
                        <label for="bannerURL">Substituir por:</label>
                        <input id="bannerURL" type="file" name="data[Banner][url]">
                    </p>
                    <p class="bannerUrl centrar">
                        <a href="#" class="botao" id="naoEditarImagem">
                            <img src="<?php echo($this->request->base); ?>/administracao/img/icn/close.svg" alt="cancelar"> cancelar
                        </a>
                    </p>
                    <p>
                        <label for="bannerAlt">Legenda:</label>
                        <input type="text" id="bannerAlt" value="<?php echo($Banner['Banner']['alt']); ?>" name="data[Banner][alt]">
                    </p>
                    <p>
                        <label for="bannerLink">Link:</label>
                        <input type="text" id="bannerLink" value="<?php echo($Banner['Banner']['link']); ?>" name="data[Banner][link]">
                    </p>
                </fieldset>
                <p class="centrar">
                    <a href="<?php echo($this-> request-> base); ?>/administracao/banners" class="botao">
                        <img src="<?php echo($this->request->base); ?>/administracao/img/icn/cancelar.svg" alt="cancelar"> cancelar
                    </a>&nbsp;&nbsp;
                    <input type="submit" value="Alterar">
                </p>
            </form>
			<?php 
            else:
            ?>
            <div class="msgErro">
                Banner não encontrado!
            </div>
			<?php 
            endif;
            ?>
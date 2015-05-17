			<?php
			//pr($Banner);
			//pr(count($lBanners));
			if(isset($Banner['Banner'])):
			?>
            <h1 class="centrar">
                Apagar banner
            </h1>
            <form action="<?php echo "$pathUrlWebroot";?>/administracao/banners/apagar/<?php echo($Banner['Banner']['id']); ?>" method="post" accept-charset="iso-8859-1" enctype="multipart/form-data">
                <input type="hidden" name="_method" value="POST" />
                <input type="hidden" name="data[Banner][id]" value="<?php echo($Banner['Banner']['id']); ?>" />
                <p class="centrar">
                    <strong>Tem certeza que deseja apagar este banner?</strong>
                </p>
                <h2 class="centrar">
                    <?php echo($Banner['Banner']['alt']); ?>
                </h2>
                <p class="centrar">
                	<a href="<?php echo($this-> request-> base); ?>/administracao/banners" class="botao">
                        <img src="<?php echo($this->request->base); ?>/administracao/img/icn/cancelar.svg" alt="cancelar"> cancelar
                    </a>&nbsp;&nbsp;
                    <input type="submit" value="Sim">
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
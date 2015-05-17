			<h1>Banners</h1>
            <a href="<?php echo($this-> request-> base); ?>/administracao/banners/inserir" class="bigBotao" data-title="novo banner">
                <img src="<?php echo($this-> request-> base); ?>/administracao/img/icn/add.svg" alt="adicionar">
            </a>
            <?php
            //pr($lBanners);
            //pr(count($lBanners));
            if(count($lBanners) > 0):
			echo"\n";
            ?>
            <ul class="listarBanner"> <!-- class="antLoop" e apenas sugestiva -->
                <?php 
                foreach ($lBanners as $key => $banner):
                //echo ($key > 0) ? "/n": "22";
                echo"\n";
                ?>
                <li>
                    <figure>
                        <img src="<?php echo($this-> request-> base.'/'.$banner['Banner']['url']); ?>" alt="<?php echo($banner['Banner']['alt']); ?>">
                        <figcaption>
                            <?php //echo($banner['Banner']['url']."\n"); 
                            ?>
                            <h2 class="centrar"><?php echo($banner['Banner']['alt']."\n"); ?></h2>
                            <?php 
                            if($banner['Banner']['link'] != null && $banner['Banner']['link'] != ''):
                            ?>
                            <p class="centrar">
                                <a href="<?php echo($banner['Banner']['link']); ?>" target="_blank">
                                    <?php 
                                    echo($banner['Banner']['link']);
                                    ?>
                                </a>
                            </p>
                            <?php 
                            else:
                            ?>
                            <p class="centrar">
                                Não tem link
                            </p>
                            <?php 
                            endif;
                            ?>
                            <p class="centrar">
                                <a href="<?php echo($this-> request-> base); ?>/administracao/banners/editar/<?php echo($banner['Banner']['id']); ?>" class="botao">
                                    <img src="<?php echo($this-> request-> base); ?>/administracao/img/icn/editar.svg" alt="Editar"> editar
                                </a>&nbsp;&nbsp;
                                <a href="<?php echo($this-> request-> base); ?>/administracao/banners/apagar/<?php echo($banner['Banner']['id']); ?>" class="botao">
                                    <img src="<?php echo($this-> request-> base); ?>/administracao/img/icn/desativar.svg" alt="Desativar"> remover
                                </a>
                            </p>
                        </figcaption>
                    </figure>
                </li>
                <?php 
                endforeach;
				echo"\n";
                ?>
            </ul>
            <?php 
            else:
            ?>
            <h2 class="centrar">
                Não há banners cadastrados no banco de dados!
            </h2>
            <?php 
            endif;
            ?>
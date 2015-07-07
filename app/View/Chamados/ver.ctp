
<div class="container">
	<h1>
		<?php
		echo($title_for_layout);
		?>
	</h1>
	<p>
		Status: 
		<?php
		echo(utf8_encode($chamado['Chamado']['status']));
		?>
	</p>
	<?php
	//pr($chamado);
	?>

    <div class="timeline animated">

        <?php
        //pr($chamado['Chamadomsg'][0]);
        foreach ($chamado['Chamadomsg'] as $key => $chamadomsg)
        {
            $created = DateTime::createFromFormat('Y-m-d H:i:s', $chamadomsg['Chamadomsg']['created']);
            ?>
            <div class="timeline-row">
                <div class="timeline-time">
                    <small>
                        <?php
                        echo($created-> format('M d'));
                        ?>
                    </small>
                    <?php
                    echo($created-> format('H:i'));
                    ?>
                    <span>
                        <?php
                        echo($chamadomsg['User']['username']);
                        ?>

                    </span>
                </div>
                <div class="timeline-icon">
                    <div class="bg-info">
                        <?php
                        if($chamadomsg[0]['tipoUsuario'] != 'Cliente')
                        {
                        ?>

                        <img src="<?php echo($this-> request-> base . "/img/generics_icons/support_service4.svg"); ?>" title="<?php echo($chamadomsg['User']['username']); ?>" />
                        
                        <?php
                        } else
                        {
                        ?>

                        <img src="<?php echo($this-> request-> base . "/img/generics_icons/user.svg"); ?>" title="<?php echo($chamadomsg['User']['username']); ?>" />
                        
                        <?php
                        }
                        ?>
                    </div>
                </div>
                <div class="panel timeline-content">
                    <div class="panel-body">
                        <p>
                            <!--
                            <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
                            -->
                            <?php
                            echo($chamadomsg['Chamadomsg']['msg']);
                            ?>
                        </p>
                        <?php
                        /*
                        <p>
                            <time>
                                <?php
                                echo($created-> format('Y/m/d \a\s H:i'));
                                ?>
                            </time>
                        </p>
                        */
                        ?>
                    </div>
                </div>
            </div>

            <?php
        }
    ?>
    </div>
    <?php
    if(utf8_encode($chamado['Chamado']['status']) != 'fechado')
    {
    ?>

    <div>
        <form action="<?php echo($this-> request-> base . "/suporte/chamados/responderCliente/" . $chamado['Chamado']['id'])?>" method="post">
            <div class="input textarea">
                <label for="ChamadoResposta">
                    Sua mensagem:
                </label>
                <textarea  id="ChamadoResposta" name="data[Chamadomsg][0][msg]"></textarea>
            </div>
            <button type="submit" value="OK" class="btn btn-primary">OK</button>
        </form>
    </div>

    <?php
    }
    ?>
    <footer>
        <p>
            ver todos os 
            <a href="<?php echo($this-> request-> base); ?>/suporte/chamados/lista_por_cliente.html">
                seus chamados
            </a>
        </p>
        <?php
        if(utf8_encode($chamado['Chamado']['status']) != 'fechado')
        {
        ?>
        <p>
            O problema foi resolvido? 
            <a href="<?php echo($this-> request-> base); ?>/suporte/chamados/finalizarPorCliente/<?php echo($chamado['Chamado']['id']); ?>.html" class="btn btn-primary">
                Finalize
            </a>
            o chamado.
        </p>
        <?php
        }
        ?>
    </footer>
</div>

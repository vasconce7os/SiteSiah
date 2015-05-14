
<?php
echo $this-> Html-> tag('h1', $title_for_layout);
?>

<a href="<?php echo($this-> request-> base); ?>/administracao/artigos/inserir" class="bigBotao" data-title="novo">
	<img src="<?php echo($this-> request-> base); ?>/administracao/img/icn/add.svg" alt="adicionar">
</a>


<?php 
if(count($lArtigos) > 0):
echo"\n";
?>
<ul class=""> <!-- class="antLoop" e apenas sugestiva -->
	<?php 
	foreach ($lArtigos as $key => $artigo):
	echo"\n";
	?>
	
	<li>
	    <div>
	        <div>
	            <h2 class="">
	            	<a href="<?php echo($this-> request-> base); ?>/administracao/artigos/ver/<?php echo($artigo['Artigo']['id']); ?>" class="">
	            		<?php echo($artigo['Artigo']['titulo']."\n"); ?>
	            	</a>
	            </h2>
	            <p>
	            	<?php echo($artigo['Artigo']['titulo']. "\n"); ?>
	            </p>
	            <p class="">
	                <a href="<?php echo($this-> request-> base); ?>/administracao/artigos/editar/<?php echo($artigo['Artigo']['id']); ?>" class="botao">
	                    <img src="<?php echo($this-> request-> base); ?>/administracao/img/icn/editar.svg" alt="Editar"> editar
	                </a>&nbsp;&nbsp;
	                <a href="<?php echo($this-> request-> base); ?>/administracao/artigos/apagar/<?php echo($artigo['Artigo']['id']); ?>" class="botao">
	                    <img src="<?php echo($this-> request-> base); ?>/administracao/img/icn/desativar.svg" alt="Desativar"> remover
	                </a>
	            </p>
	        </div>
	    </div>
	</li>
	<?php 
	endforeach;
	echo"\n";
	?>
</ul>

<?php 
echo $this-> Paginator-> numbers(array('modulus'=> 2, 'first' => 'Primeira página ', 'last' => ' Última página ', 'separator'=> ' '));
?>

<?php 
else:
?>
	
	<h2 class="centrar">
		Não há artigos/notícias cadastrados no banco de dados!
	</h2>

<?php 
endif;
?>
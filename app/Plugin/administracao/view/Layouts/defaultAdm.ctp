<!DOCTYPE html>
<html>
    <head>
        <?php echo $this->Html->charset()."\n"; ?>
        <title>
            <?php echo $title_for_layout."\n"; ?>
        </title>
        <?php
            //echo $this->Html->meta('icon');
            /*echo $this->Html->css('cake.generic');*/
            echo $this->fetch('meta');
            echo $this->fetch('css');
            echo $this->fetch('script');            
            
            function getFormatacaoEspecifica($controller = null, $controllerParams = 'lol_kjdsfijsdinfn12128u8d832675221')
            {
                if($controllerParams == $controller)
                {
                    echo("controllerAtivo");
                } //else echo"diferente";
            }
        echo "\n";
		?>
        <!-- Fav Icons -->
        <link href="<?php echo $this-> request-> base; ?>/img/favicon-16.png" rel="icon" sizes="16x16">
        <link href="<?php echo $this-> request-> base; ?>/img/favicon-32.png" rel="icon" sizes="32x32">
        <link href="<?php echo $this-> request-> base; ?>/img/favicon-48.png" rel="icon" sizes="48x48">
        <link href="<?php echo $this-> request-> base; ?>/img/favicon-64.png" rel="icon" sizes="64x64">
        <link href="<?php echo $this-> request-> base; ?>/img/favicon-128.png" rel="icon" sizes="128x128">
        
        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="<?php echo($this-> request-> base); ?>/administracao/css/estilo.css">
        
        <script type="text/javascript">
    	function rootOfFramework()
    	{
    		var pathFramework = window.location.protocol + '//'+ window.location.host<?php echo("+'" . $this-> request-> base . "'");?>;
    		return pathFramework;
    	}
    	</script>
    	
        <script src="<?php echo($this-> request-> base); ?>/administracao/js/jquery.min.js" type="text/javascript"></script>
        <script src="<?php echo($this-> request-> base); ?>/administracao/js/functions.js" type="text/javascript"></script>
        
		<script type="text/javascript" src="<?php echo $this-> request-> base; ?>/administracao/js/jquery/jquery-1.8.2.min.js"></script>
	    <script type="text/javascript" src="<?php echo $this-> request-> base; ?>/administracao/js/jquery.min.js"></script>
	    <script type="text/javascript" src="<?php echo $this-> request-> base; ?>/administracao/js/jquery/functionsJQuery2.js"></script>

    	<!-- APP/Plugin/Administracao/View/Layout/defaultAdm.ctp -->
    	
    </head>
    <body>
        <header id="topo">
            <a href="<?php echo($this-> request-> base); ?>/administracao">
                <img src="<?php echo($sisCliente['urlLogo']); ?>" alt="<?php echo($sisCliente['nome']); ?>" width="200" id="logoAdm">
            </a>
            <div>
                <label>Administra&ccedil;&atilde;o</label>
                <p>
                    <a href="<?php echo($this-> request-> base); ?>/administracao" class="botao">
                        <img src="<?php echo($this-> request-> base); ?>/administracao/img/icn/home.svg" alt="home"> 
                        in&iacute;cio
                    </a>&nbsp;&nbsp;
					<!-- 
                    <a href="<?php echo($this-> request-> base); ?>/chat/admins" class="botao">
                        <img src="<?php echo($this-> request-> base); ?>/administracao/img/icn/chat.svg" alt="chat"> chat
                    </a>&nbsp;&nbsp;
                    -->
                    <a href="<?php echo($this-> request-> base); ?>/administracao/admins/logout" class="botao">
                        <img src="<?php echo($this-> request-> base); ?>/administracao/img/icn/logout.svg" alt="sair"> sair
                    </a>
                </p>
            </div>
        </header>
        <nav>
        	
	       	<?php 
            echo $this-> element('menuSiah', array('data' => $dataMenu));
            ?>
	       	
        </nav>
        <section id="container">
        	
            <?php
            echo "\n";
            echo $this->Session->flash()."\n"; 
            echo $this->fetch('content')."\n"; 
            ?>
            
        </section>
        <footer id="rodape">
        
        <?php 
        //echo $this-> element('sql_dump')."\n";
        ?>
        
            <p>
            	Desenvolvido com tecnologia<br>
                <a href="http://www.siahonline.com.br" target="_blank">
                	<img src="<?php echo($this-> request-> base); ?>/administracao/img/logo_siah_simples_transp.png" width="120    " alt="SIAH Online">
                </a>
            </p>
        </footer>
            
		<?php 
	    	echo $this-> Siah-> assetsExtra(array('cssExtra' => $cssExtra, 'jsExtra'=> $jsExtra)); 
		?>
	
    </body>
</html>

		<h1>Banners</h1>
            <form action="<?php echo ($this-> request-> base);?>/administracao/banners/inserir" method="post" enctype="multipart/form-data" id="inserirBannner">
                <input type="hidden" name="_method" value="POST"/>
                <fieldset>
                	<legend>Novo Banner</legend>
                    <p>
                        <label for="bannerURL">Arquivo:</label>
                        <input id="bannerURL" type="file" name="data[Banner][url]">
                    </p>
                    <p>
                        <label for="bannerAlt">Legenda:</label>
                        <input id="bannerAlt" type="text" name="data[Banner][alt]">
                    </p>
                    <p>
                        <label for="bannerLink">Link:</label>
                        <input id="bannerLink" type="text" name="data[Banner][link]" class="hint-form"><span data-hint="se vazio o sistema entenderá que não haverá link"></span>
                    </p>
                </fieldset>
                <p class="centrar">
                    <a href="<?php echo($this-> request-> base); ?>/administracao/banners" class="botao">
                        <img src="<?php echo($this->request->base); ?>/administracao/img/icn/cancelar.svg" alt="cancelar"> cancelar
                    </a>
                    <input type="submit" value="Inserir">
                </p>
            </form>
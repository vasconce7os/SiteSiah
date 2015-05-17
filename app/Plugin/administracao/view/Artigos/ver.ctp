
<!-- 
inicio APP/Plugin/Administracao/View/Artigos/ver.ctp
-->

<?php
echo $this-> Html-> tag('h1', $title_for_layout);
?>

<?php
echo $this-> Html-> tag('h2', $this-> data['Artigo']['descricao']);
?>

<?php
echo $this-> Html-> tag('article', $this-> data['Artigo']['conteudo']);
?>

<?php 
echo
(
	$this->Html->link
	(
		$this->Html->image
			(
				'/administracao/img/icn/lapis.svg',
				array('alt' => "Editar")
			). 'Editar',
		array
			(
				'controller'=>  "artigos",
				'action'=> "editar",
				$this-> data['Artigo']['id']
			),
		array
			(
				'escape' => false,
				'class'=> 'botao'
				//'target'=> "_blank"
			)
	)
);
?>
<?php 
//pr($this-> data);
?>

<!-- 
fim APP/Plugin/Administracao/View/Artigos/ver.ctp
-->

<?php
class ArtigosController extends AdministracaoAppController 
{
	public $components = array('Paginator');
	public $uses = array('Administracao.Artigo');
	public $scaffold;
	public function index()
	{
		$this-> set('title_for_layout', "Notícias");
		$options = array(
				'fields' => array('Artigo.*'),
				'conditions' => array(), //array('Artigo.id >= 1'),
				'order' => array('Artigo.id' => 'DESC'),
				'limit' => 2
		);
		$this-> paginate = $options;
		$lArtigos = $this-> paginate('Artigo');
		if(!$lArtigos)
		{
			$this-> Session-> setFlashAtencao("Não há novos artigos!");
		}
		$this-> set('lArtigos', $lArtigos);
	}
	public function inserir()
	{
		$this-> set('title_for_layout', "Nova notícia");

		$this-> jsExtra[] = array('file'=> $this-> request-> base . '/administracao/ckeditor/ckeditor.js', 'comment'=> "CKEditor para edição de texto rico", 'shortPath' => false);
		$this-> jsExtra[] = array('file'=> $this-> request-> base . '/administracao/js/functionsArtigo.js', 'comment'=> "Por enquanto chama o CKEditor e o contacaracters", 'shortPath' => false);
		$this-> set('jsExtra', $this-> jsExtra);
		
		if($this-> request-> is('post'))
		{
			$artigoForDB = $this-> data;
			$artigoForDB['Artigo']['admin_id'] = $this-> logged-> Admin-> id; 
			//pr($artigoForDB);
			//exit;
			$artigoInDB = $this-> Artigo-> save($artigoForDB);
			if($artigoInDB)
			{
				$this-> Session-> setFlashSucesso("Artigo inserido com sucesso.");
				$this-> redirect(array('action'=> "ver", $artigoInDB['Artigo']['id']));
			} else
			{
				$this-> Session-> setFlashErro("Houve um erro ao inserir o item");
			}
		}
	}
	public function ver($idArtigo = 0)
	{
		$idArtigo = (int) $idArtigo;
		$artigo = $this-> Artigo-> findById($idArtigo);
		if(!$artigo)
		{
			throw new NotFoundException(__('Artigo não encontrado!'));
		}
		$this-> request-> data = $artigo;
		$this-> set('title_for_layout', $artigo['Artigo']['titulo']);
	}
	public function editar($idArtigo = 0)
	{
		$idArtigo = (int) $idArtigo;
		$artigo = $this-> Artigo-> findById($idArtigo);
		if(!$artigo)
		{
			throw new NotFoundException(__('Artigo não encontrado!'));
		}
		$this-> set('title_for_layout', 'Editar '. $artigo['Artigo']['id'] . ' ' . $artigo['Artigo']['titulo']);
		$this-> jsExtra[] = array('file'=> $this-> request-> base . '/administracao/ckeditor/ckeditor.js', 'comment'=> "CKEditor para edição de texto rico", 'shortPath' => false);
		$this-> jsExtra[] = array('file'=> $this-> request-> base . '/administracao/js/functionsArtigo.js', 'comment'=> "Por enquanto chama o CKEditor e o contacaracters", 'shortPath' => false);
		$this-> set('jsExtra', $this-> jsExtra);
	
		if($this-> request-> is(array('post', 'put')))
		{
			$artigoForDB = $this-> data;
			$artigoForDB['Artigo']['admin_id'] = $this-> logged-> Admin-> id;
			$artigoInDB = $this-> Artigo-> save($artigoForDB);
			if($artigoInDB)
			{
				$this-> Session-> setFlashSucesso("Artigo alterado com sucesso.");
				$this-> redirect(array('action'=> "ver", $artigoInDB['Artigo']['id']));
			} else
			{
				$this-> Session-> setFlashErro("Houve um erro ao alterar o item");
			}
		}

		if (!$this-> request-> data)
		{
			$this-> request-> data = $artigo;
		}
	}
}
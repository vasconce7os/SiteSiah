<?php
class ChamadosController extends AdministracaoAppController 
{
	public $components = array('Paginator', "Email");
	public function index()
	{
		$options = array(
			'fields' => array('Chamado.*'),
			'conditions' => array(), //array('Chamado.id >= 1'),
			'order' => array('Chamado.id' => 'DESC'),
			'limit' => 10
		);
		$this-> paginate = $options;
		$lChamados = $this-> paginate('Chamado');
		if(!$lChamados)
		{
			$this-> Session-> setFlashAtencao("Não há mensagens de chamados para exibir!");
		}
		$this-> set('lChamados', $lChamados);
		//$this-> set('totalChamados', $this-> Chamado-> find('count'));
		$this-> set('title_for_layout', "Listando mensagens chamados");
	}
	
	public function ver($id = null)
	{
		$this-> Chamado-> id = $id;
		$chamado = $this-> Chamado-> read();
		if(!$chamado)
		{
			$this-> Session-> setFlashErro("Chamado não encontrado!");
			$this-> redirect(array('action'=> 'index'));
		} else
		{
			//pr($this-> Chamado-> data['Chamado']['status']);
			if($this-> Chamado-> data['Chamado']['status'] == 'a_ler')
			{
				//pr($this-> sessionAdmin);
				//pr($this-> logged-> Admin-> id);
				$this-> Chamado-> data['Chamado']['status'] = 'lido';
				$this-> Chamado-> data['Chamado']['admin_id'] = $this-> logged-> Admin-> id;
				$this-> Chamado-> save($this-> Chamado-> data);
				$this-> Chamado-> data = $this-> Chamado-> read();
				$chamado = $this-> Chamado-> data;

			}
			//exit;
		}
		$this-> request-> data = $chamado;
		$this-> set('chamado', $chamado);
		$this-> set('title_for_layout', $chamado['Chamado']['titulo']);
	}

	public function responder($id = null)
	{
		$this-> Chamado-> id = (int) $id;
		$chamado = $this-> Chamado-> read();
		if(!$chamado)
		{
			$this-> Session-> setFlashErro("Chamado não encontrado!");
			$this-> redirect(array('action'=> 'index'));
		}
		if($this-> request-> is("post"))
		{
			$this->autoRender = false;
			$view = new View($this, false);
			$view->set('chamadoInBrowser', $this-> request-> data);
			$view->set('chamadoInDB', $chamado);
			$resposta = $view-> render('email_resposta', 'ajax');
			//echo($resposta);
			//exit;
			$chamadoForDB['Chamado']['id'] = $this-> Chamado-> id;
			$chamadoForDB['Chamado']['admin_id'] = $this-> logged-> Admin-> id;
			$chamadoForDB['Chamado']['status'] = 'respondido';
			$chamadoForDB['Chamado']['resposta'] = $resposta;
			$salvou = $this-> Chamado-> save($chamadoForDB);
			$this-> log('salvou a marcação do email no banco: ');
			$this-> log($salvou);
			//exit;
			$this-> Session-> setFlashSucesso( "Chamado de cliente respondido");
			$this-> redirect(array("plugin"=> "administracao", 'controller' => 'chamados', 'action' => 'ver', $this-> Chamado-> id));
		}
		$this-> jsExtra[] = array('file'=> $this-> request-> base . '/administracao/ckeditor/ckeditor.js', 'comment'=> "CKEditor para edição de texto rico", 'shortPath' => false);
		//$this-> jsExtra[] = array('file'=> $this-> request-> base . '/administracao/js/functionsArtigo.js', 'comment'=> "Por enquanto chama o CKEditor e o contacaracters", 'shortPath' => false);
		$this-> set('jsExtra', $this-> jsExtra);
		$this-> set('title_for_layout', "Responder: " . $chamado['Chamado']['titulo']);
		$this-> request-> data = $this-> Chamado-> data;
	}
}
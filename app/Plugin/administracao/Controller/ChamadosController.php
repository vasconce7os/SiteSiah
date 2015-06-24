<?php
class ChamadosController extends AdministracaoAppController 
{
	public $components = array('Paginator', "Email");
	public function index()
	{
		$options = array(
			'fields' => array('Chamado.*', 'User.id', 'User.username'),
			'conditions' => array(), //array('Chamado.id >= 1'),
			'order' => array('Chamado.id' => 'DESC'),
			'limit' => 10
		);
		$this-> paginate = $options;
		$lChamados = $this-> paginate('Chamado');
		//pr($lChamados);
		//exit;
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
			//pr($chamado);
			//pr($this-> request-> data);
			//exit;
			$chamadoForDB['Chamado']['id'] = $this-> Chamado-> id;
			//$chamadoForDB['Chamado']['admin_id'] = $this-> logged-> Admin-> id; // ja foi setado no iniciodo chamado
			if($chamado['Chamado']['status'] = 'aguardando análise inicial')
			{
				$chamadoForDB['Chamado']['status'] = 'aguardando cliente';
			}

			$chamadoForDB['Chamadomsg'][0]['user_id'] = $this-> logged-> User-> id;
			$chamadoForDB['Chamadomsg'][0]['msg'] = $this-> request-> data['Chamadomsg'][0]['msg'];
			//pr($chamadoForDB);
			//exit;
			$salvou = $this-> Chamado-> saveAll($chamadoForDB);
			$this-> log('salvou a marcação do email no banco: ');
			$this-> log($salvou);
			//exit;
			$this-> Session-> setFlashSucesso( "Você postou uma resposta no chamado");
			$this-> redirect(array("plugin"=> "administracao", 'controller' => 'chamados', 'action' => 'ver', $this-> Chamado-> id));
		}
		$this-> jsExtra[] = array('file'=> $this-> request-> base . '/administracao/ckeditor/ckeditor.js', 'comment'=> "CKEditor para edição de texto rico", 'shortPath' => false);
		//$this-> jsExtra[] = array('file'=> $this-> request-> base . '/administracao/js/functionsArtigo.js', 'comment'=> "Por enquanto chama o CKEditor e o contacaracters", 'shortPath' => false);
		$this-> set('jsExtra', $this-> jsExtra);
		$this-> set('title_for_layout', "Responder: " . $chamado['Chamado']['titulo']);
		$this-> request-> data = $this-> Chamado-> data;
	}
}
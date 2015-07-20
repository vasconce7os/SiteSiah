<?php
class ChamadosController extends AdministracaoAppController 
{
	public $components = array('Paginator', "Email");
	public $uses = array("Administracao.Chamado", "Administracao.Cliente");
	public function index()
	{
		$options = array(
			'fields' => array('Chamado.*', 'User.id', 'User.username'),
			'conditions' => array(), //array('Chamado.id >= 1'),
			'order' => array('Chamado.id' => 'DESC'),
			'limit' => 10,
			'paramType' => 'querystring'
		);
		$this-> paginate = $options;
		$lChamados = $this-> paginate('Chamado');
		if(!$lChamados)
		{
			$this-> Session-> setFlashAtencao("Não há mensagens de chamados para exibir!");
		}
		$this-> set('lChamados', $lChamados);
		$this-> set('title_for_layout', "Listando mensagens chamados");
	}
	
	public function ver($id = null)
	{
		$this-> Chamado-> id = $id;
	    $this-> Chamado-> bindModel(
		    array('belongsTo' => array('Admin'))
		);
		$chamado = $this-> Chamado-> read();
		
		if(!$chamado)
		{
			$this-> Session-> setFlashErro("Chamado não encontrado!");
			$this-> redirect(array('action'=> 'index'));
		}
		$chamado['Chamadomsg'] = $this-> Chamado-> getMessagesChamado($id);
		$chamado['Cliente'] = $this-> Cliente-> findById($chamado['User']['cliente_id'], array('field'=> "fantasia", "id", "cnpj", "naoativo"));
		foreach ($chamado['Cliente']['Cliente'] as $key => $propriedadeCliente) 
		{
			$chamado['Cliente'][$key] = $propriedadeCliente;
		}
		unset($chamado['Cliente']['Cliente']);
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
			$chamadoForDB['Chamado']['id'] = $this-> Chamado-> id;
			if(utf8_encode($chamado['Chamado']['status']) == 'aguardando análise inicial')
			{
				$chamadoForDB['Chamado']['admin_id'] = $this-> logged-> Admin-> id;
			}
			$chamadoForDB['Chamado']['status'] = 'aguardando cliente';
			$chamadoForDB['Chamadomsg'][0]['user_id'] = $this-> logged-> User-> id;
			$chamadoForDB['Chamadomsg'][0]['msg'] = $this-> request-> data['Chamadomsg'][0]['msg'];
			$salvou = $this-> Chamado-> saveAll($chamadoForDB);
			$this-> log('salvou a marcação do email no banco: ');
			$this-> log($salvou);
			$this-> Session-> setFlashSucesso( "Você postou uma resposta no chamado");
			$this-> redirect(array("plugin"=> "administracao", 'controller' => 'chamados', 'action' => 'ver', $this-> Chamado-> id));
		}
		$this-> jsExtra[] = array('file'=> $this-> request-> base . '/administracao/ckeditor/ckeditor.js', 'comment'=> "CKEditor para edição de texto rico", 'shortPath' => false);
		$this-> set('jsExtra', $this-> jsExtra);
		$this-> set('title_for_layout', "Responder: " . $chamado['Chamado']['titulo']);
		$this-> request-> data = $this-> Chamado-> data;
	}
}
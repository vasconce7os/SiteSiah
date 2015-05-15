<?php
class ContatosController extends AdministracaoAppController 
{
	public $components = array('Paginator', "Email");
	public function index()
	{
		$options = array(
			'fields' => array('Contato.id', 'Contato.nome', 'Contato.tipo', 'Contato.email', 'Contato.assunto', 'Contato.telefone', 'Contato.created', 'Contato.status'),
			'conditions' => array(), //array('Contato.id >= 1'),
			'order' => array('Contato.id' => 'DESC'),
			'limit' => 10
		);
		$this-> paginate = $options;
		$lContatos = $this-> paginate('Contato');
		if(!$lContatos)
		{
			$this-> Session-> setFlashAtencao("Não há novas mensagens de contato!");
		}
		$this-> set('lContatos', $lContatos);
		//$this-> set('totalContatos', $this-> Contato-> find('count'));
		$this-> set('title_for_layout', "Listando mensagens contatos");
	}
	
	public function ver($id = null)
	{
		$this-> Contato-> id = $id;
		$contato = $this-> Contato-> read();
		if(!$contato)
		{
			$this-> Session-> setFlashErro("Contato não encontrado!");
			$this-> redirect(array('action'=> 'index'));
		} else
		{
			//pr($this-> Contato-> data['Contato']['status']);
			if($this-> Contato-> data['Contato']['status'] == 'a_ler')
			{
				//pr($this-> sessionAdmin);
				//pr($this-> logged-> Admin-> id);
				$this-> Contato-> data['Contato']['status'] = 'lido';
				$this-> Contato-> data['Contato']['admin_id'] = $this-> logged-> Admin-> id;
				$this-> Contato-> save($this-> Contato-> data);
				$this-> Contato-> data = $this-> Contato-> read();
				$contato = $this-> Contato-> data;

			}
			//exit;
		}
		$this-> request-> data = $contato;
		$this-> set('contato', $contato);
		$this-> set('title_for_layout', $contato['Contato']['assunto']);
	}

	public function responder($id = null)
	{
		$this-> Contato-> id = (int) $id;
		$contato = $this-> Contato-> read();
		if(!$contato)
		{
			$this-> Session-> setFlashErro("Contato não encontrado!");
			$this-> redirect(array('action'=> 'index'));
		}
		if($this-> request-> is("post"))
		{
			//pr($this -> request-> data);
			$this->autoRender = false;
			$view = new View($this, false);
			$view->set('contatoInBrowser', $this-> request-> data);
			$view->set('contatoInDB', $contato);
			$resposta = $view->render('email_resposta', 'ajax');
			//echo($resposta);
			//exit;
			$contatoForDB['Contato']['id'] = $this-> Contato-> id;
			$contatoForDB['Contato']['admin_id'] = $this-> logged-> Admin-> id;
			$contatoForDB['Contato']['status'] = 'respondido';
			$contatoForDB['Contato']['resposta'] = $resposta;
			$salvou = $this-> Contato-> save($contatoForDB);
			$this-> log('salvou: ');
			$this-> log($salvou);

			$this-> log('vai enviar o email');
			$retEmailCliente = $this-> enviaEmail($contato['Contato']['email'], "Re: " . $contato['Contato']['assunto'], $resposta, $this-> sisCliente['nome']);
			print_r($retEmailCliente, false);
			$this-> log('enviaou o email');
			//pr($conteudo);
			//exit;
			$this-> Session-> setFlashSucesso( "Contato de cliente respondido");
			$this-> redirect(array("plugin"=> "administracao", 'controller' => 'contatos', 'action' => 'ver', $this-> Contato-> id));
		}
		$this-> jsExtra[] = array('file'=> $this-> request-> base . '/administracao/ckeditor/ckeditor.js', 'comment'=> "CKEditor para edição de texto rico", 'shortPath' => false);
		//$this-> jsExtra[] = array('file'=> $this-> request-> base . '/administracao/js/functionsArtigo.js', 'comment'=> "Por enquanto chama o CKEditor e o contacaracters", 'shortPath' => false);
		$this-> set('jsExtra', $this-> jsExtra);
		$this-> set('title_for_layout', "Responder: " . $contato['Contato']['assunto']);
		$this-> request-> data = $this-> Contato-> data;
	}
}
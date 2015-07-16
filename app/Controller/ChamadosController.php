<?php



App::uses('AppController', 'Controller');


class ChamadosController extends AppController 
{

	//public $uses = array();
	//var $scaffold;
	var $components = array("Email");
	public $helpers = array('Tinymce');

	public function index()
	{
		$this-> set('title_for_layout', "Chamados ao suporte SIAH");
		$this-> cssExtra[] = array('file'=> 'bootstrap-table', 'comment'=> "table bootstrap", 'shortPath'=> true, 'media'=> "all");
		$this-> jsExtra[] = array('file'=> 'bootstrap-table', 'comment'=> "table bootstrap", 'shortPath'=> true);
		$this-> set('jsExtra', $this-> jsExtra);
		$this-> set('cssExtra', $this-> cssExtra);
		
	}

	public function criar()
	{
		//$this-> set('title_for_layout', " Criar novo chamado");
		if($this-> request-> is("post"))
		{
			//$this-> log("no enviar: ? chamado ");
			//$this-> log("no enviar: chamado: " . print_r($this-> data, 1));
			$chamadoForDB = $this-> data;
			$chamadoForDB['Chamado']['user_id'] = $this-> Auth-> user('id');
			$chamadoForDB['Chamado']['admin_id'] = 1; // Sistema
			//$chamadoForDB['Chamado']['satisfacao'] = 'regular';


			$chamadoForDB['Chamadomsg'][0]['user_id'] = $this-> Auth-> user('id');
			//echo('<h1>$this-> Chamado</h1>');
			//pr($this-> Chamado);
			//echo("<h1>chamadoForDB</h1>");
			//unset($chamadoForDB['Chamadomsg']);
			//pr($chamadoForDB); 
			//exit;

			$data = $this-> request-> data;
			
			$enviou = $this-> Chamado -> saveAll($chamadoForDB);

			//echo("<h1>var_dump($enviou);</h1>");
			//var_dump($enviou);

			//exit;
			
			if($enviou)
			{
				$this-> Session->setFlash('Chamado iniciado'
					, 'default'
					, array('class' => $this-> successMsgClass)); 
				$this-> redirect(array("action"=> "ver", $this-> Chamado-> getLastInsertId()));
			} else
			{
				$this-> Session->setFlash('Houve um erro ao inserir o chamado'
					, 'default'
					, array('class' => $this-> errorMsgClass)); 
			}
			
		} else 
		{
			//request get
		}
	}
	public function ver($id = null) 
	{
	    $this-> Chamado-> unbindModel(
		    array('hasMany' => array('Chamadomsg'))
		);
        //$chamado = $this-> Chamado-> findById($id, array("Chamado.id", 'Chamado.status', "Chamado.titulo"));
        $chamado = $this-> Chamado-> find('first', array
			(
				'conditions'=> array('Chamado.id'=> $id),
        		'fields'=> array("Chamado.id", 'Chamado.status', "Chamado.titulo", "Chamado.user_id")
        	));
		if (!$chamado)
		{
		    throw new NotFoundException('Chamado não encontrado!');
		} else
		{
			$this-> checkChamadoIsYour($chamado);
		}
		$chamado['Chamadomsg'] = $this-> Chamado-> getMessagesChamado($id);
		$this-> set('title_for_layout', $chamado['Chamado']['titulo']);
		$this-> cssExtra[] = array('file'=> 'timeline/styles', 'comment'=> "style da timeline", 'shortPath'=> true, 'media'=> "all");
		$this-> jsExtra[] = array('file'=> 'timeline/main', 'comment'=> "js do timeline", 'shortPath'=> true);
		$this-> set('cssExtra', $this-> cssExtra);
		$this-> set('jsExtra', $this-> jsExtra);
		$this->set('chamado', $chamado);
	}

	public function lista_por_cliente()
	{
		$this-> set('title_for_layout', "Listando chamados de ". $this-> Auth-> user('username'));
		$lChamados = $this-> Chamado-> findAllByUserId($this-> Auth-> user('id'));
		$this-> cssExtra[] = array('file'=> 'bootstrap-table', 'comment'=> "table bootstrap", 'shortPath'=> true, 'media'=> "all");
		$this-> jsExtra[] = array('file'=> 'bootstrap-table', 'comment'=> "table bootstrap", 'shortPath'=> true);
		$this-> set('jsExtra', $this-> jsExtra);
		$this-> set('cssExtra', $this-> cssExtra);
		$this-> set('lChamados', $lChamados);
	}


	public function responderCliente($id = null)
	{
		$this-> Chamado-> id = (int) $id;
		$chamado = $this-> Chamado-> read();
		if(!$chamado)
		{
			$this-> Session->setFlash('Chamado não encontrado!'
				, 'default'
				, array('class' => $this-> errorMsgClass));
			$this-> redirect(array('action'=> 'index'));
		}
		if($this-> request-> is("post"))
		{
			//pr($chamado);
			//pr($this-> request-> data);
			//exit;
			$chamadoForDB['Chamado']['id'] = $this-> Chamado-> id;
			//$chamadoForDB['Chamado']['admin_id'] = $this-> logged-> Admin-> id; // ja foi setado no iniciodo chamado
			$chamadoForDB['Chamado']['status'] = 'aguardando suporte';
			$chamadoForDB['Chamadomsg'][0]['user_id'] = $this-> Auth-> user('id');
			$chamadoForDB['Chamadomsg'][0]['msg'] = $this-> request-> data['Chamadomsg'][0]['msg'];
			//pr($chamadoForDB);
			//exit;
			$salvou = $this-> Chamado-> saveAll($chamadoForDB);
			$this-> log('salvou a marcação do email no banco: ');
			$this-> log($salvou);
			//exit;
			$this-> Session->setFlash($this-> Auth-> user('username') . ', sua nova mensagem foi adicionada com sucesso ao chamado de id ' . $this-> Chamado-> id
				, 'default'
				, array('class' => $this-> successMsgClass));
			$this-> redirect(array('controller' => 'chamados', 'action' => 'ver', $this-> Chamado-> id));
		}
		$this-> jsExtra[] = array('file'=> $this-> request-> base . '/administracao/ckeditor/ckeditor.js', 'comment'=> "CKEditor para edição de texto rico", 'shortPath' => false);
		$this-> set('jsExtra', $this-> jsExtra);
		$this-> set('title_for_layout', "Responder: " . $chamado['Chamado']['titulo']);
		$this-> request-> data = $this-> Chamado-> data;

	}
	public function finalizarPorCliente($id = null)
	{
		$this-> Chamado-> id = (int) $id;
		$chamado = $this-> Chamado-> read();
		if(!$chamado)
		{
			$this-> Session->setFlash('Chamado não encontrado!'
				, 'default'
				, array('class' => $this-> errorMsgClass));
			$this-> redirect(array('action'=> 'index'));
		} else
		{
			$this-> checkChamadoIsYour($chamado);
		}
		if($this-> request-> is("post"))
		{
			//pr($chamado);
			pr($this-> request-> data);
			//exit;
			$chamadoForDB['Chamado']['id'] = $this-> Chamado-> id;
			$chamadoForDB['Chamado']['nota'] = $this-> request-> data['Chamado']['nota'];
			$chamadoForDB['Chamado']['satisfacao'] = $this-> request-> data['Chamado']['satisfacao'];
			$chamadoForDB['Chamado']['status'] = 'fechado';
			$chamadoForDB['Chamado']['lastviewclient'] = time();
			//pr($chamadoForDB); exit;
			$salvou = $this-> Chamado-> save($chamadoForDB);
			$this-> log($salvou);
			$this-> Session->setFlash('Chamado finalizado'
				, 'default'
				, array('class' => $this-> successMsgClass));
			$this-> redirect(array('controller' => 'chamados', 'action' => 'ver', $this-> Chamado-> id));
		}
		$this-> set('title_for_layout', "Filalizar: " . $chamado['Chamado']['id'] . ' - ' . $chamado['Chamado']['titulo']);
		$this-> request-> data = $this-> Chamado-> data;

	}
	private function checkChamadoIsYour($chamado = array())
	{
		if($chamado['Chamado']['user_id'] != $this-> Auth-> user('id'))
		{
			$this-> Session->setFlash('Este chamado não é seu '. $this-> Auth-> user('username')
				, 'default'
				, array('class' => $this-> errorMsgClass));
			$this-> redirect(array('action'=> "lista_por_cliente"));
		}
	}
	public function resAjax()
	{
		if(!isset($this-> request-> params['ext']) || $this-> request-> params['ext'] != 'json')
		{
			throw new NotFoundException("Arquivo não existe!");
		}
		$this-> Chamado-> unbindModel(
		    array('hasMany' => array('Chamadomsg'))
		);

		if(isset($this-> request-> query['search'][0]))
		{
			$conditions = 
				array
				(
					'and'=>array
					(
						"Chamado.titulo like"=> '%'.$this-> request-> query['search'].'%',
						"Chamado.user_id"=> $this-> Auth-> user('id')
					)
					
				);
		} else
		{

			$conditions = 
				array
				(
					'and'=>array
					(
						//"Chamado.id <"=> 43,
						"Chamado.user_id"=> $this-> Auth-> user('id')
					)
					
				);
		}
		$lChamados = $this-> Chamado-> find('all', 
			array
				(
					'conditions'=> $conditions,
					'fields'=> 
					array
					(
						"Chamado.id", "Chamado.titulo", "Chamado.created", "Chamado.status"
					), 
					'limit'=> 3087, 
					'order'=> array("Chamado.modified desc")
					
				)
			);
		$this-> set('lChamados', $lChamados);
		//$this-> layout = 'default';
	}

	function beforeFilter()
	{
		parent::beforeFilter();

		$this->Auth->allow('index');
	}
	function beforeRender()
	{
		//$this->set($this-> Chamado-> enumValues());
		//pr($this-> Chamado-> enumValues()); exit;
	}
}

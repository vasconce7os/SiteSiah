<?php



App::uses('AppController', 'Controller');


class ContatosController extends AppController 
{

	//public $uses = array();
	var $components = array("Email");

	public function index() 
	{
		$this-> set('title_for_layout', "Contato com a SIAH");
		/*
		já não precisa mais, estão no layout default
		$this-> cssExtra[] = array('file'=> 'css/bootstrap.min', 'comment'=> "Css 2 col", 'shortPath'=> true, 'media'=> "all");
		$this-> cssExtra[] = array('file'=> 'css/font-awesome.min', 'comment'=> "icones no formato de font", 'shortPath'=> true, 'media'=> "all");
		$this-> set('cssExtra', $this-> cssExtra);
		*/
	}

	public function enviar()
	{
		if($this-> request-> is("post"))
		{
			//$this-> log("no enviar: é post ");
			//$this-> log("no enviar: post: " . print_r($this-> data, 1));
			$contatoForDB = $this-> data;
			$contatoForDB['Contato']['cliente_id'] = 1; // cliente não identificado
			
			$enviou = $this-> Contato-> save($contatoForDB);
			//pr($contatoForDB);
			//exit;

			$data = $this-> request-> data;
			//$enviou = $this-> Contato -> save($data);
			//var_dump($enviou);

			if($enviou)
			{
				$this->autoRender = false;
				//exit;
				$view = new View($this, false);
				$view->set('contatoInDB', $data);
				$view->viewPath = 'Contatos';
				//$this-> layout = 'ajax';
				$conteudo = $view->render('enviar', 'ajax');
				//echo"antes ";
				//pr($conteudo);
				//echo" depois ";
				$this->log('Antes da parada do email');
				//exit;
				$retEmail =        true; //$this-> enviaEmail("site@oseuestoque.com", 'Contato via site de: '.@$data['Contato']['nome'], $conteudo, 'O seu estoque');
				$retEmailCliente = $this-> enviaEmail($data['Contato']['email'], 'Recebemos seu contato '.@$data['Contato']['nome'], $conteudo, $this-> sisCliente['nome']);
				/*
				if($retEmail == true)
				{
					$this->log('Enviou para o Adm');
					$this-> Session->setFlash('Obrigado por nos contactar '.@$data['Contato']['nome']
							, 'default'
							, array('class' => 'noticeSuccess')); //noticeSuccess, notice, message
					$this-> redirect(array("controller"=> "contatos", "action"=> "index"));
				} else
				{
					$this->log('Não enviou para o adm');
					$this-> Session->setFlash('Houve um erro, você pode tentar novamente ou tentar outras formas de contato!'
							, 'default'
							, array('class' => 'message')); //noticeSuccess, notice, message
				}
				*/
				if($retEmail == true)
				{
					$this->log('Enviou para o contatante');
					$this-> Session->setFlash('Obrigado por nos contactar '.@$data['Contato']['nome']
							, 'default'
							, array('class' => $this-> successMsgClass)); 
					$this-> redirect(array("controller"=> "pages", "action"=> "inicio"));
				} else
				{
					$this->log('Não enviou para o contatante');
					$this-> Session->setFlash('Houve um erro, você pode tentar novamente ou tentar outras formas de contato!'
							, 'default'
							, array('class' => $this-> infoMsgClass)); 
					$this-> redirect(array("controller"=> "atendimentos", "action"=> "index"));
				}
			}
			else
			{
				$this-> Session->setFlash('Houve um erro!'
						, 'default'
						, array('class' => $this-> errorMsgClass)); 
			}
			/* */
		} else 
		{
			$this-> log("no enviar: NÃO é post ");
		}
	}

	public function beforeFilter()
	{
		parent::beforeFilter();
		$this-> Auth-> allow();
	}
}

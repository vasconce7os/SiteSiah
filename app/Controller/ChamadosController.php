<?php



App::uses('AppController', 'Controller');


class ChamadosController extends AppController 
{

	//public $uses = array();
	var $scaffold;
	var $components = array("Email");

	public function index()
	{
		$this-> set('title_for_layout', "Abrir um chamado");
		
	}

	public function criar()
	{
		if($this-> request-> is("chamado"))
		{
			//$this-> log("no enviar: é chamado ");
			//$this-> log("no enviar: chamado: " . print_r($this-> data, 1));
			$chamadoForDB = $this-> data;
			$chamadoForDB['Chamado']['user_id'] = $this-> Auth-> user('id');
			$chamadoForDB['Chamado']['admin_id'] = 1; // Sistema
			
			//$enviou = $this-> Chamado-> save($chamadoForDB);
			//pr($chamadoForDB); exit;

			$data = $this-> request-> data;
			$enviou = $this-> Chamado -> saveAll($chamadoForDB);
			//var_dump($enviou);

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
        $chamado = $this->Chamado->findById($id);
		if (!$chamado)
		{
		    throw new NotFoundException('Chamado não encontrado!');
		}
		$this-> set('title_for_layout', $chamado['Chamado']['titulo']);
		$this->set('chamado', $chamado);
	}
}

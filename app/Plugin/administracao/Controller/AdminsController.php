<?php
class AdminsController extends AdministracaoAppController
{
	public function login()
	{
		$this-> set('title_for_layout', "Login de administrador");
		$this-> set('dataMenu', array());
		if ($this-> request-> is('post'))
		{
			//pr($this->request->data);
			//$list = $this-> Admin-> find('all');
			//pr($list);
			//exit;
			
			$conditions = array('conditions' => 
				array(
					"BINARY (Admin.login) ="=> $this-> request-> data['Admin']['login'],
					"BINARY (Admin.password) ="=> $this-> request-> data['Admin']['password'],
					"Admin.status"=> true,
				),
				'fields'=> array("Admin.id", "Admin.login", "Admin.status")
			);
		
			$retDB = $this-> Admin-> find('all', $conditions);
			//pr($retDB);
			//exit;
			
			$retDB[0]['Admin']['password'] = '????';
			if(isset($retDB[0]['Admin']['id']) && ($retDB[0]['Admin']['id'] ))
			{
				$this-> Session-> setFlash(
						'Bem vindo '.$retDB[0]['Admin']['nome']
						, 'default'
						, array('class' => 'msgSucesso'));
				//$this->Session->write('userLogado', $retDB);
				$this-> Session-> write('Admin', $retDB);
				$this-> redirect(array("plugin"=> 'administracao', "controller"=> null, 'action'=> 'index'));
			} else
			{
				$this-> Session->setFlash('Acesso negado'
						, 'default'
						, array('class' => 'msgErro'));
			}
		} else // não existe post //get
		{
		
		}
	}
	
	public function logout()
	{
		if($this->Session->valid())
		{
			$this-> Session-> destroy('Admin');
		} else
		{
			$this-> Session-> destroy('Admin');
			$this-> Session->setFlash('Sessão encerrada, Obrigado'
					, 'default'
					, array('class' => 'message')); //notice success, notice, message
		}
		$this->redirect(array('controller'=> "admins", 'action' => "login"));
	}
}
<?php
App::uses('AppController', 'Controller');
class AdministracaoAppController extends AppController
{
	var $extPages = '.html';
	public $meta; // matatag do html
	var $sisCliente; // informações do cliente da empresa desenvolvedora
	public $logged;
	var $sessionAdmin;
	public $components = array("Administracao.Session");

	var $infoMsgClass = 'msgInfo';
	var $attentionMsgClass = 'msgAtencao';
	var $errorMsgClass = 'msgErro';
	var $successMsgClass = 'msgSucesso';

	public function beforeFilter()
	{
		parent::beforeFilter();
		
		// autenticação moderna
		$authentication = false;
		$sessionAdminExiste = $this-> Session-> check('Admin');
		if($sessionAdminExiste == true)
		{
			$this-> sessionAdmin = $this-> Session-> read('Admin');
			if(isset($this-> sessionAdmin[0]['Admin']['id']))
			{
				$authentication = true;
				
				$this-> logged = $this-> arrayToObject($this-> sessionAdmin[0]);
				$this-> layout = 'defaultAdm';
				$this-> set('title_for_layout', 'Administação');
				$this-> configSistema();
				$this-> set('dataMenu', $this-> generateMenu());
			} else // Não deve ocorrer
			{
				$authentication = false;
				//$this->Session->delete('Admin');
			}
		} else
		{
			$authentication = false;
		}

		if($authentication == false)
		{
			if($this-> request-> params['controller'] != 'admins' )
			{
				$this-> Session-> setFlashErro( "Primeiro efetue login");
				$this->redirect(array("plugin"=> "administracao", 'controller' => 'admins', 'action' => 'login'));
				//$this-> render("Administracao.Admins/login");
			} else 
			{
				//$this-> Session-> setFlashAtencao("Identificação de administrador");
				//$this->redirect(array("plugin"=> "administracao", 'controller' => 'admins', 'action' => 'login'));
			}
			//administracao
			//$this->redirect(array("plugin"=> null, 'controller' => 'admins', 'action' => 'login'));
		}
		// fim autenticação moderna
	}
	public function configSistema()
	{
		$this-> sisCliente['nome'] = "SIAH";
		$this-> sisCliente['urlLogo'] = $this-> request-> base . "/administracao/img/logo_siah_220x80.png";
		$this-> set('sisCliente', $this-> sisCliente);
	}
	
	/**
	 * 
	 * @param array $data
	 * @return stdClass
	 * pode ir para o AppController
	 */
	public function arrayToObject($data)
	{
		if (is_array($data))
		{
			$result= new stdClass();
			foreach ($data as $key => $value)
			{
				$result->$key = $this-> arrayToObject($value);
			}
			return $result;
		}
		return $data;
	}
	

	public function generateMenu()
	{
	
		$dataMenu = array(
				/* "produtos"=> array
				(
						'label'=> "Produtos",
						'url'=> $this-> request-> base .'/' . $this-> request-> params['plugin'] . '/produtos',
						'icone'=> $this-> request-> base .'/' . $this-> request-> params['plugin'] . '/img/icn/produtos.svg',
						'child'=> array
						(
								'inserir'=> array
								(
										'label'=> "Inserir",
										'url'=> $this-> request-> base .'/' . $this-> request-> params['plugin'] . '/produtos' . '/inserir',
								)
						),
				), 
				"banners"=> array
				(
						'label'=> "Banners",
						'url'=> $this-> request-> base .'/' . $this-> request-> params['plugin'] . '/banners',
						'icone'=> $this-> request-> base .'/' . $this-> request-> params['plugin'] . '/img/icn/image.svg',
	
				),
				"artigos"=> array
				(
						'label'=> "Artigos/News",
						'url'=> $this-> request-> base .'/' . $this-> request-> params['plugin'] . '/artigos',
						'icone'=> $this-> request-> base .'/' . $this-> request-> params['plugin'] . '/img/icn/image.svg',
	
				)
				,*/
				"clientes"=> array
				(
						'label'=> "Clientes",
						'url'=> $this-> request-> base .'/' . $this-> request-> params['plugin'] . '/clientes',
						//'icone'=> $this-> request-> base .'/' . $this-> request-> params['plugin'] . '/img/icn/email.svg',
	 					'child'=> array
						(
								'inserir'=> array
								(
										'label'=> "Inserir",
										'url'=> $this-> request-> base .'/' . $this-> request-> params['plugin'] . '/clientes' . '/inserir',
								)
						),
				),
				"contatos"=> array
				(
						'label'=> "Contatos",
						'url'=> $this-> request-> base .'/' . $this-> request-> params['plugin'] . '/contatos',
						//'icone'=> $this-> request-> base .'/' . $this-> request-> params['plugin'] . '/img/icn/orcamento.svg',
						
				)
		);
		return $dataMenu;
	}
}
<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
App::uses('Controller', 'Controller');
/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller 
{
	var $extPages = '.html';
	var $meta; // matatag do html
	var $sisCliente; // informações do cliente da Siah
	var $cssExtra = array();
	var $jsExtra = array();
	var $infoMsgClass = 'alert alert-info';
	var $errorMsgClass = 'alert alert-error';
	var $successMsgClass = 'alert alert-success';

    public $components = array(
        'Session',
        'Auth' => array(
            'loginRedirect' => array('controller' => 'clientes', 'action' => 'index'),
            'logoutRedirect' => array('controller' => 'pages', 'action' => 'inicio')
        )
    );

	public function beforeFilter()
	{
		$this-> sisCliente['nome'] = "SIAH";
		$this-> sisCliente['urlLogo'] = $this-> request-> base . "/img/logo_siah.png";
	
		$this-> set('extPages', $this-> extPages);
		$this-> set('sisCliente', $this-> sisCliente);
	
		if(isset($this-> request-> params['ext']) && $this-> request-> params['ext'] === 'json')
		{
			$this-> layout = 'ajax';
	    	$this->response->type('json');
		}

		//pr($this-> request);
		//exit;

		//metas
		$meta['description'] = "A SIAH é uma empresa de software que trabalha no ramo de automação em gestão empresarial";
		$meta['keywords'] =    "SIAH, Siah online, empresa SIAH, A7";
		$meta['abstract'] =    "A SIAH soluções inteligentes é uma empresa de software que está localizada no Distrito industrial de Manaus e trabalha no ramo: automação em gestão empresarial";
		$meta['robots'] = "follow, index";
		$meta['url'] = $this-> curPageURL();
		$meta['imgSocial'] = FULL_BASE_URL.$this-> request-> base."/img/imagem_social_siah.jpg";
		$this-> meta = $meta;
		$this-> set('meta', $this-> meta);
		$this-> set('title_for_layout', "SIAH Soluções Inteligentes");
		$this-> set('dataMenu', $this-> generateMenu());
		
		$cssExtra = array();
		$this->set('cssExtra', $this-> cssExtra);
		$jsxtra = array();
		$this->set('jsExtra', $this-> jsExtra);
		
		if ($this-> request-> is("ajax"))
		{
			$this-> layout = 'ajax';
		}
		$this->Auth->allow(array('index', 'view', 'sessiont', 'inicio' ));
		$this->Auth->loginError = "urul";
		$this->Auth->authError = "Para acessar esta área você deve primeiro identificar-se!";

	}
	
	
	
	function curPageURL()
	{
		$pageURL = 'http';
		if (@$_SERVER["HTTPS"] == "on")
		{
			$pageURL .= "s";
		}
		$pageURL .= "://";
		if ($_SERVER["SERVER_PORT"] != "80")
		{
			$pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"];
		} else
		{
			$pageURL .= $_SERVER["SERVER_NAME"];
		}
		$pageURL .= $_SERVER["REQUEST_URI"];
		return $pageURL;
	}
	public function getUrlServer()
	{
		$pageURL = 'http';
		if (@$_SERVER["HTTPS"] == "on")
		{
			$pageURL .= "s";
		}
		$pageURL .= "://";
		if ($_SERVER["SERVER_PORT"] != "80")
		{
			$pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"];
		} else
		{
			$pageURL .= $_SERVER["SERVER_NAME"];
		}
		return $pageURL;
	}
	
	public function setMetaTags($tags = array())
	{
		//pr($tags);
		$metasAtualizadas = array();
		foreach ($this-> meta as $tagName => $tagValue)
		{
			//pr($tagName);
			if(isset($tags[$tagName]))
			{
				//pr('tem: '.$tags[$tagName]);
				$metasAtualizadas[$tagName] = $tags[$tagName];
			} else
			{
				$metasAtualizadas[$tagName] = $tagValue;
				//pr('nao: '. $tagName);
			}
		}
		//pr($metasAtualizadas);
		$this-> set('meta', $metasAtualizadas);
		//exit;
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
					), */
				"home"=> array
				(
						'label'=> "Home",
						'url'=> $this-> request-> base . '/',
						//'icone'=> $this-> request-> base .'/' . $this-> request-> params['plugin'] . '/img/icn/image.svg',
						
				),
				"empresa"=> array
				(
						'label'=> "Empresa",
						'url'=> $this-> request-> base . '/empresa',
						//'icone'=> $this-> request-> base .'/' . $this-> request-> params['plugin'] . '/img/icn/image.svg',
						//'id'=> 
				),
				"produtos"=> array
				(
						'label'=> "Produtos",
						'url'=> $this-> request-> base . '/produtos',
						//'icone'=> $this-> request-> base .'/' . $this-> request-> params['plugin'] . '/img/icn/image.svg',
	
				) ,
				"clientes"=> array
				(
						'label'=> "Clientes",
						'url'=> $this-> request-> base . '/clientes',
						//'icone'=> $this-> request-> base .'/' . $this-> request-> params['plugin'] . '/img/icn/email.svg',
			
				),
				"atendimento"=> array
				(
						'label'=> "Atendimento",
						'url'=> $this-> request-> base .'/atendimentos',
						//'icone'=> $this-> request-> base .'/' . $this-> request-> params['plugin'] . '/img/icn/orcamento.svg',
	
				)
		);
		$sessionAuth = $this-> Session-> read('Auth');
		//pr($sessionAuth); exit;
		if ($sessionAuth && isset($sessionAuth['User']))
		{
			$dataMenu['sessao'] = 
			array
			(
						'label'=> "Sair",
						'url'=> $this-> request-> base .'/users/logout',
						//'icone'=> $this-> request-> base .'/' . $this-> request-> params['plugin'] . '/img/icn/orcamento.svg',
	
				
			);

		}
		//pr($dataMenu);
		//exit;
		return $dataMenu;
	}
	/**
     *
     * @param string $to
     * @param string $subject
     * @param string $msg conteúdo do email
     * @param string $name
     * @return Ambigous <boolean, multitype:>
     */
    public function enviaEmail($to, $subject = "Contato via SIAH", $msg = 'Vazio', $name = 'SIAH')
    {
        if($_SERVER["SERVER_NAME"] == 'localhost')
        {
            return true;
        } else
        {
              
            $from = 'sitesiah@siahonline.com.br';
            $this-> Email->sendAs = "html"; // html, text, both
            $this->set("conteudo", $msg); // especifica variavel da mensagem para o template
            //$this->Email->layout = "contact"; // views/elements/email/html/contact.ctp
            $this-> Email-> template = "default"; //$this->Email->template = "contact";
            // set view variables as normal
            $this->set("from", $this-> treatCharset($name));
            $this->set("msg", $this-> treatCharset($msg));
           
            $this->set("content", $this-> treatCharset($msg));
           
            $this->Email-> to = $this-> treatCharset($to);
            $this->Email-> subject = $this-> treatCharset($subject);
            $this->Email-> replyTo = $this-> treatCharset($from);
            $this->Email-> from = $this-> treatCharset($name . "<" . $from .">");
            $this->Email-> textMessage = "Aqui é textMessage. ";
            //$this->Email->
            $retEmail = ($this->Email->send($this-> treatCharset($msg)));
            //$this-> log(print_r("\nretEmail: " , 1));
            //$this-> log(print_r($retEmail, 1));
            return $retEmail;
        }
    }
     
 
    public function treatCharset($string = '')
    {
        
        if($this-> response-> charset() != "UTF-8")
        {
        	//$this->log('alterou charset');
            return utf8_decode($string);
        } else
        {
        	//$this->log('Não alterou charset');
            return $string;
        }
    }
}

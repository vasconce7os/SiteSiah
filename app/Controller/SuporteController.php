<?php



App::uses('AppController', 'Controller');


class SuporteController extends AppController 
{

	//public $uses = array();
	//var $scaffold;
	//var $components = array("Email");

	public function index()
	{
		$this-> set('title_for_layout', "Suporte SIAH");
		$meta['description'] = "O software A7 da SIAH conta com suporte técnico via telefone e através de qualquer navegador web para garantir estabilidade e confiança";
		$meta['keywords'] = "suporte SIAH, chamado SIAH, suporte A7";
		$meta['abstract'] = "A SIAH soluções inteligentes oferece suporte técnico a seus clientes via internet através de qualquer navegador web";
		$this-> setMetaTags($meta);
		
	}
}

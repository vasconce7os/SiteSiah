<?php



App::uses('AppController', 'Controller');


class AtendimentosController extends AppController {

/**
 * This controller does not use a model
 *
 * @var array
 agora no maiúsculo
 */
	public $uses = array();


	public function index() 
	{



		$this-> set('title_for_layout', "Atendimentos SIAH");
		//metas
		$meta['description'] = "A SIAH  disponibilizando sua localização, horário de atendimento e várias formas de contatos para que a comunicação entre seus parceiros esteja sempre presente.";
		$meta['keywords'] = "Atendimento SIAH, Contato SIAH, Suporte SIAH";
		$meta['abstract'] = "A SIAH  disponibiliza sua localização, horário de atendimento e várias formas de contatos para que a comunicação entre seus parceiros esteja sempre presente.";
		$this-> setMetaTags($meta);
		/*
		$this-> set('title_for_layout', "Atendimento SIAH");
		$this-> cssExtra[] = array('file'=> 'css/bootstrap.min', 'comment'=> "Css 2 col", 'shortPath'=> true, 'media'=> "all");
		$this-> cssExtra[] = array('file'=> 'css/font-awesome.min', 'comment'=> "icones no formato de font", 'shortPath'=> true, 'media'=> "all");
		$this-> set('cssExtra', $this-> cssExtra);
		*/
	}
}

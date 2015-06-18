<?php
App::uses('AppController', 'Controller');
class ClientesController extends AppController 
{
	public $uses = array();
	public function index() 
	{
		$this-> set('title_for_layout', "Clientes da SIAH");
		$meta['description'] = "a SIAH solu??es inteligentes tem um portf?lio repleto de clientes com solu??es consistentes e imediatas";
		$meta['keywords'] = "clientes SIAH, portf?lio SIAH, parceiros da SIAH";
		$meta['abstract'] = "O portf?lio da SIAH est? repleto de empresas que podem contar com solu??es consistentes e imediatas no que se refere a automa??o em gest?o empresarial.";
		$this-> setMetaTags($meta);
	}
	public function lojas_baiano() 
	{
		$this-> set('title_for_layout', "Portfolio SIAH: Lojas Baiano");
		$meta['description'] = "As Lojas Baiano antes conhecidas como Grupo Baiano fazem uso do A7";
		$meta['keywords'] = "Lojas Baiano, Grupo Baiano, cliente SIAH, portfolio SIAH, A7, Baiano";
		$meta['abstract'] = "As Lojas Baiano antes conhecidas como Grupo Baiano fazem uso do A7";
		$meta['url'] = $this-> curPageURL() .'/'. $this-> request-> controller .'/'. $this-> request-> action . $this-> extPages;
		//pr($meta);
		//exit;
		$this-> setMetaTags($meta);
	}
	public function amazonas_eletro() 
	{
		$this-> set('title_for_layout', "Cliente SIAH: Amazonas Eletro");
		$meta['description'] = "AMAZONAS ELETROMEC?NICA atua na ?rea de Assist?ncia T?cnica e manuten??o de Motores e  Geradores El?tricos de Baixa e M?dia Tens?o, bomba centr?fuga e submersa";
		$meta['keywords'] = "AMAZONAS ELETROMEC?NICA, AMAZONAS ELETRO, cliente SIAH, portfolio SIAH, A7";
		$meta['abstract'] = "AMAZONAS ELETRO atua na ?rea de Assist?ncia T?cnica e manuten??o de Motores e  Geradores El?tricos de Baixa e M?dia Tens?o, bomba centr?fuga e submersa";
		$meta['url'] = $this-> curPageURL() .'/'. $this-> request-> controller .'/'. $this-> request-> action . $this-> extPages;
		$this-> setMetaTags($meta);
	}
	public function ferragens_sao_pedro() 
	{
		$this-> set('title_for_layout', "Cliente SIAH: Ferragens S?o Pedro");
		$meta['description'] = "Av Torquato Tapajos, 11546, Manaus";
		$meta['keywords'] = "Av Torquato Tapajos, 11546, Manaus, cliente SIAH, A7";
		$meta['abstract'] = "Av Torquato Tapajos, 11546, Manaus";
		$meta['url'] = $this-> curPageURL() .'/'. $this-> request-> controller .'/'. $this-> request-> action . $this-> extPages;
		$this-> setMetaTags($meta);
	}
	public function importadora_luanjo() 
	{
		$this-> set('title_for_layout', "Cliente SIAH: Importadora Luanjo");
		$meta['description'] = "Importadora Luanjo - materiais de constru??o";
		$meta['keywords'] = "Luanjo, Importadora Luanjo, cliente SIAH, A7";
		$meta['abstract'] = "Importadora Luanjo - materiais de constru??o";
		$meta['url'] = $this-> curPageURL() .'/'. $this-> request-> controller .'/'. $this-> request-> action . $this-> extPages;
		$this-> setMetaTags($meta);
	}
	public function nitron_gases() 
	{
		$this-> set('title_for_layout', "Cliente SIAH: Nitron Gases");
		$meta['description'] = "A Nitron Gases ? uma empresa s?lida e com vasta experi?ncia no ramo dos gases industriais e medicinais, est? localizada no Distrito Industrial de Manaus";
		$meta['keywords'] = "Nitron Gases, Nitron gas, cliente SIAH, A7";
		$meta['abstract'] = "A Nitron Gases est? localizada no Distrito Industrial de Manaus, fornece gases industriais e medicinais";
		$meta['url'] = $this-> curPageURL() .'/'. $this-> request-> controller .'/'. $this-> request-> action . $this-> extPages;
		$this-> setMetaTags($meta);
	}
	public function fazenda_sao_pedro() 
	{
		$this-> set('title_for_layout', "Cliente SIAH: Fazenda S?o Pedro");
		$meta['description'] = "A Fazenda S?o Pedro est? localizada na BR-174 e fornece ovos regionais e selecionados, atende pequenos e grandes comerciantes";
		$meta['keywords'] = "Fazenda S?o Pedro, Ovos S?o Pedro, cliente SIAH, A7";
		$meta['abstract'] = "A Fazenda S?o Pedro est? localizada na BR-174 e fornece ovos regionais e selecionados, atende pequenos e grandes comerciantes";
		$meta['url'] = $this-> curPageURL() .'/'. $this-> request-> controller .'/'. $this-> request-> action . $this-> extPages;
		$this-> setMetaTags($meta);
	}
	public function pool_manaus() 
	{
		$this-> set('title_for_layout', "Cliente SIAH: Pool Manaus");
		$meta['description'] = "A POOL EL?TRICA Manaus comercializa materiais, ferramentas, maquinas e equipamentos el?tricos no varejo e atacado";
		$meta['keywords'] = "POOL EL?TRICA manaus, Pool El?trica, cliente SIAH, A7";
		$meta['abstract'] = "A POOL EL?TRICA Manaus comercializa materiais, ferramentas, maquinas e equipamentos el?tricos no varejo e atacado";
		$meta['url'] = $this-> curPageURL() .'/'. $this-> request-> controller .'/'. $this-> request-> action . $this-> extPages;
		$this-> setMetaTags($meta);
	}
	public function queiroz_descartaveis() 
	{
		$this-> set('title_for_layout', "Cliente SIAH: Queiroz Descart?veis");
		$meta['description'] = "Pioneira no comercio de descart?veis e embalagens a QUEIROZ atua no mercado amazonense h? 15 anos, fornecendo embalagens e descart?veis diversos";
		$meta['keywords'] = "Queiroz, Descart?veis, embalagens, A7";
		$meta['abstract'] = "Pioneira no comercio de descart?veis e embalagens a QUEIROZ atua no mercado amazonense h? 15 anos, fornecendo embalagens e descart?veis diversos";
		$meta['url'] = $this-> curPageURL() .'/'. $this-> request-> controller .'/'. $this-> request-> action . $this-> extPages;
		$this-> setMetaTags($meta);
	}
	public function rei_das_mangueiras() 
	{
		$this-> set('title_for_layout', "Cliente SIAH: Rei das Mangueiras");
		$meta['description'] = "O Rei das MangueiraS fornece mangueiras automotivas, industriais e hidr?ulicas, desde baixa, media, alta e super alta press?o de diversos tamanhos";
		$meta['keywords'] = "Rei das Mangueiras, mangueiras, cliente SIAH, A7";
		$meta['abstract'] = "O Rei das MangueiraS fornece mangueiras automotivas, industriais e hidr?ulicas, desde baixa, media, alta e super alta press?o de diversos tamanhos";
		$meta['url'] = $this-> curPageURL() .'/'. $this-> request-> controller .'/'. $this-> request-> action . $this-> extPages;
		$this-> setMetaTags($meta);
	}
	public function svi_instalacoes() 
	{
		$this-> set('title_for_layout', "Cliente SIAH: SVI Instala??es");
		$meta['description'] = "A SVI Instala??es est? na Av. Joaquim Gonzaga Pinheiro, n?mero 495 no centro de Manaus Centro Manaus. Comercializa material el?trico e outros";
		$meta['keywords'] = "SVI Instala??es, SVI, cliente SIAH, A7";
		$meta['abstract'] = "A SVI Instala??es est? na Av. Joaquim Gonzaga Pinheiro, n?mero 495 no centro de Manaus Centro Manaus. Comercializa material el?trico e outros";
		$meta['url'] = $this-> curPageURL() .'/'. $this-> request-> controller .'/'. $this-> request-> action . $this-> extPages;
		$this-> setMetaTags($meta);
	}

	public function lojas_cla() 
	{
		$this-> set('title_for_layout', "Loja CLA");
		$meta['description'] = "A SVI Instala??es est? na Av. Joaquim Gonzaga Pinheiro, n?mero 495 no centro de Manaus Centro Manaus. Comercializa material el?trico e outros";
		$meta['keywords'] = "SVI Instala??es, SVI, cliente SIAH, A7";
		$meta['abstract'] = "A SVI Instala??es est? na Av. Joaquim Gonzaga Pinheiro, n?mero 495 no centro de Manaus Centro Manaus. Comercializa material el?trico e outros";
		$meta['url'] = $this-> curPageURL() .'/'. $this-> request-> controller .'/'. $this-> request-> action . $this-> extPages;
		$this-> setMetaTags($meta);
	}

	public function casa_da_borracha() 
	{
		$this-> set('title_for_layout', "Casa da Borracha");
		$meta['description'] = "Comercializa correias, mangueiras, cilindros, mangotes, len??is de borracha, artefatos de borracha em geral, EPI`s e servi?os de Automa??o Industrial";
		$meta['keywords'] = "Casa da Borracha, cliente SIAH, usa o A7";
		$meta['abstract'] = "Comercializa correias, mangueiras, cilindros, mangotes, len??is de borracha, artefatos de borracha em geral, EPI`s e servi?os de Automa??o Industrial";
		$meta['url'] = $this-> curPageURL() .'/'. $this-> request-> controller .'/'. $this-> request-> action . $this-> extPages;
		$this-> setMetaTags($meta);
	}
	
	public function dubom_temperos() 
	{
		$this-> set('title_for_layout', "Casa da Borracha");
		$meta['description'] = "Comercializa correias, mangueiras, cilindros, mangotes, len??is de borracha, artefatos de borracha em geral, EPI`s e servi?os de Automa??o Industrial";
		$meta['keywords'] = "Casa da Borracha, cliente SIAH, usa o A7";
		$meta['abstract'] = "Comercializa correias, mangueiras, cilindros, mangotes, len??is de borracha, artefatos de borracha em geral, EPI`s e servi?os de Automa??o Industrial";
		$meta['url'] = $this-> curPageURL() .'/'. $this-> request-> controller .'/'. $this-> request-> action . $this-> extPages;
		$this-> setMetaTags($meta);
	}
	public function o_seu_estoque()
	{
		$this-> set('title_for_layout', "O Seu Estoque");
		$meta['description'] = "O SEU ESTOQUE antes conhecido como Estoque dos Lojistas tem um estoque de materiais para industria, EPIs, constru??o, lojas e etc.";
		$meta['keywords'] = "O Seu Estoque, cliente SIAH, estoque dos lojistas";
		$meta['abstract'] = "O SEU ESTOQUE antes conhecido como Estoque dos Lojistas tem um estoque de materiais para industria, EPIs, constru??o, lojas e etc.";
		$meta['url'] = $this-> curPageURL() .'/'. $this-> request-> controller .'/'. $this-> request-> action . $this-> extPages;
		$this-> setMetaTags($meta);
	}
	public function forca_construtiva()
	{
		$this-> set('title_for_layout', "For?a Construtiva");
		$meta['description'] = "A For?a Construtiva ? a uni?o de dez lojas tradicionais de Material de Constru??o de Manaus.";
		$meta['keywords'] = "For?a construtiva, cliente SIAH, f construtiva";
		$meta['abstract'] = "A For?a Construtiva ? a uni?o de dez lojas tradicionais de Material de Constru??o de Manaus";
		$meta['url'] = $this-> curPageURL() .'/'. $this-> request-> controller .'/'. $this-> request-> action . $this-> extPages;
		$this-> setMetaTags($meta);
	}
	public function inox_pro()
	{
		$this-> set('title_for_layout', "Inox Pr?");
		$meta['description'] = "Especialista na fabrica??o de pe?as em a?o inoxid?vel em geral a Inox Pr? tem conquistado espa?o no mercado Manauara e brasileiro.";
		$meta['keywords'] = "Inox Pro, cliente SIAH, Inox, Inox Manaus";
		$meta['abstract'] = "Especialista na fabrica??o de pe?as em a?o inoxid?vel em geral a Inox Pro tem conquistado espa?o no mercado Manauara e brasileiro.";
		$meta['url'] = $this-> curPageURL() .'/'. $this-> request-> controller .'/'. $this-> request-> action . $this-> extPages;
		$this-> setMetaTags($meta);
	}
	public function jcl_moveis()
	{
		$this-> set('title_for_layout', "JCL M?veis");
		$meta['description'] = "A empresa JCL M?veis atua no mercado h? 10 anos no estado do Amazonas, com mobili?rios corporativos para escrit?rios.";
		$meta['keywords'] = "JCL M?veis, , JCL, m?veis corporativos";
		$meta['abstract'] = "A empresa JCL M?veis atua no mercado h? 10 anos no estado do Amazonas, com mobili?rios corporativos para escrit?rios.";
		$meta['url'] = $this-> curPageURL() .'/'. $this-> request-> controller .'/'. $this-> request-> action . $this-> extPages;
		$this-> setMetaTags($meta);
	}
	public function marina_taua()
	{
		$this-> set('title_for_layout', "Marina Tau?");
		$meta['description'] = "A Marina Tau? se estabeleceu no inicio da d?cada de 90, sendo pioneira em guardar embarca??es em Manaus - AM.";
		$meta['keywords'] = "Marina Tau?, , Marina Manaus, N?utica Marina";
		$meta['abstract'] = "A Marina Tau? se estabeleceu no inicio da d?cada de 90, sendo pioneira em guardar embarca??es em Manaus - AM.";
		$meta['url'] = $this-> curPageURL() .'/'. $this-> request-> controller .'/'. $this-> request-> action . $this-> extPages;
		$this-> setMetaTags($meta);
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
		//$pageURL .= $_SERVER["REQUEST_URI"];
		//pr($pageURL);
		return $pageURL;
	}
	
	function beforeFilter()
	{
		parent::beforeFilter();

		$this->Auth->allow();
		//$this-> cssExtra[] = array('file'=> 'css/font-awesome.min', 'comment'=> "icones no formato de font", 'shortPath'=> true, 'media'=> "all");
		//$this-> set('cssExtra', $this-> cssExtra);
	}
	
}

<?php
App::uses('AppController', 'Controller');
class ClientesController extends AppController 
{
	public $uses = array();
	public function index() 
	{
		$this-> set('title_for_layout', "Clientes da SIAH");
		$meta['description'] = "a SIAH soluções inteligentes tem um portfólio repleto de clientes com soluções consistentes e imediatas";
		$meta['keywords'] = "clientes SIAH, portfólio SIAH, parceiros da SIAH";
		$meta['abstract'] = "O portfólio da SIAH está repleto de empresas que podem contar com soluções consistentes e imediatas no que se refere a automação em gestão empresarial.";
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
		$meta['description'] = "AMAZONAS ELETROMECÂNICA atua na Área de Assistência Técnica e manutenção de Motores e  Geradores Elétricos de Baixa e Média Tensão, bomba centrífuga e submersa";
		$meta['keywords'] = "AMAZONAS ELETROMECÂNICA, AMAZONAS ELETRO, cliente SIAH, portfolio SIAH, A7";
		$meta['abstract'] = "AMAZONAS ELETRO atua na Área de Assistência Técnica e manutenção de Motores e  Geradores Elétricos de Baixa e Média Tensão, bomba centrífuga e submersa";
		$meta['url'] = $this-> curPageURL() .'/'. $this-> request-> controller .'/'. $this-> request-> action . $this-> extPages;
		$this-> setMetaTags($meta);
	}
	public function ferragens_sao_pedro() 
	{
		$this-> set('title_for_layout', "Cliente SIAH: Ferragens São Pedro");
		$meta['description'] = "Av Torquato Tapajos, 11546, Manaus";
		$meta['keywords'] = "Av Torquato Tapajos, 11546, Manaus, cliente SIAH, A7";
		$meta['abstract'] = "Av Torquato Tapajos, 11546, Manaus";
		$meta['url'] = $this-> curPageURL() .'/'. $this-> request-> controller .'/'. $this-> request-> action . $this-> extPages;
		$this-> setMetaTags($meta);
	}
	public function importadora_luanjo() 
	{
		$this-> set('title_for_layout', "Cliente SIAH: Importadora Luanjo");
		$meta['description'] = "Importadora Luanjo - materiais de construção";
		$meta['keywords'] = "Luanjo, Importadora Luanjo, cliente SIAH, A7";
		$meta['abstract'] = "Importadora Luanjo - materiais de construção";
		$meta['url'] = $this-> curPageURL() .'/'. $this-> request-> controller .'/'. $this-> request-> action . $this-> extPages;
		$this-> setMetaTags($meta);
	}
	public function nitron_gases() 
	{
		$this-> set('title_for_layout', "Cliente SIAH: Nitron Gases");
		$meta['description'] = "A Nitron Gases é uma empresa sólida e com vasta experiência no ramo dos gases industriais e medicinais, está localizada no Distrito Industrial de Manaus";
		$meta['keywords'] = "Nitron Gases, Nitron gas, cliente SIAH, A7";
		$meta['abstract'] = "A Nitron Gases está localizada no Distrito Industrial de Manaus, fornece gases industriais e medicinais";
		$meta['url'] = $this-> curPageURL() .'/'. $this-> request-> controller .'/'. $this-> request-> action . $this-> extPages;
		$this-> setMetaTags($meta);
	}
	public function fazenda_sao_pedro() 
	{
		$this-> set('title_for_layout', "Cliente SIAH: Fazenda São Pedro");
		$meta['description'] = "A Fazenda São Pedro está localizada na BR-174 e fornece ovos regionais e selecionados, atende pequenos e grandes comerciantes";
		$meta['keywords'] = "Fazenda São Pedro, Ovos São Pedro, cliente SIAH, A7";
		$meta['abstract'] = "A Fazenda São Pedro está localizada na BR-174 e fornece ovos regionais e selecionados, atende pequenos e grandes comerciantes";
		$meta['url'] = $this-> curPageURL() .'/'. $this-> request-> controller .'/'. $this-> request-> action . $this-> extPages;
		$this-> setMetaTags($meta);
	}
	public function pool_manaus() 
	{
		$this-> set('title_for_layout', "Cliente SIAH: Pool Manaus");
		$meta['description'] = "A POOL ELÉTRICA Manaus comercializa materiais, ferramentas, maquinas e equipamentos elétricos no varejo e atacado";
		$meta['keywords'] = "POOL ELÉTRICA manaus, Pool Elétrica, cliente SIAH, A7";
		$meta['abstract'] = "A POOL ELÉTRICA Manaus comercializa materiais, ferramentas, maquinas e equipamentos elétricos no varejo e atacado";
		$meta['url'] = $this-> curPageURL() .'/'. $this-> request-> controller .'/'. $this-> request-> action . $this-> extPages;
		$this-> setMetaTags($meta);
	}
	public function queiroz_descartaveis() 
	{
		$this-> set('title_for_layout', "Cliente SIAH: Queiroz Descartáveis");
		$meta['description'] = "Pioneira no comercio de descartáveis e embalagens a QUEIROZ atua no mercado amazonense há 15 anos, fornecendo embalagens e descartáveis diversos";
		$meta['keywords'] = "Queiroz, Descartáveis, embalagens, A7";
		$meta['abstract'] = "Pioneira no comercio de descartáveis e embalagens a QUEIROZ atua no mercado amazonense há 15 anos, fornecendo embalagens e descartáveis diversos";
		$meta['url'] = $this-> curPageURL() .'/'. $this-> request-> controller .'/'. $this-> request-> action . $this-> extPages;
		$this-> setMetaTags($meta);
	}
	public function rei_das_mangueiras() 
	{
		$this-> set('title_for_layout', "Cliente SIAH: Rei das Mangueiras");
		$meta['description'] = "O Rei das MangueiraS fornece mangueiras automotivas, industriais e hidráulicas, desde baixa, media, alta e super alta pressão de diversos tamanhos";
		$meta['keywords'] = "Rei das Mangueiras, mangueiras, cliente SIAH, A7";
		$meta['abstract'] = "O Rei das MangueiraS fornece mangueiras automotivas, industriais e hidráulicas, desde baixa, media, alta e super alta pressão de diversos tamanhos";
		$meta['url'] = $this-> curPageURL() .'/'. $this-> request-> controller .'/'. $this-> request-> action . $this-> extPages;
		$this-> setMetaTags($meta);
	}
	public function svi_instalacoes() 
	{
		$this-> set('title_for_layout', "Cliente SIAH: SVI Instalações");
		$meta['description'] = "A SVI Instalações está na Av. Joaquim Gonzaga Pinheiro, número 495 no centro de Manaus Centro Manaus. Comercializa material elétrico e outros";
		$meta['keywords'] = "SVI Instalações, SVI, cliente SIAH, A7";
		$meta['abstract'] = "A SVI Instalações está na Av. Joaquim Gonzaga Pinheiro, número 495 no centro de Manaus Centro Manaus. Comercializa material elétrico e outros";
		$meta['url'] = $this-> curPageURL() .'/'. $this-> request-> controller .'/'. $this-> request-> action . $this-> extPages;
		$this-> setMetaTags($meta);
	}

	public function lojas_cla() 
	{
		$this-> set('title_for_layout', "Loja CLA");
		$meta['description'] = "A SVI Instalações está na Av. Joaquim Gonzaga Pinheiro, número 495 no centro de Manaus Centro Manaus. Comercializa material elétrico e outros";
		$meta['keywords'] = "SVI Instalações, SVI, cliente SIAH, A7";
		$meta['abstract'] = "A SVI Instalações está na Av. Joaquim Gonzaga Pinheiro, número 495 no centro de Manaus Centro Manaus. Comercializa material elétrico e outros";
		$meta['url'] = $this-> curPageURL() .'/'. $this-> request-> controller .'/'. $this-> request-> action . $this-> extPages;
		$this-> setMetaTags($meta);
	}

	public function casa_da_borracha() 
	{
		$this-> set('title_for_layout', "Casa da Borracha");
		$meta['description'] = "Comercializa correias, mangueiras, cilindros, mangotes, lençóis de borracha, artefatos de borracha em geral, EPI`s e serviços de Automação Industrial";
		$meta['keywords'] = "Casa da Borracha, cliente SIAH, usa o A7";
		$meta['abstract'] = "Comercializa correias, mangueiras, cilindros, mangotes, lençóis de borracha, artefatos de borracha em geral, EPI`s e serviços de Automação Industrial";
		$meta['url'] = $this-> curPageURL() .'/'. $this-> request-> controller .'/'. $this-> request-> action . $this-> extPages;
		$this-> setMetaTags($meta);
	}
	
	public function dubom_temperos() 
	{
		$this-> set('title_for_layout', "Casa da Borracha");
		$meta['description'] = "Comercializa correias, mangueiras, cilindros, mangotes, lençóis de borracha, artefatos de borracha em geral, EPI`s e serviços de Automação Industrial";
		$meta['keywords'] = "Casa da Borracha, cliente SIAH, usa o A7";
		$meta['abstract'] = "Comercializa correias, mangueiras, cilindros, mangotes, lençóis de borracha, artefatos de borracha em geral, EPI`s e serviços de Automação Industrial";
		$meta['url'] = $this-> curPageURL() .'/'. $this-> request-> controller .'/'. $this-> request-> action . $this-> extPages;
		$this-> setMetaTags($meta);
	}
	public function o_seu_estoque()
	{
		$this-> set('title_for_layout', "O Seu Estoque");
		$meta['description'] = "O SEU ESTOQUE antes conhecido como Estoque dos Lojistas tem um estoque de materiais para industria, EPIs, construção, lojas e etc.";
		$meta['keywords'] = "O Seu Estoque, cliente SIAH, estoque dos lojistas";
		$meta['abstract'] = "O SEU ESTOQUE antes conhecido como Estoque dos Lojistas tem um estoque de materiais para industria, EPIs, construção, lojas e etc.";
		$meta['url'] = $this-> curPageURL() .'/'. $this-> request-> controller .'/'. $this-> request-> action . $this-> extPages;
		$this-> setMetaTags($meta);
	}
	public function forca_construtiva()
	{
		$this-> set('title_for_layout', "Força Construtiva");
		$meta['description'] = "A Força Construtiva é a união de dez lojas tradicionais de Material de Construção de Manaus.";
		$meta['keywords'] = "Força construtiva, cliente SIAH, f construtiva";
		$meta['abstract'] = "A Força Construtiva é a união de dez lojas tradicionais de Material de Construção de Manaus";
		$meta['url'] = $this-> curPageURL() .'/'. $this-> request-> controller .'/'. $this-> request-> action . $this-> extPages;
		$this-> setMetaTags($meta);
	}
	public function inox_pro()
	{
		$this-> set('title_for_layout', "Inox Pró");
		$meta['description'] = "Especialista na fabricação de peças em aço inoxidável em geral a Inox Pró tem conquistado espaço no mercado Manauara e brasileiro.";
		$meta['keywords'] = "Inox Pro, cliente SIAH, Inox, Inox Manaus";
		$meta['abstract'] = "Especialista na fabricação de peças em aço inoxidável em geral a Inox Pro tem conquistado espaço no mercado Manauara e brasileiro.";
		$meta['url'] = $this-> curPageURL() .'/'. $this-> request-> controller .'/'. $this-> request-> action . $this-> extPages;
		$this-> setMetaTags($meta);
	}
	public function jcl_moveis()
	{
		$this-> set('title_for_layout', "JCL Móveis");
		$meta['description'] = "A empresa JCL Móveis atua no mercado há 10 anos no estado do Amazonas, com mobiliários corporativos para escritórios.";
		$meta['keywords'] = "JCL Móveis, , JCL, móveis corporativos";
		$meta['abstract'] = "A empresa JCL Móveis atua no mercado há 10 anos no estado do Amazonas, com mobiliários corporativos para escritórios.";
		$meta['url'] = $this-> curPageURL() .'/'. $this-> request-> controller .'/'. $this-> request-> action . $this-> extPages;
		$this-> setMetaTags($meta);
	}
	public function marina_taua()
	{
		$this-> set('title_for_layout', "Marina Tauá");
		$meta['description'] = "A Marina Tauá se estabeleceu no inicio da década de 90, sendo pioneira em guardar embarcações em Manaus - AM.";
		$meta['keywords'] = "Marina Tauá, , Marina Manaus, Náutica Marina";
		$meta['abstract'] = "A Marina Tauá se estabeleceu no inicio da década de 90, sendo pioneira em guardar embarcações em Manaus - AM.";
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

<?php
class ClientesController extends AdministracaoAppController 
{
	//public $components = array('Paginator', "Email");
	public $components = array('Administracao.Images', 'Paginator');
	public $uses = array('Administracao.Cliente');
	public function index()
	{
		$options = array(
			'fields' => array('Cliente.id', 'Cliente.cnpj', 'Cliente.fantasia', 'Cliente.email', 'Cliente.url_logo', 'Cliente.created'),
			'conditions' => array(),
			'order' => array('Cliente.fantasia' => 'ASC'),
			'limit' => 10
		);
		$this-> paginate = $options;
		$lClientes = $this-> paginate('Cliente');
		if(!$lClientes)
		{
			$this-> Session-> setFlashAtencao("Não há clientes!");
		}
		$this-> set('lClientes', $lClientes);
		//$this-> set('totalClientes', $this-> Cliente-> find('count'));
		$this-> set('title_for_layout', "Listando clientes");
	}
	
	public function inserir()
	{
		$this-> set('title_for_layout', "Inserir cliente");
		if($this-> request-> is('post'))
		{
			try
	        {
	        	//pr($this-> request->data);
	        	//exit;
	        	$extencoes = array ('image/jpeg', 'image/png');
	            $dimensoes['larguraExata'] = 375;
	            $dimensoes['alturaExata'] = 360;
	            $data = $this-> request->data;
	            $img = $data['Cliente']['url_logo'];
	            $imgRetorno = $this-> Images-> checaArquivoDimensaoExata($extencoes, $dimensoes, $img);
	            if($imgRetorno['OK'] == FALSE)
                {
                	$errosNivel2 = null;
                	$arrayErrosImg = $imgRetorno;
                	unset($arrayErrosImg['OK']);
                	foreach ($arrayErrosImg as $k => $v)
                	{
                        $errosNivel2 .= "\n\t<li>".$v."</li>";
                    }
                    $errosNivel2 ="\n<ul>".$errosNivel2."\n</ul>\n";
                    $this-> Session->setFlash("Houve um erro com a imagem, certifique-se de que o arquivo que enviou está nos padrões do sistema!".$errosNivel2
                        , 'default'
                        , array('class' => $this-> errorMsgClass));
                } else 
                {
                    //print_r($this-> request->data);
                    $imgNome = 'imgLogoCli_'.$this-> sessionAdmin[0]['Admin']['id'].'_'.$data['Cliente']['fantasia'];
                    if($_SERVER["SERVER_NAME"] == 'localhost')
			        {
			            $imgDiretorio = 'img/clientes/tests/';
			        } else
			        {
			        	$imgDiretorio = 'img/clientes/';
			        }
                    
                    $imgRetorno = $this-> Images ->  salvaArqivoTemp($imgNome, $extencoes, $imgDiretorio, $img);
                    if($imgRetorno['OK'] == FALSE)
                    {
                        $this-> Session->setFlash("O sistema não pede explicar o motivo pelo qual não foi possivel salvar esta imagem!"
                            , 'default'
                            , array('class' => $this-> errorMsgClass)); //msgSucesso, msgAtencao, msgErro                        
                    } else // atualizar caminho no db
                    {
                    	$dadosParaDb = $data['Cliente'];
                        $dadosParaDb['url_logo'] = @$imgRetorno['caminho'];
                        $dadosParaDb['fantasia'] = $data['Cliente']['fantasia'];
                        $dadosParaDb['link'] = $data['Cliente']['link'];
                        $dadosParaDb['admin_id'] = $this-> sessionAdmin[0]['Admin']['id'];
                        //$dadosParaDb['status'] = true;
                        //pr($dadosParaDb);
                        //$nomeP = Inflector::slug($dadosParaDb['url']);
                        //var_dump($nomeP);
                        
                        //exit;
                        $retDB = $this-> Cliente-> save($dadosParaDb);
                        if($retDB)
                        {
                            $this-> Session->setFlash("Cliente cadastrado"
                                , 'default'
                                , array('class' => $this-> successMsgClass)); //msgSucesso, msgAtencao, msgErro
                            $this-> redirect(array("plugin"=> 'administracao', "controller"=> 'clientes', 'action'=> 'index'));
                        } else
                        {
                            $this-> Session->setFlash("Erro ao inserir no banco de dados!"
                                , 'default'
                                , array('class' => 'msgErro')); //msgSucesso, msgAtencao, msgErro                        
                        }
                    }
                }
                //exit;
	        } catch (Exception $exc) 
	        {
	            echo $exc->getTraceAsString();
	        }
		}
	}

	public function ver($id = null)
	{
		$this-> Cliente-> id = $id;
		$cliente = $this-> Cliente-> read();
		if(!$cliente)
		{
			$this-> Session-> setFlashErro("Cliente não encontrado!");
			$this-> redirect(array('action'=> 'index'));
		} else
		{

		}
		$this-> request-> data = $cliente;
		$this-> set('cliente', $cliente);
		$this-> set('title_for_layout', $cliente['Cliente']['fantasia']);
	}

	public function editar($id = null)
	{

		$this-> Cliente-> id = $id;
		$cliente = $this-> Cliente-> read();
		if(!$cliente)
		{
			$this-> Session-> setFlashErro("Cliente não encontrado!");
			//$this-> redirect(array('action'=> 'index'));
		} else
		{

		}
		$this-> request-> data = $cliente;
		$this-> set('cliente', $cliente);
		$this-> set('title_for_layout', "Editar " . $cliente['Cliente']['fantasia']);
	}

	public function beforeFilter()
	{
		parent::beforeFilter();
		$this-> set('title_for_layout', 'Clientes');
	}
}
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
	        	$userForDB['User']['username'] = $this-> request->data['User']['username'];
	        	$userForDB['User']['codigo_ativacao'] = $this-> generateCode($userForDB);
	        	$userForDB['User']['role'] = 'author';
	        	//pr($userForDB);
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
                        $this-> Session->setFlash("O sistema não pede explicar o motivo pelo qual não foi possível salvar esta imagem!"
                            , 'default'
                            , array('class' => $this-> errorMsgClass)); //msgSucesso, msgAtencao, msgErro                        
                    } else // atualizar caminho no db e salvar user
                    {
                    	//salvar user

                    	$dadosParaDb['Cliente'] = $data['Cliente'];
                        $dadosParaDb['Cliente']['url_logo'] = @$imgRetorno['caminho'];
                        $dadosParaDb['Cliente']['fantasia'] = $data['Cliente']['fantasia'];
                        $dadosParaDb['Cliente']['link'] = $data['Cliente']['link'];
                        $dadosParaDb['Cliente']['admin_id'] = $this-> sessionAdmin[0]['Admin']['id'];
                        
                        $dadosParaDb['User'] = $userForDB['User'];

                        //pr($dadosParaDb);
                        		
                        $view = new View($this, false);
						$view->set('data', $this-> request-> data);
						$view->set('dadosParaDb', $dadosParaDb);
						$resposta = $view->render('email_codigo_ativacao', 'ajax');
						pr('foi');
						echo($resposta);
						/* */
                        exit;

                        $retDB = $this-> Cliente-> saveAll($dadosParaDb);
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

	private function generateCode($user = array())
	{
		$codigo = "";
		$codigo = (uniqid() . substr($user["User"]['username'], 0, 10));
		if( mb_strlen($user["User"]['username']) < 10)
		{
			throw new Exception("Nome de usuário muito curto");
		}
		$codigo .= mb_strlen($user["User"]['username']).substr($user["User"]['username'], -7) . time(); 
		$codigo .= md5($codigo);
		return ($codigo);
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
			$this-> redirect(array('action'=> 'index'));
		} else
		{

		}

		if($this-> request-> is('post') || $this-> request-> is('put'))
		{
			try 
	        {
	        	$arrayErros = null;
	        	//pr($this-> request-> data);
	        	$dadosParaDb['fantasia'] = $this-> request-> data['Cliente']['fantasia'];
	        	$dadosParaDb['cnpj'] = $this-> request-> data['Cliente']['cnpj'];
	        	$dadosParaDb['id'] = $this-> request-> data['Cliente']['id'];
	        	$dadosParaDb['naoativado'] = $this-> request-> data['Cliente']['naoativado'];
	        	$dadosParaDb['email'] = $this-> request-> data['Cliente']['email'];
	        	$dadosParaDb['admin_id'] = $this-> sessionAdmin[0]['Admin']['id'];
	        	//pr($dadosParaDb);
	        	//exit;
	        	if($this-> request-> data['Cliente']['alterarImg'] == 1)
	        	{
			        $extencoes = array ('image/jpeg', 'image/png');
		            $dimensoes['larguraExata'] = 375;
		            $dimensoes['alturaExata'] = 360;

		            $data = $this-> request->data;
		            $img = $data['Cliente']['url_logo'];
		            $imgRetorno = $this -> Images-> checaArquivoDimensaoExata($extencoes, $dimensoes, $img);
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
	                    $arrayErros[] = "Houve um erro com a imagem, certifique-se de que o arquivo que enviou obedece os padrões do sistema!".$errosNivel2;
	                } else // arquivo obedece os parametros do sistema
	                {
	                    $imgNome = 'alt_' .strtolower($data['Cliente']['fantasia']) .'_'. $this-> Cliente-> id. '_' .$this-> sessionAdmin[0]['Admin']['id'];
		                

	                    /*Função fopen usada para abrir arquivo, ou seja, joga-lo na memória do servidor, neste caso o arquivo ainda não existe.
						o "w" quer dizer write, que o arquivo pode ser escrito */

						//$arquivo = fopen("arquivo_criado_por_php.txt", "w");

						//$texto = "Olá Mundo! " . time();

						/*a função fwrite escreve o valor da variável $texto no arquivo.txt se o arquivo não existe o php cria o arquivo*/
						//$fwrite = fwrite($arquivo, $texto);
						
						//Debugger::dump($fwrite);

						/*a função fclose retira o arquivo.txt da memória o servidor*/
						//$fclose = fclose($arquivo);
						//var_dump($fclose);

	                    //exit;


		                if($_SERVER["SERVER_NAME"] == 'localhost')
				        {
				            $imgDiretorio = '/img/clientes/tests/';
				            if(!is_dir(WWW_ROOT . DS ."img" . DS . "clientes" . DS . "tests2" . DS))
							{
								try
								{
									mkdir(WWW_ROOT . DS ."img" . DS . "clientes" . DS . "tests2" . DS);
								} catch(ErrorException $ex)
								{
									//echo "Error: " . $ex->getMessage();
									$arrayErros[] = $ex->getMessage();
								}
							}
				        } else
				        {
				            $imgDiretorio = 'img' . DS . 'clientes' . DS;
				            //$imgDiretorio = './';
				            if(!is_dir(WWW_ROOT . DS ."img" . DS . "clientes" . DS . "tests" . DS))
							{
								try 
								{
									mkdir(WWW_ROOT . DS ."img" . DS . "clientes" . DS . "tests" . DS);
								} catch(ErrorException $ex)
								{
									//echo "Error: " . $ex->getMessage();
									$arrayErros[] = $ex->getMessage();
								}
							}
				        }
                    	
	                    $imgRetorno = $this-> Images -> salvaArqivoTemp($imgNome, $extencoes, $imgDiretorio, $img);
	                    if($imgRetorno['OK'] == FALSE)
	                    {
	                    	$this-> log("imgRetorno: ");
							$this-> log("imgRetorno: " . print_r($imgRetorno, 1));
	                    	$arrayErros[] = 'O sistema não pede explicar o motivo pelo qual não foi possível salvar esta imagem, por favor contate adm do sistema!';
	                    } else // atualizar caminho no db
	                    {
	                        $dadosParaDb['url_logo'] = @$imgRetorno['caminho'];
	                        //$dadosParaDb['alt'] = $data['Cliente']['alt'];
	                    }
	                }
	        	}
	            if(!is_array($arrayErros))
	            {
	            	//pr($dadosParaDb);
	            	//pr($imgRetorno);
	            	//exit;
                    $retDB = $this-> Cliente-> save($dadosParaDb);
	            	if($retDB)
                    {
                        $this-> Session->setFlash("Cliente alterado com sucesso"
                            , 'default'
                            , array('class' => 'msgSucesso')); //msgSucesso, msgAtencao, msgErro
                        $this-> redirect(array("plugin"=> 'administracao', "controller"=> 'clientes', 'action'=> 'ver', $id));
                    } else
                    {
                        $this-> Session->setFlash("Erro ao inserir no banco de dados!"
                            , 'default'
                            , array('class' => 'msgErro')); //msgSucesso, msgAtencao, msgErro                        
                    }
	            } else
	            {
                    $msgErros = null;
                    foreach ($arrayErros as $k => $v)
                    {
                        //print_r($v);
                        $msgErros .= "\n\t<li>".$v."</li>";
                    }
                    $msgErros ="\n<ul>".$msgErros."\n</ul>\n";
                    $this-> Session->setFlash($msgErros
                        , 'default'
                        , array('class' => 'msgErro')); //msgSucesso, msgAtencao, msgErro
	            }
	        } catch (Exception $exc) 
	        {
	            echo $exc->getTraceAsString();
	        }
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
	public function test()
	{
		$lClientes = $this-> Cliente-> find('all', array());
		pr($lClientes);
		exit;
	}
}
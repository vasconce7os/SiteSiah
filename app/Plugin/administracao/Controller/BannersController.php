<?php
class BannersController  extends AdministracaoAppController
{
	public $components = array('Administracao.Images');
	public $uses = array('Administracao.Banner');

	var $larguraExata = 600;
	var $alturaExata = 315;
	
	public function index()
	{
		$lBanners = $this-> Banner-> find("all", array("conditions"=> 'Banner.status = 1'));
		$this-> set('lBanners', $lBanners);
	}
	
	public function inserir()
	{
		$this-> set('title_for_layout', "Inserir Banner");
		if($this-> request-> is('post'))
		{
			try
	        {
	        	$extencoes = array ('image/jpeg', 'image/png');
	            $dimensoes['larguraExata'] = $this-> larguraExata;
	            $dimensoes['alturaExata'] = $this-> alturaExata;
	            $data = $this-> request->data;
	            $img = $data['Banner']['url'];
	            $imgRetorno = $this-> Images-> checaArquivoDimensaoExata($extencoes, $dimensoes, $img);
	            if($imgRetorno['OK'] == FALSE)
                {
                	$errosNivel2 = null;
                	$arrayErrosImg = $imgRetorno;
                	unset($arrayErrosImg['OK']);
                	//foreach ()
                	foreach ($arrayErrosImg as $k => $v)
                	{
                        //print_r($v);
                        $errosNivel2 .= "\n\t<li>".$v."</li>";
                    }
                    $errosNivel2 ="\n<ul>".$errosNivel2."\n</ul>\n";
                    $this-> Session->setFlash("Houve um erro com a imagem, certifique-se de que o arquivo que enviou está nos padrões do sistema!".$errosNivel2
                        , 'default'
                        , array('class' => 'msgErro')); //msgSucesso, msgAtencao, msgErro
                } else 
                {
                    //print_r($this-> request->data);
                    $imgNome = 'imgBanner_'.$this-> sessionAdmin[0]['Admin']['id'].'_'.$data['Banner']['alt'];
                    $imgDiretorio = 'img/banners/';
                    $imgRetorno = $this-> Images ->  salvaArqivoTemp($imgNome, $extencoes, $imgDiretorio, $img);
                    if($imgRetorno['OK'] == FALSE)
                    {
                        $this-> Session->setFlash("O sistema não pede explicar o motivo pelo qual não foi possivel salvar esta imagem!"
                            , 'default'
                            , array('class' => 'msgErro')); //msgSucesso, msgAtencao, msgErro                        
                    } else // atualizar caminho no db
                    {
                        $dadosParaDb['url'] = @$imgRetorno['caminho'];
                        $dadosParaDb['alt'] = $data['Banner']['alt'];
                        $dadosParaDb['link'] = $data['Banner']['link'];
                        $dadosParaDb['admin_id'] = $this-> sessionAdmin[0]['Admin']['id'];
                        $dadosParaDb['status'] = true;
                        $retDB = $this-> Banner-> save($dadosParaDb);
                        if($retDB)
                        {
                            $this-> Session->setFlash("Imagem inserida"
                                , 'default'
                                , array('class' => 'msgSucesso')); //msgSucesso, msgAtencao, msgErro
                            $this-> redirect(array("plugin"=> 'administracao', "controller"=> 'banners', 'action'=> 'index'));
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
	
	public function editar($id = null)
	{
		$this-> set('title_for_layout', 'Editar Banner');
		$id = (int) $id;
		if($this-> request-> is('post'))
		{
			try 
	        {
	        	$arrayErros = null;
	        	//pr($this-> request-> data);
	        	$dadosParaDb['alt'] = $this-> request-> data['Banner']['alt'];
	        	$dadosParaDb['link'] = $this-> request-> data['Banner']['link'];
	        	$dadosParaDb['id'] = $this-> request-> data['Banner']['id'];
	        	$dadosParaDb['admin_id'] = $this-> sessionAdmin[0]['Admin']['id'];
	        	//pr($this-> sessionAdmin);
	        	//pr($dadosParaDb);
	        	//exit;
	        	if($this-> request-> data['Banner']['alterarImg'] == 1)
	        	{
		            $extencoes = array ('image/jpeg', 'image/png');
		            $dimensoes['larguraExata'] = $this-> larguraExata;
		            $dimensoes['alturaExata'] = $this-> alturaExata;
		            $data = $this-> request->data;
		            $img = $data['Banner']['url'];
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
	                    /*
	                    $this-> Session->setFlash("Houve um erro com a imagem, certifique-se de que o arquivo que enviou estï¿½ obedece os padrï¿½es do sistema!".$errosNivel2
	                        , 'default'
	                        , array('class' => 'msgErro')); //msgSucesso, msgAtencao, msgErro
	                    */
	                    $arrayErros[] = "Houve um erro com a imagem, certifique-se de que o arquivo que enviou obedece os padrões do sistema!".$errosNivel2;
	                } else // arquivo obedece os parametros do sistema
	                {
	                    $imgNome = 'imgBannerAl_'.$this-> sessionAdmin[0]['Admin']['id'].'_'.$data['Banner']['alt'];
	                    $imgDiretorio = 'img/banners/';
	                    $imgRetorno = $this-> Images -> salvaArqivoTemp($imgNome, $extencoes, $imgDiretorio, $img);
	                    if($imgRetorno['OK'] == FALSE)
	                    {
	                    	$arrayErros[] = 'O sistema não pede explicar o motivo pelo qual não foi possivel salvar esta imagem, por favor contate adm do sistema!';
	                    } else // atualizar caminho no db
	                    {
	                        $dadosParaDb['url'] = @$imgRetorno['caminho'];
	                        //$dadosParaDb['alt'] = $data['Banner']['alt'];
	                    }
	                }
	        	}
	            if(!is_array($arrayErros))
	            {
                    $retDB = $this-> Banner-> save($dadosParaDb);
	            	if($retDB)
                    {
                        $this-> Session->setFlash("Banner alterado com sucesso"
                            , 'default'
                            , array('class' => 'msgSucesso')); //msgSucesso, msgAtencao, msgErro
                        $this-> redirect(array("plugin"=> 'administracao', "controller"=> 'banners', 'action'=> 'index'));
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
		$this-> Banner-> id = $id;
		$Banner = $this-> Banner-> read();
		$this-> set('Banner', $Banner);
	}
	
	public function apagar($id = null) 
	{
		$this-> set('title_for_layout', 'Apagar Banner');
		$id = (int) $id;
	    if($this->request->is('post'))
    	{
	     	$arrayErros = null;
	        $dadosParaDB['Banner']['id'] = $id;
	        $dadosParaDB['Banner']['status'] = false;
	        if(is_array($arrayErros))
	        {
	            $msgErros = null;
	            foreach ($arrayErros as $k => $v)
	            {
	                $msgErros .= "\n\t<li>".$v."</li>";
	            }
	            $msgErros ="\n<ul>".$msgErros."\n</ul>\n";
	            $this-> Session->setFlash($msgErros
	                , 'default'
	                , array('class' => 'msgErro')); //msgSucesso, msgAtencao, msgErro
	        } else
	        {
            	$retDB = $this-> Banner-> save($dadosParaDB['Banner']);
				if($retDB)
		        {
		            $this-> Session->setFlash('OK, banner apagado'
		            	, 'default'
		                , array('class' => 'msgSucesso')); //msgSucesso, msgAtencao, msgErro
		        } else
		        {
		            $arrayErros[] = 'Houve um erro ao apagar, procure Adm do sistema!';
		        }	        	
	        }
	        $this-> redirect(array("plugin"=> 'administracao', "controller"=> 'banners', "action"=> 'index'));
    	} else
    	{  		
			$this-> Banner-> id = $id;
			$Banner = $this-> Banner-> read();
			$this-> set('Banner', $Banner);
    	}
	}
	
	public function beforeFilter()
	{
		parent::beforeFilter();
		//$this-> layout = 'Administracao.defaultAdm';
	}
}

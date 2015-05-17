<?php
class PagesController extends AdministracaoAppController 
{
	//var $scaffold;
	public function index()
	{
		$this-> set('title_for_layout', "Páginas");
		$this-> Page-> bindModel(
				array('belongsTo' => array(
						'Admin' => array(
								'className' => 'Admin',
								'fields'=> array("Admin.id", "Admin.login")
						)
				)
				)
		);
		$options = array(
				//'fields' => array('Contato.id', 'Contato.nome', 'Contato.email', 'Contato.assunto', 'Contato.telefone', 'Contato.created', 'Contato.clientecadastrado'),
				'conditions' => array(), //array('Contato.id >= 1'),
				'order' => array('Page.title' => 'asc'),
				'limit' => 20
		);
		$this-> paginate = $options;
		$lPages = $this-> paginate('Page');
		if(!$lPages)
		{
			$this-> Session-> setFlashAtencao("Não há Páginas!");
		}
		$this-> set('lPages', $lPages);
		
	}

	public function inserir()
	{
		if($this-> request-> is('post'))
		{
			try
			{
				//pr($this-> request-> data);
				$pageForDB = $this-> request-> data;
				$this-> set('page', $this-> request-> data);
				//pr($this-> logged-> Admin-> id);
				//exit;
				$pageForDB['Page']['admin_id'] = $this-> logged-> Admin-> id; //$this-> sessionAdmin[0]['Admin']['id'];
				//$pageForDB['Page']['url'] = Inflector::slug($pageForDB['Page']['url']) . $this-> extPages;
				//pr($pageForDB);
				//exit;  
				$this-> Page-> set($pageForDB);
				if ($this-> Page-> validates())
				{
					//pr("tudo certo");
					$salvou = $this-> Page-> save($pageForDB);
					if($salvou)
					{
						$this-> Session->setFlash("Página inserida com sucesso."
							, 'default'
							, array('class' => 'msgSucesso')); //msgSucesso, msgAtencao, msgErro
						$this-> redirect(array('controller'=> "administracao"));
					} else
					{
						throw new Exception("Erro ao inserir a Página no banco de dados");
					}
				} else 
				{
					$this-> Session-> setFlashErro("Verifique os erros por favor");
					// didn't validate logic
					/* $errors = $this-> Page->validationErrors;
					//pr($errors);
					$msgErro = '';
					foreach ($this-> Page->validationErrors as $key => $erro)
					{
						$msgErro .= "\n\t<li>" . $erro[0] . "</li>\n";
					}
					//pr($msgErro);
					$msgErro = "\n<ul>" . $msgErro . "</ul>\n";
					$this-> Session->setFlash($msgErro
							, 'default'
							, array('class' => 'msgErro')); //msgSucesso, msgAtencao, msgErro */
				}
				//exit;
			} catch (Exception $e)
			{
				//$this-> Session->setFlash("Erro ao inserir no banco de dados!<pre>" . $e-> getMessage() . "</pre>"
				$this-> Session->setFlash($e-> getMessage()
					, 'default'
					, array('class' => 'msgErro')); //msgSucesso, msgAtencao, msgErro
			}
		}
	}
	
	/*
	public function index() 
	{
		
	}
	*/
	


	public function editar($idPage = 0)
	{
		$this-> set('title_for_layout', "Editar Página");
		$idPage = (int) $idPage;
		//var_dump($this-> request-> is("get"));
		$page = $this-> Page-> findById($idPage);
		if($page)
		{
			if($this-> request-> is("get"))
			{
				$this-> request-> data = $page;
				//exit();
			} else if ($this-> request-> is("post") || $this-> request-> is("put"))
			{
				$pageForDB = $this-> request-> data;
				$pageForDB['Page']['admin_id'] = $this-> logged-> Admin-> id;
				$this-> Page-> set($pageForDB);
				if ($this-> Page-> validates())
				{
					//pr("tudo certo");
					//pr($pageForDB);
					//exit;
					$salvou = $this-> Page-> save($pageForDB);
					if($salvou)
					{
						$this-> Session->setFlash("Página alterada"
								, 'default'
								, array('class' => 'msgSucesso')); //msgSucesso, msgAtencao, msgErro
						$this-> redirect(array('controller'=> "administracao"));
					} else
					{
						throw new Exception("Erro ao inserir a Página no banco de dados");
					}
				} else
				{
					$this-> Session-> setFlashErro("Verifique os erros por favor");
				}
			}
			//pr($this-> request);
			//exit;
			$this-> set('title_for_layout', $page['Page']['title']);
		} else
		{
			$this-> Session-> setFlashErro("Não encontrada!");
			$this-> redirect(array('action'=> "index"));
		}
	}
	
	
}

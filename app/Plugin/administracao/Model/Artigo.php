<?php
class Artigo extends AdministracaoAppModel
{
/* 	public $validate = array(
		    'url' => array
			(
		        'notEmpty' => array
				(
		            'rule' => 'notEmpty',
					'required' => true,
					'allowEmpty' => false,
		            'message' => 'Tem que possuir um endereço/url'
		        ),
		        'uniqueRule' => array(
		            'rule' => 'isUnique',
		            'message' => 'url já registrada'
		        )
	    	),
			'title' => array
			(
					'notEmpty' => array // o nome deste indice (notEmpty) pode ser qualquer outro
					(
							'rule'    => 'notEmpty',
							'required' => true,
							'allowEmpty' => false,
							'message' => 'Você deve especificar um título',
					),
					'minLength' => array
					(
							'rule'    => array('minLength', 4),
							'required' => true,
							'allowEmpty' => false,
							'message' => 'No mínimo 4 caracteres'
					),
			), 
			'description' => array
			(
		        'notEmpty' => array
				(
		            'rule' => 'notEmpty',
					'required' => true,
					'allowEmpty' => false,
		            'message' => 'Tem que possuir uma descrição'
		        ),
		        'minLength' => array(
		            'rule' => array('minLength', 60),
		            'message' => 'Descrição deve possuir no mínimo 60'
		        )
	    	)
		
	); */
	
	
	
	public function beforeSave($options = array())
	{
		//exit;
		if(!empty($this->data['Artigo']['imggrande']['name'])) 
		{
			$this->data['Artigo']['imggrande'] = $this->upload($this->data['Artigo']['imggrande']);
		} else
		{
			unset($this->data['Artigo']['imggrande']);
		}
		$this->data['Artigo']['url'] = $this-> makeUrl($this->data['Artigo']['titulo']);
		//debug($this-> extPages);
		//exit;
	}
	
	
	
	public  function makeUrl($stringToUrl)
	{
		$this->data['Artigo']['url'] = Inflector::slug($stringToUrl,'_') . $this-> extPages;
		$lUrls = $this-> find('list', array('fields'=> "url"));
		//pr($lUrls);
		//pr($this->data['Artigo']);
		if(in_array($this->data['Artigo']['url'], $lUrls))
		{
			//pr('existe url');
			$contador = 2;
			while (in_array($this->data['Artigo']['url'], $lUrls))
			{
				$this->data['Artigo']['url'] = Inflector::slug($stringToUrl . '_' . $contador ,'_') . $this-> extPages;
				$contador++;
			}
		} else
		{
			//pr('primeira url: ... ');
		}
		//debug($this-> data);
		return $this->data['Artigo']['url'];
	}
	
	
	/**
	 * Organiza o upload.
	 * @access public
	 * @param Array $imagem
	 * @param String $data
	 */
	public function upload($imagem = array(), $dir = 'img')
	{
		if($dir == 'img')
		{
			$dir = 'img' . DS . 'artigos';
		}
		$dirShort = $dir;
		$dir = WWW_ROOT.$dir.DS;
		if(($imagem['error']!=0) and ($imagem['size']==0)) {
			throw new NotImplementedException('Alguma coisa deu errado, o upload retornou erro '.$imagem['error'].' e tamanho '.$imagem['size']);
		}
		$this->checa_dir($dir);
		$imagem = $this->checa_nome($imagem, $dir);
		$this->move_arquivos($imagem, $dir);
		//pr(Router::getRequest());
		//exit;
		return $dirShort . DS . $imagem['name'];
	}
	
	
	/**
	 * Verifica se o diretório existe, se não ele cria.
	 * @access public
	 * @param Array $imagem
	 * @param String $data
	 */
	public function checa_dir($dir)
	{
		App::uses('Folder', 'Utility');
		$folder = new Folder();
		if (!is_dir($dir)){
			$folder->create($dir);
		}
	}
	
	/**
	 * Verifica se o nome do arquivo já existe, se existir adiciona um numero ao nome e verifica novamente
	 * @access public
	 * @param Array $imagem
	 * @param String $data
	 * @return nome da imagem
	 */
	public function checa_nome($imagem, $dir)
	{
		$imagem_info = pathinfo($dir.$imagem['name']);
		$imagem_nome = $this->trata_nome($imagem_info['filename']).'.'.$imagem_info['extension'];
		//debug($imagem_nome);
		$conta = 2;
		while (file_exists($dir.$imagem_nome)) {
			$imagem_nome  = $this->trata_nome($imagem_info['filename']).'-'.$conta;
			$imagem_nome .= '.'.$imagem_info['extension'];
			$conta++;
			//debug($imagem_nome);
		}
		$imagem['name'] = $imagem_nome;
		return $imagem;
	}
	
	/**
	 * Trata o nome removendo espaços, acentos e caracteres em maiúsculo.
	 * @access public
	 * @param Array $imagem
	 * @param String $data
	 */
	public function trata_nome($imagem_nome)
	{
		$imagem_nome = strtolower(Inflector::slug($imagem_nome,'-'));
		return $imagem_nome;
	}
	
	/**
	 * Move o arquivo para a pasta de destino.
	 * @access public
	 * @param Array $imagem
	 * @param String $data
	 */
	public function move_arquivos($imagem, $dir)
	{
		App::uses('File', 'Utility');
		$arquivo = new File($imagem['tmp_name']);
		$arquivo->copy($dir.$imagem['name']);
		$arquivo->close();
	}
	
}
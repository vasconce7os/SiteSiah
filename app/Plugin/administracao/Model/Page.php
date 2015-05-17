<?php
class Page extends AdministracaoAppModel
{
	public $validate = array(
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
		
	);
}
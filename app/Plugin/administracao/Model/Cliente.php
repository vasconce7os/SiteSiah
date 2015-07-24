<?php
class Cliente extends AdministracaoAppModel
{
	var $hasOne = array('User');
		public $validate = array(
		    'email' => array
			(
		        'notEmpty' => array
				(
		            'rule' => 'notEmpty',
					'required' => true,
					'allowEmpty' => false,
		            'message' => 'Não pode ser vazio'
		        ),
		        'uniqueRule' => array(
		            'rule' => 'isUnique',
		            'message' => 'E-mail já cadastrado!'
		        )
	    	),
		    'cnpj' => array
			(
		        'notEmpty' => array
				(
		            'rule' => 'notEmpty',
					'required' => true,
					'allowEmpty' => false,
		            'message' => 'Adicione o CNPJ da empresa'
		        ),
		        'uniqueRule' => array(
		            'rule' => 'isUnique',
		            'message' => 'CNPJ já cadastrado!'
		        )
	    	)
	);
}
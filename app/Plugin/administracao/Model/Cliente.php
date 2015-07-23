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
		            'message' => 'Não ode ser vazio'
		        ),
		        'uniqueRule' => array(
		            'rule' => 'isUnique',
		            'message' => 'E-mail já cadastrado!'
		        )
	    	)
	);
}
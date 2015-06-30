<?PHP
class Chamado extends AppModel 
{
    public $hasMany = array(
        'Chamadomsg' => array(
            'className' => 'Chamadomsg',
            // do exemplo //'conditions' => array('Chamadomsg.approved' => '1'),
            //'order' => 'Chamadomsg.created DESC'
        )
    );
    /*
    public $actsAs = array(
        'CakePHP-Enum-Behavior.Enum' => array(
            'satisfacao' => array('ruim'=> 'ruim','regular'=> 'regular','bom'=> 'bom','ótimo'=> 'ótimo')
        )
    );
    */
    public function getMessagesChamado($idChamado)
    {
    	$idChamado = (int) $idChamado;
    	/*
        $sql = "
    		select Chamadomsg.id, Chamadomsg.msg, Chamadomsg.created, Chamadomsg.chamado_id,
			User.id, User.username
			from chamadomsgs Chamadomsg
			join users User on User.id = Chamadomsg.user_id
			where
			Chamadomsg.chamado_id = $idChamado
			order by Chamadomsg.id
			";
            */
        $sql = "
            select Chamadomsg.id, Chamadomsg.msg, Chamadomsg.created
            , Chamadomsg.chamado_id
            , User.id, User.username 
               , (select count(id)
                from admins Admin
                where user_id = User.id) qtdeAdmin
               , if((select count(id)
                from admins Admin
                where user_id = User.id) > 0,'Suporte', 'Cliente') tipoUsuario
            from chamadomsgs Chamadomsg 
            join users User on User.id = Chamadomsg.user_id 
            where Chamadomsg.chamado_id = $idChamado 
            order by Chamadomsg.id
            ";
		return $this->query($sql);
    }
}
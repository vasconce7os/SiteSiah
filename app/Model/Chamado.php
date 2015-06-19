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

    public function getMessagesChamado($idChamado)
    {
    	$idChamado = (int) $idChamado;
    	$sql = "
    		select Chamadomsg.id, Chamadomsg.msg, Chamadomsg.created, Chamadomsg.chamado_id,
			User.id, User.username
			from chamadomsgs Chamadomsg
			join users User on User.id = Chamadomsg.user_id
			where
			Chamadomsg.chamado_id = $idChamado
			order by Chamadomsg.id
			";
		return $this->query($sql);
    }
}
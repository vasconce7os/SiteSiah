<?PHP
class Chamado extends AdministracaoAppModel 
{
    public $hasMany = array(
        'Chamadomsg' => array(
            'className' => 'Chamadomsg',
            // do exemplo //'conditions' => array('Chamadomsg.approved' => '1'),
            //'order' => 'Chamadomsg.created DESC'
        ),
        //'User'
    );
    
    public $belongsTo = array(
        'User' => array(
            'className' => 'User'
        )
    );


    public function getMessagesChamado($idChamado)
    {
        $idChamado = (int) $idChamado;

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
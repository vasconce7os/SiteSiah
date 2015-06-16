<?PHP
class Chamado extends AdministracaoAppModel 
{
    public $hasMany = array(
        'Chamadomsg' => array(
            'className' => 'Chamadomsg',
            // do exemplo //'conditions' => array('Chamadomsg.approved' => '1'),
            //'order' => 'Chamadomsg.created DESC'
        )
    );
}
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
}
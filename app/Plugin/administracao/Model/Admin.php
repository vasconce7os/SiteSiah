<?PHP
class Admin extends AdministracaoAppModel 
{
    public $belongsTo = array(
        'User' => array(
            'className' => 'User'
        )
    );
}
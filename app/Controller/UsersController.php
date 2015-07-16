<?php
// app/Controller/UsersController.php
class UsersController extends AppController 
{
    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('add', 'logout', 'ativar_via_url');
    }

    public function index() {
        $this->User->recursive = 0;
        $this->set('users', $this->paginate());
    }

    public function view($id = null) {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        $this->set('user', $this->User->read(null, $id));
    }

    public function add() {
        if ($this->request->is('post')) {
            $this->User->create();
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('The user has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
            }
        }
    }

    public function edit($id = null) {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('The user has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->User->read(null, $id);
            unset($this->request->data['User']['password']);
        }
    }

    public function delete($id = null) {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->User->delete()) {
            $this->Session->setFlash(__('User deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('User was not deleted'));
        $this->redirect(array('action' => 'index'));
    
    }

	public function login() {
        $meta['robots'] = "noindex";
        $this-> setMetaTags($meta);

	    if ($this->Auth->login()) {
	        $this->redirect($this->Auth->redirect());
	    } else {
            //Este if é gambiarra
	        if ($this-> request-> is('post'))
            {
                $this-> Session->setFlash('Senha ou usuário inválidos, tente novamente'
                    , 'default'
                    , array('class' => $this-> errorMsgClass)); 
            }
	    }
	}

	public function logout() {
	    $this->redirect($this->Auth->logout());
	}

    public function session()
    {
        pr($this-> Session-> read());
        exit;
    }

    public function ativar_via_url($codigoAtivacao = null)
    {
        if(!$codigoAtivacao)
        {
            $this-> log("Tentou ativar sem código!");
            throw new Exception("Vamos interpretar isto como uma tentativa de burlar o sistema, o código de ativação não existe!", 1);
        }
        $this-> set('title_for_layout', "Ativar cadastro via código");
        $this-> User-> bindModel(
            array('belongsTo' => array('Cliente'))
        );
        /*
        $user = $this-> User-> find('first',
                array
                (
                    'conditions'=> array
                    (
                        array
                        (
                            'and'=> array
                            (
                                'User.codigo_ativacao ='=> $codigoAtivacao,
                                //'not'=> array('User.password'=> null)
                                'User.password ='=> null
                            )
                        )
                        
                    )
                )
            );
        */

        $user = $this-> User-> find('first',
                array
                (
                    'conditions'=> array
                    (
                        'User.codigo_ativacao ='=> $codigoAtivacao                     
                    )
                )
            );
        if(!$user)
        {
            $this-> log("Tentou ativar com código inexistente!");
            throw new Exception("Vamos interpretar isto como uma tentativa de burlar o sistema, código de ativação inexistente!", 1);
        }
        if($user['User']['password'] === null)
        {
            $this-> set('user', $user);
        } else
        {
            $this-> Session->setFlash("Este código já foi usado, alguém na 
                empresa " . $user['Cliente']['fantasia'] . " já confirmou o cadastro!"
                , 'default'
                , array('class' => $this-> warningMsgClass));
            $this->redirect('/');
        }
        if($this-> request-> is('post'))
        {
            $msgError = null;
            if($this-> request-> data['User']['password'] == $this-> request-> data['User']['password2'])
            {
                $dadosForDB['User']['password'] = $this-> request-> data['User']['password'];
            } else
            {
                $msgError .= "<p>As senha não coicidem!</p>";
            }
            if($this-> request-> data['User']['username'] == $this-> request-> data['User']['username2'])
            {
                $dadosForDB['User']['username'] = $this-> request-> data['User']['username'];
            } else
            {
                $msgError .= "<p>Digite o nome de usuário corretamente!</p>";
            }
            if($msgError === null)
            {
                $dadosForDB['User']['id'] = $user['User']['id'];
                if($this-> User-> save($dadosForDB))
                {
                    $this-> Session->setFlash("Cadastro de usuário confirmado, representantes da 
                        empresa <strong>" . $user['Cliente']['fantasia'] . "</strong> já podem solicitar atendimento online"
                        , 'default'
                        , array('class' => $this-> successMsgClass));
                    $this->Session->write('Auth.redirect', "/");
                    $this-> redirect(array('action'=> "login"));
                }
            } else
            {
                $this-> Session->setFlash($msgError
                    , 'default'
                    , array('class' => $this-> errorMsgClass)); 
            }
        }
    }
}
<?php
// app/Controller/UsersController.php
class UsersController extends AppController 
{


    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('add', 'logout');
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
        //pr($meta);
        //exit;
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
		//pr("para");
		//exit;
	    $this->redirect($this->Auth->logout());
	}

    public function session()
    {
        pr($this-> Session-> read());
        //pr('lol');
        exit;
    }
}
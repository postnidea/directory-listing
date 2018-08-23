<?php 
class UsersController extends AppController {

    public $components = array('Paginator');
    public function index() {
       /* if($this->Session->check('Auth.User')){
          return $this->redirect(array('action' => 'dashboard'));  
        }*/

    }
    public function add() {
        if ($this->request->is('post')) {
            $this->User->create();
            $data = $this->request->data;
            $data['User']['role'] = 'customer';                     
            if ($this->User->save($data)) {
                //$this->Flash->success('The user has been saved');
                 $this->Session->setFlash('you signup successfully !','default',array('class' => 'alert alert-warning alert-dismissible fade show'));
                return $this->redirect(array('action' => 'index'));
            }
            $errors = $this->User->validationErrors;
            foreach ($errors as $fieldname=>$error) {
                $message = '<b>'.$fieldname.'</b>: '.$error[0];
                $this->Flash->error($message,['params' => ['class' => 'alert alert-success']]);
            }
            
            return $this->redirect(array('action' => 'index'));
        }
    }
    
    public function login() {

         if ($this->request->is('post')) {
           // die("==============    normal  login call =========");
            if ($this->Auth->login()) {
                return $this->redirect(array('controller' => 'dashboard'));
            }
            $this->Flash->error(__('Invalid username or password, try again'));
        }
    }

    public function admin_login() {
        if($this->Session->check('Auth.User')){
          return $this->redirect(array('action' => 'dashboard'));  
        }
           if ($this->request->is('post')) {
            //die("==============    admin  login call =========");
                if ($this->Auth->login()) {
                    return $this->redirect($this->Auth->redirectUrl());
                }
                 $this->Flash->error(__('Invalid username or password, try again'),['params' => ['class' => 'alert alert-danger']]);        
            }
    }

    public function admin_edit($id){
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }

        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->User->save($this->request->data)) {
                $this->Flash->success(__('The user has been saved'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Flash->error(
                __('The user could not be saved. Please, try again.')
            );
        } else {
            $this->request->data = $this->User->findById($id);
            unset($this->request->data['User']['password']);
        }
    }

    public function admin_delete($id = null) {
        $this->autoRender = false ;
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
       // $this->request->onlyAllow('post', 'delete');
        if ($this->User->delete()) {
             $this->Session->setFlash('User deleted successfully !','default',array('class' => 'alert alert-warning alert-dismissible fade show'));
        } else {
             $this->Session->setFlash('There is error in deleting','default',array('class' => 'alert alert-warning alert-dismissible fade show'));
        }
        return $this->redirect(array('action' => 'index'));
    }

    public function admin_dashboard(){  }

    public function admin_logout() {
         $this->Session->setFlash('You are logout successfully !','default',array('class' => 'alert alert-warning alert-dismissible fade show'));
        $this->redirect($this->Auth->logout());
    }

    public function admin_index(){
        $this->User->recursive = 0;
        //$this->Paginator->settings['conditions'] = array(array('NOT' => array('User.group_id' => array(1, 2, 3))));
        $this->Paginator->settings = array('limit' => 10);
        $this->set('users', $this->Paginator->paginate());
    }

    public function admin_vew(){
        echo "============================";
    }

    public function dashboard(){ 

    }

    public function admin_add(){
       if ($this->request->is('post')) {
            $this->User->create();
            $data = $this->request->data;
            $data['User']['role'] = 'customer';                     
            if ($this->User->save($data)) {
               
                 $this->Session->setFlash('User added successfully !','default',array('class' => 'alert alert-warning alert-dismissible fade show'));
                return $this->redirect(array('action' => 'index'));
            }
            $errors = $this->User->validationErrors;
            foreach ($errors as $fieldname=>$error) {
                $message = '<b>'.$fieldname.'</b>: '.$error[0];
                $this->Flash->error($message,['params' => ['class' => 'alert alert-success']]);
            }
            
            return $this->redirect(array('controller'=>'users','action' => 'index'));   
        }
    }

    public function logout() {
         return $this->redirect($this->Auth->logout());
    }

   

    public function listing(){
        
    }




}

?>
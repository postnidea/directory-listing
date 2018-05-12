<?php 
class UsersController extends AppController {

    public function index() {
        if($this->Session->check('Auth.User')){
          return $this->redirect(array('action' => 'dashboard'));  
        }
    }
    public function add() {
        if ($this->request->is('post')) {
            $this->User->create();
            $data = $this->request->data;
            $data['User']['role'] = 'customer';                     
            if ($this->User->save($data)) {
             $this->Flash->success('The user has been saved');
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
            if ($this->Auth->login()) {
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error(__('Invalid username or password, try again'));
        }
    }

    public function admin_login() {
          if ($this->request->is('post')) {
             if ($this->Auth->login()) {
                return $this->redirect($this->Auth->redirectUrl());
             }           
          }
    }

    public function admin_dashboard(){}
    public function dashboard(){

/*        $data = $this->Session->read('Auth.User');
        echo "<pre>";
        print_r($data);
        echo "</pre>";*/


    }

    public function logout() {
         return $this->redirect($this->Auth->logout());
    }

    public function listing(){
        
    }




}

?>
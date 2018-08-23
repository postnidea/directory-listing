<?php 
class CategoriesController extends AppController {

    public $components = array('Paginator');
    public function index() {

    }

    public function admin_index(){

        $this->Paginator->settings = array('limit' => 10);
        $this->set('existing_categories',$this->Category->find('all'));
        $this->set('categories', $this->Paginator->paginate());
    }

    public function admin_add(){
        $this->autoRender = false;
        if ($this->request->is('post')) {
            $data = $this->request->data;
            $this->Category->save($data);
              $this->Session->setFlash('Category added successfully !','default',array('class' => 'alert alert-warning alert-dismissible fade show'));
        }
        return $this->redirect(array('action' => 'index'));
    }

    public function admin_delete($id){
        $this->autoRender = false;
        $this->Category->id = $id;
        $this->Category->delete();
        $this->Session->setFlash('Category deleted successfully !','default',array('class' => 'alert alert-warning alert-dismissible fade show'));
        return $this->redirect(array('action' => 'index'));

    }

    public function admin_edit($id){

         
        
         if ($this->request->is(array('post', 'put'))) {
            $this->Category->id = $this->request->data['Category']['id'];
            $data = $this->request->data;
            $this->Category->save($data);
            $this->Session->setFlash('Category deleted successfully !','default',array('class' => 'alert alert-warning alert-dismissible fade show'));
            return $this->redirect(array('action' => 'index'));
         }else{
             $this->request->data = $this->Category->findById($id);
             $this->set('existing_categories',$this->Category->find('all'));
         }
    }






}

?>
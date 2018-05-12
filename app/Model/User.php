<?php
App::uses('AppModel', 'Model');
App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');
class User extends AppModel {
    public $validate = array(
        'username' => array(
            'required' => array(
                'rule' => 'notBlank',
                'message' => 'A username is required'
            ),
            'unque'=>array(
                    'rule' => 'isUnique',
                    'message' => 'This username has already been taken.'
                            )
                    
        ),
        'password' => array(
            'required' => array(
                'rule' => 'notBlank',
                'message' => 'A password is required'
            )),
        'email'=> array(
            'valid_email'=>array( 
                'rule' => array('email', true),
                'message' => 'Please supply a valid email address.'
            ),
        'unque'=>array(
                    'rule' => 'isUnique',
                    'message' => 'Entered email already exist'
                ))   
    );


    public function beforeSave($options = array()) {
        if (isset($this->data[$this->alias]['password'])) {
            $passwordHasher = new BlowfishPasswordHasher();
            $this->data[$this->alias]['password'] = $passwordHasher->hash(
                $this->data[$this->alias]['password']
            );
        }
        return true;
    }
}
?>
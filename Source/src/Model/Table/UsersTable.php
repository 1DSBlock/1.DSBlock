<?php
// src/Model/Table/ArticlesTable.php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class UsersTable extends AppTable
{
    public function initialize(array $config)
    {
        parent::initialize($config);
    }
    
    public function validationDefault(Validator $validator) {
        $validator = parent::validationDefault($validator);
    
        
        
        $validator
        ->requirePresence('email')
        ->add('email', 'validFormat', [
            'rule' => 'email',
            'message' => 'E-mail must be valid'
        ]);
        
        $validator->add('email', [
            'unique' => [
                'message'   => 'This value is already used',
                'provider'  => 'table',
                'rule'      => 'validateUnique'
            ]
        ]);
        
        $validator->add('confirm-password', 'no-misspelling', [
            'rule' => ['compareWith', 'password'],
            'message' => 'Passwords are not equal',
        ]);
        
        $validator
        ->notEmpty('password', 'A password is required');
        $validator->add('password', [
            'length' => [
                'rule' => ['minLength', 5],
                'message' => 'Password need to be at least 5 characters long',
            ]
        ]);
        return $validator;
    }
}
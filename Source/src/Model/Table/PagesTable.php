<?php
// src/Model/Table/PagesTable.php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class PagesTable extends AppTable
{
    public function initialize(array $config)
    {
        parent::initialize($config);
    }
    
    public function validationDefault(Validator $validator) {
        $validator = parent::validationDefault($validator);
    
        $validator
        ->requirePresence('name')
        ->notEmpty('name', 'Please fill this field')
        ->add('name', [
            'length' => [
                'rule' => ['minLength', 5],
                'message' => 'Name need to be at least 5 characters long',
            ]
        ]);
        $validator
        ->requirePresence('link')
        ->notEmpty('link', 'Please fill this field')
        ->add('link', [
            'length' => [
                'rule' => ['minLength', 5],
                'message' => 'Link need to be at least 5 characters long',
            ]
        ]);
        return $validator;
    }
}
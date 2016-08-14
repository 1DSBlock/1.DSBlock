<?php
// src/Model/Table/CustomerServicesTable.php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class CustomerServicesTable extends AppTable
{
    public function initialize(array $config)
    {
        parent::initialize($config);
    }

    public function validationDefault(Validator $validator) {
        $validator = parent::validationDefault($validator);

        $validator
        ->requirePresence('topic')
        ->notEmpty('topic', 'Please fill this field')
        ->add('topic', [
            'length' => [
                'rule' => ['minLength', 5],
                'message' => 'Topic need to be at least 5 characters long',
            ]
        ]);
        $validator
        ->requirePresence('template')
        ->notEmpty('template', 'Please fill this field')
        ->add('template', [
            'length' => [
                'rule' => ['minLength', 100],
                'message' => 'Template need to be at least 5 characters long',
            ]
        ]);
        return $validator;
    }
}

<?php
// src/Model/Table/RolesTable.php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class RolesTable extends AppTable
{
    public function initialize(array $config)
    {
        parent::initialize($config);
    }

    public function validationDefault(Validator $validator) {
        $validator = parent::validationDefault($validator);

        $validator
        ->requirePresence('role')
        ->notEmpty('role', 'Please fill this field')
        ->add('role', [
            'length' => [
                'rule' => ['minLength', 5],
                'message' => 'Fullname need to be at least 5 characters long',
            ]
        ]);

        return $validator;
    }
}

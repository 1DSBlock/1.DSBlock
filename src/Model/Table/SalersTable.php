<?php
// src/Model/Table/SalersTable.php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class SalersTable extends AppTable
{
    public function initialize(array $config)
    {
        parent::initialize($config);
    }

    public function validationDefault(Validator $validator) {
        $validator = parent::validationDefault($validator);

        $validator
        ->requirePresence('fullname')
        ->notEmpty('fullname', 'Please fill this field')
        ->add('fullname', [
            'length' => [
                'rule' => ['minLength', 5],
                'message' => 'Fullname need to be at least 5 characters long',
            ]
        ]);

        return $validator;
    }
}

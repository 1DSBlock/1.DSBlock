<?php
// src/Model/Table/MedicalHistoriesTable.php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class MedicalHistoriesTable extends AppTable
{
    public function initialize(array $config)
    {
        parent::initialize($config);
    }

    public function validationDefault(Validator $validator) {
        $validator = parent::validationDefault($validator);

        $validator
        ->requirePresence('description')
        ->notEmpty('description', 'Please fill this field')
        ->add('description', [
            'length' => [
                'rule' => ['minLength', 5],
                'message' => 'Description need to be at least 5 characters long',
            ]
        ]);
        return $validator;
    }
}

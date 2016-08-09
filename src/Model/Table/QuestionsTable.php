<?php
// src/Model/Table/ArticlesTable.php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class QuestionsTable extends AppTable
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
        ->requirePresence('answer')
        ->notEmpty('answer', 'Please fill this field')
        ->add('answer', [
            'length' => [
                'rule' => ['minLength', 5],
                'message' => 'Answer need to be at least 5 characters long',
            ]
        ]);
        return $validator;
    }
}

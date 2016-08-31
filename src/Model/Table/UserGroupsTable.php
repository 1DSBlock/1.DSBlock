<?php
// src/Model/Table/UserGroupsTable.php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class UserGroupsTable extends AppTable
{
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->hasMany('Users');
    }

    public function validationDefault(Validator $validator) {
        $validator = parent::validationDefault($validator);

        $validator
        ->requirePresence('title')
        ->notEmpty('title', 'Please fill this field')
        ->add('title', [
            'length' => [
                'rule' => ['minLength', 5],
                'message' => 'Title need to be at least 5 characters long',
            ]
        ]);
        return $validator;
    }
}

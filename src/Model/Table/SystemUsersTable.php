<?php
// src/Model/Table/SystemsersTable.php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class SystemUsersTable extends AppTable
{
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->belongsTo('Roles');
    }

    public function validationDefault(Validator $validator)
    {
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

        $validator
        ->requirePresence('confirm-password', 'create', 'A password is required')
        ->allowEmpty('confirm-password', 'update')
        ->add('confirm-password', 'no-misspelling', [
            'rule' => ['compareWith', 'password'],
            'message' => 'Passwords are not equal',
        ]);

        $validator
        ->requirePresence('password', 'create', 'A password is required')
        ->allowEmpty('password', 'update')
        ->add('password', [
            'length' => [
                'rule' => ['minLength', 5],
                'message' => 'Password need to be at least 5 characters long',
            ]
        ]);

        return $validator;
    }

}

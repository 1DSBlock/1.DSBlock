<?php
// src/Model/Table/ProductsTable.php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class ProductsTable extends AppTable
{
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->addBehavior('Proffer.Proffer', [
            'image' => [
                'root' => WWW_ROOT . 'upload',
                'dir' => 'dir',
                'pathClass' => '\App\Lib\Proffer\ProductPath'
            ]
        ]);
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
        ->requirePresence('provider')
        ->notEmpty('provider', 'Please fill this field')
        ->add('provider', [
            'length' => [
                'rule' => ['minLength', 5],
                'message' => 'Provider need to be at least 5 characters long',
            ]
        ]);
        $validator
        ->requirePresence('description')
        ->notEmpty('description', 'Please fill this field')
        ->add('description', [
            'length' => [
                'rule' => ['minLength', 5],
                'message' => 'Description need to be at least 5 characters long',
            ]
        ]);
        $validator->provider('proffer', 'Proffer\Model\Validation\ProfferRules');
        $validator
        ->requirePresence('image', 'create')
        ->allowEmpty('image', 'update')
        ->add('image', [
            'validExtension' => [
                'rule' => ['extension',['gif', 'jpeg', 'png', 'jpg']],
                'message' => __('These files extension are allowed: .gif, .jpeg, .jpg, .png')
            ]])
        ->add('image', [
            'validSize' => [
                'rule' => ['fileSize', '<=', '5MB'],
                'message' => __('Cover filename must be less than 5MB')
            ]]);
        return $validator;
    }
}

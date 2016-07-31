<?php
// src/Model/Table/ArticlesTable.php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class ArticlesTable extends AppTable
{
    public function initialize(array $config)
    {
        parent::initialize($config);
        
        $this->belongsTo('ArticleCategories');
    }
    
    public function validationDefault(Validator $validator) {
        $validator = parent::validationDefault($validator);
    
        $validator
        ->requirePresence('title')
        ->notEmpty('title', 'Please fill this field')
        ->add('title', [
            'length' => [
                'rule' => ['minLength', 5],
                'message' => 'Titles need to be at least 5 characters long',
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
        return $validator;
    }
}
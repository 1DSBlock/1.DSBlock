<?php
// src/Model/Table/ArticlesTable.php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class PageArticlesTable extends AppTable
{
    public function initialize(array $config)
    {
        parent::initialize($config);
        
        $this->hasOne('PageArticles');
        $this->hasOne('PageLinks');
    }
    
    public function validationDefault(Validator $validator) {
        $validator = parent::validationDefault($validator);
        
        return $validator;
    }
}
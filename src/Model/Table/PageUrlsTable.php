<?php
// src/Model/Table/ArticlesTable.php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class PageUrlsTable extends AppTable
{
    public function initialize(array $config)
    {
        parent::initialize($config);
    }
    
    public function validationDefault(Validator $validator) {
        $validator = parent::validationDefault($validator);
        
        return $validator;
    }
}
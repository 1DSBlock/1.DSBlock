<?php
// src/Model/Table/ArticlesTable.php
namespace App\Model\Table;

use Cake\ORM\Table;

class ArticlesTable extends AppTable
{
    public function initialize(array $config)
    {
        parent::initialize($config);
        
        $this->belongsTo('ArticleCategories');
    }
}
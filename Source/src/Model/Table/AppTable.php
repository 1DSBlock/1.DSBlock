<?php
// src/Model/Table/AppTable.php
namespace App\Model\Table;

use Cake\ORM\Table;

class AppTable extends Table
{
    public function initialize(array $config)
    {
        $this->addBehavior('Timestamp');
    }
}
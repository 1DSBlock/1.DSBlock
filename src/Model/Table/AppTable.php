<?php
// src/Model/Table/AppTable.php
namespace App\Model\Table;

use Cake\ORM\Table;
use App\Lib\Utils;
use App\Lib\ObjectUtils;

class AppTable extends Table
{
    protected $utils;
    protected $objectUtils;
    
    public function initialize(array $config)
    {
        $this->addBehavior('Timestamp');
        $this->utils = Utils::getInstance();
        $this->objectUtils = ObjectUtils::getInstance();
    }
}
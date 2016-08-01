<?php
namespace App\Lib;

use Cake\ORM\TableRegistry;

class ObjectUtils {
    private static $instance = null;
    
    public static function getInstance() {
        if(self::$instance == null) {
            self::$instance = new static();
        }
        
        return self::$instance;
    }
    
    private function __construct() {
        
    }
    
    public function useTables($obj, $classes = []) {
        foreach($classes as $class) {
            $obj->$class = TableRegistry::get($class);
        }
    }
}
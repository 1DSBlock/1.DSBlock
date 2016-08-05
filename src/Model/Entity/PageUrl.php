<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Routing\Router;

class PageUrl extends Entity
{
    // Make all fields mass assignable except for primary key field "id".
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
    
    protected function _getRouteLink() {
        if(empty($this->_properties['link'])) {
            return '';
        }
        $routes = Router::parse($this->_properties['link']);
        
        if(!empty($routes['?'])) {
            $data = $routes['?'];
        }
        $data['controller'] = $routes['controller'];
        $data['action'] = $routes['action'];
        return $data;
    }
}
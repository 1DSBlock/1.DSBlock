<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Routing\Router;

class PageArticle extends Entity
{
    // Make all fields mass assignable except for primary key field "id".
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
    
    protected function _getLink() {
        if(!empty($this->_properties['article_id'])) {
            return Router::url(['prefix' => false, 'controller' => 'Articles', 'action' => 'view', '?' => ['id' => $this->_properties['article_id']]]);
        } elseif(!empty($this->_properties['article_category_id'])) {
            return Router::url(['prefix' => false,'controller' => 'Articles', 'action' => 'view', '?' => ['cid' => $this->_properties['article_category_id']]]);
        }
        return '';
    }
}
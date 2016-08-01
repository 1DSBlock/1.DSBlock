<?php
// src/Model/Table/ArticlesTable.php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\Event\Event;
use Cake\Datasource\EntityInterface;

class PagesTable extends AppTable
{
    public function initialize(array $config)
    {
        parent::initialize($config);
        
        $this->hasOne('PageArticles');
        $this->hasOne('PageUrls');
    }
    
    public function validationDefault(Validator $validator) {
        $validator = parent::validationDefault($validator);
    
        $validator
        ->requirePresence('name')
        ->notEmpty('name', 'Please fill this field');
        
        return $validator;
    }
    
    public function beforeDelete(Event $event, EntityInterface $entity, \ArrayObject $options) {
        $pageId = $entity->id;
        $this->objectUtils->useTables($this, ['PageArticles', 'PageUrls']);
        $this->PageArticles->deleteAll(['page_id' => $pageId]);
        $this->PageUrls->deleteAll(['page_id' => $pageId]);
        return true;
    }
}
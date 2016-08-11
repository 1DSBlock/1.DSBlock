<?php
// src/Model/Table/ArticlesTable.php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\Event\Event;
use Cake\Datasource\EntityInterface;
use Cake\Cache\Cache;
use Cake\Routing\Router;

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

    public function getAllPages() {
        if(empty($articles = Cache::read(CACHE_PAGES))) {
            $articles = $this->find()->contain(['PageUrls'])->combine(
                'keylink',
                function ($entity) { return $entity; }
            )->toArray();
            Cache::write(CACHE_PAGES, $articles);
        }
        return $articles;
    }
}

<?php
namespace App\Controller\Admin;

use Cake\Event\Event;
use Cake\ORM\TableRegistry;

class ArticlesController extends AppAdminController
{

    public $paginate = [
        'limit' => PAGINATE_LIMIT,
        'order' => [
            'Articles.title' => 'asc'
        ],
        'contain' => ['ArticleCategories']
    ];

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
    }
    
    public function add()
    {
        parent::add();
        $category = TableRegistry::get('ArticleCategories');
        $categories = $category->find()->combine('id', 'title')->toArray();
        $this->set(compact('categories'));
    }
    
    public function edit($id = null, $return = false)
    {
        parent::edit($id);
        $category = TableRegistry::get('ArticleCategories');
        $categories = $category->find()->combine('id', 'title')->toArray();
        $this->set(compact('categories'));
    }
}
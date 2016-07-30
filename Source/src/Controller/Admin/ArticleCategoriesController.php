<?php
namespace App\Controller\Admin;

use Cake\Event\Event;

class ArticleCategoriesController extends AppAdminController
{
    public $paginate = [
        'limit' => PAGINATE_LIMIT,
        'order' => [
            'ArticleCategories.title' => 'asc'
        ]
    ];
    
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
    }
  }
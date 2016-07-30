<?php
namespace App\Controller\Admin;

use Cake\Event\Event;

class ArticlesController extends AppAdminController
{
    public $paginate = [
        'limit' => PAGINATE_LIMIT,
        'order' => [
            'Articles.title' => 'asc'
        ]
    ];
    
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
    }
}
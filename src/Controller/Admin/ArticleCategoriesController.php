<?php
namespace App\Controller\Admin;

use Cake\Event\Event;

class ArticleCategoriesController extends AppAdminController
{
    protected $keywords = ['title'];

    public $paginate = [
        'limit' => PAGINATE_LIMIT,
    ];

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
    }

}

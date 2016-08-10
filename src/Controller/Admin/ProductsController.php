<?php
namespace App\Controller\Admin;

use Cake\Event\Event;
use Cake\ORM\TableRegistry;

class ProductsController extends AppAdminController
{

    public $paginate = [
        'limit' => PAGINATE_LIMIT,
        'order' => [
            'Products.title' => 'asc'
        ]
    ];

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
    }

}

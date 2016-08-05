<?php
namespace App\Controller\Admin;

use Cake\Event\Event;

class FormsController extends AppAdminController
{

    public $paginate = [
        'limit' => PAGINATE_LIMIT,
        'order' => [
            'Forms.name' => 'asc'
        ]
    ];

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
    }
}
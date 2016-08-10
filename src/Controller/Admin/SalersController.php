<?php
namespace App\Controller\Admin;

use Cake\Event\Event;

class SalersController extends AppAdminController
{

    public $paginate = [
        'limit' => PAGINATE_LIMIT,
        'order' => [
            'Salers.id' => 'asc'
        ]
    ];

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
    }

}

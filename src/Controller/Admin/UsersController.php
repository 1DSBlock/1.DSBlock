<?php
namespace App\Controller\Admin;

use Cake\Event\Event;

class UsersController extends AppAdminController
{
    
    public $paginate = [
        'limit' => PAGINATE_LIMIT,
        'order' => [
            'Users.id' => 'asc'
        ]
    ];
    
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
    }

     
}
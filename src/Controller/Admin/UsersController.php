<?php
namespace App\Controller\Admin;

use Cake\Event\Event;

class UsersController extends AppAdminController
{
    protected $keyword = 'fullname';

    public $paginate = [
        'limit' => PAGINATE_LIMIT,
    ];

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
    }


}

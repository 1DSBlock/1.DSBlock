<?php
namespace App\Controller\Admin;

use Cake\Event\Event;

class FormsController extends AppAdminController
{
    protected $keyword = 'name';

    public $paginate = [
        'limit' => PAGINATE_LIMIT,
    ];

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
    }
}

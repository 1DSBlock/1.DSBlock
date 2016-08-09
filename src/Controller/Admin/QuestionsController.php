<?php
namespace App\Controller\Admin;

use Cake\Event\Event;
use Cake\ORM\TableRegistry;

class QuestionsController extends AppAdminController
{

    public $paginate = [
        'limit' => PAGINATE_LIMIT,
        'order' => [
            'Questions.title' => 'asc'
        ]
    ];

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
    }

}
